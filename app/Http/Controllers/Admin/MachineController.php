<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\Machine;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MachineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $machines = Machine::orderBy('name')->get();
        return view('admin.machines.index', compact('machines'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.machines.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = array(
            'code' => 'required|string|unique:machines',
            'name' => 'required|string|unique:machines',
            'remarks' => 'required|string|max:255',
        );
        $this->validate($request, $rules);
        
        $machine = new Machine;
        $machine->code = $request->code;
        $machine->name = $request->name;
        $machine->remarks = $request->remarks;
        $machine->active = 1;
        $machine->created_by = Auth::user()->id;
        $machine->updated_by = Auth::user()->id;
        if($machine->save()){
            return back()->with('message_success', 'Added new machine successfully.');
        }else{
            return back()->with('message', 'error');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(machine $machine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $machine = Machine::find($id);
        return view('admin.machines.update', compact('machine'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $rules = array(
            'code' => 'required|string',
            'name' => 'required|string',
            'remarks' => 'required|string|max:255',
        );
        $this->validate($request, $rules);

        $duplicate = Machine::where('id','!=',$id)->where(function($e) use ($request){
            $e->where('code','=',$request->code)->orwhere('name', '=', $request->name);
        })->get();

        if(count($duplicate) == 0){
            $machine = Machine::find($id);
            $machine->code = $request->code;
            $machine->name = $request->name;
            $machine->remarks = $request->remarks;
            $machine->updated_by = Auth::user()->id;
            if($machine->save()){
                return back()->with('message_success', 'Successfully saved update');
            }
        }else{
            return back()->with('message_duplicate', 'Duplicate Entry!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(machine $machine)
    {
        //
    }

    public function updateStatus($id, Request $request)
    {
        $unit = Machine::find($id);
        $unit->active = $request->active;
        $unit->updated_by = Auth::user()->id;
        if($unit->save()){
            return back()->with('message_success', 'Successfully change status');
        }
    }
}
