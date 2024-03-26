<?php
/*
 Template name: Главная
*/
get_header();
?>
<!--<section class="test">
    <div class="container">
        <?php
        $args     = array(
            'post_type'      => 'services',
            'post_status'    => 'publish',
            'posts_per_page' => -1,
        );
        $services = new WP_Query($args);
        if ($services->have_posts()) {
            while ($services->have_posts()) {
                $services->the_post();
                ?>
                <li class="test__test"><?php the_title(); ?></li>
        <?php
            }
        }
        wp_reset_postdata();
        ?>
    </div>
</section>-->
<!-- Begin content-->
<div class="content">
    <!-- banner -->
    <?php get_template_part('templates/banner'); ?>
    <!-- end banner-->
    <?php
    $args = array(
        'post_type'      => 'services',
        'post_status'    => 'publish',
        'posts_per_page' => -1,
    );

    $services = new WP_Query($args);
    if ($services->have_posts()) {
        ?>
        <!-- services -->
        <section class="section-services">
            <div class="container">
                <div class="section-services__inner">
                    <h2 class="section-services__title">Наши услуги</h2>
                    <div class="section-services-row__wrap">
                        <div class="section-services-row ">
                            <?php
                            while ($services->have_posts()) {
                                $services->the_post();
                                ?>
                                <a href="<?php the_permalink(); ?>" class="section-services-row__item">
                                    <?php the_title(); ?>
                                </a>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- end services-->
        <?php
    }
    wp_reset_postdata();
    ?>
    <!-- begin callback-->
    <section class="section-form" id="callback">
        <div class="container">
            <div class="callback-form">
                <div class="callback-form__desc">
                    <h2 class="callback-form__title">Оставьте заявку</h2>
                    <p> и получите бесплатную консультацию специалиста</p>
                </div>
                <?php
                set_query_var('form_name', 'services_form');
                set_query_var('form_id', 'services_form');
                get_template_part('templates/form');
                ?>
            </div>
        </div>
    </section>

    <!-- section advantages-->
    <section class="section-advantages">
        <div class="container">
            <div class="section-advantages__inner">
                <h2 class="section-advantages__title"> Преимущества геологических изысканий
                    с компанией «Геолог-Краснодар»</h2>

                <?php get_template_part('templates/features'); ?>

                <div class="section-advantages__call section-advantages-call ">
                    <div class="section-advantages-call__name">
                        Заказать геологические изыскания:
                    </div>
                    <a href="tel:<?php echo get_field('phone_link', 'option'); ?>">
                        <?php echo get_field('phone_front', 'option'); ?>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <?php
    $informations = get_field('information');
    if ($informations) {
        ?>
        <!-- Information-->
        <section class="section-information">
            <div class="container">
                <div class="section-information__inner">
                    <h2 class="section-information__title"> Информация</h2>
                    <div class="section-information__row">
                        <!--item-->
                        <a href="/metody-izyskanij/"
                            class="section-information__item section-information-item">
                            <div class="section-information-item__image">
                                <img src="/wp-content/themes/geolog/assets/images/info1.png">
                            </div>
                            <div class="section-information-item__name">Методы изысканий</div>
                        </a>

                        <!--item-->
                        <a href="/terminy-geologii/" class="section-information__item section-information-item">
                            <div class="section-information-item__image">
                                <img src="/wp-content/themes/geolog/assets/images/info2.png">
                            </div>
                            <div class="section-information-item__name">Термины геологии</div>
                        </a>


                        <!--item-->
                        <a href="#modal-recomendation" class="trigger-fancy section-information__item section-information-item">
                            <div class="section-information-item__image">
                                <img src="/wp-content/themes/geolog/assets/images/info3.png">
                            </div>
                            <div class="section-information-item__name">Рекомендации
                                по фундаменту</div>
                        </a>

                        <!--item-->
                        <a href="/tehnicheskoe-zadanie/" class="section-information__item section-information-item">
                            <div class="section-information-item__image">
                                <img src="/wp-content/themes/geolog/assets/images/info4.png">
                            </div>
                            <div class="section-information-item__name">Техническое задание</div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }
    ?>

    <!-- requpment -->
    <section class="section-equipment">
        <div class="container">
            <div class="section-equipment__inner">
                <h2 class="section-equipment__title">Наше оборудование</h2>
                <?php get_template_part('templates/machines'); ?>
            </div>
        </div>
    </section>
    <!-- end equpment-->
    <!--messages-->
    <section class="section-messages">
        <div class="container">
            <div class="section-message__wrap">
                <?php
                $article1 = get_field('mini-article1');
                set_query_var('article', $article1);
                get_template_part('templates/mini', 'article');
                ?>
                <?php
                $article2 = get_field('mini-article2');
                set_query_var('article', $article2);
                get_template_part('templates/mini', 'article');
                ?>

            </div>


        </div>
    </section>
    <!--employers -->
    <section class="section-emp">
        <div class="container">
            <?php get_template_part('templates/workers'); ?>
        </div>
    </section>
    <?php
    $types = get_field('service_types');
    if ($types) {
        ?>
        <!-- Group research-->
        <section class="section-reseach">
            <div class="container">
                <div class="section-reseach__inner">
                    <h2 class="section-reseach__title"> Виды инженерных изысканий</h2>
                    <p class="section-reseach__desc">Компания «Геолог-Краснодар» предлагает заказать разработку
                        ситуационного плана с описанием фактического состояния изучаемой территории. В зависимости
                        от потребностей клиента в программу инженерных изысканий могут входить <span
                            class="section-reseach__desc_accent">такие работы, как:</span> </p>

                    <div class="section-reseach-row research-slider swiper">
                        <div class="swiper-wrapper">
                            <?php
                            foreach ($types as $type) {
                                $type_id = $type->ID;
                                ?>
                                <!--item-->
                                <div class="section-reseach__item section-reseach-item  swiper-slide">
                                    <div class="section-reseach-item__image">
                                        <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($type_id)); ?>" alt="">
                                    </div>
                                    <div class="section-reseach-item__body">
                                        <a href="<?php echo get_permalink($type_id); ?>" class="section-reseach-item__title">
                                            <?php echo $type->post_title; ?>
                                        </a>
                                        <div class="section-reseach-item__text">
                                            <?php echo get_field('short_descr', $type_id); ?>
                                        </div>


                                    </div>
                                    <div class="section-reseach-item__mobile-link">
                                        <a href="<?php echo get_permalink($type_id); ?>">
                                            Подробнее об услуге</a>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>

                        <div class="swiper-pagination slider-pagination"></div>

                    </div>
                </div>
            </div>
        </section>
        <?php
    }
    ?>
    <!-- banner professional-->

    <section class="section-banner-professional">
        <div class="container">
            <div class="banner-professional">
                <div class="banner-professional__image">
                    <img src="/wp-content/themes/geolog/assets/images/banner-prof.png" alt="">
                </div>
                <div class="banner-professional__desc">
                    <h3 class="banner-professional__title">Профессионалы</h3>
                    <div class="banner-professional__text"> В нашем центре инженерными изысканиями, а также
                        инженерно-геологической съемкой и
                        прочими исследованиями занимаются <b>сотрудники высшей квалификационной категории.</b>
                        Предоставляя полную и объективную информацию, мы <b>помогаем заказчику определиться с
                            правильным подходом </b>
                        к реализации линейных и площадных проектов, а также строительству коттеджей любой
                        сложности.</div>
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
                <?php
                set_query_var('form_name', 'types_form');
                set_query_var('form_id', 'types_form');
                get_template_part('templates/form');
                ?>
            </div>
        </div>
    </section>

    <!-- section statics-->
    <section class="section-statics">
        <div class="container">
            <h2 class="section-statics__title"> О компании</h2>
            <div class="section-statics__row section-statics-row">
                <?php
                if (get_field('year')) {
                    ?>
                    <!--item-->
                    <div class="section-statics-row__item section-statics-item">
                        <div class="section-statics-item__title">Основана в </div>
                        <div class="section-statics-item__number">
                            <?php echo get_field('year'); ?>
                        </div>
                    </div>
                <?php } ?>
                <?php
                if (get_field('objects')) {
                    ?>
                    <!--item-->
                    <div class="section-statics-row__item section-statics-item">
                        <div class="section-statics-item__title">Объектов </div>
                        <div class="section-statics-item__number">
                            <?php echo get_field('objects'); ?>
                        </div>
                    </div>
                <?php } ?>
                <?php
                if (get_field('works')) {
                    ?>
                    <!--item-->
                    <div class="section-statics-row__item section-statics-item">
                        <div class="section-statics-item__title">Штат сотрудников</div>
                        <div class="section-statics-item__number">
                            <?php echo get_field('works'); ?>
                        </div>
                    </div>
                <?php } ?>
                <?php
                if (get_field('brigades')) {
                    ?>
                    <!--item-->
                    <div class="section-statics-row__item section-statics-item">
                        <div class="section-statics-item__title">Буровых бригад</div>
                        <div class="section-statics-item__number">
                            <?php echo get_field('brigades'); ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

    </section>

    <!-- prices-->
    <section class="section-prices">
        <div class="container">
            <h2 class="section-prices__title"> Цены на геологию</h2>
            <?php get_template_part('templates/geo', 'price'); ?>
            <div class="section-prices-loaded-block">
                <?php
                $geo_files = get_field('geolog_files');
                if ($geo_files) {
                    ?>
                    <div class="section-prices-loaded-block__load-btns">
                        <?php
                        foreach ($geo_files as $geo_file) {
                            ?>
                            <a class="site-btn-load" href="<?php echo $geo_file['geolog_file']; ?>">
                                <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8 12L3 7L4.4 5.55L7 8.15V0H9V8.15L11.6 5.55L13 7L8 12ZM2 16C1.45 16 0.979333 15.8043 0.588 15.413C0.196666 15.0217 0.000666667 14.5507 0 14V11H2V14H14V11H16V14C16 14.55 15.8043 15.021 15.413 15.413C15.0217 15.805 14.5507 16.0007 14 16H2Z" />
                                </svg>
                                <?php echo $geo_file['file_name']; ?>
                            </a>
                        <?php
                        }
                        ?>
                    </div>
                    <?php
                }
                ?>
                <div class="section-prices__order-block">
                    <a href="#callback" class="site-btn-2 site-btn-2_order"> Заказать услугу</a>
                </div>

                <div class="section-prices__socials">
                    <?php
                    if (get_field('ssylka_telegram', 'option')) {
                        ?>
                        <a href="<?php echo get_field('ssylka_telegram', 'option'); ?>">
                            <svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="50" height="50" rx="24" fill="#419FD9" />
                                <rect width="50" height="50" rx="24" fill="url(#paint0_linear_82_424)" />
                                <path
                                    d="M11.2368 24.4488C18.5069 21.2148 23.3548 19.0827 25.7805 18.0526C32.7062 15.1114 34.1453 14.6005 35.0833 14.5834C35.2896 14.5799 35.7509 14.6321 36.0497 14.8796C36.302 15.0887 36.3714 15.371 36.4046 15.5692C36.4378 15.7674 36.4792 16.2188 36.4463 16.5716C36.071 20.5979 34.447 30.3685 33.6209 34.878C33.2713 36.7862 32.5829 37.426 31.9165 37.4886C30.4683 37.6246 29.3686 36.5114 27.9659 35.5726C25.771 34.1035 24.531 33.189 22.4004 31.7555C19.9382 30.0988 21.5344 29.1883 22.9376 27.7002C23.3048 27.3108 29.6858 21.3849 29.8093 20.8473C29.8247 20.78 29.839 20.5294 29.6932 20.3971C29.5474 20.2648 29.3322 20.31 29.1769 20.346C28.9567 20.397 25.4503 22.7633 18.6576 27.445C17.6623 28.1428 16.7608 28.4828 15.9531 28.465C15.0627 28.4453 13.3499 27.9509 12.0765 27.5283C10.5147 27.01 9.27347 26.7359 9.38156 25.8556C9.43786 25.3971 10.0563 24.9282 11.2368 24.4488Z"
                                    fill="white" />
                                <defs>
                                    <linearGradient id="paint0_linear_82_424" x1="25" y1="0" x2="25" y2="49.629"
                                        gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#2AABEE" />
                                        <stop offset="1" stop-color="#229ED9" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </a>
                    <?php
                    }
                    ?>
                    <?php
                    if (get_field('ssylka_whatsapp', 'option')) {
                        ?>
                        <a href="<?php echo get_field('ssylka_whatsapp', 'option'); ?>">
                            <svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="50" height="50" rx="24" fill="#0DC143" />
                                <path
                                    d="M36.1985 13.7619C33.5184 11.0029 29.8134 9.50513 26.0296 9.50513C17.9891 9.50513 11.5251 16.0479 11.6039 24.0096C11.6039 26.5322 12.3134 28.9758 13.4958 31.1831L11.4463 38.6718L19.0927 36.7011C21.2211 37.8835 23.5859 38.4353 25.9508 38.4353C33.9125 38.4353 40.3765 31.8925 40.3765 23.9308C40.3765 20.0682 38.8787 16.4421 36.1985 13.7619ZM26.0296 35.9916C23.9012 35.9916 21.7729 35.4398 19.9598 34.3362L19.4868 34.0997L14.9148 35.2822L16.0972 30.7889L15.7819 30.3159C12.3134 24.7191 13.9688 17.3092 19.6445 13.8407C25.3202 10.3722 32.6512 12.0276 36.1197 17.7033C39.5882 23.379 37.9328 30.7101 32.2571 34.1786C30.444 35.361 28.2368 35.9916 26.0296 35.9916ZM32.9666 27.2416L32.0994 26.8475C32.0994 26.8475 30.8382 26.2957 30.0499 25.9015C29.9711 25.9015 29.8922 25.8227 29.8134 25.8227C29.5769 25.8227 29.4193 25.9015 29.2616 25.9804C29.2616 25.9804 29.1828 26.0592 28.0792 27.3204C28.0003 27.4781 27.8427 27.5569 27.685 27.5569H27.6062C27.5274 27.5569 27.3697 27.4781 27.2909 27.3993L26.8967 27.2416C26.0296 26.8475 25.2413 26.3745 24.6107 25.7439C24.453 25.5862 24.2166 25.4286 24.0589 25.2709C23.5071 24.7191 22.9553 24.0885 22.5612 23.379L22.4823 23.2213C22.4035 23.1425 22.4035 23.0637 22.3247 22.906C22.3247 22.7484 22.3247 22.5907 22.4035 22.5119C22.4035 22.5119 22.7188 22.1177 22.9553 21.8813C23.113 21.7236 23.1918 21.4871 23.3494 21.3295C23.5071 21.093 23.5859 20.7776 23.5071 20.5412C23.4283 20.147 22.4823 18.0186 22.2458 17.5457C22.0882 17.3092 21.9305 17.2304 21.694 17.1515H21.4575C21.2999 17.1515 21.0634 17.1515 20.8269 17.1515C20.6693 17.1515 20.5116 17.2304 20.3539 17.2304L20.2751 17.3092C20.1175 17.388 19.9598 17.5457 19.8021 17.6245C19.6445 17.7822 19.5657 17.9398 19.408 18.0975C18.8562 18.8069 18.5409 19.674 18.5409 20.5412C18.5409 21.1718 18.6985 21.8024 18.935 22.3542L19.0139 22.5907C19.7233 24.0885 20.6693 25.4286 21.9305 26.611L22.2458 26.9263C22.4823 27.1628 22.7188 27.3204 22.8765 27.5569C24.5319 28.9758 26.4238 30.0006 28.5521 30.5524C28.7886 30.6313 29.1039 30.6313 29.3404 30.7101C29.5769 30.7101 29.8922 30.7101 30.1287 30.7101C30.5229 30.7101 30.9958 30.5524 31.3112 30.3948C31.5476 30.2371 31.7053 30.2371 31.863 30.0795L32.0206 29.9218C32.1783 29.7641 32.3359 29.6853 32.4936 29.5276C32.6512 29.37 32.8089 29.2123 32.8877 29.0547C33.0454 28.7394 33.1242 28.3452 33.203 27.9511C33.203 27.7934 33.203 27.5569 33.203 27.3993C33.203 27.3993 33.1242 27.3204 32.9666 27.2416Z"
                                    fill="white" />
                            </svg>
                        </a>
                        <?php
                    }
                    ?>
                </div>


            </div>
        </div>
    </section>

    <!-- calculate-->
    <section class="section-calculate" id="calculator">
        <div class="container">
            <h2 class="section-calculate__title"> Калькулятор</h2>
            <div class="section-calculate__body">
                <iframe id="marquiz__frame_654d22ac698b0000258bf04c" class="marquiz__frame marquiz__frame_open"
                    src="//quiz.marquiz.ru/654d22ac698b0000258bf04c?cookies=%7B%22_ym_uid%22%3A%221706621674197244166%22%7D&amp;href=http%3A%2F%2F127.0.0.1%3A5500%2Findex.html%23callback&amp;mode=modal&amp;referrer=http%3A%2F%2F127.0.0.1%3A5500%2Findex.html&amp;region=eu"
                    scrolling="auto" frameborder="0" allow="autoplay"></iframe>

            </div>
        </div>
    </section>

    <!-- section reseach grunt-->
    <section class="section-researc-grunt">
        <div class="container">
            <?php
            $article3 = get_field('mini-article3');
            set_query_var('article', $article3);
            get_template_part('templates/mini', 'article');
            ?>
        </div>
    </section>
    <!--section tech task -->
    <section class="section-tech-task">
        <div class="container">
            <h2 class="section-tech-task__title"> Техническое задание</h2>
            <?php get_template_part('templates/tech', 'task'); ?>
        </div>
    </section>
    <!-- section faq-->
    <section class="section-faq">
        <div class="container">
            <h2 class="section-faq__title"> Часто задаваемые вопросы</h2>
            <?php get_template_part('templates/questions'); ?>
        </div>
    </section>
    <!-- garanty-->
    <section class="section-garanty">
        <div class="container">
            <?php
            $article4 = get_field('mini-article4');
            set_query_var('article', $article4);
            get_template_part('templates/mini', 'article');
            ?>
        </div>
    </section>
    <!-- condition payment-->
    <section class="section-condition-payment">
        <div class="container">
            <h2 class="section-condition-payment__title">Условия оплаты</h2>
            <?php get_template_part('templates/condition', 'payment'); ?>
        </div>
    </section>

    <!-- condition work-->
    <section class="section-work">
        <div class="container">
            <div class="message messge_work">
                <h3 class="message-title"> Условия работы</h3>
                <?php get_template_part('templates/condition', 'work'); ?>
            </div>
        </div>
    </section>

    <!-- reviews-->
    <section class="section-reviews">
        <div class="container">
            <h2 class="section-reviews__title">Отзывы</h2>
            <?php get_template_part('templates/reviews'); ?>
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
                <?php
                set_query_var('form_name', 'footer_form');
                set_query_var('form_id', 'footer_form');
                get_template_part('templates/form');
                ?>
            </div>
        </div>
    </section>
</div> <!-- end content-->
<?php
get_footer();