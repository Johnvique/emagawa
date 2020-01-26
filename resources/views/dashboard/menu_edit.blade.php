@extends('layouts.main')
@section('main')
<div class="container-fluid">
    <div class="card">
        <div class="card-body text-centre">
          <form action="{{route('menu.update', $menu->id)}}" method="POST">
            @csrf
            @method('PUT')
                <div class="form-group">
                  <label for="serve_name">Name</label>
                  <input type="text" class="form-control" name="service_name" value="{{$menu->service_name}}" id="serve_name" placeholder="Service Name" required>
                </div>
                <div class="form-group">
                  <label for="serve_price">Prices</label>
                  <input type="price" class="form-control" name="service_price" value="{{$menu->service_price}}" id="serve_price" placeholder="Service Price" required>
                </div>
                <button type="submit" class="btn btn-danger">Update</button>
              </form>
        </div>
    </div>
</div>
@endsection