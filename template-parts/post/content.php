<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	if ( is_sticky() && is_home() ) :
		echo twentyseventeen_get_svg( array( 'icon' => 'thumb-tack' ) );
	endif;
    ?>
     <?php if (is_single()) : ?>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	<?php endif; ?>

	<?php if (is_home()) : ?>
		<div class="post-thumbnail btn">
			<a href="<?php the_permalink(); ?>">
				<?php 
				if('' !== get_the_post_thumbnail()){
					the_post_thumbnail( 'twentyseventeen-featured-image' ); 
				}else{
					the_custom_header_markup();
				}
				?>
			</a>
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</div><!-- .post-thumbnail -->
		<div class="post-tags">
		<?php echo get_the_tag_list("","",""); ?>
		</div>
	<?php endif; ?>
	<div class="entry-content">
		<?php
		/* translators: %s: Name of current post */
		the_content( sprintf(
			__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
			get_the_title()
		) );

		wp_link_pages( array(
			'before'      => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
			'after'       => '</div>',
			'link_before' => '<span class="page-number">',
			'link_after'  => '</span>',
		) );
		?>
	</div><!-- .entry-content -->

	<?php
	if(is_single()){
		twentyseventeen_entry_footer();
	}
	?>

</article><!-- #post-## -->
