@extends('layouts.main')
@section('main')
<div class="container-fluid">
    <div class="card">
        <div class="card-body text-centre">
            <form action="{{route('reservation.update', $reservation->id)}}" method="POST">
                @csrf
                @method('PUT')
                    <div class="form-group">
                      <label for="user">Guest Name</label>
                      <input type="text" class="form-control" name="guest_name" value="{{$reservation->guest_name}}" id="user" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                      <label for="checkin">Check In Date</label>
                      <input type="date" class="form-control" name="check_in" value="{{$reservation->check_in}}" id="checkin" placeholder="Date of Booking" required>
                    </div>
                    <div class="form-group">
                      <label for="checkout">Check Out Date</label>
                      <input type="date" class="form-control" name="check_out" value="{{$reservation->check_out}}" id="checkout" placeholder="Date of Booking" required>
                    </div>
                    <div class="form-group form-inline">
                      <label for="service">Service Booked: </label>
                      <select name="service_booked" value="{{$reservation->service_booked}}">
                        <option>--select the services--</option>
                        <option>Events Services</option>
                        <option>Restaurant Services</option>
                        <option>Recreational Services</option>
                        <option>Parking Services</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="cust_phone">Phone</label>
                      <input type="text" class="form-control" name="guest_phone" value="{{$reservation->guest_phone}}" id="cust_phone" placeholder="Phone Number" required>
                    </div>
                    <div class="form-group">
                      <label for="cus_mail">Email</label>
                      <input type="text" class="form-control" name="guest_email" value="{{$reservation->guest_email}}" id="cust_mail" placeholder="Email Adress" required>
                    </div>
                    <div class="form-group">
                      <label for="cust_msg">Booking Message</label>
                      <input type="textarea" name="book_message" value="{{$reservation->book_message}}"  id="cust_msg" rows="2" 
                      placeholder="Enter the Text Message Here.....">
                    </div>
                    <button type="submit" class="btn btn-danger">Submit</button>
                  </form>
        </div>
    </div>
</div>
@endsection