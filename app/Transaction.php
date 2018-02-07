<?php

namespace ApiRestful;
use ApiRestful\Buyer;
use ApiRestful\Product;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Transaction extends Model
{
    use SoftDeletes;

    protected $filable=[
    'quantity',
    'buyer_id',
    'product_id'];
    protected $dates= ['deleted_at'];

    public function buyer(){
    	return $this->belongsTo(Buyer::class);
    }

    public function product(){
    	return $this->belongsTo(Product::class);
    }
}
