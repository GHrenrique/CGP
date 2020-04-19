<?php
update_option('siteurl','http://cgpbrasil.nonio.com.br/');
update_option('home','http://cgpbrasil.nonio.com.br/');

require_once('landingpage.php');

// Menu do Bootstrap
require_once('menus_bootstrap.php');
// Fim - Menu do Bootstrap

// Suporte a Resumos em Páginas
add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}
// Fim - Suporte a Resumos em Páginas

// Suporte a Thumbnails
add_theme_support( 'post-thumbnails' );
// Fim - Suporte a Thumbnails

// Thumbnails - Cortes
add_image_size( 'slideshow', '1920', '750', true);
// Fim - Thumbnails - Cortes

// Menus
register_nav_menus( array(
  'principal' => __( 'Navegação do Site', 'tema' )
) );
// Fim - Menus

// Retira Generator
remove_action('wp_head', 'wp_generator');
// Fim -  Retira Generator

// Mudar o Slug Postagens
function change_post_menu_label() {
	global $menu;
	global $submenu;
	$menu[5][0] = 'Postagens';
	$submenu['edit.php'][5][0] = 'Postagens';
	$submenu['edit.php'][10][0] = 'Adicionar Postagens';
	echo '';
}

function change_post_object_label() {
		global $wp_post_types;
		$labels = &$wp_post_types['post']->labels;
		$labels->name = 'Postagens';
		$labels->singular_name = 'Postagens';
		$labels->add_new = 'Adicionar Postagens';
		$labels->add_new_item = 'Adicionar Postagens';
		$labels->edit_item = 'Editar Postagenss';
		$labels->new_item = 'Novidades';
		$labels->view_item = 'Ver Postagens';
		$labels->search_items = 'Buscar Postagenss';
		$labels->not_found = 'Não há nenhum item em Postagens';
		$labels->not_found_in_trash = 'Não há nenhum item em Notícias na lixeira';
	}
add_action( 'init', 'change_post_object_label' );
add_action( 'admin_menu', 'change_post_menu_label' );
// Fim - Mudar o Slug Postagens

// Paginação
function wordpress_pagination() {
	global $wp_query;
	$big = 999999999;
	echo paginate_links( array(
	      'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	      'format' => '?paged=%#%',
	      'current' => max( 1, get_query_var('paged') ),
	      'type'>'list',
	     'prev_text' => '<span>Anterior</span>',
		 'next_text' => '<span>Próximo</span>',
	      'total' => $wp_query->max_num_pages
	) );
}
// Fim - Paginação


add_action('init', 'set_new_author_base');
	function set_new_author_base() {
    global $wp_rewrite;
    $author_slug = 'autor';
    $wp_rewrite->author_base = $author_slug;
}
