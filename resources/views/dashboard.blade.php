@extends('layout.dashboardlayout')

@section('content')

@foreach($products as $product)
<div class="productdisplay">
        <img src="{{ asset('assets/images/burger_transparent.png') }}">
        <p>{{ $product->Product_Name }}</p>
        <p>{{ $product->Price }}</p>
    </div>
    @endforeach


@endsection