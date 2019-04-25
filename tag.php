<?php
get_header(); 
get_template_part( 'template-parts/title', 'area'); ?>
<div class="blog-page area-padding">
	<div class="container">
		<div class="row">
			<!-- Start single blog -->
			<div class="col-md-8 col-sm-8 col-xs-12">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
		<?php  
         if (have_posts() ) :
          while (have_posts() ) :the_post(); ?>
						<div class="single-blog">
							<?php if (has_post_thumbnail()): ?>
								<div class="single-blog-img">
									<a href="<?php the_permalink(); ?>">
										<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
									</a>
								</div>
							<?php endif ?>
							<div class="blog-meta">
								<span class="comments-type">
									<i class="fa fa-comment-o"></i>
									<a href="#"><?php comments_number(); ?></a>
								</span>
								<span class="date-type">
									<i class="fa fa-calendar"></i><?php the_date(); ?> / <?php the_time(); ?>
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
					<?php endwhile;
					endif; ?>
					</div>
					<!-- End single blog -->
					
					<!-- End single blog -->
					<div class="blog-pagination">
						<ul class="pagination">
							<li><a href="#">&lt;</a></li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">&gt;</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-12 col-xs-12">
				<?php dynamic_sidebar( 'right-sidebar' ); ?>
			</div>
		</div>
	</div>
</div>
<!-- End Blog Area -->
<?php get_footer(); ?>