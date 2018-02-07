<?php

namespace ApiRestful;
use ApiRestful\Seller;
use ApiRestful\Transaction;
use ApiRestful\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{

     use SoftDeletes;
     protected $dates= ['deleted_at'];
	const PRODUCTO_DISPONIBLE="disponible";
	const PRODUCTO_NO_DISPONIBLE="no disponible";
    protected $fillable = [
    'name',
    'description',
    'quantity',
    'status',
    'image',
    'saller_id'];

    public function estaDisponible(){
    	return $this->status == Product::PRODUCTO_DISPONIBLE;
    }


    public function seller(){
    	return $this->belongsTo(Seller::class);
    }
    
    public function transaction(){
    	return $this->hasMany(Transaction::class);
    }

    public function categories(){
    	return $this->belongsToMany(Category::class);
    }
}
