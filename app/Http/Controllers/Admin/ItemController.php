<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Item;
use App\Models\Admin\Unit;
use Illuminate\Http\Request;
use App\Models\Admin\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::orderby('purchase_price','desc')->get();
        $units = Unit::where('active','=',1)->orderBy('name')->get();
        $categories = Category::where('active','=',1)->orderBy('name')->get();
        

        return view('admin.items.index', compact('items','categories','units'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = array(
            'code' => 'required|string|unique:items',
            'name' => 'required|string|unique:items',
            'unit_id' => 'required|integer',
            'category_id' => 'required|integer',
            'stock_minimum' => 'required|integer',
            'remarks' => 'required|string|max:255',
        );
        $this->validate($request, $rules);

        $duplicate = Item::where('name','=',$request->name)->orwhere('code','=',$request->code)->get();

        if(count($duplicate) == 0){
            $item = new Item;
            $item->code = $request->code;
            $item->name = $request->name;
            $item->active = 1;
            $item->category_id = $request->category_id;
            $item->unit_id = $request->unit_id;
            $item->purchase_price = 0;
            $item->selling_price = 0;
            $item->stock_minimum = $request->stock_minimum;
            $item->stock_available = 0;
            $item->remarks = $request->remarks;
            $item->created_by = Auth::user()->id;
            $item->updated_by = Auth::user()->id;
            if($item->save()){
                return back()->with('message_success', 'Successfully saved new item');
            }
        }else{
            return back()->with('message_duplicate', 'Duplicate Entry!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = Item::find($id);
        $units = Unit::where('active','=',1)->orderBy('name')->get();
        $categories = Category::where('active','=',1)->orderBy('name')->get();

        return view('admin.items.update', compact('item','categories','units'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = array(
            'code' => 'required|string',
            'name' => 'required|string',
            'unit_id' => 'required|integer',
            'category_id' => 'required|integer',
            'stock_minimum' => 'required',
            'remarks' => 'required|string|max:255',
        );
        $this->validate($request, $rules);

        $duplicate = Item::where('id','!=',$id)
                    ->where(function($e) use ($request){
                        $e->where('name','=', $request->name)
                            ->orwhere('code','=',$request->code);
                    })->get();

        if(count($duplicate) == 0){
            $item = Item::find($id);
            $item->code = $request->code;
            $item->name = $request->name;
            $item->category_id = $request->category_id;
            $item->unit_id = $request->unit_id;
            $item->stock_minimum = $request->stock_minimum;
            $item->remarks = $request->remarks;
            $item->updated_by = Auth::user()->id;
            if($item->save()){
                return back()->with('message_success', 'Successfully saved update');
            }
        }else{
            return back()->with('message_duplicate', 'Duplicate Entry!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function updateStatus($id, Request $request)
    {
        $unit = Item::find($id);
        $unit->active = $request->active;
        $unit->updated_by = Auth::user()->id;
        if($unit->save()){
            return back()->with('message_success', 'Successfully change status');
        }
    }
}
