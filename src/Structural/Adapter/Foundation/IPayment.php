<?php

namespace DesignPatterns\Structural\Adapter\Foundation;

// 'Builder' interface

/**
 * This is a simple interface to define a payment method.
 */
interface IPayment
{
    public function sendPayment($amount);
}
