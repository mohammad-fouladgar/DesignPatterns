<?php

namespace DesignPatterns\Creational\AbstractFactory\Foundation;

// AbstractFactory interface
interface IComputerFactory
{
    public function getLaptop(string $laptopType);

    public function getDesktop(string $desktopType);
}
