
                <div class="directions">
                    <h2>Направления деятельности</h2>
                    <div class="direction-blocks">

                    <?php
                   $args = array(
                    'hierarchical' => 1,
                    'child_of'     => 107,
                    'parent'       => -1,
                    'post_type'    => 'page',
                    'post_status'  => 'publish',
                  ); 
                  $pages = get_pages( $args );
                  foreach( $pages as $post ){
                    setup_postdata( $post );
                    ?>  
                    <div class="directions-block">
                            <h3><?php the_title(); ?></h3>
                            <?php the_post_thumbnail( 'directions-preview', '' ) ?>
                        </div>
                    <?php
                  }  
                  wp_reset_postdata();
                    ?>
                    </div>
                </div>
            </div>
            <!-- /.col-md-8 -->
        </div>
        <!-- /.row -->
    </div>
<footer class="foter">
      <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <div class="copy">
                  <p>
                    Copyright © 2020
                  </p>
                  <a href="" class="footer-policy">Политика конфиденциальности</a>
                  <small>
                      <?php the_field('law_text', 18); ?>
                  </small>
                </div>
              </div>
              <!-- /.col-md -->
              <div class="col-xl-2 col-6">
             <?php
             wp_nav_menu( [
              'menu_class'  =>  'footer_menu',
              'theme_location'  => '',
              'menu'            => 'top-nav-menu', 
              'container'       => 'ul', 
              'container_class' => 'footer_menu', 
              'container_id'    => '',
              'menu_id'         => '',
              'echo'            => true,
              'fallback_cb'     => 'wp_page_menu',
              'before'          => '',
              'after'           => '',
              'link_before'     => '',
              'link_after'      => '',
              'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
              'depth'           => 0,
              'walker'          => '',
            ] ); ?>
              </div>
              <!-- /.col-md -->
              <div class="col-xl-2 col-6">
                <ul class="footer_menu">
                <?php 
            $args = array(
              'orderby'            => 'name',
              'order'              => 'ASC',
              'style'              => 'list',
              'show_count'         => 0,
              'hide_empty'         => 0,
              'use_desc_for_title' => 1,
              'child_of'           => 0,
              'feed'               => '',
              'feed_type'          => '',
              'feed_image'         => '',
              'exclude'            => '1',
              'exclude_tree'       => '',
              'include'            => '',
              'hierarchical'       => true,
              'title_li'           => NULL,
              'number'             => NULL,
              'echo'               => 1,
              'depth'              => 0,
              'current_category'   => 0,
              'pad_counts'         => 0,
              'taxonomy'           => 'category',
              'walker'             => 'Walker_Category',
              'hide_title_if_empty' => false,
              'separator'          => '<br />',
            );            
              wp_list_categories( $args );
            ?>
                </ul>
              </div>
              <!-- /.col-md -->
              <div class="col-md">
                <div class="footer-contacts">
                  <p class="footer-contacts_phone"> <?php the_field('phone', 18); ?></p>
                  <p class="footer-contacts_adress"><?php the_field('adress', 18); ?></p></p>
                  <p class="footer-contacts_adress"><?php the_field('adress_2', 18); ?></p></p>
                  <p class="footer-contacts_email">i<?php the_field('email', 18); ?></p></p>
                </div>
                <div class="footer-social-links">
                  <ul>
                    <li>
                      <a href=" <?php the_field('vk', 18); ?>"><i class="icon-vkontakte"></i></a>
                    </li>
                    <li>
                      <a href=" <?php the_field('facebook', 18); ?>"><i class="icon-facebook"></i></a>
                    </li>
                    <li>
                      <a href=" <?php the_field('instagram', 18); ?>"><i class="icon-instagram"></i></a>
                    </li>
                  </ul>
                </div>
      
              </div>
        </div>
        <!-- /.col-md -->
      </div>
      <!-- /.container -->
    </footer>

    <div class="modal">
      <div class="modal-contact">
        <div class="close">
          &times;
        </div>
        <h4>Заполните поля</h4>
        <p>Мы свяжемся с вами в ближайшее время</p>
        <div class="modal-form">
          <?php echo do_shortcode('[contact-form-7 id="217" title="Контактная форма 1"]')  ?>
          <small>Нажимая кнопку, даю свое согласие <br> <a href="#">
          на обработку персональных данных</a></small>
        </div>
      </div>
    </div>
    <!-- <div class="modal">
      <div class="modal-contact">
        <h4>Спасибо</h4>
        <p>Ваша заявка отправлена</p>
        <button type="submit" class="btn btn-primary">
          Закрыть
        </button>
      </div>
    </div> -->
      
  
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script> -->
    <!-- <script src="slick/slick.js"></script> -->
    <script src="js/script.js"></script>

    <?php wp_footer();?>
  </body>
</html>