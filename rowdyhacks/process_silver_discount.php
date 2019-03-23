<?php
	require_once('./config.php');
	
	$token  = $_POST['stripeToken'];
	$email  = $_POST['stripeEmail'];
	
	$customer = \Stripe\Customer::create(array(
		'email' => $email,
		'source' => $token
	));
	
	$charge = \Stripe\Charge::create(array(
		'customer' => $customer->id,
		'amount' => 103000,
		'description' => 'RowdyHacks Sponsorship',
		'currency' => 'usd'
	));
	require('./common/thanks.php');
?>