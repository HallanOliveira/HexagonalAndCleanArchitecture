<?php

namespace external\service;

use core\customer\contracts\interface\CreateIdProvider;

class GenerateIdRandom implements CreateIdProvider
{
    public function execute(): int
    {
        return rand(1, 100);
    }
}
