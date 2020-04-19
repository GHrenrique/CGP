<?php
get_header();
?>

<h1 class="titulos">
  <div class="container">
    Conteúdo não encontrado
  </div>
</h1>

		
		<div class="container">

			<div class="row">
				<div class="offset-lg-2 col-lg-8 col-xs-12">
					<div class="jumbotron text-xs-center">
						<h1>Erro 404! <i class="fa fa-battery-quarter" aria-hidden="true"></i><br> <small>Não encontramos nada!</small></h1>
						<p>Tente fazer uma busca em nosso site ou volte para a Página Inicial.</p>
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

<?php get_footer(); ?>
