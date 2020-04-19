<div class="stickyfooter"></div>

<footer>

<br><br><br>



<div class="container">

  <div class="row">

    <div class="col-lg-5">

      <p class="text-lg-right">

      

    <img src="<?php the_field('logotipo-rodape', '6'); ?>">

  </p>

    </div>

    <div class="col-lg-7">

    <br>

      <p class="text-white">

      <?php the_field('txt-rodape-um', '6'); ?><br>

        <b>

        <?php the_field('txt-rodape-dois', '6'); ?></b>

        </p>

    </div>

  </div><br><br>

    <h4 class="text-center text-white">Siga as redes sociais da Chestnut Brasil!</h4>

            <ul class="list-inline text-center text-white icones-sociais">

            <li class="list-inline-item">

              <?php if (facebook !=""){ ?>

              <a href="<?php echo facebook;?>">

                <i class="text-white fa fa-facebook" aria-hidden="true"></i>

              </a>

              <?php } ?>

            </li>



            <li class="list-inline-item">

              <?php if (twitter !=""){ ?>

              <a href="<?php echo twitter;?>">

                <i class="text-white fa fa-youtube" aria-hidden="true"></i>

              </a>

              <?php } ?>

            </li>



<!--             <li class="list-inline-item">

              <?php if (instagram !=""){ ?>

              <a href="<?php echo instagram;?>">

                <i class="text-white fa fa-instagram" aria-hidden="true"></i>

              </a>

              <?php } ?>

            </li> -->



            <li class="list-inline-item">

              <?php if (linkedin !=""){ ?>

              <a href="<?php echo linkedin;?>">

                <i class="text-white fa fa-linkedin" aria-hidden="true"></i>

              </a>

              <?php } ?>

            </li>

          </ul>

</div>

  



  



<br><br><br>



<?php /* Navegação Principal */

          wp_nav_menu( array(

            'menu' => 'principal',

            'theme_location' => 'principal',

            'depth' => 10,

            'container' => false,

            'menu_class' => 'nav  justify-content-center hidden-md-down',

            // Menu Bootstrap

            'walker' => new wp_bootstrap_navwalker())

          );

        ?>  



<br><br><br>



  <div class="copyright">

    <div class="container text-center">

      <div class="row">



        <div class="col-lg-12">

          Chestnut Global Partners do Brasil | 2017 - Todos os direitos reservados

        </div>





        </div>

      </div>

    </div>

  </footer>



  <!-- jQuery, tether e bootstrap js -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>



  <!-- Meus scripts principais -->

  <script src="<?php bloginfo( 'template_directory' ); ?>/js/jquery-site.js"></script>

  <script src="<?php bloginfo( 'template_directory' ); ?>/js/javascript-site.js"></script>





  <script>

    var $doc = $('html, body');

    $('.nav-link').click(function() {

        $doc.animate({

            scrollTop: $( $.attr(this, 'href') ).offset().top

        }, 500);

        return false;

    });

  </script>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>

  <script>

    new WOW().init();

  </script>



<script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

 

  ga('create', 'UA-99296248-1', 'auto');

  ga('send', 'pageview');

 

</script>





  <?php wp_footer(); ?>

</body>

</html>

