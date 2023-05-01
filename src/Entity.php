<?php

namespace PG\Binance;

class Entity
{
    protected $address;

    protected $symbol;

    public static function instance()
    {
        return new static();
    }

    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setSymbol($symbol)
    {
        $this->symbol = $symbol;

        return $this;
    }

    public function getSymbol()
    {
        return $this->symbol;
    }
}
