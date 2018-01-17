<?php

namespace Tests\DesignPatterns\Creational\Singleton;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Creational\Singleton\Singleton;

class SingletonTest extends TestCase
{
    public function testCanGetInstanceSingletone()
    {
        $instance = Singleton::getInstance();

        $this->assertInstanceOf(Singleton::class, $instance);
    }

    public function testAreTheInstancesTheSameAndCheckDisplayMessageMethod()
    {
        $instance1 = Singleton::getInstance();
        $instance2 = Singleton::getInstance();

        $this->assertSame($instance1, $instance2, 'There must be two instances the same');
        $this->assertEquals($instance1->displayMessage(), 'This is instance of singleton class');
        $this->assertEquals($instance2->displayMessage(), 'This is instance of singleton class');
    }
}
