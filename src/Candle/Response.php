<?php

namespace PG\Binance\Candle;

class Response
{
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function data()
    {
        return $this->data;
    }
}
