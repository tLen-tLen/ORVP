@extends('layout')
@section('title', 'Add')
@section('content')

<h1>New product: </h1>
<div class="container products">
 <div class="row">
    <br/>
    <form action="{{ url('/add/do') }}" method = "post">
        @csrf
        <div class="form-group">
          <label>Name:</label>
          <input type="text" name = "Name" id = "Name" class="form-control" required>
        </div>
        <div class="form-group">
          <label>Description:</label>
          <input type="text" name = "Description" id = "Description" class="form-control" required>
        </div>
        <div class="form-group">
          <label>Price:</label>
          <input type="number " name = "Price" id = "Price" class="form-control" required>
        </div>
        <div class="form-group">
          <label>Photo (link):</label>
          <input type="text" name = "Photo" id = "Photo" class="form-control" required>
        </div>
        <button type = "submit" class = "btn btn-success">Submit</button>
      </form>
 </div>
</div>

@endsection
