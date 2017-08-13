<?php
/**
* The main template file
**/
get_header(); ?>

<section>
    <div class="wrapper">
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
