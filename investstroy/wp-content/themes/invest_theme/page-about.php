<?php
/*
Template Name: О компании
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
                    <h2>
                        <?php the_title(); ?>
                    </h2>
                    <?php the_content(); ?>
                </div>
                <h2>
                    Руководство СтройИнвест
                </h2>
                <div class="team">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="<?php the_field('photo_1'); ?>" alt="">
                            <h4><?php the_field('name_1'); ?></h4>
                            <p><?php the_field('post_1'); ?></p>
                        </div>
                        <div class="col-md-4">
                            <img src="<?php the_field('photo_2'); ?>" alt="">                            
                            <h4><?php the_field('name_2'); ?></h4>
                            <p><?php the_field('post_2'); ?></p>
                        </div>
                        <div class="col-md-4">
                            <img src=" <?php the_field('photo_3'); ?>" alt="">
                            <h4><?php the_field('name_3'); ?></h4>
                            <p><?php the_field('post_3'); ?></p>
                        </div>
                    </div>
                </div>

<?php get_footer(); ?>