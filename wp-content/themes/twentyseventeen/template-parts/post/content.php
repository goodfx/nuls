<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		
            <div class="post-thumbnail">
                <a href="<?php the_permalink(); ?>">
                    <?php
					 if ( '' !== get_the_post_thumbnail() && ! is_single() ) 
					 {
						 the_post_thumbnail( 'twentyseventeen-featured-image' );
					 }
					 else
					 {
					?>
                    <img width="287" height="202" src="http://118.193.197.60/wp-content/uploads/2018/default.jpg" class="attachment-twentyseventeen-featured-image size-twentyseventeen-featured-image wp-post-image" alt="" sizes="(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px">	
                    <?php
							 
					 }
					

					?>
                </a>
            </div><!-- .post-thumbnail -->
        
	
		
		<?php
		
		if ( is_single() ) {
			the_title( '<p class="entry-title">', '</p>' );
		} elseif ( is_front_page() && is_home() ) {
			the_title( '<p class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></p>' );
		} else {
			the_title( '<p class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></p>' );
		}
		



		?>
	</header><!-- .entry-header -->



	<div class="entry-content" style=" float:left; width:450px;">
		<?php
		/* translators: %s: Name of current post */
		the_excerpt();
		if ( 'post' === get_post_type() ) {
			echo '<div class="entry-meta">';
			twentyseventeen_posted_on();
			twentyseventeen_edit_link();

			echo '</div><!-- .entry-meta -->';
		};

		?>
	</div><!-- .entry-content -->

	<?php
	if ( is_single() ) {
		twentyseventeen_entry_footer();
	}
	?>

</article><!-- #post-## -->
<div style="clear:both; width:100%; height:4px; overflow:hidden; border-bottom:1px solid #eee;margin-bottom:22px"></div>
