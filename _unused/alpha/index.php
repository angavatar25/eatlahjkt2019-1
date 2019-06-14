<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <?php $prefix="";?>
    <?php include($prefix."static/head.php"); ?>
  </head>
  <body>
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
    <![endif]-->

    <div class="loader-wrapper loader-light">
      <div class="loader"></div>
    </div>

    <div class="wrapper">

      <div class="container">

      <?php //include($prefix."static/navbar.php"); ?>

        <a href="<?php echo $prefix;?>index.php" class="navbar-brand anim-1">
          <img src="<?php echo $prefix;?>assets/img/brand/logo_eatlah-white.png" class="img-fluid" alt="Logo">
        </a>

        <a href="http://www.instagram.com/eatlahjkt" target="_blank" class="eatlah-insta anim-3">
          <i class="fa fa-instagram"></i>
        </a>

        <img src="<?php echo $prefix;?>assets/img/common/eatlah-box.jpg" class="eatlah-box img-fluid anim-2" alt="EATLAH">

      </div>

      <!-- <section class="cover">
        <div class="container">
          <div class="content">
            <h1 class="vp-fadeinleft">Hello, world!</h1>
            <p>This is vertically aligned hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
          </div>
        </div>
      </section>

      <section class="section-main">
        <div class="container">
          <a href="" class="btn btn-primary">Sample Button</a>
        </div>
      </section> -->

    </div><!--.wrapper-->

    <?php //include($prefix."static/footer.php"); ?>
    <?php include($prefix."static/script.php"); ?>

    <script>
      // Navbar active state
      //$('#navHome').addClass('active');

      // Animation on load
      $(window).on("load", function() {
        $(".loader").fadeOut();
        $(".loader-wrapper").delay(500).fadeOut("slow");
        $(".anim-1").addClass("animated fadeInDown delayp10");
        $(".anim-2").addClass("animated fadeInUp delayp10");
        $(".anim-3").addClass("animated fadeInRight delayp18");
      });
    </script>

  </body>
</html>
