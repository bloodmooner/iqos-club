<?php
    get_header();
?>

  <section class="promo">

      <div class="promo__wrapper" style="background-image:url(<?php echo bloginfo('template_url'); ?>/assets/img/promo/promo-bg.png)">
        <a class="promo__logo-link animate__animated animate__zoomIn animate__delay-1s" href="#">
          <!-- <img class="promo__logo animate__animated animate__zoomIn animate__delay-1s" src="/assets/svg/logo.svg" alt="Logo"> -->
          <?php the_custom_logo(); ?>
        </a>

        <h1 class="promo__title animate__animated animate__bounceInLeft animate__delay-2s">
          <?php the_field('promo_title') ?>
        </h1>
        <h2 class="promo__subtitle animate__animated animate__bounceInRight animate__delay-3s">
            <?php the_field('promo_subtitle') ?>
        </h2>
        <span class="promo__more animate__animated animate__fadeInDown animate__delay-4s">
            <?php the_field('promo_more') ?>
        </span>
        <a class="promo__arrow-link" href="#checkout" >
          <svg class='promo__arrow animate__animated animate__swing animate__delay-5s' viewBox="0 0 39 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2 1.44531L19.6777 19.123L37.3553 1.44531" stroke="white" stroke-width="3"/>
          </svg>
        </a>
      </div>
      <div class="promo__gradient"></div>
  </section>

  <section class="info">
    <div class="container">
      <div class="info__wrapper">
        <h2 class="info__title">
            <?php the_field('info_title') ?>
        </h2>
        <p class="info__text">
            <?php the_field('info_text') ?>
        </p>
        
      </div>
    </div>
  </section>

  <section class="checkout" id="checkout">
    <div class="container">
      <div class="checkout__wrapper">
        <h2 class="checkout__title">
            <?php the_field('checkout_title') ?>
        </h2>
        <div class="checkout__cards">
          <div class="checkout__cards-item">
            <h3 class="checkout__cards-title">Меняйте мир к лучшему</h3>
            <img class="checkout__cards-image" src="<?php echo bloginfo('template_url'); ?>/assets/img/checkout/checkout-left.jpg" alt="Card image 1" >
            <p class="checkout__cards-text">
              Потратьте ваши баллы IQOS CLUB на то, чтобы изменить мир к лучшему – участвуйтев благотворительных проектах.
            </p>
          </div>
          <div class="checkout__cards-item">
            <h3 class="checkout__cards-title">Начните изменения с себя</h3>
            <img class="checkout__cards-image" src="<?php echo bloginfo('template_url'); ?>/assets/img/checkout/checkout-right.jpg" alt="Card image 2" >
            <p class="checkout__cards-text">
              За ваши баллы IQOS CLUB вы можете научиться новому, прокачать свои навыкии попробовать сделатьчто-то необыкновенное.
            </p>
          </div>
        </div>
        <a class="checkout__btn" href="#" ><?php the_field('checkout_btn') ?></a>
      </div>
    </div>
  </section>

  <section class="social">
    <div class="container">
      <div class="social__wrapper">
        <h2 class="social__title">
            <?php the_field('social_title') ?>
        </h2>
        <div class="social__sign">
          <span class="social__sign-caption"><?php the_field('social_call') ?></span>
          <div class="social__sign-list">
            <a class="social__sign-link" href="<?php the_field('social_list_social_link1') ?>" target="blank">
                <?php the_field('social_list_social_image1') ?>
            </a>
            <a class="social__sign-link" href="<?php the_field('social_list_social_link2') ?>" target="blank">
                <?php the_field('social_list_social_image2') ?>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="faq">
    <div class="container">
      <div class="faq__wrapper">
        <h2 class="faq__title">
            <?php the_field('faq_title') ?>
        </h2>

        <div class="accordion-container faq__items">

        <?php

        $my_posts = get_posts( array(
            'numberposts' => -1,
            'category_name'    => 'faq',
            'orderby'     => 'date',
            'order'       => 'ASC',
            'post_type'   => 'post',
            'suppress_filters' => true, 
        ) );

        foreach( $my_posts as $post ){
            setup_postdata( $post );
            ?>
            <div class="ac">
              <h2 class="ac-header">
                <button class="ac-trigger"><?php the_title(); ?></button>
              </h2>
              <div class="ac-panel">
                <div class="ac-text">
                  <p class="faq__text">
                    <?php the_content(); ?>
                  </p>
                </div>
              </div>
            </div>
            <?php 
            
        }

        wp_reset_postdata(); 

        ?>

        </div>


        <!-- <div class="faq__items">
          <div class="faq__item">
            <h3 class="faq__caption">
              Я слышал, что IQOS CLUB будет меняться. Что это значит?
            </h3>
          </div>
          <div class="faq__item">
            <h3 class="faq__caption">
              Что будет с моим уровнем лояльности?
            </h3>
          </div>
          <div class="faq__item faq__item_active">
            <h3 class="faq__caption faq__caption_active">
              Что будет с моими накопленными баллами?
            </h3>
            <p class="faq__text">
              Мы услышали желание пользователей потратить свои баллы IQOS CLUB и для этого запустили в ноябре
              конкурсы «Баллы на удачу» и «Аукцион впечатлений». Но это еще не все! <br>
              Следите за новостями, чтобы быть в курсе и ничего не пропустить.
            </p>
          </div>
          <div class="faq__item">
            <h3 class="faq__caption">
              Почему вы это делаете?
            </h3>
          </div>
          <div class="faq__item">
            <h3 class="faq__caption">
              Что будет с моими привилегиями?
            </h3>
          </div>
          <div class="faq__item">
            <h3 class="faq__caption">
              Мои ваучеры тоже сгорят?
            </h3>
          </div>
        </div> -->


      </div>

    </div>
  </section>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://unpkg.com/accordion-js@3.1.1/dist/accordion.min.js"></script>
  <?php
    wp_footer();
  ?>
</body>
</html>
