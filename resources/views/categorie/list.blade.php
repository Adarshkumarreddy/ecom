@extends('layouts.app1')
@section('pagecss')
<link href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.css">
<link href="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap4.min.js">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 mt-4">
        <a href="{{route('categorie.create')}}" type="button" style="float: right; " class="btn btn-primary float-end mb-3">Add</a>
        <br>
        <br>
        <div class="card">
  <div class="card-header bg-primary">
    <h5 class="text-center">Categories</h5>
  </div>
  <div class="card-body mt-1">
  <table class="table table-hover table-bordered"style="overflow-x: auto;"id="example">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">SLUG</th>
      <th scope="col">STATUS</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
    @foreach($Categorie as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->slug}}</td>
      <td>{{$user->status}}</td>
      <td><a href="{{route('categorie.edit',$user->id)}}"class="btn btn-primary btn-sm">Edit</a>
          <a href="{{route('categorie.delete',$user->id)}}"class="btn btn-danger btn-sm">delete</a>
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
@section('pagejs')
<script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
@endsection
@section('javascript')
<script>
   $(document).ready(function () {
    $('#example').DataTable();
});
</script>
@endsection
