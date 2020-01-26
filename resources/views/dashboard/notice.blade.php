@extends('layouts.main')
@section('main')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <!-- Button trigger modal -->
    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">
        <i class="fa fa-comments" aria-hidden="true"></i>
  Create Notice
  </button>
  <button type="button" class="btn btn-secondary">
      <i class="fa fa-file-excel" aria-hidden="true"></i>
    Export Excel
    </button>
        </div>
    </div>
</div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title bg-lg text-black" id="exampleModalLabel">Manage Hotel Notice</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="card">
            <div class="card-body">
                <form action="{{route('notice.store')}}" method="POST">
                    @csrf
                        <div class="form-group">
                          <label for="title">title</label>
                          <input type="text" class="form-control" name="title" id="title" placeholder="Notice Title" required>
                        </div>
                        <div class="form-group">
                          <label for="body">Body</label>
                          <input type="textarea" class="form-control" row="5" column="10" name="body" id="body" placeholder="Enter the message here" required>
                        </div>
                        <button type="submit" class="btn btn-info">submit</button>
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
                <h6 class="m-0 font-weight-bold text-white">Hotel Notice</h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Title</th>
                        <th>Body</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>Title</th>
                        <th>Body</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      @foreach ($notices as $notice)
                      <tr>
                        <td>{{$notice->title}}</td>
                        <p><td>{{$notice->body}}</td></p>
                        <td>
                        <a  href="{{action('NoticeController@edit', $notice->id)}}" class="btn btn-info fa fa-edit btn-sm"></a>
                        <form action="{{action('NoticeController@destroy', $notice->id)}}" method="POST">
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