@extends('layouts.app1')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 mt-3">
            <a href="{{route('user.create')}}" type="button" class="btn btn-primary">ADD USER</a>
            <br>
            <br>
        <div class="card">
  <div class="card-header bg-primary">
    <h6 class="text-center">USERS LIST</h6>
  </div>
  <div class="card-body">
  <table class="table table-bordered table-hover"style="overflow-x: auto;">
  <thead>
    <tr>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">Password</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
    @foreach($User as $user)
    <tr>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->password}}</td>
      <td><a href="{{route('user.edit',$user->id)}}"class="btn btn-primary btn-sm">EDIT</a>
          <a href="{{route('user.delete',$user->id)}}"class="btn btn-danger btn-sm">DELETE</a>
    </td>
    </tr>
    @endforeach
  </tbody>
</table>
  </div>
</div>
        </div>
    </div>
</div>
@endsection