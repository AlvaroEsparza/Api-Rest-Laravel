<?php

namespace ApiRestful;

use ApiRestful\Product;
use ApiRestful\Scopes\SellerScope;
use Illuminate\Database\Eloquent\Model;

class Seller extends User
{

		protected static function boot()
	{
		parent::boot();

		static::addGlobalScope(new SellerScope);
	}

    public function products(){
    	return $this->hasMany(Product::class);
    }
}
