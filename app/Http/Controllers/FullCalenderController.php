<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class FullCalenderController extends Controller
{
    public function index(Request $request){

        if ($request->ajax()){
            $start = $_GET['start'];
            $end = $_GET['end'];
             $event = Event::query()
                 ->whereDate('start','>=',$start)
                 ->whereDate('end','<=',$end)
                 ->get();

             return response()->json($event);
        }

        return view('calendar.index');
    }

    public function store(Request $request){
        if($request->ajax()){
            $event = Event::query()->create($request->all());
            return response()->json($event);
        }
    }

    public function update(Request $request){

        if($request->ajax()){
            $event = Event::query()->findOrFail($request->id);
            $event->update($request->all());
            return response()->json($event);
        }
    }

    public function destroy(Request $request){
        $event = Event::query()->findOrFail($request->id);
        $event->delete();
        return response()->json($event);
    }

}
