<?php $options = get_option( 'cs_frameworks' );
if ($options['show_summary']): ?>
  <!-- our-skill-area start -->
  <div class="our-skill-area fix hidden-sm" style='background: rgba(248, 248, 248, 0.8) url("<?php echo($options['summary_bg']); ?>") no-repeat fixed center top / cover'>
    <div class="test-overly"></div>
    <h2 style="color: #fff; opacity: 0.9; text-align: center; margin: 20px 0px;">Summary</h2>
    <div class="skill-bg area-padding-2">
      <div class="container">

        <!-- section-heading end -->
        <div class="row">
          <div class="skill-text">
            <?php 
            global $post;
        $args = array( 'post_type' => 'summary');
        $the_query = new WP_Query( $args ); 
         if ( $the_query->have_posts() ) :
          while ( $the_query->have_posts() ) :
           $the_query->the_post();
           setup_postdata( $post ); ?>
            <div class="col-xs-12 col-sm-3 col-md-3 text-center">
              <div class="single-skill">
                <div class="progress-circular">
                  <h2 style="color: white;"><?php echo get_post_meta($post->ID, 'social_summary_instance_text_value_key', true); ?></h2>
                  <h3 class="progress-h4"><?php the_title(); ?></h3>
                </div>
              </div>
            </div>
        <?php endwhile;
        endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- our-skill-area end -->
  <?php endif; ?>