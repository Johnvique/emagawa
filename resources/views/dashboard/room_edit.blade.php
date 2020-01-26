@extends('layouts.main')
@section('main')
<div class="container-fluid">
    <div class="card">
        <div class="card-body text-centre">
            <form action="{{route('room.update', $room->id)}}" method="POST">
                @csrf
                @method('PUT')
                    <div class="form-group form-inline">
                      <label for="user">Title: </label>
                      <input type="text" name="title" value="{{$room->title}}" class="form-control" id="user" placeholder="Name">
                    </div>
                  <div class="form-group form-inline">
                      <label for="cap">Capacity: </label>
                      <input type="size" name="size" value="{{$room->size}}" class="form-control" id="cap" placeholder="Capacity">
                  </div>
                  <div class="form-group form-inline">
                    <label for="type">Type: </label>
                    <select name="type" value="{{$room->type}}">
                      <option>--Select Room Type--</option>
                      <option>Standard Room</option>
                      <option>Family Room</option>
                      <option>Single Room</option>
                      <option>Special Room</option>
                      <option>Conference Room</option>
                      <option>One Bedroom</option>
                    </select>
                  </div>
                  <div class="form-group form-inline">
                    <label for="num">Number: </label>
                    <input type="number" name="number" value="{{$room->number}}" class="form-control" id="num" placeholder="Room Number">
                  </div>
                  <div class="form-group form-inline">
                    <label for="charge">Charge: </label>
                    <input type="price" name="price" value="{{$room->price}}" class="form-control" id="charge" placeholder="Charge">
                  </div>
                  <div class="form-group form-inline">
                    <label for="bed">Bed Type: </label>
                    <input type="text" name="bed_type" value="{{$room->bed_type}}" class="form-control" id="bed" placeholder="Bed Type">
                  </div>
                  <div class="form-group form-inline">
                    <label for="status">Status: </label>
                    <select name="status" value="{{$room->status}}">
                      <option>--Select Room Status--</option>
                      <option>Booked</option>
                      <option>Available</option>
                      <option>Pending</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="facility">Facilities</label>
                    <input type="textarea" name="facility" class="form-control" value="{{$room->facility}}" id="facility" rows="2" 
                     placeholder="Room Facilities">
                  </div>
                    <button type="submit" class="btn btn-danger" data-dismiss="modal">Update</button>
                  </form>
        </div>
    </div>
</div>
@endsection