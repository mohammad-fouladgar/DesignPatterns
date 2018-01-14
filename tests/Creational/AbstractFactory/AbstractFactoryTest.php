<?php

namespace Tests\DesignPatterns\Creational\AbstractFactory;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Creational\AbstractFactory\NormalLaptop;
use DesignPatterns\Creational\AbstractFactory\GamingLaptop;
use DesignPatterns\Creational\AbstractFactory\Foundation\ILaptop;
use DesignPatterns\Creational\AbstractFactory\NormalDesktop;
use DesignPatterns\Creational\AbstractFactory\GamingDesktop;
use DesignPatterns\Creational\AbstractFactory\Foundation\IDesktop;
use DesignPatterns\Creational\AbstractFactory\DellFactory;
use DesignPatterns\Creational\AbstractFactory\LenovoFactory;
use DesignPatterns\Creational\AbstractFactory\Foundation\IComputerFactory;
use DesignPatterns\Creational\AbstractFactory\ComputerClient;

class AbstractFactoryTest extends TestCase
{
    protected function setUp()
    {
        $this->lenovoFactory = new LenovoFactory();
        $this->dellFactory = new DellFactory();
    }

    public function testCanMakeNormalLaptopObject()
    {
        $this->assertInstanceOf(NormalLaptop::class, new NormalLaptop());
    }

    public function testCanMakeGamingLaptopObject()
    {
        $this->assertInstanceOf(GamingLaptop::class, new GamingLaptop());
    }

    public function testIsNormalAndGamingLaptopImplementedOfILaptop()
    {
        $this->assertInstanceOf(ILaptop::class, new NormalLaptop());
        $this->assertInstanceOf(ILaptop::class, new GamingLaptop());
    }

    public function testCanMakeNormalDesktopObject()
    {
        $this->assertInstanceOf(NormalDesktop::class, new NormalDesktop());
    }

    public function testCanMakeGamingDesktopObject()
    {
        $this->assertInstanceOf(GamingDesktop::class, new GamingDesktop());
    }

    public function testIsNormalAndGamingDesktopImplementedOfIDesktop()
    {
        $this->assertInstanceOf(IDesktop::class, new NormalDesktop());
        $this->assertInstanceOf(IDesktop::class, new GamingDesktop());
    }

    public function testCanMakeLenovoFactoryObject()
    {
        $this->assertInstanceOf(LenovoFactory::class, $this->lenovoFactory);
    }

    public function testCanMakeDellFactoryObject()
    {
        $this->assertInstanceOf(DellFactory::class, $this->dellFactory);
    }

    public function testIsLenovoAndDellFactoryImplementedOfIComputerFactory()
    {
        $this->assertInstanceOf(IComputerFactory::class, $this->lenovoFactory);
        $this->assertInstanceOf(IComputerFactory::class, $this->dellFactory);
    }

    public function testCanMakeComputerClientObject()
    {
        $this->assertInstanceOf(ComputerClient::class, new ComputerClient($this->dellFactory, 'Normal'));
    }

    public function testCanMakeLenovoGamingLaptopAndGetName()
    {
        $lenovoClient = new ComputerClient($this->lenovoFactory, 'Gaming');

        $this->assertInstanceOf(GamingLaptop::class, $lenovoClient->getLaptop());
        $this->assertEquals($lenovoClient->getLaptop()->getName(), 'Gaming Laptop');
    }

    public function testCanMakeLenovoGamingDesktopAndGetName()
    {
        $lenovoClient = new ComputerClient($this->lenovoFactory, 'Gaming');

        $this->assertInstanceOf(GamingDesktop::class, $lenovoClient->getDesktop());
        $this->assertEquals($lenovoClient->getDesktop()->getName(), 'Gaming Desktop');
    }

    public function testCanMakeLenovoNormalLaptopAndGetName()
    {
        $lenovoClient = new ComputerClient($this->lenovoFactory, 'Normal');

        $this->assertInstanceOf(NormalLaptop::class, $lenovoClient->getLaptop());
        $this->assertEquals($lenovoClient->getLaptop()->getName(), 'Normal Laptop');
    }

    public function testCanMakeLenovoNormalDesktopAndGetName()
    {
        $lenovoClient = new ComputerClient($this->lenovoFactory, 'Normal');

        $this->assertInstanceOf(NormalDesktop::class, $lenovoClient->getDesktop());
        $this->assertEquals($lenovoClient->getDesktop()->getName(), 'Normal Desktop');
    }

    public function testCanMakeDellGamingLaptopAndGetName()
    {
        $dellClient = new ComputerClient($this->dellFactory, 'Gaming');

        $this->assertInstanceOf(GamingLaptop::class, $dellClient->getLaptop());
        $this->assertEquals($dellClient->getLaptop()->getName(), 'Gaming Laptop');
    }

    public function testCanMakeDellNormalLaptopAndGetName()
    {
        $dellClient = new ComputerClient($this->dellFactory, 'Normal');

        $this->assertInstanceOf(NormalLaptop::class, $dellClient->getLaptop());
        $this->assertEquals($dellClient->getLaptop()->getName(), 'Normal Laptop');
    }

    public function testCanMakeDellGamingDesktopAndGetName()
    {
        $dellClient = new ComputerClient($this->dellFactory, 'Gaming');

        $this->assertInstanceOf(GamingDesktop::class, $dellClient->getDesktop());
        $this->assertEquals($dellClient->getDesktop()->getName(), 'Gaming Desktop');
    }

    public function testCanMakeDellNormalDesktopAndGetName()
    {
        $dellClient = new ComputerClient($this->dellFactory, 'Normal');

        $this->assertInstanceOf(NormalDesktop::class, $dellClient->getDesktop());
        $this->assertEquals($dellClient->getDesktop()->getName(), 'Normal Desktop');
    }

    public function testReturnInvalidExceptionForAnotherDellFactoryType()
    {
        try {
            $dellClient = new ComputerClient($this->dellFactory, 'Any');
        } catch (\InvalidArgumentException $e) {
            $this->assertInstanceOf(\InvalidArgumentException::class, $e);
            $this->assertEquals('Any can not be created', $e->getMessage());
        }
    }

    public function testReturnInvalidExceptionForAnotherLenovoFactoryType()
    {
        try {
            $lenovoClient = new ComputerClient($this->lenovoFactory, 'etc');
        } catch (\InvalidArgumentException $e) {
            $this->assertInstanceOf(\InvalidArgumentException::class, $e);
            $this->assertEquals('etc can not be created', $e->getMessage());
        }
    }
}
