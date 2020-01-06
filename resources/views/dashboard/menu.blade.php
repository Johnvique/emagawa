@extends('layouts.main')
@section('main')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <!-- Button trigger modal -->
    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">
        <i class="fa fa-plus-square" aria-hidden="true"></i>
  Add menu
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
          <h5 class="modal-title bg-lg text-black" id="exampleModalLabel">Manage Restaurant Menu</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="card">
            <div class="card-body">
              <form>
                  <div class="form-group">
                    <label for="serve_name">Name</label>
                    <input type="text" class="form-control" name="service_name" id="serve_name" placeholder="Service Name" required>
                  </div>
                  <div class="form-group">
                    <label for="serve_price">Prices</label>
                    <input type="price" class="form-control" name="service_price" id="serve_price" placeholder="Service Price" required>
                  </div>
                  <button type="submit" class="btn btn-secondary">Submit</button>
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
                <h6 class="m-0 font-weight-bold text-white">Restaurant Menu</h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Service Name</th>
                        <th>Service Price</th>
                        <th>Update</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>#</th>
                        <th>Service Name</th>
                        <th>Service Price</th>
                        <th>Update</th>
                      </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                          <th>01</th>
                          <td>Conference Hall</td>
                          <td>ksh.20,500</td>
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