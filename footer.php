   </article>
    </div>   </div> </div>

    
                      <div class="aside__column-nav show-me-mobile">
                          <div class="aside__box aside__schedule">
                            <div class="aside__icon"><i class="fa fa-3x fa-calendar" aria-hidden="true"></i></div>
                            <div class="aside__box-content">Plan lekcji</div>
                        </div>
                      <div class="aside__box aside__payments">
                            <div class="aside__icon"><i class="fa fa-3x fa-money" aria-hidden="true"></i></div>
                            <div class="aside__box-content">Płatności</div>
                        </div>
                        <div class="aside__box aside__car-park">
                            <div class="aside__icon"><i class="fa fa-3x fa-car" aria-hidden="true"></i></div>
                            <div class="aside__box-content">Parking</div>
                        </div>
                        <div class="aside__box aside__plan">
                            <div class="aside__icon"><i class="fa fa-3x fa-map" aria-hidden="true"></i></div>
                            <div class="aside__box-content">Plan szkoły</div>
                        </div>
                            <div class="aside__box aside__extra-classes">
                            <div class="aside__icon"><i class="fa fa-3x fa-futbol-o" aria-hidden="true"></i></div>
                            <div class="aside__box-content">Zajęcia pozalekcyjne</div>
                        </div>
                        </div>
                    


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
            <p>Copyright &copy;<?php echo date('Y'); ?> PSS. All rights reserved</p>
        </div></div>
    </footer>

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