<?php
/*
Template Name: Контакты
*/
?>
<?php get_header(); ?>
        <div class="row">
            <div class="col-lg-4">
            <?php get_sidebar('category'); ?>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-lg-8">
                <div class="content">
                    <h2><?php the_title(); ?></h2>
                    <div class="contacts">
                        <p class="contacts-phone">
                            <img class="contacts-img" src="<?php bloginfo( 'template_directory' ) ?>/assets/img/icon/icon2.png" alt="">
                            <?php the_field('phone', 18); ?>
                        </p>
                        <p class="contacts-mail">
                            <img class="contacts-img" src="<?php bloginfo( 'template_directory' ) ?>/assets/img/icon/icon.png" alt="">
                            <?php the_field('email', 18); ?>
                        </p>
                        <a href="#" class="contacts-adress"><?php the_field('adress', 18); ?></a h>
                        <a href="#" class="contacts-adress"><?php the_field('adress_2', 18); ?></a>
                        <a href="#" class="btn btn-primary contacts-btn">Задать вопрос</a>
                    </div>
                    <div class="contacts-social-links">
                        <ul>
                            <li>
                                <a href="<?php the_field('vk', 18); ?>"><i class="icon-vkontakte"></i></a>
                            </li>
                            <li>
                                <a href="<?php the_field('facebook', 18); ?>"><i class="icon-facebook"></i></a>
                            </li>
                            <li>
                                <a href="<?php the_field('instagram', 18); ?>"><i class="icon-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
    <?php get_footer(); ?>