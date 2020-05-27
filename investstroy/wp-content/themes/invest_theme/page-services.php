<?php
/*
Template Name: Наши услуги
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
<?php get_footer(); ?>