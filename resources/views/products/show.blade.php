
@extends('layouts.master')

@section('content')
    

<div class="col-md-12">
    <div class="card flex-md-row mb-4 box-shadow h-md-250">
      <div class="card-body d-flex flex-column align-items-start">
        <strong class="d-inline-block mb-2 text-primary">Design</strong>
        <h5 class="mb-0">
          <a class="text-dark" href="#">{{$product -> title}} </a>
        </h5>
        <div class="mb-1 text-muted">{{$product-> created_at->format('d/m/y')}} </div>
        <p class="card-text mb-auto">{{$product-> subtitile}} </p>
        <strong class="card-text mb-auto">{{$product-> getPrice()}} </strong>
    
        <form action="/cart/add" method="post">
          @csrf
          <input type="hidden" name="id" value="{{$product-> id}} ">
          <input type="hidden" name="title" value="{{$product-> title}} ">
          <input type="hidden" name="price" value="{{$product-> price}} ">
          
      
          <button type="submit" class="btn btn-success">Add a product</button>
      </form>

      </div>
      <img class="card-img-right flex-auto d-none d-md-block" src="{{asset($product-> image) }}" alt="Card image cap">
    </div>
  </div>
    
  @endsection