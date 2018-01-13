<?php

namespace DesignPatterns\Creational\FactoryMethod;

use DesignPatterns\Creational\FactoryMethod\Foundation\IFactory;

// 'ConcreteProduct' class

class PermanentEmployee implements IFactory
{
    public function details()
    {
        return 'This is Permanent employee type object';
    }
}
