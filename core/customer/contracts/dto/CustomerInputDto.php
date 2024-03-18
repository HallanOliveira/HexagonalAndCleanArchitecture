<?php

namespace core\customer\contracts\dto;

readonly class CustomerInputDto
{
    public function __construct(
        public readonly string $name,
        public readonly int    $age
    ) {
    }
}