<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_test_zvk8LCj8MdTkwDqk4elQSaJ2",
  "publishable_key" => "pk_test_kqCJKyo4yVSJ5XteSlWryJiw"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>