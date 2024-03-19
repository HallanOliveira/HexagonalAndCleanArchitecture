<?php

namespace core\product\service;

use core\contracts\CreateIdProvider;
use core\product\dto\ProductInputDto;
use core\product\dto\ProductOutputDto;
use core\product\enum\Categories;
use core\contracts\UseCase;

class CreateProduct implements UseCase
{
    public function __construct(
        private ProductInputDto  $productInputDto,
        private CreateIdProvider $createIdProvider
    ) {
    }

    public function execute(): ProductOutputDto
    {
        $id        = $this->createIdProvider->execute();
        $name      = $this->productInputDto->name;
        $price     = $this->productInputDto->price;
        $category  = Categories::DRINK;
        return new ProductOutputDto($id, $name, $price, $category);
    }
}