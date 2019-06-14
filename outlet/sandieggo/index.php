<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <?php $prefix="../../";?>
    <?php include($prefix."include/head.php"); ?>
    <?php include($prefix."include/tracking-script/head.php"); ?>
  </head>
  <body>
    <?php include($prefix."include/tracking-script/body.php"); ?>

    <div class="loader-wrapper loader-light">
      <div class="loader"></div>
    </div> 

    <?php include($prefix."include/navbar-page.php"); ?>

    <div class="cover-carousel">
      <div id="carouselCover" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselCover" data-slide-to="0" class="active"></li>
          <li data-target="#carouselCover" data-slide-to="1"></li>
          <li data-target="#carouselCover" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active" style="background: url(<?php echo $prefix;?>assets/img/common/bg_outlet.jpg) no-repeat center; background-size: cover; height: 400px;">
          </div>
          <div class="carousel-item" style="background: url(<?php echo $prefix;?>assets/img/common/bg_outlet.jpg) no-repeat center; background-size: cover; height: 400px;">
          </div>
          <div class="carousel-item" style="background: url(<?php echo $prefix;?>assets/img/common/bg_outlet.jpg) no-repeat center; background-size: cover; height: 400px;">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselCover" role="button" data-slide="prev">
          <i class="fal fa-angle-left" data-fa-transform="grow-20"></i>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselCover" role="button" data-slide="next">
          <i class="fal fa-angle-right" data-fa-transform="grow-20"></i>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <section class="py-main section-contact contact-outlet">
      <div class="container container-md">
        <div class="box">
          <div class="row">
            <div class="col-md-6 box-white">
              <div class="p-box">
                <div class="subheading vp-fadeinup delayp1">
                  <h2 class="text-dark">Outlet Detail</h2>
                </div>

                <div class="content vp-fadeinup delayp1">
                  <h4>ADDRESS</h4>
                  <p> Jl. Lauser No.03 RT 08/08, Gunung, Kby. Baru, Kota Jakarta Selatan,Daerah Khusus Ibukota Jakarta 12120</p>
                  <a href="#" target="_blank" class="btn btn-w-icon vp-fadeinup delayp2">
                    <span>View on Maps</span>
                    <i class="fas fa-arrow-right"></i>
                  </a>
                  <h4>OPERATIONAL HOURS</h4>
                  <p>Mon - Sun</p>
                  <p>11AM - 10PM</p>

                  <h4>CONTACT</h4>
                  <p><img src="<?php echo $prefix;?>assets/img/common/ic_contact.png" class="img-fluid img-phone">(012) 456-7890</p>
                </div>
                
              </div>
            </div>
            <div class="col-md-6 box-yellow">
              <div class="p-box">
                <div class="subheading vp-fadeinup delayp1">
                  <img src="<?php echo $prefix;?>assets/img/common/ic_chicken_2.png" class="img-fluid img-outlet-contact">
                  <h2>Hungry? Orderlah</h2>
                  <p>Order minimum of 30 packs of any menu and get it delivered to you</p>
                  <a href="#" class="btn btn-secondary btn-block mt-3 mb-3">
                    <i class="fab fa-whatsapp"></i>
                    <span>Order via whatsapp</span>
                  </a>
                  <a href="#" class="btn btn-secondary btn-block mb-3">
                    <i class="fal fa-envelope"></i>
                    <span>Order via email</span>
                  </a>
                </div>
              </div>
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
