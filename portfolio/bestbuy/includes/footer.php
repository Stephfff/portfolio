<?php

  $color;
  $page = $_GET['page'];

  if ( $page == '' || $page == 'home' ) {
    $color = 'light-theme';
  } else {
    $color = 'dark-theme';
  }

?>

<section class="grey-bg footer <?php echo $color ?>">

  <div class="container-fluid mx-auto pt-lg-2">

    <div class="row justify-content-center text-center pt-5 px-lg-4">

      <div class="col col-md-11 py-2 py-md-4">

        <div class="row m-0">

          <div class="col-12">

            <hr class="mb-5 mb-md-0" />

            <div class="row text-center text-lg-left ml-lg-3 no-gutters">

              <div class="col-lg-8 px-lg-0 text-uppercase">

                <ul class="list-inline mt-lg-3 mt-5 hidden-sm-down">

                  <li class="list-inline-item mr-lg-4 ml-lg-0 mx-3"><a href="#">bestbuy.com</a></li>
                  <li class="list-inline-item mr-lg-4 mx-3"><a href="#">Corporate Information</a></li>
                  <li class="list-inline-item mr-lg-4 mx-3"><a href="#">Conditions of Use</a></li>
                  <li class="list-inline-item mr-lg-4 mr-lg-0 mx-3"><a href="#">Privacy</a></li>

                </ul>

                <div class="row hidden-md-up">
                  <div class="col-12 py-4"><a href="#">bestbuy.com</a></div>
                  <div class="col-12 py-4"><a href="#">Corporate Information</a></div>
                  <div class="col-12 py-4"><a href="#">Conditions of Use</a></div>
                  <div class="col-12 py-4"><a href="#">Privacy</a></div>
                </div>

              </div>

              <div class="col-12 col-lg-4 py-4 py-lg-0 px-lg-0 mt-lg-3 text-lg-right">

                <p>&copy; 2017 Best Buy. All rights reserved.</p>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </div>

</section>