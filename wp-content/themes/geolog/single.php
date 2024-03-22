<?php
get_header();
?>
<!-- Begin content-->
<div class="content">
    <!-- breadcrumbs-->
    <div class="container">
        <!-- wrapper for margin-->
        <div class="page-navigation  page-navigation_detail">
            <?php get_template_part('templates/breadcrumbs') ?>
        </div>
    </div>

    <!-- detail article-->
    <section class="section-detail-article">
        <div class="container">
            <h2 class="section-detail-article__mobile-title"><?php the_title(); ?></h2>
            <div class="section-detail-article__row">
                <div class="detail-article__image">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>">
                </div>
                <div class="section-detail-article__desc">
                    <h3><?php the_title(); ?></h3>
                    <div>
                        <p><?php echo get_field('article_short-descr'); ?></p>
                    </div>
                </div>
            </div>

            <div class="message section-detail-article__message">
            
                <div class="section-messages-service__stages">
                   <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>


    <!-- begin callback-->
    <section class="section-form" id="callback">
        <div class="container">
            <div class="callback-form">
                <div class="callback-form__desc">
                    <h2 class="callback-form__title">Оставьте заявку</h2>
                    <p> и получите бесплатную консультацию специалиста</p>
                </div>
                <form method="post" action="/">
                    <div class="callback-form__inputs">
                        <div class="callback-form__input">
                            <input type="text" name="name" placeholder="Имя">
                        </div>

                        <div class="callback-form__input">
                            <input type="text" name="phone" placeholder="+7 (___) ___-__-__">
                        </div>

                        <div class="callback-form__input">
                            <input value="Оставить заявку" type="submit" class="site-btn-2 callback-form__btn">
                        </div>

                        <div class="callback-form__input  callback-form__checkbox">
                            <input id="political_3" type="checkbox" checked>
                            <label for="politica_3"></label>
                            <p>Нажимая на кнопку, Вы соглашаетесь с <a href="javascript:void(0)"> Политикой
                                    конфиденциальности </a></p>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </section>


</div> <!-- end content-->
<?php
get_footer();