@extends('layouts.master')
@section('content')

@foreach ($product as $product)
<div class="col-md-6">
  <div class="card flex-md-row mb-4 box-shadow h-md-250">
    <div class="card-body d-flex flex-column align-items-start">
      <strong class="d-inline-block mb-2 text-primary">Design</strong>
      <h5 class="mb-0">
        <a class="text-dark" href="#">{{$product -> title}} </a>
      </h5>
      <div class="mb-1 text-muted">{{$product-> created_at->format('d/m/y')}} </div>
      <p class="card-text mb-auto">{{$product-> subtitile}} </p>
      <strong class="card-text mb-auto">{{$product-> getPrice()}} </strong>
    <a href="{{ route('products.show',$product -> slug)}} " class="btn btn-info">Continue reading</a>
    </div>
    <img class="card-img-right flex-auto d-none d-md-block" src="{{asset($product-> image) }}" alt="Card image cap">
  </div>
</div>
@endforeach
    
@endsection