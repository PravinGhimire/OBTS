<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\BusSchedule;
use App\Models\Destination;
use App\Models\Operator;
use App\Models\Source;
use Illuminate\Http\Request;

class BusScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schedules = BusSchedule::with('bus', 'operator', 'source', 'destination')->get();
        $buses = Bus::all();
        $operators = Operator::all();
        $sources = Source::all();
        $destinations = Destination::all();
        return view('admin.bus_schedules.bus_schedules-list', compact('schedules', 'buses', 'operators', 'sources', 'destinations'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'bus_id' => 'required|integer',
            'operator_id' => 'required|integer',
            'source_id' => 'required|integer',
            'destination_id' => 'required|integer',
            'depart_date' => 'required|date',
            'return_date' => 'nullable|date',
            'depart_time' => 'required|date_format:H:i',
            'return_time' => 'nullable|date_format:H:i',
            'pickup_address' => 'required|string|max:255',
            'dropoff_address' => 'required|string|max:255',
            'status' => 'boolean'
        ]);

        BusSchedule::create([
            'bus_id' => $request->bus_id,
            'operator_id' => $request->operator_id,
            'source_id' => $request->source_id,
            'destination_id' => $request->destination_id,
            'depart_date' => $request->depart_date,
            'return_date' => $request->return_date,
            'depart_time' => $request->depart_time,
            'return_time' => $request->return_time,
            'pickup_address' => $request->pickup_address,
            'dropoff_address' => $request->dropoff_address,
            'status' => $request->status ? true : false
        ]);

        return redirect()->back()->with('success', 'Bus Schedule added successfully');
    }

    public function edit($id)
    {
        $schedule = BusSchedule::findOrFail($id);
        $buses = Bus::all();
        $operators = Operator::all();
        $sources = Source::all();
        $destinations = Destination::all();
        return view('admin.bus_schedules.edit-bus_schedule', compact('schedule', 'buses', 'operators', 'sources', 'destinations'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'bus_id' => 'required|integer',
            'operator_id' => 'required|integer',
            'source_id' => 'required|integer',
            'destination_id' => 'required|integer',
            'depart_date' => 'required|date',
            'return_date' => 'nullable|date',
            'depart_time' => 'required|date_format:H:i',
            'return_time' => 'nullable|date_format:H:i',
            'pickup_address' => 'required|string|max:255',
            'dropoff_address' => 'required|string|max:255',
            'status' => 'boolean'
        ]);

        $schedule = BusSchedule::findOrFail($id);
        $schedule->update([
            'bus_id' => $request->bus_id,
            'operator_id' => $request->operator_id,
            'source_id' => $request->source_id,
            'destination_id' => $request->destination_id,
            'depart_date' => $request->depart_date,
            'return_date' => $request->return_date,
            'depart_time' => $request->depart_time,
            'return_time' => $request->return_time,
            'pickup_address' => $request->pickup_address,
            'dropoff_address' => $request->dropoff_address,
            'status' => $request->status ? true : false
        ]);

        return redirect()->route('bus_schedules.index')->with('success', 'Bus Schedule updated successfully');
    }

    public function destroy($id)
    {
        $schedule = BusSchedule::findOrFail($id);
        $schedule->delete();
        return redirect()->route('bus_schedules.index')->with('success', 'Bus Schedule deleted successfully');
    }
}
