<?php

namespace App\Http\Controllers;

use App\Billing\PaymentGateway;
use App\Orders\OrderDetails;
use Illuminate\Http\Request;

class PayOrderController extends Controller
{
    public function store(OrderDetails $orderDetails, paymentGateway $paymentGateway)
    {
        // $paymentGateway = new PaymentGateway('NGN');
        $OrderDetail = $orderDetails->all();
        dd($paymentGateway->charge(2500));
    }
}
