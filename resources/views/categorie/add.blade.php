@extends('layouts.app1')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-10 mx-auto d-block mt-3">
        <a href="{{route('categorie.index')}}" type="button" style="float: right; " class="btn btn-primary float-end mb-3">LIST</a>
        <br>
        <br>
        <div class="card">
  <div class="card-header bg-primary">
    <h6 class="text-center">ADD CATEGORIE</h6>
  </div>
  <div class="card-body">
  <form method="post"action="{{route('categorie.store')}}">
    @csrf
  <div class="mb-3">
    <label for="id" class="form-label">ID</label>
    <input type="text" class="form-control" id="id" name="id">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">NAME</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="mb-3">
    <label for="slug" class="form-label">SLUG</label>
    <input type="text" class="form-control" id="slug" name="slug">
  </div>
  <div class="mb-3">
    <label for="select" class="form-label">SELECT</label>
    <select class="form-select" aria-label="Default select example"name="status">
  <option value="1">ACTIVE</option>
  <option value="2">IN ACTIVE</option>
</select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
</div>
        </div>
    </div>
</div>
@endsection