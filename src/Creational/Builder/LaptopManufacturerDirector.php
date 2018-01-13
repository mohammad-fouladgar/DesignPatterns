<?php

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Foundation\ILaptopBuilder;

// 'Director' class

/**
 * The director class controls the algorithm that generates the final product object.
 */
class LaptopManufacturerDirector
{
    public function buildLaptop(ILaptopBuilder $laptopBuilder): Laptop
    {
        $laptopBuilder->addModelNumber();
        $laptopBuilder->addDisplay();
        $laptopBuilder->addRAM();
        $laptopBuilder->addGraphicCard();
        $laptopBuilder->addTouchScreen();

        return $laptopBuilder->getLaptop();
    }
}
