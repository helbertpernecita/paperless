<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\Supplier;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suppliers = Supplier::orderBy('name')->get();
        return view('admin.suppliers.index', compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.suppliers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = array(
            'name' => 'required|string|unique:suppliers',
            'email' => 'required|email',
            'address' => 'required|string',
            'contact_person' => 'required|string',
            'contact_number' => 'required|string',
            'remarks' => 'required|string|max:255',
        );
        $this->validate($request, $rules);
        
        $supplier = new Supplier;
        $supplier->name = $request->name;
        $supplier->email = $request->email;
        $supplier->address = $request->address;
        $supplier->contact_person = $request->contact_person;
        $supplier->contact_number = $request->contact_number;
        $supplier->remarks = $request->remarks;
        $supplier->active = 1;
        $supplier->created_by = Auth::user()->id;
        $supplier->updated_by = Auth::user()->id;
        if($supplier->save()){
            return back()->with('message_success', 'Added new Supplier successfully.');
        }else{
            return back()->with('message', 'error');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $supplier = Supplier::find($id);
        return view('admin.suppliers.update', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $rules = array(
            'name' => 'required|string',
            'email' => 'required|email',
            'address' => 'required|string',
            'contact_person' => 'required|string',
            'contact_number' => 'required|string',
            'remarks' => 'required|string|max:255',
        );
        $this->validate($request, $rules);

        $duplicate = Supplier::where('id','!=',$id)
                    ->where('name', '=', $request->name)->get();

        if(count($duplicate) == 0){
            $supplier = Supplier::find($id);
            $supplier->name = $request->name;
            $supplier->email = $request->email;
            $supplier->address = $request->address;
            $supplier->contact_person = $request->contact_person;
            $supplier->contact_number = $request->contact_number;
            $supplier->remarks = $request->remarks;
            $supplier->updated_by = Auth::user()->id;
            if($supplier->save()){
                return back()->with('message_success', 'Successfully saved update');
            }
        }else{
            return back()->with('message_duplicate', 'Duplicate Entry!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supplier $supplier)
    {
        //
    }

    public function updateStatus($id, Request $request)
    {
        $unit = Supplier::find($id);
        $unit->active = $request->active;
        $unit->updated_by = Auth::user()->id;
        if($unit->save()){
            return back()->with('message_success', 'Successfully change status');
        }
    }
}
