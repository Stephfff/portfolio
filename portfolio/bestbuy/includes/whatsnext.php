<?php

	$page = $_GET['page'];
	$leadtext;
	$headline1;
	$button1;
	$headline2;
	$button2;

	if ( $page == 'results' ) {
		$headline1 = 'See the difference of an unbeatable first-party data&nbsp;set.';
		$button1 = 'Data';
		$headline2 = 'Hear success stories in specific industries and media.';
		$button2 = 'Contact';
	}
	
	if ( $page == 'data' ) {
			$headline1 = 'Our approach sets you up for success.';
			$button1 = 'Service';
			$headline2 = 'Hear how our data makes the difference.';
			$button2 = 'Contact';
		}

	if ( $page == 'service' ) {
		$headline1 = 'Get the low-down on our high-tech solutions.';
		$button1 = 'Capabilities';
		$headline2 = 'Your next campaign starts at "Hello."';
		$button2 = 'Contact';
	}
	
	if ( $page == 'capabilities' ) {
			$headline1 = 'See how all kinds of brands succeed here.';
			$button1 = 'Shopper Stories';
			$headline2 = 'We\'re ready to talk when you are.';
			$button2 = 'Contact';
		}

	if ( $page == 'contact' ) {
		$headline1 = 'Learn more about our audience\'s passions.';
		$button1 = 'Shopper Stories';
		$headline2 = 'See how we\'ll work with you.';
		$button2 = 'Service';
	}

?>

<section class="w-100 whats-next black-bg">

	<div class="container">

		<div class="row p-lg-5 mx-auto">

			<div class="col mx-lg-4 mt-5 mb-lg-0 text-center">

				<p class="lead-text blue-text light-text text-uppercase">What's Next?</p>

			</div>

		</div>

		<div class="row justify-content-center white-text text-center">

			<div class="col-lg-5 mb-5">

				<p class="col-9 col-lg-12 px-4 px-lg-0 mx-auto"><?php echo $headline1 ?></p>

				<a href="?page=<?php echo strtolower($button1);?>" class="btn btn-lg btn-outline-secondary rounded-0 light-text text-uppercase white-text mt-3 py-3 w-75">
					<?php echo $button1 ?>
				</a>

			</div>

			<div class="col-lg-5 mb-lg-5">

				<p class="col-9 col-lg-12 mx-auto"><?php echo $headline2 ?></p>

				<a href="?page=<?php echo strtolower($button2);?>" class="btn btn-lg btn-outline-secondary rounded-0 light-text text-uppercase white-text mt-3 py-3 w-75">
					<?php echo $button2 ?>
				</a>

			</div>

		</div>

	</div>

</section>