@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Wishlist List</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                @foreach ($users as $user)
                    @foreach ($user->wishlists as $userWishlist)
                    <ul>
                        <li>{{ $userWishlist->name }}</li>
                        <li>{{ $userWishlist->description }}</li>
                    </ul>
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
@endsection