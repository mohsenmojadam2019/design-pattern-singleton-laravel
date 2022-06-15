<?php

namespace App\Http\Controllers\ServiceContainerSingleton;

class MellatPaymentGateway
{
    protected $currency;
    protected $discount;
    protected $any;
    public function __construct($currency)//usd
    {
        $this->currency = $currency;
    }
    public function setDiscount(int $amountDiscount)//500
    {
      $this->discount = $amountDiscount;
    }

    public function pay($amount)//1000
    {
        return [

            "amount"=>$amount - $this->discount,//1000-500
            "currency"=>$this->currency,//usd
            "discount"=>$this->discount,//1000
        ];
    }
}
