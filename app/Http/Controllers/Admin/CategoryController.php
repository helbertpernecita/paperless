<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::orderBy('active')->get(); //2 = deleted/deactivated
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = array(
            'name' => 'required|string|unique:categories',
            'remarks' => 'required|string|max:255',
        );
        $this->validate($request, $rules);
        
        $category = new category;
        $category->name = $request->name;
        $category->remarks = $request->remarks;
        $category->active = 1;
        $category->created_by = Auth::user()->id;
        $category->updated_by = Auth::user()->id;
        if($category->save()){
            return back()->with('message_success', 'Added new category successfully.');
        }else{
            return back()->with('message', 'error');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.categories.update', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $rules = array(
            'name' => 'required|string',
            'active' => 'required|integer',
            'remarks' => 'required|string|max:255',
        );
        $this->validate($request, $rules);

        $data = Category::where('id','!=',$id)->where('name','=',$request->name)->get();

        if(count($data) == 0){
            $category = Category::find($id);
            $category->name = $request->name;
            $category->active = $request->active;
            $category->remarks = $request->remarks;
            $category->updated_by = Auth::user()->id;
            if($category->save()){
                return back()->with('message_success', 'Successfully saved update');
            }
        }else{
            return back()->with('message_duplicate', 'Duplicate Entry!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }

    public function updateStatus($id, Request $request)
    {
        $unit = Category::find($id);
        $unit->active = $request->active;
        $unit->updated_by = Auth::user()->id;
        if($unit->save()){
            return back()->with('message_success', 'Successfully change status');
        }
    }
}
