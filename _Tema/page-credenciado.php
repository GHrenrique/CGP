<?php

get_header();
the_post();
/*
Template Name: Credenciado
*/
?>
<style type="text/css">
	.titulos .container  {
	 padding-left: 0px;
	}
	.avatar {
		display: none;
	}
	#wp-logout {
    color: #ffffff !important;
    text-transform: uppercase !important;
    font-size: 20px !important;
    letter-spacing: 1px;
    background: #3D581C !important;
    padding: 0px 22px 2px 22px;
}
#wp-logout:hover {
	background: #69962F !important;
}
.lwa-info a {

    text-decoration: none !important;
    color: #999999;
    text-transform: uppercase;
    font-size: 20px;
}
</style>
<base href="<?php echo esc_url( home_url( '/' ) ); ?>">

<?php 
	global $current_user;
	// retorna os dados do usuário logado
	$current_user = wp_get_current_user();
	// passamos o ID do usuário e geramos o array
	$user_info = get_userdata($current_user->ID);
	// Criamos uma variavel com os dados que desejamos
	// Aqui a lista completa dos dados que podemos puxar
	// WordPress http://codex.wordpress.org/Author_Templates#Using_Author_Information
	$first_name = $user_info->first_name;
	$user_email = $user_info->user_email;
	// mostra na tela
	//echo "Meu nome é: " . $first_name . " e meu e-mail é: " . $user_email; 
?>

<div class="container">

</div>

<h1 class="titulos">
	<div class="container">
		<?php the_title(); ?>
		<h5 class="cinza">
			<b>Seja bem-vindo(a), </b> <?php echo $first_name ?>
		</h5>
		<?php echo do_shortcode('[lwa]'); ?>	
		
	</div>
</h1>



<div class="container pagina-credenciados">

	<div class="row">

		<div class="col-lg-8 text-center">
			<div class="row">
				<div class="col-lg-6 bg-success text-white">
					<a class="nav-link1" href="<?php the_field('relatorio_de_atendimento', '35'); ?>" target="new">
						<i class="fa fa-file-text-o" aria-hidden="true"></i>	
						<h6>Relatório de Atendimento</h6>
					</a>
				</div>
				<div class="col-lg-6 bg-info text-white">
					<a class="nav-link1" href="<?php the_field('manual-credenciado', '35'); ?>" target="new">
						<i class="fa fa-file-pdf-o" aria-hidden="true"></i>
						<h6>Manual do credenciado e conteúdo de ajuda</h6>
					</a>
				</div>
				<div class="col-lg-6 bg-danger text-white">
					<a class="nav-link1" href="<?php the_field('formularios-financeiros', '35'); ?>" target="new">
						<i class="fa fa-file-excel-o" aria-hidden="true"></i>
						<h6>Formulários Financeiros</h6>
					</a>
				</div>
				<div class="col-lg-6 bg-warning text-white">
					<a href="#bemestarmodal" data-toggle="modal" data-target="#bemestarmodal" class="nav-link1">
						<i class="fa fa-users" aria-hidden="true"></i>
						<h6>Dúvidas?<br>Entre em contato.</h6>
					</a>
				</div>
			</div>
		</div>

		<div class="col-lg-4 badge-default text-white box-overflow">

			<div class="row">
				<div class="col-lg-2">
					<i class="fa fa-calendar" aria-hidden="true"></i>
				</div>
				<div class="col-lg-10">
					<h2>Calendário<br>
					<b>do Credenciado</b></h2>
				</div>
			</div>


			    <?php
			      global $wpdb;
			      $postexibidos = array();
			      $args = array( 'post_type' => 'calcredeciado',
			              'posts_per_page' =>'-1'
			              );
			      $loop = new WP_Query( $args );
			      while ( $loop->have_posts() ) :
			      $loop->the_post();
			      array_push($postexibidos, $post->ID);
			      
			    ?>

			<p>
				<b><?php the_field('data-calendario'); ?></b><br>
				<?php the_title(); ?>
				<br><a href="#calendariomodal<?php echo $post->ID ?>" data-toggle="modal" data-target="#calendariomodal<?php echo $post->ID ?>" class="nav-link1">
				saiba mais</a>
			</p>
			<hr>




			  <div class="modal fade" id="calendariomodal<?php echo $post->ID ?>" tabindex="-1" role="dialog" aria-labelledby="calendariomodal<?php echo $post->ID ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content modal-congresso">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><?php the_title(); ?></h4>
      </div>
      <div class="modal-body">
        <?php the_content(); ?>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar Janela</button>
      </div>
    </div>
  </div>
</div>
</div>



			<?php
			endwhile;
			?>



			<br>


		</div>

	</div>

</div>






  <div class="modal fade" id="bemestarmodal" tabindex="-1" role="dialog" aria-labelledby="bemestarmodal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">ENTRE EM CONTATO</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
        <?php echo do_shortcode('[contact-form-7 id="106" title="Contato Credenciado"]'); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar Janela</button>
      </div>
    </div>
  </div>
</div>
</div>


<?php get_footer(); ?>
