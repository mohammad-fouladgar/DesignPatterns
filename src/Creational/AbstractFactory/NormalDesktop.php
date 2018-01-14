<?php

namespace DesignPatterns\Creational\AbstractFactory;

use DesignPatterns\Creational\AbstractFactory\Foundation\IDesktop;

// ProductB2
class NormalDesktop implements IDesktop
{
    public function getName(): string
    {
        return 'Normal Desktop';
    }
}
