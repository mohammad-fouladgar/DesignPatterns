<?php

namespace Tests\DesignPatterns\Creational\Builder;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Creational\Builder\Laptop;
use DesignPatterns\Creational\Builder\GamingLaptopBuilder;
use DesignPatterns\Creational\Builder\Foundation\ILaptopBuilder;
use DesignPatterns\Creational\Builder\LaptopManufacturerDirector;
use DesignPatterns\Creational\Builder\NormalLaptopBuilder;

class BuilderTest extends TestCase
{
    protected function setUp()
    {
        $this->laptop = new Laptop();
        $this->director = new LaptopManufacturerDirector();
    }

    public function testCanMakeLaptopProduct()
    {
        $this->assertInstanceOf(Laptop::class, new Laptop());
    }

    public function testCanSetLaptopProperties()
    {
        $this->laptop->modelNumber = '10sku';

        $this->assertEquals($this->laptop->modelNumber, '10sku');
    }

    public function testCanMakeGamingLaptopBuilder()
    {
        $this->assertInstanceOf(GamingLaptopBuilder::class, new GamingLaptopBuilder($this->laptop));
    }

    public function testIsGamingLaptopImplementedOfILaptopBuilder()
    {
        $this->assertInstanceOf(ILaptopBuilder::class, new GamingLaptopBuilder($this->laptop));
    }

    public function testCanMakeLaptopManufacturerDirector()
    {
        $this->assertInstanceOf(LaptopManufacturerDirector::class, new LaptopManufacturerDirector());
    }

    public function testCanBuildGamingLaptop()
    {
        $gamingLaptopBuilder = new GamingLaptopBuilder($this->laptop);

        // echo $this->director->buildLaptop($gamingLaptopBuilder);

        $this->assertInstanceOf(Laptop::class, $this->director->buildLaptop($gamingLaptopBuilder));
    }

    public function testCanBuildNormalLaptop()
    {
        $normalLaptopBuilder = new NormalLaptopBuilder($this->laptop);

        // echo $this->director->buildLaptop($normalLaptopBuilder);

        $this->assertInstanceOf(Laptop::class, $this->director->buildLaptop($normalLaptopBuilder));
    }
}
