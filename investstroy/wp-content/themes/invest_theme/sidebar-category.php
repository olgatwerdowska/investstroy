<div class="left-sidebar">
            <div class="left-sidebar_btn">
              Категории
            </div>


            <ul class="left-sidebar_menu">
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
            <?php wp_reset_postdata() ?>


            <?php
        $posts = get_posts( array(
	        'numberposts' => 2,
	        'orderby'     => 'date',
	        'order'       => 'DESC',
	        'post_type'   => 'post',
	        'suppress_filters' => true, 
        ) );        
        foreach( $posts as $post ){setup_postdata($post);
          ?>
            <div class="left-sidebar_object">
              <?php the_post_thumbnail( 'sidebar-preview' ); ?>
              <div class="left-sidebar_object-description">
                <h3><?php the_title(); ?></h3>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>">Узнать подробнее »</a>
              </div>
            </div>
        <?php
        }
        wp_reset_postdata(); 
      ?>
          </div>