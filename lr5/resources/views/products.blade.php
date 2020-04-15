@extends('layout')
@section('title', 'Products')
@section('content')

<div class="container products">
 <div class="row">
   @foreach($products as $product)
   <div class="col-xs-18 col-sm-6 col-md-3">
     <div class="thumbnail">
       <img src="{{ $product['photo'] }}" width="300" height="400">
       <div class="caption">
         <h4>{{ $product['name'] }}</h4>
         <p>{{ \Illuminate\Support\Str::limit($product['description'], 50) }}</p>
         <p><strong>Price: </strong> {{ $product['price'] }}$</p>
         <p class="btn-holder"><a href="{{ url($product['ident'].'/destroy/') }}" class="btn btn-warning btn-block text-center" role="button">Delete</a> </p>
       </div>
     </div>
   </div>
   @endforeach
   <br/>
 </div>
 <center>
        <p class="btn-holder"><a href="{{ url('/add/') }}" class="btn btn-warning btn-block text-center" role="button">Add</a> </p>
   </center>
</div>

@endsection
