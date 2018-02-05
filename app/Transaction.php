<?php

namespace ApiRestful;
use ApiRestful\Buyer;
use ApiRestful\Product;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $filable=[
    'quantity',
    'buyer_id',
    'product_id'];

    public function buyer(){
    	return $this->belongsTo(Buyer::class);
    }

    public function product(){
    	return $this->belongsTo(Product::class);
    }
}