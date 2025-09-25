@extends('layouts.app')

@section('content')
<h1>Random USB Drives</h1>
<div class="grid">
    @foreach($products as $product)
        <div class="card">
            <img src="{{ asset('images/'.$product->image) }}" alt="">
            <h3>{{ $product->name }}</h3>
            <p>${{ $product->price }}</p>
            <a href="/product/{{ $product->id }}">View</a>
        </div>
    @endforeach
</div>
@endsection
