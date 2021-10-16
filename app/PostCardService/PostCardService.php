<?php

namespace App\PostCardService;

use Illuminate\Support\Facades\Mail;


class PostCardService
{
	
	function __construct($country, $width, $height)
	{
		$this->country = $country;
		$this->width = $width;
		$this->height = $height;
	}

	public function hello($message, $email)
	{
		// Mail::raw($message, function($message) use ($email){
		// 	$message->to($email);
		// });

		dump('Postcard was sent with the ' .$message);
	}
}