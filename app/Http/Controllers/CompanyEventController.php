<?php

namespace App\Http\Controllers;

use App\Models\CompanyEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class CompanyEventController extends Controller
{
    //
    public function index(){
        $events =  CompanyEvent::all();

    //     $upcomingEvents = CompanyEvent::where('end_time', '>=', now())
    //     ->orderBy('start_time', 'asc')
    //     ->get();



    
    // $pastEvents = CompanyEvent::where('end_time', '<', now())
    //     ->orderBy('end_time', 'desc')
    //     ->limit(3)
    //     ->get();



        $upcomingEvents = CompanyEvent::withCount('applications')
                               ->where('end_time', '>=', now())
                               ->orderBy('start_time', 'asc')
                               ->get();

// Past Events
$pastEvents = CompanyEvent::withCount('applications')
                           ->where('end_time', '<', now())
                           ->orderBy('end_time', 'desc')
                           ->limit(3)
                           ->get();



        return view('company-event.index',['events'=>$events , 'upcomingEvents' => $upcomingEvents,'pastEvents' => $pastEvents]);
    }
    public function show(CompanyEvent $event)
    {
        // We now only need to load one view and pass the event to it.
        // The view itself will handle the logic for past/upcoming events.
        return view('company-event.show', ['event' => $event]);
    }
     
}
