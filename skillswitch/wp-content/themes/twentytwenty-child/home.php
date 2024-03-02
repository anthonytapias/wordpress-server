<?php 
/**
 * Template Name: Blog Template
 * Template Post Type: post, page
 *
* @package WordPress
 * @subpackage Twenty Twenty 1.0
 * @since 1.0
 */
get_header(); ?>

<div class="blogb head_box">
	<div class="container">
		<div class="head_box">
			<h2>Skill Switch <strong>Coding Bootcamp</strong> Blog</h2>
			<p>The latest posts related to Software Engineering Online Coding Bootcamp.</p>
		</div>
		<div class="blog-main">
			<div class="blog-left">
			<?php while (have_posts()) : the_post(); ?>				
				<div class="blog_item">			
					<h4 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					<div class="blogtext"><?php the_excerpt(); ?></div>
					<div class="blogbtn"><a href="<?php the_permalink(); ?>" class="btn">Read More</a></div>
				</div>
				<?php endwhile;?>
				<?php the_posts_pagination(); ?>				
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