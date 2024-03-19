<?php

namespace core\customer\dto;

readonly class CustomerInputDto
{
    public function __construct(
        public readonly string $name,
        public readonly int    $age
    ) {
    }
}