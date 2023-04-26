<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\Position;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $positions = Position::orderBy('active')->get(); //2 = deleted/deactivated
        return view('admin.positions.index', compact('positions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.positions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = array(
            'name' => 'required|string|unique:positions',
            'remarks' => 'required|string|max:255',
        );
        $this->validate($request, $rules);
        
        $position = new Position;
        $position->name = $request->name;
        $position->remarks = $request->remarks;
        $position->active = 1;
        $position->created_by = Auth::user()->id;
        $position->updated_by = Auth::user()->id;
        if($position->save()){
            return back()->with('message_success', 'Added new position successfully.');
        }else{
            return back()->with('message', 'error');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Position $position)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $position = Position::find($id);
        return view('admin.positions.update', compact('position'));
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

        $data = Position::where('id','!=',$id)->where('name','=',$request->name)->get();

        if(count($data) == 0){
            $position = Position::find($id);
            $position->name = $request->name;
            $position->active = $request->active;
            $position->remarks = $request->remarks;
            $position->updated_by = Auth::user()->id;
            if($position->save()){
                return back()->with('message_success', 'Successfully saved update');
            }
        }else{
            return back()->with('message_duplicate', 'Duplicate Entry!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(position $position)
    {
        //
    }

    public function updateStatus($id, Request $request)
    {
        $unit = Position::find($id);
        $unit->active = $request->active;
        $unit->updated_by = Auth::user()->id;
        if($unit->save()){
            return back()->with('message_success', 'Successfully change status');
        }
    }
}
