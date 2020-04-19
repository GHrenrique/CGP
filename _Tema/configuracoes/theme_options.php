<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/sass/siteadmin.css">
<link href="<?php bloginfo( 'template_directory' ); ?>/animate/animate.css" rel="stylesheet">
<div class="siteadmin">

<?php
if(function_exists( 'wp_enqueue_media' )){
	wp_enqueue_media();
}
else {
    wp_enqueue_style('thickbox');
    wp_enqueue_script('media-upload');
    wp_enqueue_script('thickbox');
}

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
    $lastid = $my_posts[0]->ID;

	else:
		global $post;
		$post = array('post_name' => 'configtheme', 'post_status'=> 'private', 'post_type'=>'configthema');
		wp_insert_post( $post, $wp_error );
		$lastid = $wpdb->insert_id;
		update_post_meta($lastid, "header_logo", "");
		update_post_meta($lastid, "enderecoconfig", "");
		update_post_meta($lastid, "enderecoconfig2", "");
		update_post_meta($lastid, "facebook_site", "");
		update_post_meta($lastid, "twitter1", "");
		update_post_meta($lastid, "instagram1", "");
		update_post_meta($lastid, "linkedin1", "");
		update_post_meta($lastid, "diasatende", "");
		update_post_meta($lastid, "horasatende", "");
		update_post_meta($lastid, "emailsite", "");
		update_post_meta($lastid, "telefone", "");
		update_post_meta($lastid, "lat", "");
		update_post_meta($lastid, "log", "");
		update_post_meta($lastid, "paginahome", "");
		update_post_meta($lastid, "landingpage", "nao");
	  update_post_meta($lastid, "codanalytics", "UA-4724658-1");

	endif;

	if($_POST){
		global $post;
		update_post_meta($lastid, "header_logo", $_POST['header_logo']);
		update_post_meta($lastid, "enderecoconfig", $_POST['enderecoconfig']);
		update_post_meta($lastid, "enderecoconfig2", $_POST['enderecoconfig2']);
		update_post_meta($lastid, "facebook_site", $_POST['facebook_site']);
		update_post_meta($lastid, "twitter1", $_POST['twitter1']);
		update_post_meta($lastid, "instagram1", $_POST['instagram1']);
		update_post_meta($lastid, "linkedin1", $_POST['linkedin1']);
		update_post_meta($lastid, "diasatende", $_POST['diasatende']);
		update_post_meta($lastid, "horasatende", $_POST['horasatende']);
		update_post_meta($lastid, "emailsite", $_POST['emailsite']);
		update_post_meta($lastid, "telefone", $_POST['telefone']);
		update_post_meta($lastid, "lat", $_POST['lat']);
		update_post_meta($lastid, "log", $_POST['log']);
		update_post_meta($lastid, "paginahome", $_POST['paginahome']);
		update_post_meta($lastid, "landingpage", $_POST['landingpage']);
		update_post_meta($lastid, "codanalytics", $_POST['codanalytics']);

	?>

	<div class="row animated flipInX" id="alertasalvo">
		<div class="col-lg-12">
			<div class="alert bg-success alert-dismissible fade in" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<p class="lead text-lg-center"><strong>Alterações Salvas!</strong> Você já pode acessar o site e visualizar as novas informações.</p>
			</div>
		</div>
	</div>

	<?php
		}
	?>


<?php
	global $post;
	$lastid = $my_posts[0]->ID;
	$dados = get_post_custom($my_posts[0]->ID);
	$header_logo = $dados["header_logo"][0];
	$enderecoconfig = $dados["enderecoconfig"][0];
	$enderecoconfig2 = $dados["enderecoconfig2"][0];
	$facebook_site = $dados["facebook_site"][0];
	$twitter1 = $dados["twitter1"][0];
	$instagram1 = $dados["instagram1"][0];
	$linkedin1 = $dados["linkedin1"][0];
	$diasatende = $dados["diasatende"][0];
	$horasatende = $dados["horasatende"][0];
	$emailsite = $dados["emailsite"][0];
	$telefone = $dados["telefone"][0];
	$lat = $dados["lat"][0];
	$log = $dados["log"][0];
	$paginahome = $dados["paginahome"][0];
	$landingpage = $dados["landingpage"][0];
	$codanalytics = $dados["codanalytics"][0];
?>

