@extends('layouts.app1')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 mt-3">
            <a href="{{route('brand.create')}}" type="button"class="btn btn-primary">ADD BRAND</a>
        <br>
        <br>
            <div class="card">
  <div class="card-header">
   <div class="d-flex">
   <div class="p-2"><h4 class="text-bold">BRANDS</h4></div>
  <div class="ml-auto p-2"><a href="{{route('brand.create')}}" type="button"class="btn btn-primary">ADD BRAND</a></div>
</div>
   </div>
  <div class="card-body">
  <table class="table  table-hover " style="overflow-x:auto;">
  <thead>
    <tr class="bg-success">
      <th scope="col"class="w-25">BRAND NAME</th>
      <th scope="col"class="w-25">DESCRIPTION</th>
      <th scope="col"class="w-25">STATUS</th>
      <th scope="col"class="w-25">ACTION</th>
    </tr>
  </thead>
  <tbody>
    @foreach($Brand as $user)
    <tr>
      <td>{{$user->name}}</td>
      <td>{{$user->description}}</td>
      <td>{{$user->status}}</td>
      <td><a href="{{route('brand.edit',$user->id)}}"class="btn btn-primary btn-sm">EDIT</a>
      <a href="{{route('brand.delete',$user->id)}}"class="btn btn-danger btn-smyth">DELETE</a>
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