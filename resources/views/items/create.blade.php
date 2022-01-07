@extends('templates.app')

@section('title', 'Items')

@section('content')
<h2>New Item</h2>
<form action="/{{ $owner }}/items" method="post">
  @csrf
  <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" name="name" class="form-control" id="name">
    </div>
  </div>
  <div class="form-group row">
    <label for="unit" class="col-sm-2 col-form-label">Unit</label>
    <div class="col-sm-10">
      <input type="text" name="unit" class="form-control" id="unit" placeholder="kg">
    </div>
  </div>
  <div class="form-group row">
    <label for="default_quantity" class="col-sm-2 col-form-label">Default quantity</label>
    <div class="col-sm-10">
      <input type="text" name="default_quantity" class="form-control" id="default_quantity" placeholder="100">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
</form>


@endsection
