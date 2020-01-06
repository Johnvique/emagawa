@extends('layouts.main')
@section('main')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <!-- Button trigger modal -->
    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">
        <i class="fa fa-plus-square" aria-hidden="true"></i>
  Add Room
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
          <h5 class="modal-title bg-lg text-black" id="exampleModalLabel">Manage Hotel Rooms</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="card">
            <div class="card-body">
              <form>
                  <div class="form-group form-inline">
                    <label for="user">Title: </label>
                    <input type="text" name="title" class="form-control" id="user" placeholder="Name">
                  </div>
                <div class="form-group form-inline">
                    <label for="cap">Capacity: </label>
                    <input type="size" name="size" class="form-control" id="cap" placeholder="Capacity">
                </div>
                <div class="form-group form-inline">
                  <label for="type">Type: </label>
                  <select name="type">
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
                  <input type="number" name="number" class="form-control" id="num" placeholder="Room Number">
                </div>
                <div class="form-group form-inline">
                  <label for="charge">Charge: </label>
                  <input type="price" name="price" class="form-control" id="charge" placeholder="Charge">
                </div>
                <div class="form-group form-inline">
                  <label for="bed">Bed Type: </label>
                  <input type="text" name="bed_type" class="form-control" id="bed" placeholder="Bed Type">
                </div>
                <div class="form-group form-inline">
                  <label for="status">Status: </label>
                  <select name="status">
                    <option>Booked</option>
                    <option>Available</option>
                    <option>Pending</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="facility">Facilities</label>
                  <textarea class="form-control" name="facility" id="facility" rows="2" placeholder="Room Facilities"></textarea>
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
              <h6 class="m-0 font-weight-bold text-white">Available Rooms</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Title</th>
                      <th>Capacity</th>
                      <th>Type</th>
                      <th>Number</th>
                      <th>Charge</th>
                      <th>Bed Type</th>
                      <th>Status</th>
                      <th>Facilities</th>
                      <th>Update</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>#</th>
                      <th>Title</th>
                      <th>Capacity</th>
                      <th>Type</th>
                      <th>Number</th>
                      <th>Charge</th>
                      <th>Bed Type</th>
                      <th>Status</th>
                      <th>Facilities</th>
                      <th>Update</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <th>02</th>
                      <td>Menengai House</td>
                      <td>5</td>
                      <td>Special Room</td>
                      <td>No.28</td>
                      <td>ksh.30,500</td>
                      <td>4 by 6</td>
                      <td>Booked</td>
                      <td>Wifi,TV, Hot Shower</td>
                      <td>
                        <a  href="" class="btn btn-info fa fa-edit btn-sm"></a>
                        <a  href="" class="btn btn-danger fa fa-trash-alt btn-sm"></a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
<!-- /.datatables -->
@endsection