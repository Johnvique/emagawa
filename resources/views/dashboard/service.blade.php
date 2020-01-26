@extends('layouts.main')
@section('main')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <!-- Button trigger modal -->
    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">
        <i class="fa fa-plus-square" aria-hidden="true"></i>
  Add service
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
          <h5 class="modal-title bg-lg text-black" id="exampleModalLabel">Manage The Services</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="card">
            <div class="card-body">
            <form action="{{route('service.store')}}" method="POST">
              @csrf
                <div class="form-group">
                  <label for="services_name">Service Name</label>
                  <input type="text" class="form-control" name="service_name" id="services_name" placeholder="Name of the service" required>
                </div>
                <div class="form-group form-inline">
                  <label for="status">Status: </label>
                  <select name="service_status">
                    <option>Available</option>
                    <option>Not Available</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="serve_price">Service Price</label>
                  <input type="text" class="form-control" name="service_price" id="serve_price" placeholder="Price of the service" required>
                </div>
                <div class="form-group form-inline">
                  <label for="type">Service Type: </label>
                  <select name="service_type">
                    <option>Events</option>
                    <option>Recreation</option>
                    <option>Restaurant</option>
                    <option>Parking</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="sex">Gender Served</label>
                  <input type="text" class="form-control" name="gender" id="sex" placeholder="Gender Served" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Reset</button>
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
              <h6 class="m-0 font-weight-bold text-white">Hotel Services</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Status</th>
                      <th>Price</th>
                      <th>Type</th>
                      <th>Gender</th>
                      <th>Update</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Status</th>
                      <th>Price</th>
                      <th>Type</th>
                      <th>Gender</th>
                      <th>Update</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($services as $service)
                    <tr>
                    <th>{{$service->id}}</th>
                      <td>{{$service->service_name}}</td>
                      <td>{{$service->service_status}}</td>
                      <td>{{$service->service_price}}</td>
                      <td>{{$service->service_type}}</td>
                      <td>{{$service->gender}}</td>
                      <td>
                      <a  href="{{action('ServiceController@edit', $service->id)}}" class="btn btn-info fa fa-edit btn-sm"></a>
                      <form action="{{action('ServiceController@destroy', $service->id)}}" method="POST">
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