<?php wp_footer(); ?>
<footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2><span><?php echo strtolower(substr(get_bloginfo( 'name' ), 0, 1)); ?></span><?php echo strtoupper(substr(get_bloginfo( 'name' ), 1)); ?></h2>
                </div>

                <p><?php bloginfo('description'); ?></p>
                <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-google"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-pinterest"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>YBFBD.org</strong>. All Rights Reserved
              </p>
            </div>
            <div class="credits">
              Developed by YBF Team
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="<?php echo(get_template_directory_uri()); ?>/lib/jquery/jquery.min.js"></script>
  <script src="<?php echo(get_template_directory_uri()); ?>/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo(get_template_directory_uri()); ?>/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?php echo(get_template_directory_uri()); ?>/lib/venobox/venobox.min.js"></script>
  <script src="<?php echo(get_template_directory_uri()); ?>/lib/knob/jquery.knob.js"></script>
  <script src="<?php echo(get_template_directory_uri()); ?>/lib/wow/wow.min.js"></script>
  <script src="<?php echo(get_template_directory_uri()); ?>/lib/parallax/parallax.js"></script>
  <script src="<?php echo(get_template_directory_uri()); ?>/lib/easing/easing.min.js"></script>
  <script src="<?php echo(get_template_directory_uri()); ?>/lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="<?php echo(get_template_directory_uri()); ?>/js/owl.carousel.min.js"></script>
  <script src="<?php echo(get_template_directory_uri()); ?>/lib/appear/jquery.appear.js"></script>
  <script src="<?php echo(get_template_directory_uri()); ?>/lib/isotope/isotope.pkgd.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="<?php echo(get_template_directory_uri()); ?>/contactform/contactform.js"></script>

  <script src="<?php echo(get_template_directory_uri()); ?>/js/main.js"></script>
  <script>
    var owl = $('.owl-carousel');
owl.owlCarousel({
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:2000,
    autoplayHoverPause:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
});
  </script>
</body>

</html>
