<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\Department;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Department::orderBy('active')->get(); //2 = deleted/deactivated
        return view('admin.departments.index', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.departments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = array(
            'name' => 'required|string|unique:departments',
            'remarks' => 'required|string|max:255',
        );
        $this->validate($request, $rules);
        
        $department = new Department;
        $department->name = $request->name;
        $department->remarks = $request->remarks;
        $department->active = 1;
        $department->created_by = Auth::user()->id;
        $department->updated_by = Auth::user()->id;
        if($department->save()){
            return back()->with('message_success', 'Added new department successfully.');
        }else{
            return back()->with('message', 'error');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $department = Department::find($id);
        return view('admin.departments.update', compact('department'));
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

        $data = Department::where('id','!=',$id)->where('name','=',$request->name)->get();

        if(count($data) == 0){
            $department = Department::find($id);
            $department->name = $request->name;
            $department->active = $request->active;
            $department->remarks = $request->remarks;
            $department->updated_by = Auth::user()->id;
            if($department->save()){
                return back()->with('message_success', 'Successfully saved update');
            }
        }else{
            return back()->with('message_duplicate', 'Duplicate Entry!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department)
    {
        //
    }

    public function updateStatus($id, Request $request)
    {
        $unit = Department::find($id);
        $unit->active = $request->active;
        $unit->updated_by = Auth::user()->id;
        if($unit->save()){
            return back()->with('message_success', 'Successfully change status');
        }
    }
}
