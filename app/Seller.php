<?php

namespace ApiRestful;

use ApiRestful\Product;

use Illuminate\Database\Eloquent\Model;

class Seller extends User
{
    public function products(){
    	return $this->hasMany(Product::class);
    }
}
