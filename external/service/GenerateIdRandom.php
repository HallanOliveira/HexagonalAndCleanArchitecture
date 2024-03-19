<?php

namespace external\service;

use core\contracts\CreateIdProvider;

class GenerateIdRandom implements CreateIdProvider
{
    public function execute(): int
    {
        return rand(1, 100);
    }
}
