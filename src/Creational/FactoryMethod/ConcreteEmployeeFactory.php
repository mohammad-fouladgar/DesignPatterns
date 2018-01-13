<?php

namespace DesignPatterns\Creational\FactoryMethod;

use DesignPatterns\Creational\FactoryMethod\Foundation\EmployeeFactory;
use DesignPatterns\Creational\FactoryMethod\Foundation\IFactory;

// 'ConcrteCreator' class

class ConcreteEmployeeFactory extends EmployeeFactory
{
    public function factoryMethod(string $employeeType): IFactory
    {
        switch ($employeeType) {
            case self::TEMPORARY:
                return new TemporaryEmployee();
                break;
            case self::PERMANENT:
            return new PermanentEmployee();
            break;

            default:
                throw new \InvalidArgumentException("{$employeeType} is not supported :(");
                break;
        }
    }
}
