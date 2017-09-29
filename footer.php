   </article>
    </div>   </div> </div>

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


          <?php wp_nav_menu($args); ?>
        </div>
        </div>
        <div class="footer__copyright row">
        <div class="twelve columns">
            <p>Copyright &copy;<?php echo date('Y'); ?> PSS. All rights reserved</p>
            <p style="text-align: right; padding-right: 15px">Proudly donated by Michał Kolek from <a href="http://www.WebServiceDev.co.uk" alt="link do www.webservicedev.co.uk">www.WebServiceDev.co.uk</a></p>
        </div></div>
    </footer>

    <div class="modal">
      <h2>Get in Touch</h2>
    </div>

        <script src="App.js"></script>
        <script> function restoreAndSkipContent() {
  			var hidden = document.getElementsByClassName('skip-me')[0];
  			hidden.classList.add('unhide');
  			window.scroll(500, hidden.clientHeight-80);
			};
			restoreAndSkipContent();
		</script>
    <!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<?php wp_footer(); ?>
</body>
</html>