<?php

namespace DesignPatterns\Creational\AbstractFactory;

use DesignPatterns\Creational\AbstractFactory\Foundation\IComputerFactory;

// ConcreteFactoryB
class DellFactory implements IComputerFactory
{
    public function getLaptop(string $laptopType)
    {
        switch ($laptopType) {
            case 'Gaming':
                return new GamingLaptop();
                break;
            case 'Normal':
                return new NormalLaptop();
                break;

            default:
                throw new \InvalidArgumentException("{$laptopType} can not be created", 1);
                break;
        }

        return new NormalLaptop();
    }

    public function getDesktop(string $desktopType)
    {
        switch ($desktopType) {
            case 'Gaming':
                return new GamingDesktop();
                break;
            case 'Normal':
                return new NormalDesktop();
                break;

            default:
                throw new \InvalidArgumentException("{$desktopType} can not be created", 1);
                break;
        }
    }
}
