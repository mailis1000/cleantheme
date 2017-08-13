<?php
$repeater_block_counter = 0;
if( have_rows('acf_block_specialcontents') ):
	echo '<div class="builder-block specialcontent-block">';
	while ( have_rows('acf_block_specialcontents') ) : the_row();
		echo '<div class="row specialcontent-row">';
		$acf_special_content_title = get_sub_field('acf_special_content_title');
			if ($repeater_block_counter % 2 === 0) :
			
				echo '<div class="col-sm-6 col-xs-7">';
					if( $acf_special_content_title ){
						echo '<h3>'. $acf_special_content_title .'</h3>';
					}
					the_sub_field('acf_special_content_txt');				
				echo '</div>';
				
				echo '<div class="col-sm-6 col-xs-5">';
					$acf_layout_img = get_sub_field('acf_special_content_img');
					$acf_layout_image = $acf_layout_img['sizes']['medium'];
					if( $acf_layout_img ){
						echo '<img src="'. $acf_layout_image .'" alt="" />';
					} else {
						echo '<img src="', get_template_directory_uri(), '/theme/images/img-512.jpg" alt="" />';
					}
				echo '</div>';	
			
			else:
			
				echo '<div class="col-sm-6 col-xs-7 pull-right">';
					if( $acf_special_content_title ){
						echo '<h3>'. $acf_special_content_title .'</h3>';
					}
					the_sub_field('acf_special_content_txt');				
				echo '</div>';
				echo '<div class="col-sm-6 col-xs-5 pull-left">';
					$acf_layout_img = get_sub_field('acf_special_content_img');
					$acf_layout_image = $acf_layout_img['sizes']['large'];
					if( $acf_layout_img ){
						echo '<img src="'. $acf_layout_image .'" alt="" />';
					} else {
						echo '<img src="', get_template_directory_uri(), '/theme/images/img-512.jpg" alt="" />';
					}
				echo '</div>';
			
			endif;
		echo '</div>';
		$repeater_block_counter++; 
	endwhile;
	echo '</div>';
endif;
?>