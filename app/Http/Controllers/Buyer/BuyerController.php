<?php

namespace ApiRestful\Http\Controllers\Buyer;
use ApiRestful\Buyer;
use Illuminate\Http\Request;
use ApiRestful\Http\Controllers\ApiController;

class BuyerController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //tiene que tener relación con transaction en el modelo Buyer
        $compradores = Buyer::has('transactions')->get();

        return response()->json(['data'=>$compradores],200);
    }





    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Buyer $buyer/*$id*/)
    {
        /*$compradores = Buyer::has('transactions')->findOrFail($id);

        return response()->json(['data'=>$compradores],200);*/

        return $this->showOne($buyer);
    }

}
