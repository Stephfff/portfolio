<?php $page = $_GET['page']; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Media Network Kit</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Load the Font before CSS -->
    <script type="text/javascript" async src="js/mtiFontTrackingCode.js"></script>
    <!-- Customize CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Favicon -->
    <link rel="icon" href="favicon.ico" />

    <!-- Animation JS needs to be loaded before body -->
    <script type="text/javascript" src="js/createjs-2015.11.26.min.js"></script>
    <?php if ( $page == 'service' || $page == 'contact') { echo '<script type="text/javascript" src="js/' . $page . '_animation.js"></script>'; }; ?>
    <script type="text/javascript" src="js/animations.js"></script>
  </head>
  <body>

  	<div <?php if ($page != '') { echo 'id="' . $page . '"'; } ?> class="container-fluid">

      <?php
        defined("TEMPLATES_PATH")
            or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . '/includes'));
        require_once(TEMPLATES_PATH . '/nav.php');
        require_once(TEMPLATES_PATH . '/hero.php');
        if ( $page != 'contact') {
          require_once(TEMPLATES_PATH . '/heroblurb.php');
        }
        if ( $page == '' || $page == 'home') {
          require_once(TEMPLATES_PATH . '/homepagemenu.php');
          require_once(TEMPLATES_PATH . '/twoblock.php');
          require_once(TEMPLATES_PATH . '/bottomcontent.php');
        }
        if ( $page == 'results' ) {
          require_once(TEMPLATES_PATH . '/results.php');
        }
        if ( $page == 'data' ) {
          require_once(TEMPLATES_PATH . '/data.php');
        }
        if ( $page == 'service' ) {
          require_once(TEMPLATES_PATH . '/service.php');
        }
        if ( $page == 'capabilities' ) {
          require_once(TEMPLATES_PATH . '/capabilities.php');
        }
        if ( $page == 'contact' ) {
          require_once(TEMPLATES_PATH . '/contact.php');
        }
        if ( $page == 'results' || $page == 'data' || $page == 'service' || $page == 'capabilities' || $page == 'contact') {
          require_once(TEMPLATES_PATH . '/whatsnext.php');
        }
        require_once(TEMPLATES_PATH . '/footer.php');
      ?>

    </div>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script type="text/javascript" src="js/jquery-2.2.4.min.js" crossorigin="anonymous"></script>
    <!-- Slick -->
    <script type="text/javascript" src="js/slick.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <?php if ( $_GET['page'] == 'data' ) { 
      echo '<script type="text/javascript" src="js/Chart.min.js"></script>
            <script type="text/javascript" src="js/chartdata.js"></script>'; } 
    ?>
    <script type="text/javascript" src="js/TweenLite.min.js"></script>
    <script type="text/javascript" src="js/TimelineMax.min.js"></script>
    <script type="text/javascript" src="js/CSSPlugin.min.js"></script>
    <script type="text/javascript" src="js/ScrollMagic.min.js"></script>
    <script type="text/javascript" src="js/animation.gsap.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
  </body>
</html>