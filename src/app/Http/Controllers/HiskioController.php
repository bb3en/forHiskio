<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
