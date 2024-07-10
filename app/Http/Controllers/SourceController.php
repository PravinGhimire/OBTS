<?php

namespace App\Http\Controllers;

use App\Models\Source;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class SourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $source = Source::get();

        return view('admin.source.source-list', compact('source'));
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
        $this->sourceValidation($request);

        $source_name = $request->get('source_name');
        $source_code = $request->get('source_code');

        $insertSource = [
            'source_name' => $source_name,
            'source_code' => $source_code,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];

        // Insert the source data into the sources table
        DB::table('sources')->insert($insertSource);

        return redirect()->back();
    }

    public function sourceValidation(Request $request)
    {
        $rules = [
            'source_name' => 'required',
            'source_code' => 'required',
        ];

        // Perform the validation
        $request->validate($rules);
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
