<?php

	function slidehome_register() {

		$labels = array(
			'name' => _x('SlideShow', 'post type general name'),
			'singular_name' => _x('Slide', 'post type singular name'),
			'add_new' => _x('Add Slide', 'portfolio item'),
			'add_new_item' => __('Add Slide'),
			'edit_item' => __('Editar Slide'),
			'new_item' => __('New Slide'),
			'view_item' => __('Ver'),
			'search_items' => __('Procurar'),
			'not_found' =>  __('Nothing found'),
			'not_found_in_trash' => __('Nothing found in Trash'),
			'parent_item_colon' => ''
		);

		$args = array(
			'labels' => $labels,
			'public' => false,
			'publicly_queryable' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_icon' => get_stylesheet_directory_uri() . '/images/icone_admin.png',
			'rewrite' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'menu_position' => null,
			'supports' => array('title','thumbnail')
		  );

		register_post_type( 'slideshow' , $args );
	}

	add_action('init', 'slidehome_register');


// Custom Fields
function request_customtitle() {
		global $post;
			$custon_resumo = get_post_custom($post->ID);
			$subtitulo = $custon_resumo["subtitulo"][0];
	?>
	<p>Digite o Subtítulo:</p>
	<input type="text" size="80" name="subtitulo" value="<?php echo $subtitulo;?>">
	<?php
}

function request_linkimprensa() {
	global $post;
		   $custon_resumo = get_post_custom($post->ID);
		   $linkimprensa = $custon_resumo["linkimprensa"][0];
	?>
	<p>Digite o Link</p>
	<input type="text" size="80" name="linkimprensa" value="<?php echo $linkimprensa;?>">
	<?php
}



// Custom Fields: Lugares de Exibição
function custom_subtitulo(){
    //add_meta_box("request_customtitle", "Subtítulo",    "request_customtitle", "slideshow",      "normal", "high");

}


// Custom Fields: Rotina da Salvação
function save_details_subtitulo(){
	global $post;
	update_post_meta($post->ID, "subtitulo", $_POST["subtitulo"]);
	update_post_meta($post->ID, "linkimprensa", $_POST["linkimprensa"]);
	update_post_meta($post->ID, "linkbanner", $_POST["linkbanner"]);
}


// Custom Fields: Chama as Funções para Exibir os Campos
add_action("admin_init", "custom_subtitulo");
add_action('save_post', 'save_details_subtitulo');






// Bem Estar
function bemestar_register() {
  $labels = array(
    'name' => _x('Soluções em bem-estar', 'post type general name'),
    'singular_name' => _x('Soluções em bem-estar', 'post type singular name'),
    'add_new' => _x('Adicionar Soluções em bem-estar', 'portfolio item'),
    'add_new_item' => __('Adicionar Soluções em bem-estar'),
    'edit_item' => __('Editar Soluções em bem-estar'),
    'new_item' => __('Nova Soluções em bem-estar'),
    'view_item' => __('Ver'),
    'search_items' => __('Procurar'),
    'not_found' =>  __('Nothing found'),
    'not_found_in_trash' => __('Nothing found in Trash'),
    'parent_item_colon' => ''
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'menu_icon' => get_stylesheet_directory_uri() . '/images/icone_admin.png',
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => true,
    'has_archive' => true,
    'menu_position' => null,
    'supports' => array('title', 'thumbnail', 'editor')
    );

  register_post_type( 'bemestar' , $args );
}
add_action('init', 'bemestar_register');


