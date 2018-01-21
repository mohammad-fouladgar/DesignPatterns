<?php

namespace DesignPatterns\Structural\Adapter;

use DesignPatterns\Structural\Adapter\Foundation\IPaymentAdapter;

// 'Adapter' class
class PaypalAdapter implements IPaymentAdapter
{
    private $paypal;

    public function __construct(Paypal $paypal)
    {
        $this->paypal = $paypal;
    }

    public function pay($amount)
    {
        return $this->paypal->sendPayment($amount);
    }
}
