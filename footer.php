   </article>
    </div>   </div> </div>


<div class="wrapper contact-mobile">
   <div class="modal-mobile">
      <div class="moda-mobile__inner">
        <h2>Kontakt</h2>
        <div class="row wrapper">
          <div class="four columns">
            <p><?php the_field('lewa_kolumna', $post_id=17); ?></p>
          </div>   
          <div class="four columns">
            <p><strong>Formularz kontaktowy</strong></p>
            <?php echo do_shortcode( '[contact-form-7 id="185" title="Formularz 1"]' ); ?>   
          </div>
          <div class="four columns">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6369.7277580509698!2d-0.22281160979302647!3d52.58180610884098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x19aebadd738fdc20!2sNicolas+Copernicus+Polish+Saturday+School+in+Peterborough!5e0!3m2!1spl!2suk!4v1506682679164&z=15" width="340" height="300" frameborder="0" style="border:1px solid black" allowfullscreen></iframe>
            <p><strong>Adres:</strong>
            St. John Fisher High School
            Park Lane
            Peterborough
            PE1 5JN</p>
          </div>
        </div>
        <div class="row wrapper">
          <div class="six columns">
            <div class="social-icons">
              <a href="#" class="social-icons__icon"><i class="fa fa-facebook" aria-hidden="true"></i></a>
              <a href="#" class="social-icons__icon"><i class="fa fa-envelope" aria-hidden="true"></i></a>
              <a href="tel:+447840372465" class="social-icons__icon"><i class="fa fa-phone-square" aria-hidden="true"></i></a>
            </div>
          </div>
        <div class="six columns">
          <?php the_field('prawa_kolumna', $post_id=17); ?>
        </div>
       </div>
      </div>
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


          <?php wp_nav_menu($args); ?>
        </div>
        </div>
        <div class="footer__copyright row">
        <div class="twelve columns">
            <p>Copyright &copy; <?php echo date('Y'); ?> PSS. All rights reserved</p>
            <p style="text-align: right; padding-right: 15px">Proudly donated by Michał Kolek from <a href="http://www.WebServiceDev.co.uk" alt="link do www.webservicedev.co.uk">www.WebServiceDev.co.uk</a></p>
        </div></div>
    </footer>

    <div class="modal">
      <div class="modal__inner">
        <h2>Kontakt</h2>
        <div class="row wrapper">
          <div class="four columns">
            <p><?php the_field('lewa_kolumna', $post_id=17); ?></p>
          </div>   
          <div class="four columns">
            <p><strong>Formularz kontaktowy</strong></p>
            <?php echo do_shortcode( '[contact-form-7 id="185" title="Formularz 1"]' ); ?>   
          </div>
          <div class="four columns">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6369.7277580509698!2d-0.22281160979302647!3d52.58180610884098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x19aebadd738fdc20!2sNicolas+Copernicus+Polish+Saturday+School+in+Peterborough!5e0!3m2!1spl!2suk!4v1506682679164&z=15" width="400" height="300" frameborder="0" style="border:1px solid black" allowfullscreen></iframe>
            <p><strong>Adres:</strong>
            St. John Fisher High School
            Park Lane
            Peterborough
            PE1 5JN</p>
          </div>
        </div>
        <div class="row wrapper">
          <div class="six columns">
            <div class="social-icons">
              <a href="#" class="social-icons__icon"><i class="fa fa-facebook" aria-hidden="true"></i></a>
              <a href="#" class="social-icons__icon"><i class="fa fa-envelope" aria-hidden="true"></i></a>
              <a href="tel:+447840372465" class="social-icons__icon"><i class="fa fa-phone-square" aria-hidden="true"></i></a>
            </div>
          </div>
        <div class="six columns">
          <?php the_field('prawa_kolumna', $post_id=17); ?>
        </div>
       </div>
      </div>
    <div class="modal__close">X
    </div>
    </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/App3.js"></script>
        <script type="text/javascript"> function restoreAndSkipContent() {
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