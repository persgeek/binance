<?php

namespace PG\Binance\Inventory;

class Request
{
    protected $entity;

    public function __construct($entity)
    {
        $this->entity = $entity;
    }

    public function address()
    {
        return require('data/address.php');
    }

    public function headers()
    {
        return require('data/headers.php');
    }

    public function params()
    {
        return require('data/params.php');
    }

    public function response()
    {
        return new Response(binance($this));
    }
}
