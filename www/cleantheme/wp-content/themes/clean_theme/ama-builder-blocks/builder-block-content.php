<div class="builder-block content-block">
	<div class="row">
	<?php 
        if( get_sub_field('acf_block_columns') == 'col_1' ):
			echo '<div class="col-xs-12">';
            	the_sub_field('acf_block_content_col1');
			echo '</div>';
        endif;
        if( get_sub_field('acf_block_columns') == 'col_2' ):
			echo '<div class="col-sm-6">';
            	the_sub_field('acf_block_content_col2_1');
			echo '</div>';
			echo '<div class="col-sm-6">';
            	the_sub_field('acf_block_content_col2_2');
			echo '</div>';
        endif;
        if( get_sub_field('acf_block_columns') == 'col_3' ):
			echo '<div class="col-sm-4">';
            	the_sub_field('acf_block_content_col3_1');
			echo '</div>';
			echo '<div class="col-sm-4">';
            	the_sub_field('acf_block_content_col3_2');
			echo '</div>';
			echo '<div class="col-sm-4">';
            	the_sub_field('acf_block_content_col3_3');
			echo '</div>';
        endif;
        if( get_sub_field('acf_block_columns') == 'col_4' ):
			echo '<div class="col-sm-6 col-md-3">';
            	the_sub_field('acf_block_content_col4_1');
			echo '</div>';
			echo '<div class="col-sm-6 col-md-3">';
            	the_sub_field('acf_block_content_col4_2');
			echo '</div>';
			echo '<div class="col-sm-6 col-md-3">';
            	the_sub_field('acf_block_content_col4_3');
			echo '</div>';
			echo '<div class="col-sm-6 col-md-3">';
            	the_sub_field('acf_block_content_col4_4');
			echo '</div>';
        endif;
    ?>
	</div>
</div>