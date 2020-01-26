@extends('layouts.main')
@section('main')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <!-- Button trigger modal -->
    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">
        <i class="fa fa-plus-square" aria-hidden="true"></i>
  Add Guest
  </button>
  <button type="button" class="btn btn-secondary">
      <i class="fa fa-file-excel" aria-hidden="true"></i>
    Export Excel
    </button>
      <button type="button" class="btn btn-secondary" onclick="PrintDiv()">
          <i class="fa fa-print" aria-hidden="true"></i>
        Print
        </button>
        </div>
    </div>
</div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title bg-lg text-black" id="exampleModalLabel">Manage Current Guests</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="card">
            <div class="card-body">
            <form action="{{route('guest.store')}}" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="form-group form-inline">
                  <label for="user">Name: </label>
                  <input type="name" name="name" class="form-control" id="user" placeholder="Name">
                </div>
              <div class="form-group form-inline">
                  <label for="mail">Email: </label>
                  <input type="email" name="email" class="form-control" id="mail" placeholder="Email">
              </div>
              <div class="form-group form-inline">
                <label for="phon">Phone: </label>
                <input type="phone" name="phone" class="form-control" id="phon" placeholder="Phone Number">
              </div>
              <div class="form-group form-inline">
                <label for="idno">ID NO.: </label>
                <input type="text" name="id_no" class="form-control" id="idno" placeholder="ID Number">
              </div>
              <div class="form-group form-inline">
                <label for="loc">Location: </label>
                <input type="location" name="location" class="form-control" id="loc" placeholder="Location">
              </div>
              <div class="form-group form-inline">
                <label for="type">Type: </label>
                <select name="type">
                  <option>--select guest type--</option>
                  <option>Adult</option>
                  <option>Child</option>
                </select>
              </div>
              <div class="form-group form-inline">
                <label for="serv">Service Booked: </label>
                <input type="text" name="service" class="form-control" id="serv" placeholder="Service Booked">
              </div>
              <div class="form-group form-inline">
                <label for="num">Total Guests: </label>
                <input type="number" name="number" class="form-control" id="num" placeholder="Total Number of guests">
              </div>
              <div class="form-group form-inline">
                <label for="gen">Gender: </label>
                <select name="gender">
                  <option>--select gender--</option>
                  <option>Male</option>
                  <option>Female</option>
                </select>
              </div>
              <div class="form-group form-inline">
                <label for="image">Image: </label>
                <input type="file" name="image" class="form-control" id="image"  placeholder="Upload the Image Here"
                 onchange="return imageval()">
              </div>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-info">Submit</button>
              </form>
            </div>
          </div>
        </div>
        <div class="modal-footer">

        </div>
      </div>
    </div>
  </div>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3 bg-secondary">
              <h6 class="m-0 font-weight-bold text-white">Registered Guests</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>ID NO.</th>
                      <th>Location</th>
                      <th>Type</th>
                      <th>Service</th>
                      <th>Total</th>
                      <th>Gender</th>
                      <th>Image</th>
                      <th>Update</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>ID NO.</th>
                      <th>Location</th>
                      <th>Type</th>
                      <th>Service</th>
                      <th>Total</th>
                      <th>Gender</th>
                      <th>Image</th>
                      <th>Update</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($guests as $guest)
                    <tr>
                    <th>{{$guest->id}}</th>
                      <td>{{$guest->name}}</td>
                      <td>{{$guest->email}}</td>
                      <td>{{$guest->phone}}</td>
                      <td>{{$guest->id_no}}</td>
                      <td>{{$guest->location}}</td>
                      <td>{{$guest->type}}</td>
                      <td>{{$guest->service}}</td>
                      <td>{{$guest->number}}</td>
                      <td>{{$guest->gender}}</td>
                      <td><img class="img-responsive" style="width:60px" src="{{asset('pictures/'.$guest->image)}}"/></td>
                      <td>
                      <a  href="{{action('GuestController@edit', $guest->id)}}" class="btn btn-info fa fa-edit btn-sm"></a>
                      <form action="{{action('GuestController@destroy', $guest->id)}}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger fa fa-trash-alt btn-sm"></button>
                        </form>
                      </td>
                    </tr>     
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
<!-- /.datatables -->
@endsection