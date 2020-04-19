<?php
get_header();
the_post();
/*
Template Name: Landing Conheça
*/
?>
<base href="<?php echo esc_url( home_url( '/' ) ); ?>">

<div class="container">

</div>
<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

<h1 class="titulos">
	<div class="container">
		<?php the_title(); ?>
	</div>
</h1>

<div class="container">

	<?php the_content();?>

</div>

<?php get_footer(); ?>
