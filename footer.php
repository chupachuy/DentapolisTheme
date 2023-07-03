  <footer class="footer has-cards">
    <div class="container">
      <div class="row row-grid align-items-center my-md">
        <div class="col-lg-8">
          <h3 class="text-primary font-weight-light mb-2">¿Necesitas alguno de estos tratamientos dentales?</h3>
			     <br />
			 <h5 class="text-black">
    				 <span><p>
    					 Todo lo que puedas hacer por tus dientes hoy, lo agradecerás mañana... Descubre nuestros increíbles resultados, de la mano de un especialista con más de 8 años de experiencia en el ramo de la ortodoncia estética. <b>Agenda tu consulta con solo un click</b>
    					 </p></span> 
    			  </h5>
           <button class="btn btn-icon btn-3 btn-success" type="button">
                <span class="btn-inner--icon"><i class="fa fa-whatsapp fa-2x"></i></span>
                <span class="btn-inner--text">Agendar Cita por WhatsApp</span>
            </button>
            <br />
            <br />
         
        </div>
        <div class="col-lg-4 text-lg-center btn-wrapper">
          <button target="_blank" href="#" rel="nofollow" class="btn btn-icon-only btn-twitter rounded-circle" data-toggle="tooltip" data-original-title="Follow us">
            <span class="btn-inner--icon"><i class="fa fa-twitter"></i></span>
          </button>
          <button target="_blank" href="#" rel="nofollow" class="btn-icon-only rounded-circle btn btn-facebook" data-toggle="tooltip" data-original-title="Like us">
            <span class="btn-inner--icon"><i class="fab fa-facebook"></i></span>
          </button>
          <button target="_blank" href="#" rel="nofollow" class="btn btn-icon-only btn-dribbble rounded-circle" data-toggle="tooltip" data-original-title="Follow us">
            <span class="btn-inner--icon"><i class="fa fa-dribbble"></i></span>
          </button>
          <button target="_blank" href="#" rel="nofollow" class="btn btn-icon-only btn-github rounded-circle" data-toggle="tooltip" data-original-title="Star on Github">
            <span class="btn-inner--icon"><i class="fa fa-github"></i></span>
          </button>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-4 footer-logo">
          <img src="<?php bloginfo('template_url'); ?>/img/Logotipo.png">
        </div>
        <div class="col-md-4">
          <h3>Dirección</h3>
          <p>Tuxpan 8-piso 4, Roma Sur, Cuauhtémoc, 06760 Ciudad de México - Frente al mbus Chilpancingo</p>
          <p>Telefono: </p>
          <p>Email: </p>
        </div>
        <div class="col-md-4">
          <h3>Dentalopolis</h3>
          <div class="menu-footer">
            <?php
              wp_nav_menu( array(
                'theme_location' => 'footer-menu',
                'depth' => 2,
                'container' => false,
                'menu_class' => 'nav navbar-nav',
                'fallback_cb' => 'wp_page_menu',
                )
              );
            ?>
          </div>           
        </div>
      </div>
    </div>
  </footer>
  <!-- COPY RIGHTS -->
  <div class="copyright pt-3 pb-4 text-center">
      &copy; <?php echo Date('Y'); ?> <a href="#" target="_blank"> Dentalopolis</a>
  </div>
  <!-- COPY RIGTHS -->
  </div>
  <!--   Core JS Files   -->
  <script src="<?php bloginfo('template_url'); ?>/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/core/popper.min.js" type="text/javascript"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="<?php bloginfo('template_url'); ?>/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="<?php bloginfo('template_url'); ?>/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/plugins/moment.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/plugins/datetimepicker.js" type="text/javascript"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/plugins/bootstrap-datepicker.min.js"></script>
  <!-- Control Center for Argon UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/argon-design-system.min.js?v=1.2.2" type="text/javascript"></script>
  <?php wp_footer(); ?>
</body>

</html>