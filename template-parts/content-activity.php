<?php $options = get_option( 'cs_frameworks' );
if ($options['show_activity']): ?>
  <!-- Start Service area -->
  <div id="services" class="services-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline services-head text-center">
            <h2><?php if ($options['activity_title']):
            echo $options['activity_title'];
            else:
            echo "Our Services"; endif; ?></h2>
          </div>
        </div>
      </div>
      <div class="row text-center">
        <div class="services-contents">
          <?php 
        $args = array( 'post_type' => 'activity');
        $the_query = new WP_Query( $args ); 
         if ( $the_query->have_posts() ) :
          while ( $the_query->have_posts() ) :
           $the_query->the_post(); ?>
          <!-- Start Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                      <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                    </a>
                  <h4><?php the_title(); ?></h4>
                  <?php the_content(); ?>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
        <?php endwhile;
        endif; ?>
        </div>
      </div>
    </div>
  </div>
  <!-- End Service area -->
<?php endif ?>