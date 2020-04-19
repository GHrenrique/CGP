<?php
get_header();
the_post();
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
?>

<h1 class="titulos">
  <div class="container">
    <?php single_cat_title(); ?>
  </div>
</h1>

<nav class="resultados-info navbar navbar-light bg-faded text-xs-center">
  <div class="container">
    <ul class="nav nav-inline">
      <?php wp_list_categories( array(
        'hide_empty' => 1,
        'title_li' =>  '',
        'orderby' => 'name'
        ) ); ?>
      </ul>
    </div>
  </nav>

  <div class="container">

    <div class="row">
      <?php
      $currentCategory = single_cat_title("", false);
      $args = array(
        'category_name' => $currentCategory,
        'paged' => $paged
        );
      $wp_query = new WP_Query( $args );
      while ( $wp_query->have_posts() ) : $wp_query->the_post();
      ?>


      <div class="offset-lg-2 col-lg-8 col-xs-12">
        <div class="card">
          <?php the_post_thumbnail( 'slideshow', array( 'class' => 'card-img-top' ) ); ?>
          <div class="card-block">
            <h4 class="card-title"><?php the_title(); ?></h4>
            <p class="card-text"><?php the_excerpt(); ?></p>
            <p class="card-text"><small class="text-muted"><?php the_time('j \d\e F \d\e Y') ?></small></p>
            <p class="card-text">
              <a class="nav-link" href="<?php the_permalink(); ?>">Leia Mais</a>
            </p>
          </div>
        </div>
      </div>

    <?php endwhile; ?>
  </div>

  <div class="row">
    <div class="offset-lg-2 col-lg-8 col-xs-12">
      <?php if ($wp_query->max_num_pages > 1) : ?>

        <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
          <ul class="nav navbar-nav">
            <li class="pull-xs-left"><?php previous_posts_link(__('&larr; Postagens Mais Novas', 'roots')); ?></li>
            <li class="pull-xs-right"><?php next_posts_link(__('Postagens Anteriores &rarr;', 'roots')); ?></li>
          </ul>
        </nav>

      <?php endif; ?>
    </div>
  </div>

</div>

<?php include 'footer.php' ?>
