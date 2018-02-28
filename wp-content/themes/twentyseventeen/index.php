<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="recommend">
	<div class="notice">
		<?php 
			$query_array = array("category__in" => array(2),"post__in" => get_option("sticky_posts"));
			query_posts($query_array);
			while(have_posts()) : the_post(); 
			$image_attributes = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'full'); // 返回一个数组
			$category_title= single_cat_title('', false );
			$category_id = get_cat_ID($category_title);
			$category_link = get_category_link( $category_id );			
		?>
        <a href="<?php echo $category_link; ?>" title="<?php echo $category_title;?>" class="textlink catlink noticebg"><?php echo $category_title;?></a>
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo $image_attributes[0]; ?>" width="592"></a>
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="textlink noticelink"><?php the_title();?></a>
        
		<?php 
			endwhile;
			wp_reset_query();
		?>	
	</div>
	<div class="st">
		<?php 
			$query_array = array("category__in" => array(5),"post__in" => get_option("sticky_posts"));
			query_posts($query_array);
			while(have_posts()) : the_post(); 
			$image_attributes = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'full'); // 返回一个数组
			$category_title= single_cat_title('', false );
			$category_id = get_cat_ID($category_title);
			$category_link = get_category_link( $category_id );			
		?>
		<a href="<?php echo $category_link; ?>" title="<?php echo $category_title;?>" class="textlink catlink stbg"><?php echo $category_title;?></a>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo $image_attributes[0]; ?>" width="287"></a>
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="textlink stlink"><?php the_title();?></a>
        
		<?php 
			endwhile;
			wp_reset_query();
		?>	
	</div>
	<div class="st">
		<?php 
			$query_array = array("category__in" => array(6),"post__in" => get_option("sticky_posts"));
			query_posts($query_array);
			while(have_posts()) : the_post(); 
			$image_attributes = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'full'); // 返回一个数组
			$category_title= single_cat_title('', false );
			$category_id = get_cat_ID($category_title);
			$category_link = get_category_link( $category_id );			
		?>
		<a href="<?php echo $category_link; ?>" title="<?php echo $category_title;?>" class="textlink catlink stbg1"><?php echo $category_title;?></a>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo $image_attributes[0]; ?>" width="287"></a>
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="textlink stlink"><?php the_title();?></a>
        
		<?php 
			endwhile;
			wp_reset_query();
		?>	
	</div>
	<div class="st margintop">
		<?php 
			$query_array = array("category__in" => array(4),"post__in" => get_option("sticky_posts"));
			query_posts($query_array);
			while(have_posts()) : the_post(); 
			$image_attributes = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'full'); // 返回一个数组
			$category_title= single_cat_title('', false );
			$category_id = get_cat_ID($category_title);
			$category_link = get_category_link( $category_id );			
		?>
		<a href="<?php echo $category_link; ?>" title="<?php echo $category_title;?>" class="textlink catlink stbg2"><?php echo $category_title;?></a>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo $image_attributes[0]; ?>" width="287"></a>
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="textlink stlink"><?php the_title();?></a>
        
		<?php 
			endwhile;
			wp_reset_query();
		?>	
	</div>
	<div class="st margintop">
		<?php 
			$query_array = array("category__in" => array(3),"post__in" => get_option("sticky_posts"));
			query_posts($query_array);
			while(have_posts()) : the_post(); 
			$image_attributes = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'full'); // 返回一个数组
			$category_title= single_cat_title('', false );
			$category_id = get_cat_ID($category_title);
			$category_link = get_category_link( $category_id );			
		?>
		<a href="<?php echo $category_link; ?>" title="<?php echo $category_title;?>" class="textlink catlink stbg3"><?php echo $category_title;?></a>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo $image_attributes[0]; ?>" width="287"></a>
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="textlink stlink"><?php the_title();?></a>
        
		<?php 
			endwhile;
			wp_reset_query();
		?>	
	</div>


</div>
<div class="wrap">





	<?php if ( is_home() && ! is_front_page() ) : ?>
		<header class="page-header">
			<h1 class="page-title"><?php single_post_title(); ?></h1>
		</header>
	<?php else : ?>
	<header class="page-header">
		<h2 class="page-title"><?php _e( 'Posts', 'twentyseventeen' ); ?></h2>
	</header>
	<?php endif; ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/post/content', get_post_format() );


				endwhile;

				the_posts_pagination( array(
					'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
					'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
				) );

			else :

				get_template_part( 'template-parts/post/content', 'none' );

			endif;
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer();
