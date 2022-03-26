<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Event;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $booked_event = Event::find($id);
        return view('publicSite.book', compact('booked_event'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'number_of_seats'=>'required',
            'price'=>'required',
            'user_id'=>'required',
            'event_id'=>'required',
          ]);
         
          Booking::create([
              "user_id"=>$request->user_id,
              "number_of_seats"=>$request->number_of_seats,
              "price"=>$request->price,
              "event_id"=>$request->event_id,

         ]);
         return redirect()->back()->with('message','Thank you for dealing with us ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking )

    {
        // $booked_event = Event::find($id);

        $userBookedEvents = Event::where('user_id', auth()->user()->id)->get();
        return view('publicSite.user_events', compact('userBookedEvents'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
