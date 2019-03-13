<?php

namespace App\Stores;

use App\Store;

class Amazon extends Store
{
    public function respond()
    {
        return "Amazon product is up";
    }
    
}
