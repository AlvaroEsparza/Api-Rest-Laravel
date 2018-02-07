<?php

namespace ApiRestful;

use ApiRestful\Product;
use ApiRestful\Scopes\SellerScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Seller extends User
{
	 use SoftDeletes;

	 protected $dates= ['deleted_at'];

		protected static function boot()
	{
		parent::boot();

		static::addGlobalScope(new SellerScope);
	}

    public function products(){
    	return $this->hasMany(Product::class);
    }
}
