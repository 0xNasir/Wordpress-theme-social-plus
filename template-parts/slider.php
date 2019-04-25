<!-- Start Slider Area -->
  <div id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
        <?php 
        $args = array( 'post_type' => 'slider');
        $the_query = new WP_Query( $args ); 
         if ( $the_query->have_posts() ) :
          while ( $the_query->have_posts() ) :
           $the_query->the_post(); ?>
        <img src="<?php echo(get_the_post_thumbnail_url()); ?>" alt="" title="#<?php echo(str_replace(' ', '_', get_the_title())); ?>" />
      <?php endwhile;
      endif; ?>
      </div>
      <?php 
      global $post;
        $args = array( 'post_type' => 'slider');
        $the_query = new WP_Query( $args ); 
        ?>
        <?php if ( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post();
        setup_postdata( $post ); ?>
      <!-- direction 1 -->
      <div id="<?php echo(str_replace(' ', '_', get_the_title())); ?>" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1"><?php the_title(); ?></h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2"><?php the_content(); ?></h1>
                </div>
                <!-- layer 3 -->
                <?php if (get_post_meta($post->ID, 'social_slider_button_text_value_key', true)): ?>
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="<?php echo get_post_meta($post->ID, 'social_slider_button_link_value_key', true); ?>"><?php echo get_post_meta($post->ID, 'social_slider_button_text_value_key', true); ?></a>
                </div>
                <?php endif ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endwhile;
    endif; ?>
    </div>
  </div>
  <!-- End Slider Area -->