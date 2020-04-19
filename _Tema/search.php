<?php
get_header();
?>

<h1 class="titulos">
	<div class="container">
		Resultados de busca
	</div>
</h1>

<nav class="resultados-info navbar navbar-light bg-faded text-xs-center">
  <span class="navbar-text">
    <div class="container">
    	<span class="text-muted">Você pesquisou por ─ </span><?php echo get_search_query();?>
    </div>
  </span>
</nav>



<?php 

	if ( have_posts() ) :

		while ( have_posts() ) : the_post();
		?>
			<div class="container">

				<div class="row">
					<div class="offset-lg-2 col-lg-8 col-xs-12">
						<div class="card card-search">
						<?php the_post_thumbnail( 'slideshow', array( 'class' => 'card-img-top' ) ); ?>
							<div class="card-block">
								<h4 class="card-title"><?php the_title(); ?></h4>
								<p class="card-text"><?php the_excerpt(); ?></p>
								<p class="card-text"><small class="text-muted"><?php the_time('j \d\e F \d\e Y') ?></small></p>
								<p class="card-text">
								<a class="nav-link" href="<?php the_permalink(); ?>">Leia Mais</a>
								</p>
							</div>
						</div>
					</div>
				</div>

			</div>	

		<?php
		endwhile;
		?>


		<?php
		else:
			?>
		
		<div class="container">

			<div class="row">
				<div class="offset-lg-2 col-lg-8 col-xs-12">
					<div class="jumbotron text-xs-center">
						<h1>Oops, não encontramos nada!</h1>
						<p>Tente pesquisar utilizando termos diferentes</p>
						<br>
						<div class="row">

							<div class="col-lg-6">
								<p class="pull-xs-left">
									<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/' ) ); ?>" role="button">
									<i class="fa fa-home" aria-hidden="true"></i> Volte à Página Inicial
									</a>
								</p>
							</div>

							<div class="col-lg-6">
								<form action="<?php echo home_url( '/' ); ?>" class="form-inline">
								  <div class="form-group">
								    <div class="input-group">
								      <input class="form-control" type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
								    </div>
								  </div>
								  <input type="submit" id="searchsubmit" class="btn btn-outline-primary"
								            value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
								</form>
							</div>

						</div>
						
					</div>
				</div>
			</div>

		</div>	

		<?php
	endif;


?>


<?php get_footer(); ?>