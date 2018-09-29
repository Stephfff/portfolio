<section class="header-blurb black-bg">

	<div class="container mx-auto row align-items-center blue-text py-5 no-gutters">

		<?php if ($_GET['page'] == '' || $_GET['page'] == 'home') {

			echo '

			<p class="light-text text-center mx-auto large-hero-text">1.5<span style="font-family: Arial, sans-serif;" class="font-weight-bold">B</span></p>

		    <p class="col-12 pb-4 pb-md-0 px-0 px-md-2 text-center mb-0 mr-auto line-height-2">
		      That\'s how many customers come to us every year to fuel their passions.
		      <br />It\'s an audience unlike any other, and they deliver real results<span class="hidden-lg-up hidden-xs-down"><br /></span> for all kinds of brands.
		      <br />Explore what all this means for you.
		    </p>

		    ';

		}

		if ($_GET['page'] == 'results') {

			echo '<p class="text-center my-lg-4 py-lg-2 px-5 px-md-0 mx-auto">Our focus on concrete, actionable outcomes is what lets us beat every major competitor in our industry. We own our category, and that\'ll make all the difference for your brand.</p>';

		}
		
		if ($_GET['page'] == 'data') {

			echo '<p class="text-center col-lg-8 my-lg-4 px-5 px-md-0 mx-auto">Data is more than audience targeting. It\'s closing the loop between online and in-store customers. <span class="hidden-lg-down"><br /></span>It\'s predicting behaviors. It\'s getting insights and outcomes beyond the bottom line. That\'s what we bring to the table, and it will make all the difference for you.</p>';

		}

		if ($_GET['page'] == 'service') {

			echo '<p class="text-center col-lg-9 my-lg-4 px-5 px-md-0 mx-auto">The Best Buy Media Network team is fueled by the same customer service approach that has made Best Buy #1 in CE. We take pride in our ability to deliver results. We are client-focused, and we believe that how we work with you will make all the difference.</p>';

		}
		
		if ($_GET['page'] == 'capabilities') {

					echo '<p class="text-center col-lg-9 my-lg-4 px-5 px-md-0 mx-auto">From the first online search to the "Gotta touch it" moment in store, we understand our customers in great detail. That lets us find the perfect occasion and channel to introduce you to them.</p>';

				}

	    ?>

	</div>

</section>