<nav class="navbar navbar-toggleable-md fixed-top bg-faded">

  <button class="navbar-toggler navbar-toggler-right mt-md-2" type="button" data-toggle="collapse" data-target="#navbarnav" aria-controls="navbarnav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>

  <a class="navbar-brand text-uppercase" href="?page=home" tabindex="1">
    <img src="img/BBY_logo.png" height="43" class="d-inline-block align-middle pr-2 mb-2" alt="Best Buy Logo">
    Media <strong>Network</strong>
  </a>

  <div class="navbar-collapse justify-content-center align-items-center collapse" id="navbarnav">
    <ul class="navbar-nav mb-5 mb-lg-0 text-center text-lg-left text-uppercase">
      <li class="nav-item py-1 py-lg-0">
        <a class="nav-link" href="?page=results" tabindex="2">Results</a>
        <?php if ( $_GET['page'] == 'results' ) { echo '<div></div>'; } ?>
      </li>
      <li class="nav-item py-1 py-lg-0">
        <a class="nav-link" href="?page=data" tabindex="3">Data</a>
        <?php if ( $_GET['page'] == 'data' ) { echo '<div></div>'; } ?>
      </li>
      <li class="nav-item py-1 py-lg-0">
        <a class="nav-link" href="?page=service" tabindex="4">Service</a>
        <?php if ( $_GET['page'] == 'service' ) { echo '<div></div>'; } ?>
      </li>
      <li class="nav-item py-1 py-lg-0">
        <a class="nav-link" href="?page=capabilities" tabindex="5">Capabilities</a>
        <?php if ( $_GET['page'] == 'capabilities' ) { echo '<div></div>'; } ?>
      </li>
      <li class="nav-item py-1 py-lg-0">
        <a class="nav-link" href="?page=contact" tabindex="6">Contact</a>
        <?php if ( $_GET['page'] == 'contact' ) { echo '<div></div>'; } ?>
      </li>

    </ul>
  </div>

</nav>