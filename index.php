<?php

require_once 'core/customer/contracts/dto/CustomerInputDto.php';
require_once 'core/customer/contracts/dto/CustomerOutputDto.php';
require_once 'core/customer/contracts/interface/CreateIdProvider.php';
require_once 'core/customer/service/CreateCustomer.php';
require_once 'external/service/GenerateIdRandom.php';
require_once 'external/menu/Menu.php';

use test_dto\external\menu\Menu;

$menu = new Menu();
$menu->start();