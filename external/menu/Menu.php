<?php

namespace test_dto\external\menu;

use core\customer\service\CreateCustomer;
use core\customer\dto\CustomerInputDto;
use core\product\service\CreateProduct;
use core\product\dto\ProductInputDto;
use core\product\enum\Categories;
use external\service\GenerateIdRandom;

class Menu
{
    public function start()
    {
        while (true) {
            try {
                echo "----Choose an option: ----\n";
                echo "1. Create a customer\n";
                echo "2. Create a product\n\n";
                echo "0. Exit\n";
                $option = (string) readline("\n");
                system('clear');
                $this->handleOption($option);
                system('clear');
            } catch (\Exception $e) {
                echo "An error occurred: " . $e->getMessage() . "\n";
            }
        }
    }

    private function handleOption(int $option)
    {
        switch ($option) {
            case 1:
                $name = readline("Type the name: ");
                system('clear');
                $age = readline("Type the age: ");
                system('clear');
                $idProvider = new GenerateIdRandom();
                $data       = new CustomerInputDto($name, $age);
                $useCase    = new CreateCustomer($data, $idProvider);
                $customer   = $useCase->execute();
                echo "Customer created with success: " . json_encode($customer) . "\n";
                break;
            case 2:
                $name = readline("Type the name: ");
                system('clear');
                $price = readline("Type the price: ");
                system('clear');
                $category   = Categories::DRINK;
                $idProvider = new GenerateIdRandom();
                $data       = new ProductInputDto($name, $price, $category);
                $useCase    = new CreateProduct($data, $idProvider);
                $product    = $useCase->execute();
                echo "Product created with success: " . json_encode($product) . "\n";
                break;
            case 0:
            default:
                die("Goodbye!\n");
                break;
            }
        sleep(5);
    }
}