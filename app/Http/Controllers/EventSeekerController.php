<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class EventSeekerController extends Controller
{
    public function my_events()
    {
        $auth = Auth::user();
        $events = Event::where('user_id', $auth->id)->with('user')->get();
        return view('event-seeker.my-post-event')->with('events', $events);
    }

    public function create()
    {
        return view('event-seeker.post-an-event');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'event_title' => 'required',
        //     'event_type' => 'required',
        //     'city' => 'required',
        //     'location' => 'required',
        //     'budgetmin' => 'required|float',
        //     'budgetmax' => 'required|float',
        //     'date' => 'required',
        // ]);
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'type' => 'required',
            'city' => 'required',
            'location' => 'required',
            'budgetmin' => 'required|numeric',
            'budgetmax' => 'required|numeric',
            'event_date' => 'required',
            'description' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                "status" => false,
                "message" => "The given data was invalid.",
                "errors" => $validator->errors()->all()
            ], 422);
        }

        $event = new Event();
        $auth = Auth::user();
        $event->user_id = $auth->id;
        $event->title = $request->title;
        $event->type = $request->type;
        $event->city = $request->city;
        $event->location = $request->location;
        $event->budget_min = $request->budgetmin;
        $event->budget_max = $request->budgetmax;
        $event->event_date = $request->event_date;
        $event->description = $request->description;
        $event->save();
        return redirect('/event-seeker/post-event');
    }

    public function destroy($event_id)
    {
        $event = Event::find($event_id);
        $event->delete();
        return redirect('/event-seeker/posted-event');
    }
}
