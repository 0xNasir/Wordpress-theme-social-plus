<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <!-- Owl carousel -->
  <link rel="stylesheet" href="<?php echo(get_template_directory_uri()); ?>/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo(get_template_directory_uri()); ?>/css/owl.theme.default.min.css">
  <!-- Bootstrap CSS File -->
  <link href="<?php echo(get_template_directory_uri()); ?>/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo(get_template_directory_uri()); ?>/lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="<?php echo(get_template_directory_uri()); ?>/lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="<?php echo(get_template_directory_uri()); ?>/lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="<?php echo(get_template_directory_uri()); ?>/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo(get_template_directory_uri()); ?>/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?php echo(get_template_directory_uri()); ?>/lib/venobox/venobox.css" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="<?php echo(get_template_directory_uri()); ?>/css/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo(get_template_directory_uri()); ?>/css/style.css" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="<?php echo(get_template_directory_uri()); ?>/css/responsive.css" rel="stylesheet">
  <style>
    .owl-carousel div.item{
  background: #42bdc2;
  padding: 30px 0px;
  margin: 10px;
  color: #FFF;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  
}
.owl-carousel div.item h3{
  text-align: center;
  color: #fff;
}
.event-desc{
  padding-left: 50px;
}
  </style>
  <?php wp_head(); ?>
</head>

<body data-spy="scroll" data-target="#navbar-example" <?php body_class(); ?>>

  <div id="preloader"></div>

  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="<?php echo(get_home_url()); ?>">
                  <h1><span><?php echo strtolower(substr(get_bloginfo( 'name' ), 0, 1)); ?></span><?php echo strtoupper(substr(get_bloginfo( 'name' ), 1)); ?></h1>
								</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <?php wp_nav_menu( array(
                  'theme_location'  => 'primary',
                  'menu'            => '',
                  'container'       => 'div',
                  'container_class' => 'collapse navbar-collapse main-menu bs-example-navbar-collapse-1',
                  'container_id'    => 'navbar-example',
                  'menu_class'      => 'menu',
                  'menu_id'         => '',
                  'echo'            => true,
                  'fallback_cb'     => 'wp_page_menu',
                  'before'          => '',
                  'after'           => '',
                  'link_before'     => '',
                  'link_after'      => '',
                  'items_wrap'      => '<ul id = "%1$s" class = "%2$s nav navbar-nav navbar-right">%3$s</ul>',
                  'depth'           => 0,
                  'walker'          => '',
                ) ); ?>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->

  
