@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Products List</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                @foreach ($products as $product)
                <ul>
                    <li>{{ $product->name }}</li>
                    <li>{{ $product->description }} <wishlist-button product-id="{{ $product->id }}"></wishlist-button></li>
                    
                </ul>
                @endforeach
            </div>
        </div>
    </div>
@endsection