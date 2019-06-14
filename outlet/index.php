<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <?php $prefix="../";?>
    <?php include($prefix."include/head.php"); ?>
    <?php include($prefix."include/tracking-script/head.php"); ?>
  </head>
  <body>
    <?php include($prefix."include/tracking-script/body.php"); ?>

    <div class="loader-wrapper loader-light">
      <div class="loader"></div>
    </div> 

    <?php include($prefix."include/navbar-page.php"); ?>

    <section class="py-main section-cover-top content-center" style="background: linear-gradient(rgba(0,0,0, .5), rgba(0,0,0, .5)) , url(<?php echo $prefix;?>assets/img/common/bg_outlet.jpg) no-repeat center; background-size: cover;">
      <div class="container">
        <div class="heading text-center vp-fadeinup delayp1">
          <h2>our location</h2>
          <p>Excepteur sint occaecat cupidatat non proident</p>
        </div>
      </div>
    </section>

    <section class="py-main section-location">
      <div class="container">

        <div class="content">
          <div class="row">
            <div class="col-6 col-md-4 vp-fadeinup delayp1">
              <a href="<?php echo $prefix;?>outlet/meggxico">
                <div class="location-box">
                  <div class="location-img">
                    <img src="<?php echo $prefix;?>assets/img/outlet/outlet_1.jpg" class="img-fluid" alt="Location">
                  </div>
                  <div class="location-info">
                    <h4>Meggxico</h4>
                    <p>Plaza Indonesia</p>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-6 col-md-4 vp-fadeinup delayp2">
              <a href="<?php echo $prefix;?>outlet/newfork">
                <div class="location-box">
                  <div class="location-img">
                    <img src="<?php echo $prefix;?>assets/img/outlet/outlet_2.jpg" class="img-fluid" alt="Location">
                  </div>
                  <div class="location-info">
                    <h4>New Fork</h4>
                    <p>PIK</p>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-6 col-md-4 vp-fadeinup delayp3">
              <a href="<?php echo $prefix;?>outlet/sandieggo">
                <div class="location-box">
                  <div class="location-img">
                    <img src="<?php echo $prefix;?>assets/img/outlet/outlet_3.jpg" class="img-fluid" alt="Location">
                  </div>
                  <div class="location-info">
                    <h4>San Dieggo</h4>
                    <p>Sunter</p>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-6 col-md-4 vp-fadeinup delayp1">
              <a href="<?php echo $prefix;?>outlet/tokyolk">
                <div class="location-box">
                  <div class="location-img">
                    <img src="<?php echo $prefix;?>assets/img/outlet/outlet_4.jpg" class="img-fluid" alt="Location">
                  </div>
                  <div class="location-info">
                    <h4>Tokyolk</h4>
                    <p>Cipete</p>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-6 col-md-4 vp-fadeinup delayp2">
              <a href="<?php echo $prefix;?>outlet/sanfranchicko">
                <div class="location-box">
                  <div class="location-img">
                    <img src="<?php echo $prefix;?>assets/img/outlet/outlet_5.jpg" class="img-fluid" alt="Location">
                  </div>
                  <div class="location-info">
                    <h4>San Franchicko</h4>
                    <p>Bintaro</p>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-6 col-md-4 vp-fadeinup delayp3">
              <a href="<?php echo $prefix;?>outlet/meggxico">
                <div class="location-box">
                  <div class="location-img">
                    <img src="<?php echo $prefix;?>assets/img/outlet/outlet_6.jpg" class="img-fluid" alt="Location">
                  </div>
                  <div class="location-info">
                    <h4>Meggxico</h4>
                    <p>Plaza Indonesia</p>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php include($prefix."include/footer.php"); ?>
    <?php include($prefix."include/script.php"); ?>

    <script>
      // Navbar active state
      // $('#navHome').addClass('active');

      // Animation on load
      document.addEventListener("DOMContentLoaded", function(event) {
        $(".loader").fadeOut('slow');
        $(".loader-wrapper").fadeOut("slow");
      //  $(".anim-1").addClass("animated fadeInLeft delayp10");
       // $(".anim-2").addClass("animated fadeInUp delayp12");
        //$(".anim-3").addClass("animated fadeInUp delayp14");  
      });


    </script>

  </body>
</html>
