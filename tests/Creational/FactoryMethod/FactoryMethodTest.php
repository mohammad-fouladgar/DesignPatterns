<?php

namespace Tests\DesignPatterns\Creational\FactoryMethod;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Creational\FactoryMethod\PermanentEmployee;
use DesignPatterns\Creational\FactoryMethod\TemporaryEmployee;
use DesignPatterns\Creational\FactoryMethod\Foundation\IFactory;
use DesignPatterns\Creational\FactoryMethod\Foundation\EmployeeFactory;
use DesignPatterns\Creational\FactoryMethod\ConcreteEmployeeFactory;

class FactoryMethodTest extends TestCase
{
    protected function setUp()
    {
        $this->concreteEmployeeFactory = new ConcreteEmployeeFactory();
    }

    public function testCanMakePermanentEmployee()
    {
        $this->assertInstanceOf(PermanentEmployee::class, new PermanentEmployee());
    }

    public function testCanMakeTemporaryEmployee()
    {
        $this->assertInstanceOf(TemporaryEmployee::class, new TemporaryEmployee());
    }

    public function testIsPermanentAndTemporaryEmployeeImplementedOfIFactory()
    {
        $this->assertInstanceOf(IFactory::class, new PermanentEmployee());
        $this->assertInstanceOf(IFactory::class, new TemporaryEmployee());
    }

    public function testCanMakeConcreteEmployeeFactory()
    {
        $this->assertInstanceOf(ConcreteEmployeeFactory::class, $this->concreteEmployeeFactory);
    }

    public function testIsConcreteEmployeeFactoryExtendedOfEmployeeFactory()
    {
        $this->assertInstanceOf(EmployeeFactory::class, $this->concreteEmployeeFactory);
    }

    public function testCanMakeTemporaryEployeeWithConcreteEmployeeFactory()
    {
        $temporaryEmployee = $this->concreteEmployeeFactory->factoryMethod(EmployeeFactory::TEMPORARY);

        $this->assertInstanceOf(TemporaryEmployee::class, $temporaryEmployee);
        $this->assertEquals('This is Temporary employee type object', $temporaryEmployee->details());
    }

    public function testCanMakePermanentEployeeWithConcreteEmployeeFactory()
    {
        $permanentEmployee = $this->concreteEmployeeFactory->factoryMethod(EmployeeFactory::PERMANENT);

        $this->assertInstanceOf(PermanentEmployee::class, $permanentEmployee);
        $this->assertEquals('This is Permanent employee type object', $permanentEmployee->details());
    }

    public function testReturnInvalidException()
    {
        try {
            $this->concreteEmployeeFactory->factoryMethod('PartTime');
        } catch (\InvalidArgumentException $e) {
            $this->assertInstanceOf(\InvalidArgumentException::class, $e);
            $this->assertEquals('PartTime is not supported :(', $e->getMessage());
        }
    }
}
