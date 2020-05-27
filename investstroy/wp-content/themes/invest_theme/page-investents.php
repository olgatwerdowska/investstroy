<?php
/*
Template Name: Инвесторам
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
            <?php the_content(); ?>
          </div>

          <div class="calc">
            <div class="row">
              <div class="col-md-6">
                <div class="calc-programs">
                  <div class="calc-radio">
                    <input type="radio" data-month="6" data-per = "0.2" checked name="programs" id="one">
                    <label for="one">
                      <span>20% годовых <small>на 6 месяцев</small></span>
                    </label>
                  </div>
                  <div class="calc-radio">
                    <input type="radio" data-month="24" data-per = "0.26" name="programs" id="two">
                    <label for="two">
                      <span>26% годовых <small>на 2 года</small></span>
                    </label>
                  </div>
                  <div class="calc-radio">
                    <input type="radio" data-month="48" data-per = "0.32" name="programs" id="three">
                    <label for="three">
                      <span>32% годовых <small>на 4 года</small></span>
                    </label>
                  </div>
                  <div class="calc-radio">
                    <input type="radio" data-month="12" data-per = "0.24" name="programs" id="four">
                    <label for="four">
                      <span>24% годовых <small>на 1 года</small></span>
                    </label>
                  </div>
                  <div class="calc-radio">
                    <input type="radio" data-month="36" data-per = "0.28" name="programs" id="five">
                    <label for="five">
                      <span>28% годовых <small>на 3 года</small></span>
                    </label>
                  </div>
                  <div class="calc-popular">
                    популярная программа
                  </div>
                  <div class="calc-legal">
                    <p>*Наша компания является налоговым агентом, удерживает и оплачивает НДФЛ Вся информация, размещенная на сайте, несет исключительно рекламный характер и не является публичной офертой.</p>
                  </div>
                </div>
              </div>
              <!-- /.col-md-6 -->
              <div class="col-md-6">
                <h4>Укажите сумму инвестиций</h4>
                <input type="text" class="calc-range" name="summ">
                <div class="calc-summ_invest">
                  <span class="calc-summ_invest_label">Сумма:</span>
                  <span class="calc-summ_invest_num"><span>100 000</span> руб.</span>
                </div>
                <div>
                  <span class="calc-total">
                    <strong><span id="total">110 000</span> .руб</strong><br>
                    <small>Сумма через <span id="month">36</span> месяцев</small>
                  </span>
                  <span class="calc-monthly">
                    <strong><span>32 000</span> .руб</strong><br>
                    <small>Ежемесячный доход</small>
                  </span>
                </div>
              </div>
              <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.calc -->
    <?php get_footer(); ?>