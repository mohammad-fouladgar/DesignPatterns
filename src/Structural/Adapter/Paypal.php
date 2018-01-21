<?php

namespace DesignPatterns\Structural\Adapter;

use DesignPatterns\Structural\Adapter\Foundation\IPayment;

// 'Adaptee' class
class Paypal implements IPayment
{
    public function sendPayment($amount)
    {
        return 'Paying via Paypal: '.$amount;
    }
}
