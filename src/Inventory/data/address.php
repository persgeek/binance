<?php

$parts = [
    $this->entity->getAddress(), 'api', 'v3', 'ticker', 'price'
];

return implode('/', $parts);
