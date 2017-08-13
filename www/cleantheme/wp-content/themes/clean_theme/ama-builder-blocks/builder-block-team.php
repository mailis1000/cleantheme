<div class="builder-block team-block">
<?php 
	$acf_block_team_all = get_sub_field('acf_block_team_all');
	if( $acf_block_team_all ){
		$team_loop = new WP_Query( array(
			'post_type' => 'team',
			'posts_per_page' => -1
		));
		if ( $team_loop->have_posts() ) :
			echo '<div class="row team-members">';
			while ( $team_loop->have_posts() ) : $team_loop->the_post();
				echo '<div class="col-sm-4 col-xs-6"><div class="team-member-inner">';
				$acf_teammember_position = get_field('acf_teammember_position');
				$acf_teammember_mail = get_field('acf_teammember_mail');
				$acf_teammember_phone = get_field('acf_teammember_phone');
					echo '<div class="team-member-img">';
						if ( has_post_thumbnail() ) {
							the_post_thumbnail('size-140x140');
						}
						else {
							echo '<img src="' . get_template_directory_uri(). '/theme/images/team-member-noimg.png" />';
						}
					echo '</div>';					
					echo '<h6 class="team-member-name">';
						the_title();
						if( $acf_teammember_position ){
							echo '<small>'. $acf_teammember_position .'</small>';
						}
					echo '</h6>';					
					if( $acf_teammember_mail || $acf_teammember_phone ){
						echo '<ul class="team-member-meta">';
						if( $acf_teammember_mail ){
							echo '<li><a href="mailto:'. $acf_teammember_mail .'">'. $acf_teammember_mail .'</a></li>';
						}
						if( $acf_teammember_phone ){
							echo '<li>'. $acf_teammember_phone .'</li>';
						}
						echo '</ul>';
					}
					
				echo '</div></div>';
			endwhile;
			echo '</div>';
		endif;
		wp_reset_postdata();
	} else {
		$acf_block_team = get_sub_field('acf_block_team');
		if( $acf_block_team ):
			echo '<div class="row team-members">';
			foreach( $acf_block_team as $block_team ):
				echo '<div class="col-sm-4 col-xs-6"><div class="team-member-inner">';
				$acf_teammember_position = get_field('acf_teammember_position', $block_team->ID);
				$acf_teammember_mail = get_field('acf_teammember_mail', $block_team->ID);
				$acf_teammember_phone = get_field('acf_teammember_phone', $block_team->ID);
					echo '<div class="team-member-img">';
						if ( has_post_thumbnail($block_team->ID) ) {
							echo get_the_post_thumbnail($block_team->ID, 'size-140x140');
						}
						else {
							echo '<img src="' . get_template_directory_uri(). '/theme/images/team-member-noimg.png" />';
						}
					echo '</div>';					
					echo '<h6 class="team-member-name">';
						echo get_the_title( $block_team->ID );
						if( $acf_teammember_position ){
							echo '<small>'. $acf_teammember_position .'</small>';
						}
					echo '</h6>';					
					if( $acf_teammember_mail || $acf_teammember_phone ){
						echo '<ul class="team-member-meta">';
						if( $acf_teammember_mail ){
							echo '<li><a href="mailto:'. $acf_teammember_mail .'">'. $acf_teammember_mail .'</a></li>';
						}
						if( $acf_teammember_phone ){
							echo '<li>'. $acf_teammember_phone .'</li>';
						}
						echo '</ul>';
					}
					
				echo '</div></div>';
			endforeach;
			echo '</div>';
		endif;
	}
?>
</div>