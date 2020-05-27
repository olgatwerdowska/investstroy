
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
                    <div class="object-page">
              <div class="object-page_text">
                <p><b>Площадь:</b><?php the_field('area'); ?></p>
                <p><b>Назначение:</b> <?php the_field('appointment'); ?></p>
                <p><b>Стоимость:</b> <?php the_field('price'); ?></p>
                <p><b>Описание:</b>  <?php the_content(); ?>
              </div>
              <a class="btn btn-primary" htef="#">Бесплатная консультация</a>
            </div>
                </div>
<?php get_footer(); ?>