<?php

namespace App\Http\Controllers;

use App\EventSP;
use Illuminate\Http\Request;
use Jenssegers\Date\Date;
class EventSPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = EventSP::take(5)->latest()->get();
        Date::setLocale('fr');
        return view('admin/Event/EventMenu', [
            'event' => $event,
        ]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/event/EventCreate');
    }


    public function store(Request $request)
    {
        EventSP::create($this->ValidateEventForm());

        return redirect(route('admin.event'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EventSP  $eventSP
     * @return \Illuminate\Http\Response
     */
    public function show(EventSP $eventSP)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EventSP  $eventSP
     * @return \Illuminate\Http\Response
     */
    public function edit(EventSP $eventSP)
    {
        return view('admin/event/EventEdit', compact('eventSP'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EventSP  $eventSP
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request ,EventSP $eventSP)
    {
        $request->update($this->ValidateEventForm());

        return route('admin.event');
        // TODO Fix: Impossible to update an Event
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EventSP  $eventSP
     * @return \Illuminate\Http\Response
     */
    public function destroy(EventSP $eventSP)
    {
        $eventSP->delete(); 
        return redirect(route('admin.event'));
    }

    public function ValidateEventForm() {
        return request()->validate([
            'title' => 'required',
            'description' => 'required',
            'Adresse' => 'required',
            'city' => 'required',
            'EventDate' => 'required'
        ]);
    }
}
