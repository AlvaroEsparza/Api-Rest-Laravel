<?php

namespace ApiRestful\Http\Controllers\Seller;

use ApiRestful\Seller;
use Illuminate\Http\Request;
use ApiRestful\Http\Controllers\ApiController;

class SellerController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendedores = Seller::has('products')->get();

        return response()->json(['data'=>$vendedores],200);
    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Seller $seller/*$id*/)
    {
        /*$vendedore = Seller::has('products')->findOrFail($id);

        return response()->json(['data'=>$vendedore], 200);*/

        return $this->showOne($seller);
    }
}
   