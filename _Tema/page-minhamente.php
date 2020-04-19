<?php
get_header();
the_post();
/*
Template Name: Minha Mente
*/
?>
<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

<style type="text/css">
	.titulos {
		background: url('<?php the_post_thumbnail_url(); ?>');
	}
</style>

<div class="titulos">
	<div class="mascara"></div>
	<div class="container text-azul">
		<div class="row">
			<div class="col-lg-6">
				<h1><?php the_title(); ?></h1>
				<h5>
					<?php the_field('text-posts'); ?>					
				</h5>
			</div>
		</div>
	</div>
</div>

<div class="container busca-home campos-paginas">
	<div class="row">
		<div class="col-lg-6 text-azul">
			<nav class="migalhas">
			  <a class="breadcrumb-item" href="<?php echo home_url( '/' ); ?>">HOME</a>
			  <a class="breadcrumb-item" href="<?php echo home_url( '/' ); ?>minha-mente">MINHA MENTE</a>
			</nav>
		</div>
		<div class="col-lg-6">

		<form action="<?php echo home_url( '/' ); ?>">

		  <div class="input-group mb-2 mr-sm-2 mb-sm-0">
		    <div class="input-group-addon bg-info text-white"><i class="fa fa-search" aria-hidden="true"></i></div>
		     <input class="form-control"
		            type="text" placeholder="QUAL ASSUNTO ESTÁ PROCURANDO?"
		            value="<?php the_search_query(); ?>"
		            name="s" id="s" />
		  </div>

		</form>

		</div>
	</div>
	<br>
</div>

<div class="container minha-pagina">

	<div class="row align-items-end no-padding">

		    <?php
		      global $wpdb;
		      $postexibidos = array();
		      $args = array( 'post_type' => 'minhamente',
		              'posts_per_page' =>'-1'
		              );
		      $loop = new WP_Query( $args );
		      while ( $loop->have_posts() ) :
		      $loop->the_post();
		      array_push($postexibidos, $post->ID);
		      
		    ?>


		<style type="text/css">
			.item-minha {
				
			}
		</style>
		<div class="col-lg-12 item-minha align-self-end" style="background: url('<?php the_post_thumbnail_url(); ?>');">
			<div class="row">
				<div class="offset-md-6 col-lg-6">
					<h2><?php the_title(); ?></h2>
					<div class="text-white">
						<?php the_excerpt(); ?>
					</div>

					<hr>

					<div class="row">
						<div class="col-lg-6">
							<div class="row clock-section">
								<div class="col-lg-3">
									<i class="fa fa-clock-o" aria-hidden="true"></i>
								</div>
								<div class="col-lg-9">
									<p class="small"><b>tempo de leitura estimado</b></p>
									<h5><b><?php the_field('tempo-estimado'); ?> minutos</b></h5>
								</div>
							</div>
						</div>
						<div class="col-lg-6 text-lg-right">
							<a href="<?php the_permalink(); ?>" class="btn btn-info">Continue Lendo</a>
						</div>
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
