<?php
/**
* The default template for displaying content
**/
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php 
		the_title( '<h1 class="entry-title">', '</h1>' );
	
		if( '' !== get_post()->post_content ) {
			echo '<div class="builder-block">', the_content(), '</div>';	
		}

		/*
		if( have_rows('acf_ama_builder') ):

			while ( have_rows('acf_ama_builder') ) : the_row();

				if( get_row_layout() == 'acf_block_content' ):
					get_template_part( 'ama-builder-blocks/builder-block', 'content');

				elseif( get_row_layout() == 'acf_block_team' ):
					get_template_part( 'ama-builder-blocks/builder-block', 'team');

				elseif( get_row_layout() == 'acf_block_cta' ):
					get_template_part( 'ama-builder-blocks/builder-block', 'cta');

				elseif( get_row_layout() == 'acf_block_btn' ):
					get_template_part( 'ama-builder-blocks/builder-block', 'btn');

				elseif( get_row_layout() == 'acf_block_specialcontent' ):
					get_template_part( 'ama-builder-blocks/builder-block', 'specialcontent');

				endif;

			endwhile;
		endif; */

	?>
</article><!-- #post-## -->
