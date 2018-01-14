<?php

namespace DesignPatterns\Creational\AbstractFactory;

use DesignPatterns\Creational\AbstractFactory\Foundation\IComputerFactory;

// Client class

class ComputerClient
{
    private $laptop;
    private $desktop;

    public function __construct(IComputerFactory $computerFactory, string $computerType)
    {
        $this->laptop = $computerFactory->getLaptop($computerType);
        $this->desktop = $computerFactory->getDesktop($computerType);
    }

    public function getLaptop()
    {
        return $this->laptop;
    }

    public function getDesktop()
    {
        return $this->desktop;
    }
}
