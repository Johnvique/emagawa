@extends('layouts.main')
@section('main')
<div class="container-fluid">
    <div class="card">
        <div class="card-body text-centre">
          <form action="{{route('notice.update', $notice->id)}}" method="POST">
            @csrf
            @method('PUT')
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control" name="title" value="{{$notice->title}}" id="title" placeholder="Enter Notice Title" required>
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                    <input type="textarea" class="form-control" name="body" value="{{$notice->body}}" row="5" column="10" id="body" placeholder="Enter the message here" required>
                </div>
                <button type="submit" class="btn btn-danger">Update</button>
              </form>
        </div>
    </div>
</div>
@endsection