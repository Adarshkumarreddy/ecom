@extends('layouts.app1')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-10 mx-auto d-block mt-3">
        <a href="{{route('product.index')}}" type="button"class="btn btn-primary">LIST</a>
       <br>
       <br>
       <div class="card">
  <div class="card-body">
  <form class="needs-validation" method="post" action="{{route('product.update',$Product->id)}}" novalidate>
        @csrf
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="name">PRODUCT NAME<span class="text-danger">*</label>
      <input type="text" class="form-control" id="name" name="name"  required value="{{$Product->name}}">
      <div class="invalid-feedback">
        This Field Is required
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="price">PRODUCT Price<span class="text-danger">*</label>
      <input type="int" class="form-control" id="price" name="price"  required value="{{$Product->price}}">
      <div class="invalid-feedback">
        This Field Is required
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="discount">PRODUCT Discount<span class="text-danger">*</label>
      <input type="int" class="form-control" id="discount" name="discount"  required  value="{{$Product->discount}}">
      <div class="invalid-feedback">
        This Field Is required
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="quantity">quantity</label>
      <input type="int" class="form-control" id="quantity" name="quantity" required value="{{$Product->quantity}}">
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="status">Status</label>
      <select class="custom-select" id="status" name="status" required  value="{{$Product->status}}">
        <option>ACTIVE</option>
        <option> INACTIVE</option>
      </select>
      <div class="invalid-feedback">
        Please select a valid state.
      </div>
    </div>
  </div>
  <div class="col-md-6 mb-3">
      <label for="shortdescription">shortdescription</label>
      <input type="int" class="form-control" id="shortdescription" name="shortdescription" required value="{{$Product->description}}">
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
  <div class="col-md-12 mb-3">
    <label for="description">description</label>
    <textarea class="custom-select" id="description" name="description" value="{{$Product->description}}" rows="3"required></textarea>
  </div>
  <button class="btn btn-primary" type="submit">Submit </button>
</form>

  </div>
</div>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
        </div>
    </div>
</div>
@endsection