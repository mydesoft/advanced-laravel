<?php
namespace App\Orders;

use App\Billing\PaymentGateway;

/**
 * 
 */
class OrderDetails
{
	
	function __construct(PaymentGateway $paymentGateway)
	{
		$this->paymentGateway = $paymentGateway;
	}


	public function all()
	{
		$this->paymentGateway->setDiscount(500);

		return [

			'name' => 'Coders Tape',
			'address' => 'Coders Tape Street' 
		];
	}
}