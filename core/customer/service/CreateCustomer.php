<?php

namespace core\customer\service;

use core\customer\dto\CustomerInputDto;
use core\customer\dto\CustomerOutputDto;
use core\contracts\CreateIdProvider;
use core\contracts\UseCase;

class CreateCustomer implements UseCase
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