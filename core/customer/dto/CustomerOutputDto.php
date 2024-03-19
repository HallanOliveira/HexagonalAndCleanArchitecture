<?php

namespace core\customer\dto;

readonly class CustomerOutputDto
{
    public function __construct(
        public readonly int    $id,
        public readonly string $name,
        public readonly int    $age,
    ) {
    }
}