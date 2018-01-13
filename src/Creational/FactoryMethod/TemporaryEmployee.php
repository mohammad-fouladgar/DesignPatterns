<?php

namespace DesignPatterns\Creational\FactoryMethod;

use DesignPatterns\Creational\FactoryMethod\Foundation\IFactory;

// 'ConcreteProduct' class

class TemporaryEmployee implements IFactory
{
    public function details()
    {
        return 'This is Temporary employee type object';
    }
}