<form action="" method="post">
<input type="hidden" name="idpost" value="<?php echo $lastid;?>" />
<div class="row">

	<div class="col-lg-12">
		<div class="card card-inverse card-primary text-xs-center card100">
			<div class="card-block">
				<blockquote class="card-blockquote">
					<h4 class="card-title">Página de ajustes do site</h4>
					<footer>Por aqui você define o logotipo, localização e todas as informações de uso geral.</footer>
				</blockquote>
			</div>
		</div>
	</div>

	<div class="col-lg-12">

		<div class="card-group">

			<div class="card">
				<div class="card-block">
					<h4 class="card-title">Defina um logotipo</h4>
					<input placeholder="Sem logotipo definido"
					class="header_logo_url form-control form-control-sm" id="urllogo" type="text" name="header_logo"
					size="80" value="<?php echo $header_logo;?>" />
					<p class="card-text"><small class="text-muted">Clique em 'Upload' para definir um Logotipo</small></p>
					<a href="#" class="btn btn-primary header_logo_upload btn-sm">Upload</a>
				</div>
			</div>

			<!-- <div class="card">
				<div class="card-block">
					<h4 class="card-title">Localização</h4>
					<div class="row">
						<div class="col-xs-6">
							<label for=""><small class="text-muted">Latitude</small></label>
							<input placeholder="Ex: 45,32232" id="lat2" type="text" name="lat" value="<?php echo $lat;?>" class="form-control form-control-sm" />
						</div>
						<div class="col-xs-6">
							<label for=""><small class="text-muted">Longitude</small></label>
							<input placeholder="Ex: -34,32232" id="log2" type="text" name="log" value="<?php echo $log;?>" class="form-control form-control-sm" />
						</div>
					</div>
					<p class="card-text"><small class="text-muted">Defina uma latitude e uma longitude para exibir o mapa em uma ou mais páginas</small></p>
				</div>
			</div> -->

			<div class="card">
				<div class="card-block">
					<h4 class="card-title">Manutenção</h4>
					<p class="card-text"><small class="text-muted">
					Em algum momento, você pode estar realizando alterações no site, ou por algum motivo há a necessidade de deixá-lo fora do ar por algum tempo.
					</small></p>

					<label class="c-input c-radio" for="sim">
						<input value="sim" <?php if (!(strcmp('sim', $landingpage))) {echo "checked=\"checked\"";} ?> id="sim" name="landingpage" type="radio">
						<span class="c-indicator"></span>
						Site Publicado
					</label>
					<label class="c-input c-radio" for="nao">
						<input value="nao" <?php if (!(strcmp('nao', $landingpage))) {echo "checked=\"checked\"";} ?> id="nao" name="landingpage" type="radio">
						<span class="c-indicator"></span>
						Em Manutenção
					</label>
				</div>
			</div>

		</div>

        </div>


        <!-- Segundo bloco  -->

<!-- 		<div class="col-lg-12">

			<div class="card-group">
				<div class="card">
					<div class="card-block">
						<h4 class="card-title">Telefone</h4>

						<input class="form-control form-control-sm" placeholder="Ex.: (12) 987 654 321"
						id="telefone" type="text" name="telefone" value="<?php echo $telefone;?>"/>

						<p class="card-text"><small class="text-muted">
							Insira no campo acima, seu principal telefone para contato.
						</small></p>

					</div>
				</div>
				<div class="card">
					<div class="card-block">
						<h4 class="card-title">E-mail</h4>
						<input class="form-control form-control-sm" placeholder="Ex: email@email.com" id="emailsite" type="text" name="emailsite" value="<?php echo $emailsite;?>"/>
						<p class="card-text"><small class="text-muted">
							Defina seu melhor e-mail
						</small></p>
					</div>
				</div>
				<div class="card">
					<div class="card-block">
						<h4 class="card-title">Endereço</h4>
						<input class="form-control form-control-sm" placeholder="Ex: Minha Rua, 500" id="enderecoconfig" type="text" name="enderecoconfig" value="<?php echo $enderecoconfig;?>"/>
						<p class="card-text"><small class="text-muted">
							Digite no campo acima, o nome da rua e o número.
						</small></p>
						<input class="form-control form-control-sm" placeholder="Ex: Vale das Indústrias, SP" id="enderecoconfig2" type="text" name="enderecoconfig2" value="<?php echo $enderecoconfig2;?>"/>
						<p class="card-text"><small class="text-muted">
							Agora informe o bairro, cidade e demais informações de localização.
						</small></p>
					</div>
				</div>
			</div>

		</div> -->


        <!-- Terceiro bloco  -->

		<div class="col-lg-12">

		<div class="card-group">
			<div class="card">
				<div class="card-block">
					<h4 class="card-title">Redes Sociais</h4>
					<p class="card-text"><small class="text-muted">
					Insira nos campos abaixo, os links das suas principais redes sociais.
					Campos não preenchidos serão automaticamente ocultados do site.
					</small></p>

					<div class="row">

						<div class="col-lg-4">
							<input placeholder="Facebook" id="facebook_site" type="text"
							name="facebook_site" value="<?php echo $facebook_site;?>" class="form-control form-control-sm" />
						</div>

						<div class="col-lg-4">
							<input placeholder="Youtube" id="twitter1" type="text"
							name="twitter1" value="<?php echo $twitter1;?>" class="form-control form-control-sm" />
						</div>
<!-- 
						<div class="col-lg-3">
							<input placeholder="Instagram" id="instagram1" type="text"
							name="instagram1" value="<?php echo $instagram1;?>" class="form-control form-control-sm" />
						</div> -->

						<div class="col-lg-4">
							<input placeholder="LinkedIn" id="linkedin1" type="text"
							name="linkedin1" value="<?php echo $linkedin1;?>" class="form-control form-control-sm" />
						</div>

					</div>

				</div>
			</div>

		</div>

		</div>

		<div class="col-lg-12">
			<br>
		</div>
		<div class="col-lg-12">
			<input type="submit" name="button" id="button" value="Salvar Alterações" class="btn btn-success btn-lg btn-block" />
		</div>


  </div>


</form>




<script>
  	jQuery(document).ready(function($) {
  		$('.header_logo_upload').click(function(e) {
  			e.preventDefault();

  			var custom_uploader = wp.media({
  				title: 'Custom Image',
  				button: {
  					text: 'Upload Image'
  				},
  				multiple: false  // Set this to true to allow multiple files to be selected
  			})
  			.on('select', function() {
  				var attachment = custom_uploader.state().get('selection').first().toJSON();
  				$('.header_logo').attr('src', attachment.url);
  				$('.header_logo_url').val(attachment.url);

  			})
  			.open();
  		})
  	});
</script>

<!-- jQuery, tether e bootstrap js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js"></script>


<script type="text/javascript">
$(document).ready(function () {
    setTimeout(function () {
        $('#alertasalvo').slideUp(1500);
    }, 3000);
});

</script>
