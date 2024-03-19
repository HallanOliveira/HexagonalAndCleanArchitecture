<?php

namespace core\product\dto;

use core\product\enum\Categories;

readonly class ProductInputDto
{
    public function __construct (
        public readonly string     $name,
        public readonly float      $price,
        public readonly Categories $category,
    ) {
    }
}