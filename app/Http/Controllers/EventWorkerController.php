<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Proposal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventWorkerController extends Controller
{
    public function show(){
        
        $events = Event::with('user')->get();
        
        return view('event-worker.event-workers-homepage')->with('events', $events);
    }

    public function apply($event_id){
        $auth = Auth::user();
        $event = Event::where('id',$event_id)->with('user')->first();
        return view('event-worker.proposal')->with('event', $event)->with('auth', $auth); 
    }

    public function applied(Request $req){
        $auth = Auth::user();
        $proposal = new Proposal();
        $proposal->user_id = $auth->id;
        $proposal->bid = $req->bid;
        $proposal->detail = $req->detail;
        $proposal->event_id = $req->event_id;
        $proposal->save();
        return redirect('/home'); 
    }

    public function myProposals(){
      return  $auth = Auth::user();
      return  $proposals = Proposal::where('user_id', $auth->user_id)->with('event')->with('user')->get();
        return view('event-worker.My-proposal')->with('proposals', $proposals); 
    }
}