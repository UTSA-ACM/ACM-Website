<?php
	require_once('./config.php');
	
	$token  = $_POST['stripeToken'];
	
	$customer = \Stripe\Customer::create(array(
		'email' => 'customer@example.com',
		'source' => $token
	));
	
	$charge = \Stripe\Charge::create(array(
		'customer' => $customer->id,
		'amount' => 1500,
		'currency' => 'usd'
	));
?>
<!DOCTYPE html>
<html>
	<head>
		<?php
			require('common/head-includes.php');
		?>
        <title>Pay Dues | Association for Computing Machinery UTSA</title>
	</head>
	<body>
		<?php
			require('common/menu.php');
		?>
		<div id="content" class="container">
			<div class="row">
				<div class="col-sm-12">
					<!-- content here! -->
					<div class="row partial-section-container">
						<div class="col-sm-12 col-md-8">
							<div class="partial-section">
								Payment Successful
								<br />
								<br />
								Thank you!
								<br />
								<br />
								Please take a moment to enjoy this kitten picture.
							</div>
						</div>
						<div class="col-sm-12 col-md-4" style="overflow:hidden;">
							<div class="partial-section" style="max-height:300px;">
								<img src="images/photos/min/Cute-kittens-12929201-1600-1200.jpg" style="max-width:120%;margin: -80px -30px -30px -30px;" alt="the kitten picture" title="the kitten picture" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
