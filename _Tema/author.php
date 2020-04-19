<?php
get_header();

$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));

// echo "<pre>";
// print_r($curauth);
// echo "</pre>";
?>
<h1 class="titulos">
  <div class="container">
    <?php echo $curauth->display_name; ?>
  </div>
</h1>

<div class="container">

    <div class="row">

    	<div class="col-lg-2 col-sm-2">
    		<?php
		    	$email = $curauth->user_email;
				$default = "https://www.gravatar.com/avatar/";
				$size = 150;
				$grav_url = "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;
		    ?>
    		<img class="img-rounded" src="<?php echo $grav_url; ?>" alt="" />
    	</div>

    	<div class="col-lg-10 col-sm-10">
    		<h2>Perfil</h2>
		    <p><b>Website ─ </b><a href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a></p>
		    <p><b>E-mail ─ </b><?php echo $curauth->user_email; ?></p>
		    <p><b>Biografia ─ </b>
		    <?php echo $curauth->user_description; ?></p>
    	</div>


    </div>


    <br><br><br>
    <h3 class="text-muted">Últimos posts desse autor . . .</h3>
    <br><br><br>



		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="card">
              <?php the_post_thumbnail('thumbmini', array('class' => 'card-img-top')); ?>
              <div class="card-block">
                <h4 class="card-title"><?php the_title(); ?></h4>
                <p class="card-text"><span class="bg-default"><?php the_category( '</span>&nbsp;&nbsp&nbsp;&nbsp;' ); ?></span></p>
                <p class="card-text"><small class="text-muted"><a href="<?php the_permalink() ?>" class="btn btn-outline-danger btn-sm">Leia o Post Completo</a></small></p>
              </div>
            </div>

        <?php endwhile; else: ?>
        <p><?php _e('Eita, esse cara ainda não postou nada.'); ?></p>
    	<?php endif; ?>




</div>

<?php

get_footer();
 ?>
