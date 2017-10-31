   </article>
 </div>   </div> </div>

 
 <div class="wrapper contact-mobile">
   <div class="contact-mobile__outer">
    <div class="contact-mobile__inner">
      <div class="row wrapper">
        <div class="four columns">
          <p><?php the_field('lewa_kolumna', $post_id=17); ?></p>
        </div>   
        <div class="four columns">
          <p><strong>Formularz kontaktowy</strong></p>
          <?php echo do_shortcode( '[contact-form-7 id="185" title="Formularz 1"]' ); ?>   
        </div>
        <div class="four columns">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6369.7277580509698!2d-0.22281160979302647!3d52.58180610884098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x19aebadd738fdc20!2sNicolas+Copernicus+Polish+Saturday+School+in+Peterborough!5e0!3m2!1spl!2suk!4v1506682679164&z=15" width="100%" height="350px" frameborder="0" allowfullscreen></iframe>
          <p><strong>Adres:</strong>
            St. John Fisher High School
            Park Lane
            Peterborough
            PE1 5JN</p>
          </div>
        </div>
        <div class="row wrapper">
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

 <div class="footer__partners--text"><p>Przedsięwzięcie finansowane  od  Stowarzyszenia „Wspólnota Polska” ze środków Kancelarii Senatu RP w ramach opieki nad Polonią i Polakami za granicą w 2016 r.</p></div>
            
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
          
         <div class="footer__copyright row">
          <div class="twelve columns footer__copyright--paragraph">
            <p class="center">Copyright &copy; <?php echo date('Y'); ?> PSS. All rights reserved</p>
            <p class="right">Proudly donated by Michał Kolek <a href="http://www.WebServiceDev.co.uk" alt="link do www.webservicedev.co.uk">www.WebServiceDev.co.uk</a></p>
          </div></div>
        </footer>

        <div class="modal">
          <div class="modal__inner">
             <div class="row wrapper">
              <div class="four columns">
                <?php the_field('lewa_kolumna', $post_id=17); ?>
              </div>   
              <div class="four columns">
              <?php the_field('srodkowa_kolumna', $post_id=17); ?>
              </div>
              <div class="four columns">
              <?php the_field('prawa_kolumna', $post_id=17); ?>
                </div>
              </div>
         
            </div>
            <div class="modal__close">X
            </div>
          </div>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/App3.js"></script>
    
    <!-- End Document
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <?php wp_footer(); ?>

  </body>
  </html>