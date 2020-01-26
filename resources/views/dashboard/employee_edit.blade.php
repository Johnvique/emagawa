@extends('layouts.main')
@section('main')
<div class="container-fluid">
    <div class="card">
        <div class="card-body text-centre">
            <form action="{{route('employee.update', $employee->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                    <div class="form-group form-inline">
                      <label for="user">Name: </label>
                      <input type="name" name="name" value="{{$employee->name}}" class="form-control" id="user" placeholder="Name">
                    </div>
                  <div class="form-group form-inline">
                      <label for="mail">Email: </label>
                      <input type="email" name="email" value="{{$employee->email}}" class="form-control" id="mail" placeholder="Email">
                  </div>
                  <div class="form-group form-inline">
                    <label for="phon">Phone Number: </label>
                    <input type="phone" name="phone" value="{{$employee->phone}}" class="form-control" id="phon" placeholder="Phone Number">
                  </div>
                  <div class="form-group form-inline">
                    <label for="idno">ID NO.: </label>
                    <input type="text" name="id_no" value="{{$employee->id_no}}" class="form-control" id="idno" placeholder="ID Number">
                  </div>
                  <div class="form-group form-inline">
                    <label for="loc">Location: </label>
                    <input type="location" name="location" value="{{$employee->location}}" class="form-control" id="loc" placeholder="Location">
                  </div>
                  <div class="form-group form-inline">
                    <label for="pos">Position: </label>
                    <input type="text" name="role" value="{{$employee->role}}" class="form-control" id="pos" placeholder="Role">
                  </div>
                  <div class="form-group form-inline">
                    <label for="gen">Gender: </label>
                    <select name="gender" value="{{$employee->gender}}">
                        <option>--select gender--</option>
                      <option>Male</option>
                      <option>Female</option>
                    </select>
                  </div>
                  <div class="form-group form-inline">
                    <label for="image">Image: </label>
                    <input type="file" name="image" value="{{$employee->image}}" class="form-control" id="image"  placeholder="Upload the Image Here"
                     onchange="return imageval()">
                    </div>
                    <button type="submit" class="btn btn-danger">Update</button>
                  </form> 
        </div>
    </div>
</div>
@endsection