<?php get_header(); 

if (is_home()):
  get_template_part( 'template-parts/slider' ); 
else:
  get_template_part( 'template-parts/title', 'area');
endif;
  get_template_part( 'template-parts/content', 'about' ); 
  get_template_part( 'template-parts/content', 'activity' );
  get_template_part( 'template-parts/content', 'activity_summery' );
  get_template_part( 'template-parts/content', 'event' );
  get_template_part( 'template-parts/content', 'welcome' );
  get_template_part( 'template-parts/content', 'image' );
?>
  <!-- Start Blog Area -->
  <div id="blog" class="blog-area">
    <div class="blog-inner area-padding">
      <div class="blog-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Latest News</h2>
            </div>
          </div>
        </div>
        <?php if (have_posts()): ?>
        <div class="row">
          <!-- Start Blog -->
          <?php while (have_posts()):the_post();?>
            <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-blog">
              <div class="single-blog-img">
                <a href="<?php the_permalink(); ?>">
                    <img src="<?php echo(get_the_post_thumbnail_url()); ?>" alt="">
                  </a>
              </div>
              <div class="blog-meta">
                <span class="comments-type">
                    <i class="fa fa-comment-o"></i>
                    <a href="#">13 comments</a>
                  </span>
                <span class="date-type">
                    <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
                  </span>
              </div>
              <div class="blog-text">
                <h4>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  </h4>
                <p>
                  <?php the_excerpt(); ?>
                </p>
              </div>
              <span>
                  <a href="<?php the_permalink(); ?>" class="ready-btn">Read more</a>
                </span>
            </div>
            <!-- Start single blog -->
          </div>
          <?php endwhile; ?>
          <!-- End Blog-->
          
        </div>
      <?php endif; ?>
      </div>
    </div>
  </div>
  <!-- End Blog -->
<?php get_footer(); ?>