<?php
	// Modo de Manutenção
	global $post;
	$the_slug = 'configtheme';
	$args = array(
	  'name'        => $the_slug,
	  'post_type'   => 'configthema',
	  'post_status' => 'private',
	  'numberposts' => 1
	);
	$my_posts = get_posts($args);
	if( $my_posts ) :
		global $post;
		$dados = get_post_custom($my_posts[0]->ID);
		$header_logo = $dados["header_logo"][0];
		$landingpage = $dados["landingpage"][0];

		define("LOGOHEAD", "$header_logo");
	endif;

	function maintenace_mode() {

		$header_logo = constant("LOGOHEAD");
		  if ( !current_user_can( 'edit_themes' ) || !is_user_logged_in() ) {
			die('

				<div style="text-align: center;">
					<img src="'.$header_logo.'">
					<h1>Estamos atualizando nosso site.</h1>
				</div>


			');
		  }
		}
		if($GLOBALS[dados][landingpage][0] == "nao"){
			add_action('get_header', 'maintenace_mode');
		}
	// Fim - Modo de Manutenção
