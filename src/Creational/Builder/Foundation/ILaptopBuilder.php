<?php

namespace DesignPatterns\Creational\Builder\Foundation;

use DesignPatterns\Creational\Builder\Laptop;

// 'Builder' interface

/**
 * This abstract base class defines all of the steps that must be taken in order to correctly create a product. Each step is generally abstract as the actual functionality of the builder is carried out in the concrete subclasses. The GetProduct method is used to return the final product. The builder class is often replaced with a simple interface.
 */
interface ILaptopBuilder
{
    public function addModelNumber();

    public function addDisplay();

    public function addRAM();

    public function addGraphicCard();

    public function addTouchScreen();

    public function getLaptop(): Laptop;
}
