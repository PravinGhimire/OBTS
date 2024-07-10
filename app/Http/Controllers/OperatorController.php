<?php

namespace App\Http\Controllers;

use App\Models\Operator;
use Illuminate\Http\Request;

class OperatorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $operators = Operator::get();
        return view('admin.operators.operator-list', compact('operators'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // we are validating our inputs okay to avoid having error when inserting okay.
        $this->validate($request,[
            'operator_name' => 'required',
            
             'operator_phone' => 'required',
            
        ]);

            
            $operators = new Operator;
            $operators->operator_name = $request->operator_name;
          
            $operators->operator_phone = $request->operator_phone;

                // dd($operators);
            $operators->save(); // THIS SAVE FUNCTION WILL SAVE THE DATA OKAY

            return redirect()->back()->with('flash_message_success', 'Operator Added Succssfully!');
// WE NEED TO GENERATE THIS CUSTOM FLASH MESSAGE OKAY. SO LET'S ADD THAT FIRST BEFORE INSERTING OKAY.
            // $id = $request::get('operator_id');
            // $operators = Operator::where('operator_id', $id);

            // return view('operator.index', compact('operators'));
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
