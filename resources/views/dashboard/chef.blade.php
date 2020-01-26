@extends('layouts.main')
@section('main')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <!-- Button trigger modal -->
    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">
        <i class="fa fa-plus-square" aria-hidden="true"></i>
  Add Chef
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
          <h5 class="modal-title bg-lg text-black" id="exampleModalLabel">Manage Cooking Staff</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="card">
            <div class="card-body">
            <form action="{{route('chef.store')}}" method="POST" enctype="multipart/form-data">
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
                <label for="expe">Experience: </label>
                <input type="text" name="experience" class="form-control" id="expe" placeholder="Area of Experience">
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
              <h6 class="m-0 font-weight-bold text-white">Magawa Cooking Staff</h6>
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
                      <th>Experience</th>
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
                      <th>Experience</th>
                      <th>Gender</th>
                      <th>Image</th>
                      <th>Update</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($chefs as $chef)
                    <tr>
                    <th>{{$chef->id}}</th>
                      <td>{{$chef->name}}</td>
                      <td>{{$chef->email}}</td>
                      <td>{{$chef->phone}}</td>
                      <td>{{$chef->id_no}}</td>
                      <td>{{$chef->experience}}</td>
                      <td>{{$chef->gender}}</td>
                    <td><img src="{{asset('pictures/'.$chef->image)}}" class="img-responsive" style="width:50px"></td>
                      <td>
                      <a href="{{action('ChefController@edit', $chef->id)}}" class="btn btn-info fa fa-edit btn-sm"></a>
                      <form action="{{action('ChefController@destroy', $chef->id)}}" method="POST">
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