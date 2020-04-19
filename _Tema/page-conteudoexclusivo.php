<?php
get_header();
the_post();
/*
Template Name: Conteúdo Exclusivo
*/
?>
<base href="<?php echo esc_url( home_url( '/' ) ); ?>">

<div class="container">

</div>
<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

<!-- <h1 class="titulos text-center">
	<div class="container">
		<?php the_title(); ?>
	</div>
</h1> -->

<style type="text/css">
	.topo-lista-conteudo {
	    font-size: 14px;
	}
	.lista-conteudo:hover {
	    box-shadow: 3px 3px;
	}
		.content-p {
		color: #999999;
		margin-bottom: 50px;
	}
	.lista-conteudo {
		background-size: cover !important;
		background-position: center;
		color: #ffffff !important;
		padding-top: 50px;
		padding-bottom: 50px;
	}
</style>

<div class="container content-p">
	<?php the_content(); ?>
</div>



<div class="container">
<div class="row">


    <?php
      global $wpdb;
      $postexibidos = array();
      $args = array( 'post_type' => 'conteudoexclusivo',
              'posts_per_page' =>'-1'
              );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) :
      $loop->the_post();
      array_push($postexibidos, $post->ID);
      
    ?>



	<div class="col-lg-12">
		<div class="row">
			<!-- <div class="col-lg-12">
				<div class="topo-lista-conteudo">
					<div class="row">
						<div class="col-lg-8">
							<?php the_title(); ?>
						</div>
						<div class="col-lg-4 text-right">
							<?php the_time('j \d\e F \d\e Y') ?>
						</div>
					</div>	
				</div>
			</div> -->

			<div class="col-lg-12 text-center">
				<!-- <?php the_post_thumbnail(); ?> -->
				<div class="lista-conteudo" style="background: url('<?php the_post_thumbnail_url(); ?>');">
					<h3><?php the_title(); ?></h3>
					<?php the_excerpt(); ?>
					<hr><p><a class="btn btn-success" href="<?php the_permalink(); ?>">Continuar Lendo</a></p>
				</div>
			</div>
		</div>
	</div>

	<?php
	endwhile;
	?>


</div>
</div>

<?php get_footer(); ?>
