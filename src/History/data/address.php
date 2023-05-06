<?php

$parts = [
    $this->entity->getAddress(), 'api', 'v3', 'ticker', '24hr', '?symbol=', $this->entity->getSymbol()
];

return implode('/', $parts);
