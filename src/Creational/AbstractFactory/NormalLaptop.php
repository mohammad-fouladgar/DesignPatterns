<?php

namespace DesignPatterns\Creational\AbstractFactory;

use DesignPatterns\Creational\AbstractFactory\Foundation\ILaptop;

// ProductA2
class NormalLaptop implements ILaptop
{
    public function getName(): string
    {
        return 'Normal Laptop';
    }
}
