<?php

namespace DesignPatterns\Structural\Adapter;

use DesignPatterns\Structural\Adapter\Foundation\IPaymentAdapter;

// 'Adapter' class
class WebMoneyAdapter implements IPaymentAdapter
{
    private $webMoney;

    public function __construct(WebMoney $webMoney)
    {
        $this->webMoney = $webMoney;
    }

    public function pay($amount)
    {
        return $this->webMoney->sendPayment($amount);
    }
}
