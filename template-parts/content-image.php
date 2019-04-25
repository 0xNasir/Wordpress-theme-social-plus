<?php $options = get_option( 'cs_frameworks' );
if ($options['show_image_gallery']): ?>
<div id="portfolio" class="portfolio-area area-padding fix">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2><?php echo $options['image_gallery_title']; ?></h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- Start Portfolio -page -->
        <div class="awesome-project-1 fix">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="awesome-menu ">
              <div class="project-menu">
                  <a href="<?php echo $options['image_gallery_url']; ?>"><?php echo $options['image_gallery_btn']; ?></a>
              </div>
            </div>
          </div>
        </div>
        <div class="awesome-project-content">
          <?php $args = array( 'post_type' => 'image', 'posts_per_page' => 6);
        $the_query = new WP_Query( $args ); 
         if ( $the_query->have_posts() ) :
          while ( $the_query->have_posts() ) :
           $the_query->the_post(); ?>
          <div class="col-md-4 col-sm-4 col-xs-12 design development">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="<?php echo(get_the_post_thumbnail_url()); ?>" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?php echo(get_the_post_thumbnail_url()); ?>">
                      <h4><?php the_title(); ?></h4>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
      <?php endwhile;
      endif; ?>
        </div>
      </div>
    </div>
  </div>
  <?php endif; ?>