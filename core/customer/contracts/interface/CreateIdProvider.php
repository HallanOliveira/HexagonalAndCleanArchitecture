<?php

namespace core\customer\contracts\interface;

interface CreateIdProvider
{
    public function execute(): int;
}