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
<?php
$category = get_category( get_query_var( 'cat' ) );
$cat_id = $category->cat_ID;
$category_name = get_cat_name($cat_id);
?>
<div class="pagebanner blogb">
	<div class="container">
		<h1>Blog - <small><?php echo $category_name; ?></small></h1>
	</div>
</div>
<div class="container">	
	<div class="blog-main catsm">
		<div class="blog-left">
			<?php while (have_posts('cat='.$cat_id)) : the_post(); ?>
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

<?php get_footer(); ?>