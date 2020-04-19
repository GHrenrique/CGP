<?php
get_header();
the_post();
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

	<div class="row">
		<div class="offset-lg-2 col-lg-8 col-xs-12">
			<div class="lead"><?php the_excerpt(); ?></div>
			<?php the_post_thumbnail(); ?>
			<div class="lead"><?php the_content();?></div>    	
		</div>
	</div>

</div>

<?php get_footer(); ?>
