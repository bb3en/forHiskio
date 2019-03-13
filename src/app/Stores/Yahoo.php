<?php

namespace App\Stores;

use App\Store;

class Yahoo extends Store
{
    public function respond()
    {
        return "Yahoo product is on the market";
    }
    
}
