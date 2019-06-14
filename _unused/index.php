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

    <!-- <div class="loader-wrapper loader-light">
      <div class="loader"></div>
    </div> -->

    <?php include($prefix."static/navbar.php"); ?>

    <!--Cover Image - Eatlah-->
    <section class="cover cover-home">
      <div class="container">
        <div class="content">
          <img src="<?php echo $prefix;?>assets/img/common/eatlah-box-cut.jpg" class="eatlah-box img-fluid anim-2" alt="EATLAH">
        </div>
      </div>
    </section>

    <section class="section-red-bar">
      <div class="container">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
      </div>
    </section>

    <!--Card - General-->
    <section class="section-main section-home-locations">
      <div class="container">
        <div class="heading heading-w-link clearfix">
          <h2 class="heading-title">Locations</h2>
        </div>
        <div class="content">
          <div class="row">
            <div class="col-xs-6 col-md-3">
              <a class="card" href="<?php echo $prefix;?>">
                <img class="img-fluid img-card-top" src="<?php echo $prefix;?>assets/img/home/promo-1.jpg" alt="Promo">
                <h3>Title</h3>
                <p>Text</p>
              </a>
            </div>
            <div class="col-xs-6 col-md-3">
              <a class="card" href="<?php echo $prefix;?>">
                <img class="img-fluid img-card-top" src="<?php echo $prefix;?>assets/img/home/promo-2.jpg" alt="Promo">
                <h3>Title</h3>
                <p>Text</p>
              </a>
            </div>
            <div class="col-xs-6 col-md-3">
              <a class="card" href="<?php echo $prefix;?>">
                <img class="img-fluid img-card-top" src="<?php echo $prefix;?>assets/img/home/promo-3.jpg" alt="Promo">
                <h3>Title</h3>
                <p>Text</p>
              </a>
            </div>
            <div class="col-xs-6 col-md-3">
              <a class="card" href="<?php echo $prefix;?>">
                <img class="img-fluid img-card-top" src="<?php echo $prefix;?>assets/img/home/promo-4.jpg" alt="Promo">
                <h3>Title</h3>
                <p>Text</p>
              </a>
            </div>
          </div>
        </div>
        <a href="https://www.instagram.com/mamain.id" target="_blank" class="btn btn-primary">See more</a>
      </div>
    </section>

    <!--Instagram Gallery-->
    <section class="section-main section-instagram-gallery">
      <div class="container">
        <div class="heading">
          <h2 class="heading-title">Instagram Gallery</h2>
        </div>

        <div class="row">
          <div class="col-xs-6 col-md-3">
            <a class="card" href="<?php echo $prefix;?>">
              <img class="img-fluid img-card-top" src="<?php echo $prefix;?>assets/img/home/promo-1.jpg" alt="Promo">
            </a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a class="card" href="<?php echo $prefix;?>">
              <img class="img-fluid img-card-top" src="<?php echo $prefix;?>assets/img/home/promo-2.jpg" alt="Promo">
            </a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a class="card" href="<?php echo $prefix;?>">
              <img class="img-fluid img-card-top" src="<?php echo $prefix;?>assets/img/home/promo-3.jpg" alt="Promo">
            </a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a class="card" href="<?php echo $prefix;?>">
              <img class="img-fluid img-card-top" src="<?php echo $prefix;?>assets/img/home/promo-4.jpg" alt="Promo">
            </a>
          </div>
        </div>
        <a href="https://www.instagram.com/mamain.id" target="_blank" class="btn btn-primary vp-fadein">Follow @Mamain.id</a>
      
      </div><!-- .container -->
    </section><!-- .section-instagram-gallery -->

    <!--Contact Form-->
    <section class="section-main">
      <div class="container container-sm">
        <div class="heading heading-w-link clearfix">
          <h2 class="heading-title">Contact</h2>
        </div>
        <div class="content box">
          <form>
            <div class="form-group">
              <label class="form-control-label">Name</label>
              <input type="text" class="form-control" placeholder="Enter name">
            </div>
            <div class="form-group">
              <label class="form-control-label">Email</label>
              <input type="text" class="form-control" placeholder="Enter email address">
            </div>
            <div class="form-group">
              <label class="form-control-label">Phone Number</label>
              <input type="text" class="form-control" placeholder="Enter phone number">
            </div>
            <div class="form-group">
              <label class="form-control-label">Subject</label>
              <select class="form-control custom-select">
                <option selected>Select subject</option>
                <option value="1">Subject 1</option>
                <option value="2">Subject 2</option>
                <option value="3">Subject 3</option>
              </select>
            </div>
            <div class="form-group">
              <label class="form-control-label">Message</label>
              <textarea rows="5" class="form-control" placeholder="Enter message"></textarea>
            </div>
            <div class="btn-placeholder clearfix">
              <a href="" class="btn btn-primary float-right">Send Message</a>
            </div>
          </form>
        </div>
      </div>
    </section>



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
