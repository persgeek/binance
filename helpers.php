<?php

use PG\Request\Request;

function binance($request)
{
    $response = Request::instance()
        ->setAddress($request->address())
        ->setHeaders($request->headers())
        ->setParams($request->params())
        ->getResponse()
        ->asObject();
}
