@extends('layouts.main')
@section('main')
<div class="container-fluid">
    <div class="card">
        <div class="card-body text-centre">
            <form action="{{route('service.update', $service->id)}}" method="POST">
                @csrf
                @method('PUT')
                  <div class="form-group">
                    <label for="services_name">Service Name</label>
                    <input type="text" class="form-control" name="service_name" value="{{$service->service_name}}" id="services_name" placeholder="Name of the service" required>
                  </div>
                  <div class="form-group form-inline">
                    <label for="status">Status: </label>
                    <select name="service_status" value="{{$service->service_status}}">
                      <option class="disabled">--Select Status--</option>
                      <option>Available</option>
                      <option>Not Available</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="serve_price">Service Price</label>
                    <input type="text" class="form-control" name="service_price" value="{{$service->service_price}}" id="serve_price" placeholder="Price of the service" required>
                  </div>
                  <div class="form-group form-inline">
                    <label for="type">Service Type: </label>
                    <select name="service_type" value="{{$service->service_type}}">
                      <option>--Select Service Type--</option>
                      <option>Events</option>
                      <option>Recreation</option>
                      <option>Restaurant</option>
                      <option>Parking</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="sex">Gender Served</label>
                    <select name="gender" value="{{$service->gender}}" id="sex">
                        <option>--Select Gender--</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Transgender</option>
                      </select>
                  </div>
                  <button type="submit" class="btn btn-danger">Update</button>
                </form>
        </div>
    </div>
</div>
@endsection