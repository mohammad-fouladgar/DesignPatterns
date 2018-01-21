<?php

namespace Tests\DesignPatterns\Structural\Adapter;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Structural\Adapter\Paypal;
use DesignPatterns\Structural\Adapter\WebMoney;
use DesignPatterns\Structural\Adapter\Foundation\IPayment;
use DesignPatterns\Structural\Adapter\Foundation\IPaymentAdapter;
use DesignPatterns\Structural\Adapter\PaypalAdapter;
use DesignPatterns\Structural\Adapter\WebMoneyAdapter;

class AdapterTest extends TestCase
{
    public function testCanMakePaypalObject()
    {
        $this->assertInstanceOf(Paypal::class, new Paypal());
    }

    public function testCanMakeWebMoneyObject()
    {
        $this->assertInstanceOf(WebMoney::class, new WebMoney());
    }

    public function testIsPaypalImplementedOfIPayment()
    {
        $this->assertInstanceOf(IPayment::class, new Paypal());
    }

    public function testIsWebMoneyImplementedOfIPayment()
    {
        $this->assertInstanceOf(IPayment::class, new WebMoney());
    }

    public function testCanMakePaypalAdapterObject()
    {
        $paypal = new Paypal();
        $this->assertInstanceOf(PaypalAdapter::class, new PaypalAdapter($paypal));
    }

    public function testIsPaypalAdapterImplementedOfIPaymentAdapter()
    {
        $paypal = new Paypal();
        $this->assertInstanceOf(IPaymentAdapter::class, new PaypalAdapter($paypal));
    }

    public function testCanPayWithPaypalAdapter()
    {
        $amount = 100;
        $paypal = new Paypal();
        $paymentAdapter = new PaypalAdapter($paypal);

        $this->assertEquals('Paying via Paypal: '.$amount, $paymentAdapter->pay($amount));
    }

    public function testCanMakeWebMoneyAdapterObject()
    {
        $paypal = new WebMoney();
        $this->assertInstanceOf(WebMoneyAdapter::class, new WebMoneyAdapter($paypal));
    }

    public function testIsWebMoneyAdapterImplementedOfIPaymentAdapter()
    {
        $webMoney = new WebMoney();
        $this->assertInstanceOf(IPaymentAdapter::class, new WebMoneyAdapter($webMoney));
    }

    public function testCanPayWithWebMoneyAdapter()
    {
        $amount = 200;
        $webMoney = new WebMoney();
        $webMoneyAdapter = new WebMoneyAdapter($webMoney);

        $this->assertEquals('Paying via WebMoney: '.$amount, $webMoneyAdapter->pay($amount));
    }
}
