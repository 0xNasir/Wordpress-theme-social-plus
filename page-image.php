<?php 
// Template Name: Image gallery template
get_header(); 
get_template_part( 'template-parts/title', 'area'); ?>
<div class="blog-page area-padding">
	<div class="container">
		<div class="awesome-project-content">
          <?php
          $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
        $args = array( 'posts_per_page' => 12,'post_type' => 'image','paged' => $paged);
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
        <?php require_once(get_template_directory().'/template-parts/content-pagination.php'); ?>
	</div>
</div>
<!-- End Blog Area -->
<?php get_footer(); ?>