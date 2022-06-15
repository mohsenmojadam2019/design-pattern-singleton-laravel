<?php

namespace App\Http\Controllers\ServiceContainerSingleton;


use App\Http\Controllers\ServiceContainerSingleton\Order\OrderDetails;

class PayOrderController
{
    public function store(OrderDetails $orderDetails, MellatPaymentGateway $gateway)
    {
        $orderDetails->discount();
        dd($gateway->pay(1000));
    }

}
