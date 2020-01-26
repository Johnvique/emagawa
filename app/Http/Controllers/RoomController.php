<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::all();
        return view('dashboard/room',compact('rooms')); 
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
        $rooms=new Room;
        $rooms->title=$request->get('title');
        $rooms->size=$request->get('size');
        $rooms->type=$request->get('type');
        $rooms->number=$request->get('number');
        $rooms->price=$request->get('price');
        $rooms->bed_type=$request->get('bed_type');
        $rooms->status=$request->get('status');
        $rooms->facility=$request->get('facility');

        $rooms->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $room = Room::find($id);
        return view('dashboard/room_edit',compact('room'));

        return redirect('room');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $room = Room::find($id);
        $room->update([
            'title'=>$request->title,
            'size'=>$request->size,
            'type'=>$request->type,
            'number'=>$request->number,
            'price'=>$request->price,
            'bed_type'=>$request->bed_type,
            'status'=>$request->status,
            'facility'=>$request->facility,
        ]);

        return redirect('room');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $room = Room::find($id);
        $room->delete();

        return redirect('room');
    }
}
