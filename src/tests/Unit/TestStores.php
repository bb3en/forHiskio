<?php

namespace Tests\Unit;

use App\Stores;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TestStores extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testAmazon()
    {
        $store = new Stores\Amazon;

        $this->assertTrue($store->publish()==="Amazon product is up");
    }

    public function testNewegg()
    {
        $store = new Stores\Newegg;

        $this->assertTrue($store->publish()==="Newegg product is up");
    }

    public function testPChome()
    {
        $store = new Stores\PChome;

        $this->assertTrue($store->publish()==="PChome product is up");
    }

    public function testRuten()
    {
        $store = new Stores\Ruten;

        $this->assertTrue($store->publish()==="Ruten product is up");
    }

    public function testShopee()
    {
        $store = new Stores\Shopee;

        $this->assertTrue($store->publish()==="Shopee product is up");
    }

    public function testYahoo()
    {
        $store = new Stores\Yahoo;

        $this->assertTrue($store->publish()==="Yahoo product is up");
    }
}
