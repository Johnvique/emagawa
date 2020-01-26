<?php

namespace App\Http\Controllers;
use File;
use App\Chef;
use Illuminate\Http\Request;

class ChefController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chefs = Chef::all();
        return view('dashboard/chef',compact('chefs')); 
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

        $chefs=new Chef;
        $chefs->name=$request->get('name');
        $chefs->email=$request->get('email');
        $chefs->phone=$request->get('phone');
        $chefs->id_no=$request->get('id_no');
        $chefs->experience=$request->get('experience');
        $chefs->gender=$request->get('gender');
        $chefs->image=$fileNameToStore;

        $chefs->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Chef  $chef
     * @return \Illuminate\Http\Response
     */
    public function show(Chef $chef)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Chef  $chef
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $chef = Chef::find($id);
        return view('dashboard/chef_edit',compact('chef'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Chef  $chef
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $chef =Chef::find($id);
        $chef->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'id_no'=>$request->id_no,
            'experience'=>$request->experience,
            'gender'=>$request->gender,
            'image'=>$request->image,
        ]);

        return redirect('chef');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Chef  $chef
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $chef = Chef::find($id);
        file::delete('pictures/'.$chef->image);
        $chef->delete();

        return redirect('chef');
    }
}
