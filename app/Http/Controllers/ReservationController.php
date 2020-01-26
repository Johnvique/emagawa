<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = Reservation::all();
        return view('dashboard/reservation',compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reservations = new Reservation;
        $reservations->guest_name=$request->get('guest_name');
        $reservations->check_in=$request->get('check_in');
        $reservations->check_out=$request->get('check_out');
        $reservations->service_booked=$request->get('service_booked');
        $reservations->guest_phone=$request->get('guest_phone');
        $reservations->guest_email=$request->get('guest_email');
        $reservations->book_message=$request->get('book_message'); 

        $reservations->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reservation =Reservation::find($id);
        return view('dashboard/reserve_edit', compact('reservation'));
        return redirect('reservation');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $reservation = Reservation::find($id);
        $reservation->update([
            'guest_name'=>$request->guest_name,
            'check_in'=>$request->check_in,
            'check_out'=>$request->check_out,
            'service_booked'=>$request->service_booked,
            'guest_phone'=>$request->guest_phone,
            'guest_email'=>$request->guest_email,
            'book_message'=>$request->book_message,

        ]);

        return redirect('reservation');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reservation = Reservation::find($id);
        $reservation->delete();

        return redirect('reservation');
    }
}