// Outcomes Wellcast
function solucoesroi_register() {
  $labels = array(
    'name' => _x('Outcomes Wellcast', 'post type general name'),
    'singular_name' => _x('Outcomes Wellcast', 'post type singular name'),
    'add_new' => _x('Adicionar Outcomes Wellcast', 'portfolio item'),
    'add_new_item' => __('Adicionar Outcomes Wellcast'),
    'edit_item' => __('Editar Outcomes Wellcast'),
    'new_item' => __('Nova Outcomes Wellcast'),
    'view_item' => __('Ver'),
    'search_items' => __('Procurar'),
    'not_found' =>  __('Nothing found'),
    'not_found_in_trash' => __('Nothing found in Trash'),
    'parent_item_colon' => ''
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'menu_icon' => get_stylesheet_directory_uri() . '/images/icone_admin.png',
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => true,
    'has_archive' => true,
    'menu_position' => null,
    'supports' => array('title', 'thumbnail', 'editor')
    );

  register_post_type( 'solucoesroi' , $args );
}
add_action('init', 'solucoesroi_register');





// Bem Estar
function calcredeciado_register() {
  $labels = array(
    'name' => _x('Calendário Credenciado', 'post type general name'),
    'singular_name' => _x('Calendário Credenciado', 'post type singular name'),
    'add_new' => _x('Adicionar Calendário Credenciado', 'portfolio item'),
    'add_new_item' => __('Adicionar Calendário Credenciado'),
    'edit_item' => __('Editar Calendário Credenciado'),
    'new_item' => __('Nova Calendário Credenciado'),
    'view_item' => __('Ver'),
    'search_items' => __('Procurar'),
    'not_found' =>  __('Nothing found'),
    'not_found_in_trash' => __('Nothing found in Trash'),
    'parent_item_colon' => ''
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'menu_icon' => get_stylesheet_directory_uri() . '/images/icone_admin.png',
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => true,
    'has_archive' => true,
    'menu_position' => null,
    'supports' => array('title', 'thumbnail', 'editor')
    );

  register_post_type( 'calcredeciado' , $args );
}
add_action('init', 'calcredeciado_register');












function conteudoexclusivo_register() {
  $labels = array(
    'name' => _x('Conteúdo Exclusivo', 'post type general name'),
    'singular_name' => _x('Conteúdo Exclusivo', 'post type singular name'),
    'add_new' => _x('Adicionar Conteúdo Exclusivo', 'portfolio item'),
    'add_new_item' => __('Adicionar Conteúdo Exclusivo'),
    'edit_item' => __('Editar Conteúdo Exclusivo'),
    'new_item' => __('Nova Conteúdo Exclusivo'),
    'view_item' => __('Ver'),
    'search_items' => __('Procurar'),
    'not_found' =>  __('Nothing found'),
    'not_found_in_trash' => __('Nothing found in Trash'),
    'parent_item_colon' => ''
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'menu_icon' => get_stylesheet_directory_uri() . '/images/icone_admin.png',
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => true,
    'has_archive' => true,
    'menu_position' => null,
    'supports' => array('title', 'thumbnail', 'editor','excerpt')
    );

  register_post_type( 'conteudoexclusivo' , $args );
}
add_action('init', 'conteudoexclusivo_register');










function estudospubli_register() {
  $labels = array(
    'name' => _x('Estudos e Publicações', 'post type general name'),
    'singular_name' => _x('Estudos e Publicações', 'post type singular name'),
    'add_new' => _x('Adicionar Estudos e Publicações', 'portfolio item'),
    'add_new_item' => __('Adicionar Estudos e Publicações'),
    'edit_item' => __('Editar Estudos e Publicações'),
    'new_item' => __('Nova Estudos e Publicações'),
    'view_item' => __('Ver'),
    'search_items' => __('Procurar'),
    'not_found' =>  __('Nothing found'),
    'not_found_in_trash' => __('Nothing found in Trash'),
    'parent_item_colon' => ''
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'menu_icon' => get_stylesheet_directory_uri() . '/images/icone_admin.png',
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => true,
    'has_archive' => true,
    'menu_position' => null,
    'supports' => array('title', 'thumbnail', 'editor','excerpt')
    );

  register_post_type( 'estudospubli' , $args );
}
add_action('init', 'estudospubli_register');

