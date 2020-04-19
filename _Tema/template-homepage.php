<?php



	get_header();



	the_post();



	/*



	  Template Name: Homepage



	*/



?>



<div id="inicio"></div>



<!-- Carousel -->



<div id="carousel-home" class="carousel slide" data-ride="carousel">



	<!-- Indicators -->



	<?php



	//Post Type slideshow



		$numeroslide = "1";



		$args = array( 'post_type' => 'slideshow', 'posts_per_page'=>-1);



		$loop = new WP_Query( $args );



		$numerode = $loop->post_count;



	?>







	<ol class="carousel-indicators hidden-sm-down">



	<?php



	for ($Bolinhas=0; $Bolinhas < $numerode; $Bolinhas++) {



	# code...



	?>



	<li data-target="#carousel-home" data-slide-to="<?php echo $Bolinhas;?>" class="<?php if($Bolinhas == "0"){ echo "active"; } else { echo "";}?>"></li>



	<?php



	}?>







	</ol>







	<!-- Wrapper for slides -->



	<div class="carousel-inner" role="listbox">



	<?php







	while ( $loop->have_posts() ) :



				$loop->the_post();







	?>



	<div class="carousel-item <?php if($numeroslide == "1"){ echo "active"; } else { echo "";}?>"



	style="background: url('<?php the_post_thumbnail_url(); ?>');">







		<!-- <?php the_post_thumbnail('thumbslideshow'); ?> -->


<a class="link-teste" href="<?php the_field('link-slide'); ?>">
		<div class="carousel-caption">



			<div class="container">



			<h1 class="animated fadeInRight"><?php the_title(); ?></h1>









			</div>



		</div>
</a>






	</div>



	<?php



		$numeroslide++;



		endwhile;



	?>







	</div>



</div>



<!-- Fim: Carousel -->







<section class="arvore-home" id="chestnut">



	<div class="container">



  <br><br><br>











		<!-- <div class="row">



			<div class="col-lg-7 text-center">



				<h3>Somos a<br><span class="bg-success">Chestnut</span></h3>



			</div>



			<div class="col-lg-5">



				<p class="lead">



					Acreditamos que para se ter uma boa qualidade de vida



					e uma saúde mental equilibrada, é preciso que todas as



					suas estruturas emocionais estejam em dia.



				</p>



			</div>



		</div> -->



  </div>



    <p class="text-center somos-chesnut">



		<img class="img-arvore" src="<?php the_field('somos-chestnut', '6'); ?>">



    </p>



  <div class="container">



    <br><br><br><br><br><br>



		<h4>Alguns vídeos da <b>Chestnut</b></h4>







		<div class="row">



			<div class="col-lg-4">



				<iframe width="100%" height="195" src="https://www.youtube.com/embed/<?php the_field('depoimento_1', '6'); ?>" frameborder="0" allowfullscreen></iframe>



			</div>



			<div class="col-lg-4">



				<iframe width="100%" height="195" src="https://www.youtube.com/embed/<?php the_field('depoimento_2', '6'); ?>" frameborder="0" allowfullscreen></iframe>



			</div>



			<div class="col-lg-4">



				<iframe width="100%" height="195" src="https://www.youtube.com/embed/<?php the_field('depoimento_3', '6'); ?>" frameborder="0" allowfullscreen></iframe>



			</div>



		</div>



	</div>



</section>















<section class="solucoes-bemestar" id="bemestar">



	<div class="container">



		<h3>Soluções<br><b>em Bem-estar</b></h3>







		<div id="accordion" role="tablist" aria-multiselectable="true">











    <?php



      global $wpdb;



      $postexibidos = array();



      $args = array( 'post_type' => 'bemestar',



              'posts_per_page' =>'-1'



              );



      $loop = new WP_Query( $args );



      while ( $loop->have_posts() ) :



      $loop->the_post();



      array_push($postexibidos, $post->ID);







    ?>















  <div class="card card-solucoes">



    <div class="card-header" role="tab" id="headingOne">



      <h5 class="mb-0">



        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne<?php echo $post->ID ?>" aria-expanded="true" aria-controls="collapseOne<?php echo $post->ID ?>">



          <?php the_title(); ?>



        </a>



      </h5>



    </div>



  </div>







    <div id="collapseOne<?php echo $post->ID ?>" class="collapse" role="tabpanel" aria-labelledby="headingOne">



      <div class="lead">



        <?php the_content();?>



        <div class="row justify-content-md-center marque-visita">



        		<div class="col-lg-4">



        			<a data-toggle="modal" data-target="#bemestarmodal<?php echo $post->ID ?>" class="btn btn-success btn-lg btn-block">MARQUE UMA VISITA</a>



        		</div>



        		<div class="col-lg-4">



        			<h6 class="green">ou entre em contato<br> pelo <b>11 4420-4200</b></h6>



        		</div>



        	</div>



      </div>



    </div>



















  <div class="modal fade" id="bemestarmodal<?php echo $post->ID ?>" tabindex="-1" role="dialog" aria-labelledby="bemestarmodal<?php echo $post->ID ?>" aria-hidden="true">



  <div class="modal-dialog">



    <div class="modal-content">



      <div class="modal-header">



        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>



        <h4 class="modal-title" id="myModalLabel">Marque uma Visita</h4>



      </div>



      <div class="modal-body">



        <div class="form-group">



        <select class="custom-select form-control" disabled>



          <option selected>QUERO SABER + SOBRE SOLUÇÕES EM BEM-ESTAR</option>



        </select>



        <?php echo do_shortcode('[contact-form-7 id="55" title="Soluções em bem-estar"]'); ?>



      </div>



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



















	</div>



