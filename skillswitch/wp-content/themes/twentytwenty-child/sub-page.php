<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Template for displaying content without left or right sidebar columns
 * Template Name: Sub Page
 *
 * @file           sub-page.php
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty Twenty 1.0
 * @since 1.0
 */
  
get_header(); ?>

<div class="container">
	<div id="content" class="subpcon" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'celestial-lite' ), 'after' => '</div>' ) ); ?>
			
		<?php endwhile; // end of the loop. ?>

	</div><!-- #content -->	
</div>
<?php get_footer(); ?>