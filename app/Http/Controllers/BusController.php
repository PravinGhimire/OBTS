<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\Operator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $operators = Operator::get();
        $buses = Bus::get();
        return view('admin.buses.bus-list', compact('operators', 'buses'));
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
        // Call the validation function with the request object
        $this->bus_validation($request);
    
        $bus_name = $request->get('bus_name');
        $bus_code = $request->get('bus_code');
        $total_seats = $request->get('total_seats');
        $operator_id = $request->get('operator_id');
        // $status = $request->get('status');
    
        $insertBus = [
            'bus_name' => $bus_name,
            'bus_code' => $bus_code,
            'total_seats' => $total_seats,
            'operator_id' => $operator_id,
            // 'status' => $status,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ];
    
        // dd($insertBus); // we will check okay if we are having all the data okay
        DB::table('buses')->insert($insertBus);
        return redirect()->back()->with('flash_message_success', 'Bus Added Successfully!');
    }
    
    public function bus_validation($request)
    {
        $rules = [  // This array is to validate our buses input before insertion to our database
            'bus_name' => 'required',
            'bus_code' => 'required',
            'total_seats' => 'required',
            'operator_id' => 'required',  // Corrected typo from 'opeartor_id' to 'operator_id'
        ];
    
        $request->validate($rules);  // Perform the validation
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
