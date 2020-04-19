<?php
// Configurações básicas e Post Types
require_once('configuracoes/itens_functions.php');
require_once('configuracoes/post_types.php');
require_once('configuracoes/landingpage.php');
// Fim - Configurações básicas e Post Types

function my_function_admin_bar(){
    return false;
}
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

//Global VARs
global $post;
global $dados;
$the_slug = 'configtheme';
$args = array(
  'name'        => $the_slug,
  'post_type'   => 'configthema',
  'post_status' => 'private',
  'numberposts' => 1
);
$my_posts = get_posts($args);
if( $my_posts ) :
  $dados = get_post_custom($my_posts[0]->ID);
  $header_logo =      $dados["header_logo"][0];
  define('logo',      $dados["header_logo"][0]);
  define('endereco',    $dados["enderecoconfig"][0]);
  define('endereco2',   $dados["enderecoconfig2"][0]);
  define('email',     $dados["emailsite"][0]);
  define('telefone',    $dados["telefone"][0]);
  define('facebook',    $dados["facebook_site"][0]);
  define('twitter',     $dados["twitter1"][0]);
  define('instagram',   $dados["instagram1"][0]);
  define('linkedin',    $dados["linkedin1"][0]);

  define('lat',$dados["lat"][0]);
  define('log', $dados["log"][0]);
endif;

// Sistema de Informações
add_action( 'admin_menu', 'register_my_custom_menu_page' );
function register_my_custom_menu_page(){
  add_menu_page( 'Informações', 'Informações', 'manage_options', 'informacoes', 'my_custom_menu_page', get_stylesheet_directory_uri().'/images/icone_admin.png', 2 );
}

function my_custom_menu_page(){
  include_once("configuracoes/theme_options.php");
}
// Fim - Sistema de Informações


// Resumo PHP
function criaResumo($texto, $limite){
  $contador = strlen($texto);
  if ( $contador >= $limite ) {
    $texto = substr($texto, 0, strrpos(substr($texto, 0, $limite), ' ')) . '...';
    return $texto;
  }
  else{
  return $texto;
  }
}

function restringir_login(){ global $current_user; get_currentuserinfo(); if ($current_user->user_level < 4) { 
	wp_redirect( get_bloginfo('http://cgpbrasil.nonio.com.br/wp-admin/') ); exit; } } 
	add_action('admin_init', 'restringir_login', 1);









