<?php

namespace App\Http\Controllers\ServiceContainerSingleton\Order;

use App\Http\Controllers\ServiceContainerSingleton\MellatPaymentGateway;

class OrderDetails
{
    protected $gateway;

    public function __construct(MellatPaymentGateway $gateway)
    {
        $this->gateway = $gateway;
    }
    public function discount()
    {
      $this->gateway->setDiscount( 500);

    }

}
