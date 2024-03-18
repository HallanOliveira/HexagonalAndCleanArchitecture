<?php

namespace core\customer\service;

use core\customer\contracts\dto\CustomerInputDto;
use core\customer\contracts\dto\CustomerOutputDto;
use core\customer\contracts\interface\CreateIdProvider;

class CreateCustomer
{
    public function __construct(
        private CustomerInputDto $customerInputDto,
        private CreateIdProvider $createIdProvider
    ) {
    }

    public function execute(): CustomerOutputDto
    {
        $id   = $this->createIdProvider->execute();
        $name = $this->customerInputDto->name;
        $age  = $this->customerInputDto->age;
        return new CustomerOutputDto($id, $name, $age);
    }
}