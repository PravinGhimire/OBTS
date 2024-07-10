<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use Illuminate\Http\Request;
use App\Models\BusSchedule;
use App\Models\Source;
use App\Models\Destination;
use App\Models\Operator;

class FrontendHomeController extends Controller
{
    /**
     * Show the application homepage.
     */
    public function index()
    {
        $buses=Bus::all();
        // Fetch bus schedules, sources, and destinations
        $busSchedules = BusSchedule::all();
        $sources = Source::all();
        $destinations = Destination::all();
        $operators = Operator::all();

        // Pass data to the view
        return view('frontend.home', compact('buses','busSchedules', 'sources', 'destinations','operators'));
    }

    /**
     * Book a bus schedule.
     */
    public function book(Request $request)
    {
        // Implement your booking logic here
    }
}