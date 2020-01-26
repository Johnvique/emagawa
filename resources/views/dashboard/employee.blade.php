@extends('layouts.main')
@section('main')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <!-- Button trigger modal -->
    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">
        <i class="fa fa-plus-square" aria-hidden="true"></i>
  Add Employee
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
          <h5 class="modal-title bg-lg text-black" id="exampleModalLabel">Manage Hotel Employees</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="card">
            <div class="card-body">
            <form action="{{route('employee.store')}}" method="POST" enctype="multipart/form-data">
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
                  <label for="phon">Phone Number: </label>
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
                  <label for="pos">Position: </label>
                  <input type="text" name="role" class="form-control" id="pos" placeholder="Role">
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
              <h6 class="m-0 font-weight-bold text-white">Available Employees</h6>
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
                      <th>Position</th>
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
                      <th>Position</th>
                      <th>Gender</th>
                      <th>Image</th>
                      <th>Update</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($employees as $employee)
                    <tr>
                    <th>{{$employee->id}}</th>
                      <td>{{$employee->name}}</td>
                      <td>{{$employee->email}}</td>
                      <td>{{$employee->phone}}</td>
                      <td>{{$employee->id_no}}</td>
                      <td>{{$employee->location}}</td>
                      <td>{{$employee->role}}</td>
                      <td>{{$employee->gender}}</td>
                    <td><img class="img-responsive" style="width:50px" src="{{asset('pictures/'.$employee->image)}}"/></td>
                      <td>
                      <a  href="{{action('EmployeeController@edit', $employee->id)}}" class="btn btn-info fa fa-edit btn-sm"></a>
                      <form action="{{action('EmployeeController@destroy', $employee->id)}}" method="post">
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