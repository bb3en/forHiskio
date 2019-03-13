<?php

namespace App\Stores;

use App\Store;

class Newegg extends Store
{
    public function respond()
    {
        return "Newegg product is on the market";
    }
    
}
