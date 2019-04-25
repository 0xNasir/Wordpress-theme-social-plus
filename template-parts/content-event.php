<?php $options = get_option( 'cs_frameworks' );
if ($options['show_event']): ?>
  <div class="faq-area area-padding">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2><?php echo $options['event_title']; ?></h2>
          </div>
          <div class="event-content">
            <div class="owl-carousel">
              <?php $args = array( 'post_type' => 'event');
        $the_query = new WP_Query( $args ); 
         if ( $the_query->have_posts() ) :
          while ( $the_query->have_posts() ) :
           $the_query->the_post(); ?>
              <div class="item">
                <h3><?php the_title(); ?></h3>
                <div class="event-desc">
                  <p><?php the_content( ); ?></p>
                </div>
              </div>
            <?php endwhile;
            endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php endif; ?>