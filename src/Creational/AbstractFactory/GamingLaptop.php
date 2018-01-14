<?php

namespace DesignPatterns\Creational\AbstractFactory;

use DesignPatterns\Creational\AbstractFactory\Foundation\ILaptop;

// ProductA1
class GamingLaptop implements ILaptop
{
    public function getName(): string
    {
        return 'Gaming Laptop';
    }
}
