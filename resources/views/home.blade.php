@extends('templates.app')

@section('title', 'Home')

@section('content')
<h2 class="display-2">Home</h2>
<div class="row">
  <div class="col-md-4">
    <p>Open an existing dashboard.</p>
    <form action="/" method="post">
        @csrf
        <div class="form-group row">
          <label for="existing-owner" class="col-sm-2 col-form-label">Name</label>
          <div class="col-sm-10">
            <input type="text" name="owner" class="form-control" id="existing-owner" placeholder="your id...">
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Go</button>
      </form>
  </div>
  <div class="col-md-4 offset-md-4">
    <p>Create a new dashboard.</p>
    <form action="/" method="post">
        @csrf
        <div class="form-group row">
          <label for="new-owner" class="col-sm-2 col-form-label">Name</label>
          <div class="col-sm-10">
            <input type="text" name="owner" class="form-control" id="new-owner" value="{{ $owner }}">
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
      </form>
  </div>
</div>

@endsection
