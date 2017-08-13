<?php
/**
* The homepage template file
**/
get_header(); ?>
	<section class="overlay-white-strong" style="background-image: url('<?php echo get_template_directory_uri(); ?>/theme/images/background.jpg')">
		<div class="wrapper no-sides">
			<p>Lorem ipsum</p>
		</div>
	</section>
	<section>
		<div class="wrapper">
			<div class="row">
				<div class="col col-6-24 bg-lightest-green">
					<p>Column 1</p>
				</div>
				<div class="col col-6-24">
					<p>Column 2</p>
				</div>
				<div class="col col-6-24">
					<p>Column 3</p>
				</div>
				<div class="col col-6-24">
					<p>Column 4</p>
				</div>
			</div>
			<div class="row no-gaps">
				<div class="col col-8-24">
					<p>no gaps</p>
				</div>
				<div class="col col-8-24">
					<p>no gaps</p>
				</div>
				<div class="col col-8-24">
					<p>no gaps</p>
				</div>
			</div>
            <?php
            if ( have_posts() ) :

            while ( have_posts() ) : the_post();

            get_template_part( 'loops/content', get_post_format() );

            endwhile;

            else :

            get_template_part( 'loops/content', 'none' );

            endif;
            ?>
		</div>
	</section>

<?php get_footer();
