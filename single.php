<?php
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
						<div class="entry-meta">
							<span class="author-meta"><i class="fa fa-user"></i> <a href="#">admin</a></span>
							<span><i class="fa fa-clock-o"></i><?php the_date(); ?></span>
							<span class="tag-meta">
								<i class="fa fa-folder-o"></i>
								<?php the_category( ', ' ); ?>
							</span>
							<span>
								<i class="fa fa-tags"></i>
								<?php the_tags( '', ', ' ); ?>
							</span>
							<span><i class="fa fa-comments-o"></i> <a href="#"><?php comments_number(); ?></a></span>
						</div>
						<div class="entry-content">
							<?php the_content(); ?>
						</div>
					</div>
				</article>
				<div class="clear"></div>
				<p>You can't post comment right now.</p>
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