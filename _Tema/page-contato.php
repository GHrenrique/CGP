<?php
get_header();
the_post();
/*
Template Name: Contato
*/
?>
<base href="<?php echo esc_url( home_url( '/' ) ); ?>">

<h1 class="titulos">
  <div class="container">
    <?php the_title(); ?>
  </div>
</h1>

<div id="map"></div>


<script>
  var map;
  function initMap() {
    var myLatLng = {lat: <?php echo lat;?>, lng: <?php echo log;?>};

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 16,
      scrollwheel: false,
      center: myLatLng
    });

    var marker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      draggable: true,
      animation: google.maps.Animation.DROP,
      title: '<?php bloginfo('name');?> - <?php echo $enderecoconfig;?>'
    });
  }

  function toggleBounce() {
    if (marker.getAnimation() !== null) {
      marker.setAnimation(null);
    } else {
      marker.setAnimation(google.maps.Animation.BOUNCE);
    }
  }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZdRQB1rGGJJgEZ6iUluKDrx5mEBJbzHM&callback=initMap"
async defer></script>

<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

<div class="container content-pages">
  <div class="row">
    <div class="col-lg-6">
      <?php echo do_shortcode('[contact-form-7 id="39" title="Página de Contato"]'); ?>
    </div>

    <div class="col-lg-6 text-xs-center">
      <h4><?php the_excerpt();?></h4>
      <div class="lead"><?php the_content();?></div>
      <hr>
      <h5 class="lead">
        <?php echo endereco; ?><br>
        <?php echo endereco2;?><br>
        <?php echo telefone;?><br><br>
        <?php echo email;?><br>
      </h5>
    </div>

  </div>
</div>


<?php get_footer(); ?>
