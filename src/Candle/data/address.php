<?php

$parts = [
    $this->entity->getAddress(), 'api', 'v3', 'klines', '?symbol=', $this->entity->getSymbol(), '&interval=', $this->entity->getInterval()
];

return implode('/', $parts);
