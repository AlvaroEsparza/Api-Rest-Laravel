<?php

namespace ApiRestful;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
Use ApiRestful\Scopes\BuyerScope;
use ApiRestful\Transaction;
class Buyer extends User
{
	 use SoftDeletes;
	 protected $dates= ['deleted_at'];
	protected static function boot()
	{
		parent::boot();

		static::addGlobalScope(new BuyerScope);
	}
    public function transactions(){
    	return $this->hasMany(Transaction::class);
    }
}
