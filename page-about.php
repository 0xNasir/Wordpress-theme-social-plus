<?php
// Template Name: About page template
get_header();
get_template_part( 'template-parts/title', 'area');?>
<div class="blog-page area-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-sm-12 col-xs-12">
		<?php if (have_posts()): ?>
		<?php while (have_posts()):the_post(); ?>
		
				<!-- single-blog start -->
				<article class="blog-post-wrapper">
					<div class="post-thumbnail">
						<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
					</div>
					<div class="post-information">
						<div class="entry-content">
							<?php the_content(); ?>
						</div>
					</div>
				</article>
				<div class="clear"></div>
		<?php
		endwhile;
		endif; ?>
		</div>
		<div class="col-md-4">
			<?php dynamic_sidebar( 'right-sidebar' ); ?>
		</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>