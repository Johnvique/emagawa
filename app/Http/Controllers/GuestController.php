<?php

namespace App\Http\Controllers;
use File;
use App\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guests = Guest::all();
        return view('dashboard/guest',compact('guests')); 
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
        if ($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('image')->move(public_path('pictures'), $fileNameToStore);
        } else {
            $fileNameToStore = 'default.jpg';
        }



        $guests=new Guest;
        $guests->name=$request->get('name');
        $guests->email=$request->get('email');
        $guests->phone=$request->get('phone');
        $guests->id_no=$request->get('id_no');
        $guests->location=$request->get('location');
        $guests->type=$request->get('type');
        $guests->service=$request->get('service');
        $guests->number=$request->get('number');
        $guests->gender=$request->get('gender');
        $guests->image=$fileNameToStore;

        $guests->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function show(Guest $guest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $guest = Guest::find($id);
        return view('dashboard/guest_edit',compact('guest'));

        return redirect('guest');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $guest = Guest::find($id);
        $guest->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'id_no'=>$request->id_no,
            'location'=>$request->location,
            'type'=>$request->type,
            'service'=>$request->service,
            'number'=>$request->number,
            'gender'=>$request->gender,
            'image'=>$request->image,
        ]);
        return redirect('guest');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $guest = Guest::find($id);
        file::delete('pictures/'.$guest->image);
        $guest->delete();

        return redirect('guest');
    }
}
