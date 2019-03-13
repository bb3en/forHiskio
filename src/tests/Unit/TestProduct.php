<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TestProduct extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testProductPublish()
    {
        $data = 
        [
            'title' => 'diablo 4',
            'price' => '100',
        ];
        $response = $this->json('POST','/api/product',$data);
        $response->assertStatus(201);    
    }

    public function testProductPublishInvalid()
    {
        $data = 
        [
            'title' => 'diablo 4',
        ];
        $response = $this->json('POST','/api/product',$data);
        $response->assertStatus(422);    
    }
}
