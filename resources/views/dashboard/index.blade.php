@extends('layouts.main')
@section('main')
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                  <h4 class="h4 mb-0 text-gray-800">Hotel Data</h4>
                <a href="{{url('/reservation')}}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"><i class="fas fa-book fa-sm text-white-50"></i> Make Reservation</a>
                </div>
      
                <!-- Content Row -->
                <div class="row">
      
                  <!-- Restaurant Services -->
                  <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-secondary shadow h-100 py-2">
                      <div class="card-body">
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><a href="{{url('dashboard/service')}}">Our Services</a></div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">({{$services_count}}) services</div>
                          </div>
                          <div class="col-auto">
                            <i class="fas fa-handshake fa-2x text-gray-300"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
      
                  <!-- Client Area/Guest -->
                  <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-secondary shadow h-100 py-2">
                      <div class="card-body">
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><a href="{{url('dashboard/guest')}}">Registered Guests</a></div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">({{$guests_count}}) guests</div>
                          </div>
                          <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
      
                  <!-- Rooms Booked -->
                  <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-secondary shadow h-100 py-2">
                      <div class="card-body">
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><a href="{{url('dashboard/room')}}">Available Rooms</a></div>
                            <div class="row no-gutters align-items-center">
                              <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">({{$rooms_count}}) rooms</div>
                              </div>
                              <div class="col">
                              </div>
                            </div>
                          </div>
                          <div class="col-auto">
                            <i class="fas fa-building fa-2x text-gray-300"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
      
<!--Available Reservations -->
                  <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-secondary shadow h-100 py-2">
                      <div class="card-body">
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1"><a href="{{url('dashboard/reservation')}}">Reservations Made</a></div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">({{$reservations_count}}) bookings</div>
                          </div>
                          <div class="col-auto">
                            <i class="fas fa-anchor fa-2x text-gray-300"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

<!-- Cooks Area -->
                    <div class="col-xl-3 col-md-6 mb-4">
                                        <div class="card border-left-secondary shadow h-100 py-2">
                                          <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                              <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1"><a href="{{url('dashboard/chef')}}">Experienced Cooks</a></div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">({{$chefs_count}}) chefs</div>
                                              </div>
                                              <div class="col-auto">
                                                <i class="fas fa-user-plus fa-2x text-gray-300"></i>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>

<!-- Employees -->
                  <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-secondary shadow h-100 py-2">
                      <div class="card-body">
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1"><a href="{{url('dashboard/employee')}}">Hotel Employees</a></div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">({{$employees_count}}) employees</div>
                          </div>
                          <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Hotel Notices -->
                  <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-secondary shadow h-100 py-2">
                      <div class="card-body">
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1"><a href="{{url('dashboard/notice')}}">Office Notices</a></div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">({{$notices_count}}) notices</div>
                          </div>
                          <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
      
                <!-- Content Row -->
      
      
                <!-- Content Row -->
                <div class="row">
      
                  <!-- Content Column -->
                  <div class="col-lg-6 mb-4">
      
                    <!-- Project Card Example -->
                    <div class="card shadow mb-4">
                      <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-info">Reservation Report</h6>
                      </div>
                      <div class="card-body">
                        <h4 class="small font-weight-bold">Conference Rooms <span class="float-right">20%</span></h4>
                        <div class="progress mb-4">
                          <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h4 class="small font-weight-bold">Recreational Facilities <span class="float-right">40%</span></h4>
                        <div class="progress mb-4">
                          <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h4 class="small font-weight-bold">Hotel and Restaurant Rooms <span class="float-right">60%</span></h4>
                        <div class="progress mb-4">
                          <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h4 class="small font-weight-bold">Parking Yards <span class="float-right">80%</span></h4>
                        <div class="progress mb-4">
                          <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
      
                  </div>
      
                  <div class="col-lg-6 mb-4">
      
                    <!-- Illustrations -->
                    <div class="card shadow mb-4">
                      <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-info">Hotel Notices</h6>
                      </div>
                      <div class="card-body">
                        <div class="text-center">
                          <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="img/undraw_posting_photo.svg" alt="">
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, 
                            quo facere cupiditate sapiente sint aperiam quae dicta necessitatibus ut quisquam, 
                            tenetur deserunt suscipit. A, assumenda? Excepturi laborum fugiat numquam vel?</p>
                      </div>
                    </div>
    
      
                  </div>
                </div>
      
              </div>
              <!-- /.container-fluid -->
      
            </div>
            <!-- End of Main Content -->   
@endsection