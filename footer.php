<footer class="footer">
      <div class="wrapper">
          <div class="footer__partners">
             <a href="https://www.senat.gov.pl">
             	<img src="<?php bloginfo('template_url'); ?>/images/godlo_z_podpisem2.jpg" alt="Godło senatu RP"></a>
             <a href="http://www.wspolnotapolska.org.pl/">
             	<img src="<?php bloginfo('template_url'); ?>/images/wspolnota-polska-logo.jpg" alt="Logo Wspólnoty Polskiej"></a>
             <a href="www.polska-szkola.pl">
             	<img src="<?php bloginfo('template_url'); ?>/images/logo-psk-small.png" alt="Logo Polskiej Szkoły"></a>
                   
           </div>
         </div>
      <div class="footer__list">
            <?php   

            $args = array (
                    'theme_location' => 'footer'

                  ); 

                  ?>


          <?php wp_nav_menu(); ?>
        </div>
        </div>
        <div class="footer__copyright row">
        <div class="twelve columns">
            <p>Copyright &copy;<?php echo date('Y'); ?>PSS. All rights reserved</p>
        </div></div>
    </footer>

        <script src="/temp/scripts/App.js"></script>
    <!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<?php wp_footer(); ?>
</body>
</html>