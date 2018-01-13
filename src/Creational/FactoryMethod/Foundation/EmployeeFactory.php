<?php

namespace DesignPatterns\Creational\FactoryMethod\Foundation;

// 'Creator' abstract class

abstract class EmployeeFactory
{
    const TEMPORARY = 'TemporaryEmployee';
    const PERMANENT = 'PermanentEmployee';

    abstract public function factoryMethod(string $employeeType): IFactory;
}
