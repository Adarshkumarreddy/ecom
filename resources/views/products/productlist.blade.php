@extends('layouts.app1')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 mt-3">
            <a href="{{route('product.create')}}" type="button" class="btn btn-primary">ADD PRODUCT</a>
        <br>
        <br>
            <div class="card">
  <div class="card-header bg-primary">
    <h6 class="text-center">PRODUCTS</h6>
  </div>
  <div class="card-body">
  <table class="table table-bordered table-hover"style="overflow-x: auto;">
  <thead>
    <tr class="bg-danger">
      <th scope="col">PRODUCT NAME</th>
      <th scope="col">PRICE</th>
      <th scope="col">DISCOUNT</th>
      <th scope="col">QUANTITY</th>
      <th scope="col">STATUS</th>
      <th scope="col">SHORT DESCRIPTION</th>
      <th scope="col">DESCRIPTION</th>
      <th scope="col">ACTION<th>
    </tr>
  </thead>
  <tbody>
    @foreach($Product as $user)
    <tr class="text-center">
      <td>{{$user->name}}</td>
      <td>{{$user->price}}</td>
      <td>{{$user->discount}}</td>
      <td>{{$user->quantity}}</td>
      <td>{{$user->status}}</td>
      <td>{{$user->shortdescription}}</td>
      <td>{{$user->description}}</td>
      <td><a href="{{route('product.edit',$user->id)}}"class="btn btn-primary btn-sm">edit</a>
      <a href="{{route('product.delete',$user->id)}}"class="btn btn-danger btn-sm">delete</a>
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