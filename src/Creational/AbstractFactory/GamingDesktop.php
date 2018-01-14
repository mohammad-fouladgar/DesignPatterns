<?php

namespace DesignPatterns\Creational\AbstractFactory;

use DesignPatterns\Creational\AbstractFactory\Foundation\IDesktop;

// ProductB1
class GamingDesktop implements IDesktop
{
    public function getName(): string
    {
        return 'Gaming Desktop';
    }
}
