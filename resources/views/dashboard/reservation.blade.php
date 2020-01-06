@extends('layouts.main')
@section('main')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <!-- Button trigger modal -->
    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">
        <i class="fa fa-plus-square" aria-hidden="true"></i>
  Make booking
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
          <h5 class="modal-title bg-lg text-black" id="exampleModalLabel">Manage Reservations Here</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="card">
            <div class="card-body">
              <form>
                  <div class="form-group">
                    <label for="user">Guest Name</label>
                    <input type="text" class="form-control" name="clin_name" id="user" placeholder="Name" required>
                  </div>
                  <div class="form-group">
                    <label for="checkin">Check In Date</label>
                    <input type="date" class="form-control" name="check_in" id="checkin" placeholder="Date of Booking" required>
                  </div>
                  <div class="form-group">
                    <label for="checkout">Check Out Date</label>
                    <input type="date" class="form-control" name="check_out" id="checkout" placeholder="Date of Booking" required>
                  </div>
                  <div class="form-group form-inline">
                    <label for="service">Service Booked: </label>
                    <select name="service">
                      <option>Events Services</option>
                      <option>Restaurant Services</option>
                      <option>Recreational Services</option>
                      <option>Parking Services</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="cust_phone">Phone</label>
                    <input type="text" class="form-control" name="customer_phone" id="cust_phone" placeholder="Phone Number" required>
                  </div>
                  <div class="form-group">
                    <label for="cus_mail">Email</label>
                    <input type="text" class="form-control" name="customer_mail" id="cust_mail" placeholder="Email Adress" required>
                  </div>
                  <div class="form-group">
                    <label for="cust_msg">Booking Message</label>
                    <textarea class="form-control" name="message" id="cust_msg" rows="2" placeholder="Enter the Text Message Here....."></textarea>
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
              <h6 class="m-0 font-weight-bold text-white">Reservations Made</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Checkin</th>
                      <th>Checkout</th>
                      <th>Service</th>
                      <th>Phone</th>
                      <th>Email</th>
                      <th>Notification</th>
                      <th>Update</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Checkin</th>
                      <th>Checkout</th>
                      <th>Service</th>
                      <th>Phone</th>
                      <th>Email</th>
                      <th>Notification</th>
                      <th>Update</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <th>01</th>
                      <td>Tiger Nixon</td>
                      <td>05/01/2020</td>
                      <td>08/01/2020</td>
                      <td>Wedding Party</td>
                      <td>0700456382</td>
                      <td>cecysly@mail.com</td>
                      <td>Msiniangushe manze!</td>
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