<?php

namespace ApiRestful;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
	 use SoftDeletes;
	 protected $dates= ['deleted_at'];
    protected $fillable=[
    'name',
    'desciption'];

    public function products(){
    	return $this->belongsToMany(Product::class);
    }
}
