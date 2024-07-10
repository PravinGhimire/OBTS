<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Source;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $destinations = Destination::all();
        $sources = Source::all();
        return view('admin.destination.destination-list', compact('destinations', 'sources'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Call the validation function with the request object
        $this->destinationValidation($request);

        $destination_name = $request->get('destination_name');
        $destination_code = $request->get('destination_code');
        $source_id = $request->get('source_id');

        $insertDestination = [
            'destination_name' => $destination_name,
            'destination_code' => $destination_code,
            'source_id' => $source_id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];

        // Insert the destination data into the destinations table
        DB::table('destinations')->insert($insertDestination);

        return redirect()->back();
    }

    /**
     * Validate the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    public function destinationValidation(Request $request)
    {
        $rules = [
            'source_id' => 'required',
            'destination_name' => 'required',
            'destination_code' => 'required',
        ];

        // Perform the validation
        $request->validate($rules);
    }
    
    /**
     * Display the specified resource.
     */
    
    
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
