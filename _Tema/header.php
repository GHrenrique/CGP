<!doctype html>
<html lang="pt-br">
	<head>
		<!-- Meta tags padrões -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">

		<title><?php wp_title(''); ?></title>

		<link href="<?php bloginfo( 'template_directory' ); ?>/animate/animate.css" rel="stylesheet">

		<!-- Meu sass com bootstrap compilado -->
		<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/site.css">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

		<?php wp_head(); ?>
	</head>
<body>

<style type="text/css">
	.nav-brand img {
		width: 170px;
	}
</style>

<nav class="navbar navbar-light" style="background-color: rgb(158,217,255);">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-2">
				<?php if (logo !=""){ ?>
					<a class="nav-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img src="<?php echo logo;?>" alt="">
					</a>
				<?php } else{ ?>
					<a class="nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<h3><?php bloginfo( 'name' ); ?></h3>
					</a>
				<?php }?>
			</div>
			<div class="col-lg-8 text-topo">
				<p class="text-justify">
				Cuidando do bem-estar das pessoas e garantindo os resultados das empresas.<br>
				<b>Porque é preciso estar bem para trabalhar bem.</b>
				</p>
			</div>
			<div class="col-lg-2 hidden-md-down arvore">
				<img src="<?php bloginfo( 'template_directory' ); ?>/images/arvore.png">
			</div>

		</div>
	</div>
</nav>

<nav class="navbar navbar-inverse sticky-top" style="background: url('<?php bloginfo( 'template_directory' ); ?>/images/bar-background.png');">

	<div class="container">		

		<div class="navbar-toggleable-md" id="menumobile">

			<a href="#" class="navbar-toggler btn-block text-center" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    	NAVEGAÇÃO
			  </a>
		
	  		<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<?php /* Navegação Principal */
					wp_nav_menu( array(
						'menu' => 'principal',
						'theme_location' => 'principal',
						'depth' => 10,
						'container' => false,
						'menu_class' => 'nav nav-pills flex-column flex-sm-row',
						// Menu Bootstrap
						'walker' => new wp_bootstrap_navwalker())
					);
				?>	
				</div>		
			</div>
	</div>
</nav>