<?php
get_header();
the_post();
/*
Template Name: Estudos e Publicações
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
	        font-size: 25px;
    text-align: center;
	}
	.lista-conteudo {
	    background: #ffffff;
	    padding-left: 0px;
	    color: #777777 !important;
	}
	.lista-conteudo a {
		color: #71A72D !important;
	}
	.content-p {
		color: #999999;
		margin-bottom: 50px;
	}
	.btn-final a {
		    border: 1px solid;
    padding: 5px;
    padding-left: 20px;
    padding-right: 20px;
    border-radius: 3px;
	}
	.seta-baixo:before {
  content: "";
    display: inline-block;
    vertical-align: middle;
    width: 0;
    height: 0;
    border-left: 15px solid transparent;
    border-right: 15px solid transparent;
    border-top: 15px solid #71A72D;
    margin: 0 auto;
    margin-top: -23px;
    margin-left: 48%;
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
      $args = array( 'post_type' => 'estudospubli',
              'posts_per_page' =>'-1'
              );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) :
      $loop->the_post();
      array_push($postexibidos, $post->ID);
      
    ?>


    <div class="col-lg-6">
		<div class="row">
			<div class="col-lg-12">
				<div class="topo-lista-conteudo">
					<div class="row">
						<div class="col-lg-12">
							<?php the_title(); ?>
						</div>
					</div>	
				</div>
				<span class="seta-baixo"></span>
			</div>

			<div class="col-lg-12">
				<div class="lista-conteudo">
					<?php the_content(); ?>
					<hr><p class="text-right btn-final"><a href="<?php the_permalink(); ?>">Leia Mais</a></p>
				</div>
			</div>
		</div>
	</div>

	<?php
	endwhile;
	?>


</div>

</div></div>

<?php get_footer(); ?>
