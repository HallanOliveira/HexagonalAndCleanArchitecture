<?php

namespace core\product\dto;

use core\product\enum\Categories;

readonly class ProductOutputDto
{
    public function __construct (
        public readonly int        $id,
        public readonly string     $name,
        public readonly float      $price,
        public readonly Categories $idCategory
    ) {
    }
}