
<?php
/*
Template Name: Главная
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
            <h2>СтройИнвест</h2>
            <?php the_content(); ?>
            <a href="#" class="btn btn-primary">Узнать больше о компании</a>
          </div>
 <?php get_footer(); ?>