</section>











<section class="roi-homepage" id="outcomes">



<br>



  <div class="container">



  <img src="<?php the_field('outcomes-txt', '6'); ?>" style="max-width: 190px;">



  </div>



	<img class="img-roi" src="<?php the_field('outcomes-roi', '6'); ?>">



	<div class="container">



  <br><br>



		<h3><?php the_field('outcomes-frase', '6'); ?>



    </h3>



  <br><br>















  <div id="accordion2" role="tablist" aria-multiselectable="true">























	<div class="row text-center roi-itens">











		<div class="col-lg-4">







      <a href="#exampleModalLong1" data-toggle="modal" data-target="#exampleModalLong1">



			<div class="lead">



				<?php the_field('item-1-roi', '6'); ?>



			</div>



			<h3><?php the_field('item-1-roi-1', '6'); ?></h3>



      </a>







		</div>







<div class="modal fade fade2" id="exampleModalLong1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">



<nav class="navbar sticky-top navbar-light bg-faded">



   <button type="button" class="close" data-dismiss="modal" aria-label="Close">



          Fechar Janela



        </button>



</nav>



  <div class="modal-dialog modal-lg colap-absolut text-left" role="document">







        <h2><h3><?php the_field('item-1-roi-1', '6'); ?></h3></h2><hr>



        <div class="lead">



        <?php the_field('conteudo-item-1', '6'); ?>



        <div class="row justify-content-md-center marque-visita">



            <div class="col-lg-6">



            <a data-toggle="modal" data-target="#modalroi1" class="btn btn-info btn-lg btn-block">MARQUE UMA VISITA</a>



            </div>



            <div class="col-lg-6">



              <h6 class="green">ou entre em contato<br> pelo <b>11 4420-4200</b></h6>



            </div>



          </div>



      </div>







  </div>



</div>











        <div class="modal fade" id="modalroi1" tabindex="-1" role="dialog" aria-labelledby="modalroi1" aria-hidden="true">



  <div class="modal-dialog">



    <div class="modal-content">



      <div class="modal-header">



        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>



        <h4 class="modal-title" id="myModalLabel">Marque uma Visita</h4>



      </div>



      <div class="modal-body">



        <div class="form-group">



        <select class="custom-select form-control" disabled>



          <option selected>Serviços de Soluções em Outcomes</option>



        </select>



        <?php echo do_shortcode('[contact-form-7 id="77" title="Outcomes Wellcast"]'); ?>



      </div>



      <div class="modal-footer">



        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar Janela</button>



      </div>



    </div>



  </div>



</div>



</div>



















    <?php



      global $wpdb;



      $postexibidos = array();



      $args = array( 'post_type' => 'solucoesroi',



              'posts_per_page' =>'-1'



              );



      $loop = new WP_Query( $args );



      while ( $loop->have_posts() ) :



      $loop->the_post();



      array_push($postexibidos, $post->ID);







    ?>































		<div class="col-lg-4">















    <a href="#exampleModalLong<?php echo $post->ID ?>" data-toggle="modal" data-target="#exampleModalLong<?php echo $post->ID ?>">



			<i class="<?php the_field('icone-roi'); ?>" aria-hidden="true"></i>











			<h3><?php the_title(); ?></h3>



			<p class="small">



        <?php the_field('descricao-roi'); ?>



			</p>



      </a>



		</div>







<!-- Modal -->



<!-- <div class="modal fade fade2" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">



  <div class="container text-left colap-absolut" role="document">



  <button type="button" class="close" data-dismiss="modal" aria-label="Close">



          <span aria-hidden="true">&times;</span>



        </button>







  </div>



</div> -->







<div class="modal fade fade2" id="exampleModalLong<?php echo $post->ID ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">



<nav class="navbar sticky-top navbar-light bg-faded">



   <button type="button" class="close" data-dismiss="modal" aria-label="Close">



          Fechar Janela



        </button>



