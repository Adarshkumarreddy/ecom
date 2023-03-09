@extends('layouts.app1')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-10 mx-auto d-block mt-3">
        <a href="{{route('user.index')}}" type="button" style="float: right; " class="btn btn-primary float-end mb-3">LIST</a>
        <div class="card">
  <div class="card-header card bg-primary">
    <h6 class="text-center">EDIT USER</h6>
  </div>
  <div class="card-body">
  <form method="post" action="{{route('user.update',$User->id)}}">
    @csrf
  <div class="mb-3">
    <label for="name" class="form-label">NAME</label>
    <input type="text" class="form-control" id="name" name="name" value="{{$User->name}}">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">EMAIL</label>
    <input type="email" class="form-control" id="email"name="email"value="{{$User->email}}">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">PASSWORD</label>
    <input type="password" class="form-control" id="password"name="password" value="{{$User->password}}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
</div>
        </div>
    </div>
</div>
@endsection