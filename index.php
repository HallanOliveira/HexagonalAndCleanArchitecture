<?php

require_once 'core/contracts/UseCase.php';
require_once 'core/contracts/CreateIdProvider.php';
require_once 'core/customer/dto/CustomerInputDto.php';
require_once 'core/customer/dto/CustomerOutputDto.php';
require_once 'core/customer/service/CreateCustomer.php';
require_once 'core/product/service/CreateProduct.php';
require_once 'core/product/enum/Categories.php';
require_once 'core/product/dto/ProductInputDto.php';
require_once 'core/product/dto/ProductOutputDto.php';
require_once 'external/service/GenerateIdRandom.php';
require_once 'external/menu/Menu.php';

use test_dto\external\menu\Menu;

$menu = new Menu();
$menu->start();