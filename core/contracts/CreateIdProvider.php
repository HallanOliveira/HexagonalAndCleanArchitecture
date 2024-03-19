<?php

namespace core\contracts;

interface CreateIdProvider
{
    public function execute(): int;
}