<?php
define('ICL_DONT_LOAD_LANGUAGE_SELECTOR_CSS', true);

global $sitepress;
remove_action( 'wp_head', array( $sitepress, 'meta_generator_tag' ) );