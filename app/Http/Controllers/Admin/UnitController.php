<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Unit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $units = Unit::orderBy('active')->get(); //2 = deleted/deactivated
        return view('admin.units.index', compact('units'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.units.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = array(
            'name' => 'required|string|unique:units',
            'symbol' => 'required|string|max:6',
        );
        $this->validate($request, $rules);
        
        $unit = new Unit;
        $unit->name = $request->name;
        $unit->symbol = $request->symbol;
        $unit->active = 1;
        $unit->created_by = Auth::user()->id;
        $unit->updated_by = Auth::user()->id;
        if($unit->save()){
            return back()->with('message_success', 'Added new unit successfully.');
        }else{
            return back()->with('message', 'error');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $unit = Unit::find($id);
        return view('admin.units.update', compact('unit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $rules = array(
            'name' => 'required|string',
            'active' => 'required|integer',
            'symbol' => 'required|string|max:255',
        );
        $this->validate($request, $rules);

        $data = Unit::select('*')->where('id','!=',$id)
                        ->where(function($e) use ($request){
                            $e->where('name', '=', $request->name)
                                ->orwhere('symbol','=',$request->symbol);
                        })->get();

        if(count($data) == 0){
            $unit = Unit::find($id);
            $unit->name = $request->name;
            $unit->active = $request->active;
            $unit->symbol = $request->symbol;
            $unit->updated_by = Auth::user()->id;
            if($unit->save()){
                return back()->with('message_success', 'Successfully saved update');
            }
        }else{
            return back()->with('message_duplicate', 'Duplicate Entry!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }

    public function updateStatus($id, Request $request)
    {
        $unit = Unit::find($id);
        $unit->active = $request->active;
        $unit->updated_by = Auth::user()->id;
        if($unit->save()){
            return back()->with('message_success', 'Successfully change status');
        }
    }
}
