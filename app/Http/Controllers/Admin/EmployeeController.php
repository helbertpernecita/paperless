<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\Employee;
use App\Models\Admin\Position;
use App\Models\Admin\Department;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::orderby('name')->get();
        $positions = Position::where('active','=',1)->orderBy('name')->get();
        $departments = Department::where('active','=',1)->orderBy('name')->get();

        return view('admin.employees.index', compact('employees','departments','positions'));
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
            'name' => 'required|string|unique:employees',
            'active' => 'required|integer',
            'position_id' => 'required|integer',
            'department_id' => 'required|integer',
            'remarks' => 'required|string|max:255',
        );
        $this->validate($request, $rules);

        $duplicate = Employee::where('name','=',$request->name)->get();

        if(count($duplicate) == 0){
            $employee = new Employee;
            $employee->name = $request->name;
            $employee->active = $request->active;
            $employee->department_id = $request->department_id;
            $employee->position_id = $request->position_id;
            $employee->remarks = $request->remarks;
            $employee->created_by = Auth::user()->id;
            $employee->updated_by = Auth::user()->id;
            if($employee->save()){
                return back()->with('message_success', 'Successfully saved new employee');
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
        $employee = Employee::find($id);
        $positions = Position::where('active','=',1)->orderBy('name')->get();
        $departments = Department::where('active','=',1)->orderBy('name')->get();

        return view('admin.employees.update', compact('employee','departments','positions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = array(
            'name' => 'required|string',
            'active' => 'required|integer',
            'position_id' => 'required|integer',
            'department_id' => 'required|integer',
            'remarks' => 'required|string|max:255',
        );
        $this->validate($request, $rules);

        $duplicate = Employee::where('id','!=',$id)->where('name','=',$request->name)->get();

        if(count($duplicate) == 0){
            $employee = Employee::find($id);
            $employee->name = $request->name;
            $employee->active = $request->active;
            $employee->department_id = $request->department_id;
            $employee->position_id = $request->position_id;
            $employee->remarks = $request->remarks;
            $employee->updated_by = Auth::user()->id;
            if($employee->save()){
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
        $unit = Employee::find($id);
        $unit->active = $request->active;
        $unit->updated_by = Auth::user()->id;
        if($unit->save()){
            return back()->with('message_success', 'Successfully change status');
        }
    }
}
