<?php

namespace DesignPatterns\Structural\Adapter\Foundation;

// 'ITarget' interface
interface IPaymentAdapter
{
    public function pay($amount);
}
