
 <div class="three columns">
                    <aside class="aside">

                      <div class="aside__urgent-news">
                        <h5>
                          <?php echo esc_html( get_the_title($post = 105) ); 
                          ?>
                        </h5>
                        <h6><?php echo apply_filters('the_content', get_post_field('post_content', $post_id=105));?>
                          </h6>                     
                      </div>

               

                        <div class="aside__advert">
                                                <p>jakas reklama</p>
                                              </div>

                  <div class="hide-me-mobile">
                      <div class="aside__column-nav">
                  <?php 

                  $args = array (
                    'theme_location' => 'sidebar',
                    'after' => '<hr>'

                  ); 

                  ?>

                  <?php wp_nav_menu( $args ); ?>
                  
                        </div>


                                               </div>

                                            
                                              <div class="aside__advert">
                                                <p>jakas reklama</p>
                                              </div>
                                             
                           </aside>
                </div>
                      



 <div class="nine columns">
      <article class="main-content">