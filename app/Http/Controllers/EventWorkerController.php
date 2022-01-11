<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Hired;
use App\Models\Proposal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventWorkerController extends Controller
{
    public function show()
    {

        $events = Event::where('hired',0)->with('user')->get();

        return view('event-worker.event-workers-homepage')->with('events', $events);
    }

    public function apply($event_id)
    {
        $auth = Auth::user();
        $event = Event::where('id', $event_id)->with('user')->first();
        return view('event-worker.proposal')->with('event', $event)->with('auth', $auth);
    }

    public function applied(Request $req)
    {
        $auth = Auth::user();
        $proposal = new Proposal();
        $proposal->user_id = $auth->id;
        $proposal->bid = $req->bid;
        $proposal->detail = $req->detail;
        $proposal->event_id = $req->event_id;
        $proposal->save();
        return redirect('/home');
    }

    public function myProposals()
    {
        $auth = Auth::user();
        $proposals = $auth->proposals()->with('user')->with('event')->with('event.user')->get();
        return view('event-worker.My-proposal')->with('proposals', $proposals);
    }

    public function activeOrders()
    {
        $auth = Auth::user();
        $hired = Hired::where('user_id', $auth->id)->with('proposal')->with('proposal.user')->with('event')->with('event.user')->get();
        return view('event-worker.my-active-orders')->with('hireds', $hired);
    }
}
