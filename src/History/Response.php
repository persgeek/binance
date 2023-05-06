<?php

namespace PG\Binance\History;

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
