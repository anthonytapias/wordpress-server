<?php 
/**
 * Template Name: Post Template
 * Template Post Type: post, page
 *
* @package WordPress
 * @subpackage Twenty Twenty 1.0
 * @since 1.0
 */
get_header(); ?>

<div class="blog_main blogb">
	<div class="container">
		<h2 class="title"><?php the_title(); ?></h2>
		<div class="blog-main">
			<div class="blog-left spostp">
				<div class="blog_item">
					<div class="blogtext">
						<?php
							if ( have_posts() ) : while ( have_posts() ) : the_post();
								the_content();
							endwhile;endif;
						?>	
					</div>
					<?php
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>
				</div>
			</div>
			<div class="blog-right">
				<div class="vc_column-inner">
					<?php dynamic_sidebar( 'sidebar-52' ); ?>
				</div> 
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>