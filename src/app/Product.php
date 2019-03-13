<?php

namespace App;
use App\Stores;
use SplObjectStorage;

class Product 
{
    private $title;

    private $price;

    function __construct($title,$price) 
    { 
        $this->title = $title;
        $this->price = $price;
    } 

    function marketPruduct()
    {
        $stores = new SplObjectStorage();
        $stores->attach(new Stores\Amazon);
        $stores->attach(new Stores\Newegg);
        $stores->attach(new Stores\PChome);
        $stores->attach(new Stores\Ruten);
        $stores->attach(new Stores\Shopee);
        $stores->attach(new Stores\Yahoo);

        $publishResult=array();

        foreach ($stores as $store) {
            array_push($publishResult,$store->publish());
         }

        return $publishResult;
    }
    
}
