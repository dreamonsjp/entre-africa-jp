
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
                <?php the_title( sprintf( '<h2 class="entry-title post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<div class="entry clearfix">
			<?php the_content(); ?>		
		</div>
		<?php wp_link_pages(); ?>

	</div>
