@extends('layouts.main')
@section('main')
<div class="container-fluid">
    <div class="card">
        <div class="card-body text-centre">
            <form action="{{route('guest.update', $guest->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                  <div class="form-group form-inline">
                    <label for="user">Name: </label>
                    <input type="name" name="name" value="{{$guest->name}}" class="form-control" id="user" placeholder="Name">
                  </div>
                <div class="form-group form-inline">
                    <label for="mail">Email: </label>
                    <input type="email" name="email" value="{{$guest->email}}" class="form-control" id="mail" placeholder="Email">
                </div>
                <div class="form-group form-inline">
                  <label for="phon">Phone: </label>
                  <input type="phone" name="phone" value="{{$guest->phone}}" class="form-control" id="phon" placeholder="Phone Number">
                </div>
                <div class="form-group form-inline">
                  <label for="idno">ID NO.: </label>
                  <input type="text" name="id_no" value="{{$guest->id_no}}" class="form-control" id="idno" placeholder="ID Number">
                </div>
                <div class="form-group form-inline">
                  <label for="loc">Location: </label>
                  <input type="location" name="location" value="{{$guest->location}}" class="form-control" id="loc" placeholder="Location">
                </div>
                <div class="form-group form-inline">
                  <label for="type">Type: </label>
                  <select name="type" value="{{$guest->type}}">
                    <option >--Select guest type--</option>
                    <option>Adult</option>
                    <option>Child</option>
                  </select>
                </div>
                <div class="form-group form-inline">
                  <label for="serv">Service Booked: </label>
                  <input type="text" name="service" value="{{$guest->service}}" class="form-control" id="serv" placeholder="Service Booked">
                </div>
                <div class="form-group form-inline">
                  <label for="num">Total Guests: </label>
                  <input type="number" name="number" value="{{$guest->number}}" class="form-control" id="num" placeholder="Total Number of guests">
                </div>
                <div class="form-group form-inline">
                  <label for="gen">Gender: </label>
                  <select name="gender" value="{{$guest->gender}}">
                    <option >--select gender--</option>
                    <option>Male</option>
                    <option>Female</option>
                  </select>
                </div>
                <div class="form-group form-inline">
                    <label for="image">Image: </label>
                    <input type="file" name="image" value="{{$guest->image}}" class="form-control" id="image"  placeholder="Upload the Image Here"
                     onchange="return imageval()">
                </div>
                  <button type="submit" class="btn btn-danger" data-dismiss="modal">Update</button>
                </form>
        </div>
    </div>
</div>
@endsection