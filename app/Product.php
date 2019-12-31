<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function wishlisters()
    {
        return $this->belongsToMany(User::class, 'wishlists');
    }
}
