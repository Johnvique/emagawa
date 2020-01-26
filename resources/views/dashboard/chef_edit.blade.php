@extends('layouts.main')
@section('main')
<div class="container-fluid">
    <div class="card">
        <div class="card-body text-centre">
            <form action="{{route('chef.update', $chef->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                  <div class="form-group form-inline">
                    <label for="user">Name: </label>
                    <input type="name" name="name" value="{{$chef->name}}" class="form-control" id="user" placeholder="Name">
                  </div>
                <div class="form-group form-inline">
                    <label for="mail">Email: </label>
                    <input type="email" name="email" value="{{$chef->email}}" class="form-control" id="mail" placeholder="Email">
                </div>
                <div class="form-group form-inline">
                  <label for="phon">Phone: </label>
                  <input type="phone" name="phone" value="{{$chef->phone}}" class="form-control" id="phon" placeholder="Phone Number">
                </div>
                <div class="form-group form-inline">
                  <label for="idno">ID NO.: </label>
                  <input type="text" name="id_no" value="{{$chef->id_no}}" class="form-control" id="idno" placeholder="ID Number">
                </div>
                <div class="form-group form-inline">
                  <label for="expe">Experience: </label>
                  <input type="text" name="experience" value="{{$chef->experience}}" class="form-control" id="expe" placeholder="Area of Experience">
                </div>
                <div class="form-group form-inline">
                  <label for="gen">Gender: </label>
                  <select name="gender" value="{{$chef->gender}}">
                    <option>--select gender--</option>
                    <option>Male</option>
                    <option>Female</option>
                  </select>
                </div>
                <div class="form-group form-inline">
                    <label for="image">Image: </label>
                    <input type="file" name="image" value="{{$chef->image}}" class="form-control" id="image"  placeholder="Upload the Image Here"
                     onchange="return imageval()">
                </div>
                  <button type="submit" class="btn btn-danger">Update</button>
                </form> 
        </div>
    </div>
</div>
@endsection