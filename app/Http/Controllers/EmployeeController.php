<?php

namespace App\Http\Controllers;
use File;
use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();
        return view('dashboard/employee',compact('employees'));
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


        $employees =new Employee;
        $employees->name=$request->get('name');
        $employees->email=$request->get('email'); 
        $employees->phone=$request->get('phone'); 
        $employees->id_no=$request->get('id_no'); 
        $employees->location=$request->get('location'); 
        $employees->role=$request->get('role'); 
        $employees->gender=$request->get('gender'); 
        $employees->image=$fileNameToStore; 
        
        $employees->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('dashboard/employee_edit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $employee =Employee::find($id);
        $employee->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'id_no'=>$request->id_no,
            'location'=>$request->location,
            'role'=>$request->role,
            'gender'=>$request->gender,
            'image'=>$request->image,
        ]);

        return redirect('employee');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee =Employee::find($id);
        file::delete('pictures/'.$employee->image);
        $employee->delete();

        return redirect('employee');
    }
}
