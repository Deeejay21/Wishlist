<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index(User $user)
    {
        $users = User::all();
        
        return view('wishlists.index', compact('users'));
    }
}
