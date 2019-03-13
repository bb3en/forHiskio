<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class HiskioController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function calc(Request $request)
    {
        $n = (int)$request->input('n');
        $calc = pow(2,$n-1);
        return $calc < 1 ? 0 : $calc;
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'price' => 'required',
        ]);
        $product = new Product($request->input('title'),$request->input('price'));

        return response()->json($product->marketPruduct(), 201); 
    }
}