</nav>



  <div class="modal-dialog modal-lg colap-absolut text-left" role="document">







        <h2><?php the_title(); ?></h2><hr>



        <div class="lead">



        <?php the_content();?>



        <div class="row justify-content-md-center marque-visita">



            <div class="col-lg-6">



            <a data-toggle="modal" data-target="#modalroi" class="btn btn-info btn-lg btn-block">MARQUE UMA VISITA</a>



            </div>



            <div class="col-lg-6">



              <h6 class="green">ou entre em contato<br> pelo <b>11 4420-4200</b></h6>



            </div>



          </div>



      </div>







  </div>



</div>











    <div class="modal fade" id="modalroi" tabindex="-1" role="dialog" aria-labelledby="modalroi" aria-hidden="true">



  <div class="modal-dialog">



    <div class="modal-content">



      <div class="modal-header">



        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>



        <h4 class="modal-title" id="myModalLabel">Marque uma Visita</h4>



      </div>



      <div class="modal-body">



        <div class="form-group">



        <select class="custom-select form-control" disabled>



          <option selected>Serviços de Soluções em Outcomes</option>



        </select>



        <?php echo do_shortcode('[contact-form-7 id="77" title="Outcomes Wellcast"]'); ?>



      </div>



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











































	</div>



</div>



























































































































































































	</div>



</section>







<section class="contato-home credenciado-home" id="portal-do-credenciado">



  <div class="container">



    <div class="row">







      <div class="col-lg-6">



        <h3>Acesse o<br><b>Portal do Credenciado</b></h3>



        <?php echo do_shortcode('[lwa]'); ?>



      </div>







      <div class="col-lg-6 segunda-coluna" style="



          border-left: 1px solid;



          border-color: rgba(255,255,255,.3);



      ">



        <h3>QUERO ME CREDENCIAR</b></h3>



        <p>



          <b>



            Tem interesse em fazer parte da nossa rede de credenciados?



          </b><br>



            Confira os requisitos necessários e preencha o



            formulário de interesse para solicitar o credenciamento.



        </p><br>



        <p><a href="#" data-toggle="modal" data-target="#form-credenciado" class="btn btn-success btn-lg btn-block">SOLICITAR CREDENCIAMENTO</a><br>

        <small>O envio do formulário não constitui obrigatoriedade de cadastramento. Faremos uma avaliação prévia das informações e entraremos em contato caso elas sigam nossos critérios e atendam às necessidades de credenciamento.</small></p>







      </div>







    </div>



  </div>



</section>











<section class="contato-home" id="contato">



	<div class="container">







		<div class="row">



			<div class="col-lg-6">



				<h3>Entre<br><b>em contato</b></h3>







			<?php echo do_shortcode('[contact-form-7 id="4" title="Contato"]'); ?>







				   <hr><p style="

    color: #50742B !important;

"><b>



				   	<?php the_field('endereço-um', '6'); ?><br>



				   	<?php the_field('endereço-dois', '6'); ?>



				   </b></p>







				   <h4 style="

    color: #50742B !important;

">



				   	<b><?php the_field('telefone-cgp', '6'); ?></b>



				   </h4>



			</div>



			<div class="col-lg-6">

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.994038675172!2d-46.70074298502189!3d-23.568657584679276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce57a6347b6bb3%3A0x52c0f4bed952069!2sR.+Pais+Leme%2C+215+-+Pinheiros%2C+S%C3%A3o+Paulo+-+SP%2C+05424-150!5e0!3m2!1spt-BR!2sbr!4v1521829555107" width="100%" height="650" frameborder="0" style="border:0" allowfullscreen></iframe>









			</div>



		</div>



	</div>



</section>



















































<!-- MODAL FORMULÁRIO DO CREDENCIADO -->







<div id="form-credenciado" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">



  <div class="modal-dialog modal-lg">



    <div class="modal-content">



       <div class="modal-header">



        <h5 class="modal-title" id="exampleModalLabel">SOLICITAÇÃO DE CREDENCIAMENTO</h5>



        <button type="button" class="close" data-dismiss="modal" aria-label="Close">



          <span aria-hidden="true">&times;</span>



        </button>



      </div>



      <div class="modal-body">



        <h4 class="lead"> Preencha os dados abaixo para solicitar o credenciamento na rede de provedores da Chestnut Brasil. Lembrando que o envio do formulário não constitui obrigatoriedade de cadastramento. Faremos uma avaliação prévia das informações e entraremos em contato caso elas sigam nossos critérios e atendam às necessidades de credenciamento.</h4>

        <hr>



        <?php echo do_shortcode('[contact-form-7 id="38" title="Seja um Credenciado"]'); ?>



      </div>



      <div class="modal-footer">



        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar Janela</button>



      </div>



    </div>



  </div>



</div>



<!-- FIM: FORMULÁRIO DO CREDENCIADO -->







<?php get_footer(); ?>
