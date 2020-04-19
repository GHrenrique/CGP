<?php
get_header();
the_post();
?>
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
		<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>blog">← Voltar para o <b>Blog</b></a></p>
		<?php the_post_thumbnail(); ?>
		<br>
		<p>Postado dia <?php the_date(); ?> por <?php the_author_posts_link(); ?></p>
		<hr>
		<div class="lead"><?php the_content();?></div>
	</div>
  </div>

</div>

<?php get_footer(); ?>
