<?php
/**
* The template for displaying the footer
**/

?>
<footer>
	<div class="wrapper">
        <?php $sitehome_url = apply_filters( 'wpml_home_url', get_option( 'home' ) ); ?>
        <a href="<?php echo $sitehome_url; ?>" class="logo pull-left">
            <img src="<?php echo get_template_directory_uri(); ?>/theme/images/header-logo.png" alt=""/>
        </a>
        <a href="http://www.artmedia.ee/kodulehe-tegemine/" id="ama" class="pull-right" target="_blank" title="Kodulehe tegemine">AMA</a>
    </div>
</footer>
<?php wp_footer();
?>

</body>
</html>