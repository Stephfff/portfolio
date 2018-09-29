<section class="header <?php if ($_GET['page'] == '' || $_GET['page'] == 'home') { echo 'homepage-header'; } ?> w-100 black-bg">

    <?php if ($_GET['page'] == '' || $_GET['page'] == 'home') {

        echo '

          <div class="homepage-video-module mx-0">
              <div class="video-container">
                  <div class="title-container">
                      <div class="header-text col">
                            <img src="img/homepage_header.png" alt="Passion Lives Here" class="d-block mx-auto mw-100 px-5">
                      </div>
                  </div>
                  <!-- <div class="filter"></div> -->
                  <div class="poster">
                      <img src="img/homepage_bg.png" alt="" />
                  </div>
                  <div id="homepageVideo" style="z-index: 1; position: absolute; top: 0; width: 100%; height: 100%; overflow: hidden;"></div>
                  <script src="https://cdnapisec.kaltura.com/p/420261/sp/42026100/embedIframeJs/uiconf_id/30915021/partner_id/420261"></script>
              </div>
          </div>
          ';
      }

      if ($_GET['page'] == 'results') {

        echo '

          <div class="results-page row no-gutters">

            <div class="header-text w-100 h-100 px-5 d-flex align-content-center">
                  <img src="img/results_header_sm.png" alt="We\'re Obsessed with Results" class="my-auto mx-auto mw-100 align-self-center hidden-sm-up">
                  <img src="img/results_header.png" alt="We\'re Obsessed with Results" class="my-auto mx-auto mw-100 align-self-center hidden-xs-down">
            </div>

            <div class="results-images w-100 h-100">

              <div class="results-rock w-100 h-100 hidden-xs-down"></div>

              <img src="img/results_cloud.png" alt="cloud" class="results-cloud w-100 hidden-xs-down" />

              <img src="img/results_bg_sm.png" alt="background" class="w-100 h-100 hidden-sm-up" />
              <img src="img/results_bg.png" alt="background" class="w-100 h-100 d-block hidden-xs-down" />

            </div>

          </div>

        ';

      }

      if ($_GET['page'] == 'data') {

        echo '

          <div class="data-page row no-gutters">

            <div class="header-text w-100 h-100 px-5 d-flex align-content-center">

                  <img src="img/data_header_sm.png" alt="Our Numbers Make the Difference" class="my-auto mx-auto align-self-center mw-100 hidden-sm-up">
                  <img src="img/data_header.png" alt="Our Numbers Make the Difference" class="my-auto mx-auto align-self-center mw-100 hidden-xs-down">

            </div>

            <img src="img/data_bg_sm.png" alt="background" class="w-100 h-100 d-block hidden-sm-up" />
            <img src="img/data_bg.png" alt="background" class="w-100 h-100 d-block hidden-xs-down" />

          </div>

        ';

      }

      if ($_GET['page'] == 'service') {

        echo '

          <div class="service-page hero-animation row no-gutters">

            <div class="header-text w-100 h-100 px-5 d-flex align-content-center">
                  <img src="img/service_header_sm.png" alt="Partnership Drives Us" class="my-auto mx-auto align-self-center mw-100 hidden-sm-up">
                  <img src="img/service_header.png" alt="Partnership Drives Us" class="my-auto mx-auto align-self-center mw-100 hidden-xs-down">
            </div>
            
            <img src="img/service_bg_sm.png" alt="background" class="w-100 h-100 no-resize hidden-sm-up" />';
            
            if ($_COOKIE[ $page . '-animation-loaded'] == 'true') {

              echo '<div id="animation_container" class="hidden-xs-down" style="position: absolute; top: 0; left: 0; z-index: 3;"><canvas id="animation_canvas" style="position: absolute; display: block;"></canvas><div id="dom_overlay_container" style="pointer-events:none; overflow:hidden; position: absolute; left: 0px; top: 0px; display: block;"></div></div>
                    <img src="img/service_bg.png" alt="background" style="opacity: 0;" class="w-100 h-100 no-resize hidden-xs-down" />';

            } else {

              echo '<img src="img/service_bg.png" alt="background" class="w-100 h-100 no-resize hidden-xs-down" />';

            };

            echo '</div>
            ';

      }
      
      if ($_GET['page'] == 'capabilities') {

        echo '

          <div class="capabilities-page row no-gutters">

            <div class="header-text w-100 h-100 px-5 d-flex align-content-center">
                  <img src="img/capabilities_header_sm.png" alt="Crafting the Perfect Moment" class="my-auto mx-auto align-self-center mw-100 hidden-sm-up">
                  <img src="img/capabilities_header.png" alt="Crafting the Perfect Moment" class="my-auto mx-auto align-self-center mw-100 hidden-xs-down">
            </div>
            
            <img src="img/capabilities_bg_sm.png" alt="background" class="w-100 h-100 hidden-sm-up" />
            <img src="img/capabilities_bg.png" alt="background" style="z-index: 3;" class="hero-image w-100 h-100 hidden-xs-down" />

            <div id="capabilitiesVideo" class="hidden-xs-down" style="z-index: 1; position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></div>
            <script src="https://cdnapisec.kaltura.com/p/420261/sp/42026100/embedIframeJs/uiconf_id/30915021/partner_id/420261?autoembed=true&entry_id=1_cbrqjld2&playerId=capabilitiesVideo&cache_st=1499965041&flashvars[streamerType]=auto&flashvars[autoPlay]=true&flashvars[largePlayBtn.plugin]=false&flashvars[loadingSpinner.plugin]=false&flashvars[topBarContainer]=false&flashvars[controlBarContainer.plugin]=false&flashvars[autoRewind]=false"></script>

          </div>

        ';

      }

      if ($_GET['page'] == 'contact') {

        echo '

          <div class="contact-page hero-animation row no-gutters">

            <div class="header-text w-100 h-100 px-5 d-flex align-content-center">
                  <img src="img/contact_header_sm.png" alt="Let\'s Get Started" class="my-auto mx-auto align-self-center mw-100 hidden-sm-up">
                  <img src="img/contact_header.png" alt="Let\'s Get Started" class="my-auto mx-auto align-self-center mw-100 hidden-xs-down">
            </div>

            <img src="img/contact_bg_sm.png" alt="background" class="w-100 h-100 hidden-sm-up" />';
            
            if ($_COOKIE[ $page . '-animation-loaded'] == 'true') {

              echo '<div id="animation_container" class="hidden-xs-down" style="position: absolute; top: 0; left: 0; z-index: 3;"><canvas id="animation_canvas" style="position: absolute; display: block;"></canvas><div id="dom_overlay_container" style="pointer-events:none; overflow:hidden; position: absolute; left: 0px; top: 0px; display: block;"></div></div>
                    <img src="img/contact_bg.png" alt="background" style="opacity: 0;" class="w-100 h-100" />';

            } else {

              echo '<img src="img/contact_bg.png" alt="background" class="w-100 h-100 hidden-xs-down" />';

            };

            echo '</div>

        ';

      }

    ?>

</section>