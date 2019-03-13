<?php

namespace App;

interface action
{

    public function publish();
    public function respond();
}

abstract class Store implements action
{
    function publish()
    {
        return $this->respond();
    }

    function respond()
    {

    }

}