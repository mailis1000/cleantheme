<?php
/**
 * The Header for our theme
 **/
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<?php wp_head(); ?>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body <?php body_class(); ?>>
    <nav class="navbar" role="navigation">
        <input type="checkbox" id="main-navigation-trigger">
        <label for="main-navigation-trigger" class="mobile-navigation-trigger hidden-desktop">
            <i class="mobile-nav-btn"></i>
        </label>
        <div class="wrapper">
			<?php $sitehome_url = apply_filters( 'wpml_home_url', get_option( 'home' ) ); ?>
            <a href="<?php echo $sitehome_url; ?>" class="logo pull-left">
                <img src="<?php echo get_template_directory_uri(); ?>/theme/images/header-logo.png" alt=""/>
            </a>
            <div class="action-content pull-right">
				<?php
				if ( has_nav_menu( 'primary' ) ) :
					wp_nav_menu( array(
						'theme_location' => 'primary',
                        'depth'          => '2',
						'container'      => '',
						'menu_class'     => 'menu pull-right'
					) );
				endif;
				?>
            </div>
        </div>
    </nav>