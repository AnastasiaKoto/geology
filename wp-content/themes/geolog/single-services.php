<?php
get_header();
?>
 <!-- Begin content-->
 <div class="content">

<!--service-banner-->
<?php get_template_part('templates/banner');  ?>
<!-- end banner-->

<!--messages-->
<section class="section-messages section-messages_services">
    <div class="container">
        <div class="section-message__wrap">
            <?php 
            $article1 = get_field('mini-article1');
            set_query_var( 'article', $article1 );
            get_template_part('templates/mini', 'article'); 
            ?>
        </div>
    </div>
</section>


<!--employers -->
<section class="section-emp section-emp_service">
    <div class="container">
        <?php get_template_part('templates/workers'); ?>
    </div>
</section>


<!--messages-->
<section class="section-messages section-messages-service">
    <div class="container">
        <div class="section-message__wrap">
            <?php 
            $article2 = get_field('mini-article2');
            set_query_var( 'article', $article2 );
            get_template_part('templates/mini', 'article'); 
            ?>
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
            set_query_var( 'form_name', 'single_form' );
            set_query_var( 'form_id', 'single_form' );
            get_template_part('templates/form'); 
            ?>
        </div>
    </div>
</section>

<section class="section-service-price">
    <div class="container">
        <div class="section-service-price__desc">
            <?php if(get_field('price_title')) { ?>
                <h2 class="section-service-price__title"><?php echo get_field('price_title'); ?></h2>
            <?php } ?>
            <?php if(get_field('price_descr')) { ?>
                <p class="section-service-price__text">
                    <?php echo get_field('price_descr'); ?>
                </p>
            <?php } ?>
        </div>
        <?php 
        if(get_field('show_warning') == true) {
        ?>
            <div class="notice-message section-service-price__message">
                <div class="notice-message__title">Обратите внимание! </div>
                <?php 
                if(get_field('warning_block')) { ?>
                    <div class="notice-message__text"><?php echo get_field('warning_block'); ?></div>
                <?php } ?>
            </div>
        <?php } ?>
        <?php 
        if(get_field('price_table')) {
        ?>
            <div class="service-price-table__wrap">
                <?php echo get_field('price_table'); ?>
            </div>
        <?php 
        }
        ?>
        <div class="section-prices-loaded-block section-prices-loaded-block_service">
            <?php
            $service_files = get_field('service_files');
            if($service_files) {
            ?>
                <div class="section-prices-loaded-block__load-btns">
                    <?php foreach($service_files as $service_file) { ?>
                        <a class="site-btn-load site-btn-load_service" href="<?php echo $service_file['file']; ?>">
                            <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8 12L3 7L4.4 5.55L7 8.15V0H9V8.15L11.6 5.55L13 7L8 12ZM2 16C1.45 16 0.979333 15.8043 0.588 15.413C0.196666 15.0217 0.000666667 14.5507 0 14V11H2V14H14V11H16V14C16 14.55 15.8043 15.021 15.413 15.413C15.0217 15.805 14.5507 16.0007 14 16H2Z" />
                            </svg>
                            <?php echo $service_file['name']; ?>
                        </a>
                    <?php } ?>
                </div>
            <?php
            }
            ?>
            <div class="section-prices__order-block">
                <a href="#callback" class="site-btn-2 site-btn-2_order"> Заказать услугу</a>
            </div>

            <div class="section-prices__socials">
                <?php if(get_field('ssylka_telegram', 'option')) { ?>
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
                <?php } ?>
                <?php if(get_field('ssylka_whatsapp', 'option')) { ?>
                    <a href="<?php echo get_field('ssylka_whatsapp', 'option'); ?>">
                        <svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="50" height="50" rx="24" fill="#0DC143" />
                            <path
                                d="M36.1985 13.7619C33.5184 11.0029 29.8134 9.50513 26.0296 9.50513C17.9891 9.50513 11.5251 16.0479 11.6039 24.0096C11.6039 26.5322 12.3134 28.9758 13.4958 31.1831L11.4463 38.6718L19.0927 36.7011C21.2211 37.8835 23.5859 38.4353 25.9508 38.4353C33.9125 38.4353 40.3765 31.8925 40.3765 23.9308C40.3765 20.0682 38.8787 16.4421 36.1985 13.7619ZM26.0296 35.9916C23.9012 35.9916 21.7729 35.4398 19.9598 34.3362L19.4868 34.0997L14.9148 35.2822L16.0972 30.7889L15.7819 30.3159C12.3134 24.7191 13.9688 17.3092 19.6445 13.8407C25.3202 10.3722 32.6512 12.0276 36.1197 17.7033C39.5882 23.379 37.9328 30.7101 32.2571 34.1786C30.444 35.361 28.2368 35.9916 26.0296 35.9916ZM32.9666 27.2416L32.0994 26.8475C32.0994 26.8475 30.8382 26.2957 30.0499 25.9015C29.9711 25.9015 29.8922 25.8227 29.8134 25.8227C29.5769 25.8227 29.4193 25.9015 29.2616 25.9804C29.2616 25.9804 29.1828 26.0592 28.0792 27.3204C28.0003 27.4781 27.8427 27.5569 27.685 27.5569H27.6062C27.5274 27.5569 27.3697 27.4781 27.2909 27.3993L26.8967 27.2416C26.0296 26.8475 25.2413 26.3745 24.6107 25.7439C24.453 25.5862 24.2166 25.4286 24.0589 25.2709C23.5071 24.7191 22.9553 24.0885 22.5612 23.379L22.4823 23.2213C22.4035 23.1425 22.4035 23.0637 22.3247 22.906C22.3247 22.7484 22.3247 22.5907 22.4035 22.5119C22.4035 22.5119 22.7188 22.1177 22.9553 21.8813C23.113 21.7236 23.1918 21.4871 23.3494 21.3295C23.5071 21.093 23.5859 20.7776 23.5071 20.5412C23.4283 20.147 22.4823 18.0186 22.2458 17.5457C22.0882 17.3092 21.9305 17.2304 21.694 17.1515H21.4575C21.2999 17.1515 21.0634 17.1515 20.8269 17.1515C20.6693 17.1515 20.5116 17.2304 20.3539 17.2304L20.2751 17.3092C20.1175 17.388 19.9598 17.5457 19.8021 17.6245C19.6445 17.7822 19.5657 17.9398 19.408 18.0975C18.8562 18.8069 18.5409 19.674 18.5409 20.5412C18.5409 21.1718 18.6985 21.8024 18.935 22.3542L19.0139 22.5907C19.7233 24.0885 20.6693 25.4286 21.9305 26.611L22.2458 26.9263C22.4823 27.1628 22.7188 27.3204 22.8765 27.5569C24.5319 28.9758 26.4238 30.0006 28.5521 30.5524C28.7886 30.6313 29.1039 30.6313 29.3404 30.7101C29.5769 30.7101 29.8922 30.7101 30.1287 30.7101C30.5229 30.7101 30.9958 30.5524 31.3112 30.3948C31.5476 30.2371 31.7053 30.2371 31.863 30.0795L32.0206 29.9218C32.1783 29.7641 32.3359 29.6853 32.4936 29.5276C32.6512 29.37 32.8089 29.2123 32.8877 29.0547C33.0454 28.7394 33.1242 28.3452 33.203 27.9511C33.203 27.7934 33.203 27.5569 33.203 27.3993C33.203 27.3993 33.1242 27.3204 32.9666 27.2416Z"
                                fill="white" />
                        </svg>
                    </a>
                <?php } ?>
            </div>

        </div>
        <?php if(get_field('show_notice') == true) { ?>
            <div class="service-price-notice">
                <div class="serivice-price-notice__title">Стоимость геодезии под строительство зависит от
        нескольких факторов, в их числе особенности:</div>
                <?php if(get_field('price_notice')) {
                    echo get_field('price_notice');
                } 
                ?>
            </div>
        <?php } ?>
    </div>
</section>

<!-- service banner service-->
<section class="section-banner-professional section-banner-proffesional-service">
    <div class="container">
        <?php if(get_field('works_title')) { ?>
            <h2 class="section-banner-proffesional-service__title"> Какие работы входят в состав ИГДИ?</h2>
        <?php } ?>
        <?php 
        if(get_field('works_banner')) {
            while( have_rows('works_banner') ): the_row();
                $banner_back = get_sub_field('works_banner-photo');
                $banner_descr = get_sub_field('works_banner-descr');
        ?>
                <div class="banner-professional bannner-professional_service">
                    <div class="banner-professional__image"
                        style="background-image:url('<?php echo $banner_back; ?>')">
                        <!-- <img src="./assets/images/service-banner.png" alt=""> -->
                    </div>
                    <div class="banner-professional__desc">
                        <div class="banner-professional__text">
                            <?php echo $banner_descr; ?>
                        </div>
                    </div>
                    <!-- items-->
                    <div class="section-banner-proffesional-service__contains">
                        <div></div>
                    </div>
                </div>
        <?php 
            endwhile;
        }
        ?>
        <?php 
        $works_list = get_field('works_list');
        if($works_list) { ?>
            <div class="section-banner-service-adv section-banner-proffesional-service__adv">
                <?php foreach($works_list as $item) { ?>
                    <!--item-->
                    <div class="section-banner-service-adv__item"><?php echo $item['works_list-title']; ?></div>
                <?php } ?>
            </div>
        <?php } ?>
        <?php if(get_field('works_ps')) { ?>
            <div class="section-banner-service__desc">
                <p><?php echo get_field('works_ps'); ?></p>
            </div>
        <?php } ?>

    </div>

</section>

<!-- finishing work-->
<section class="section-finishing-work">
    <div class="container">
        <div class="section-finishing-work__desc">
            <?php if(get_field('zakazchik_title')) { ?>
                <h2 class="section-finishing-work__title"><?php echo get_field('zakazchik_title'); ?></h2>
            <?php } ?>
            <?php 
            if(get_field('zakazchik_descr')) {
                echo get_field('zakazchik_descr');
            }
            ?>
        </div>
        <?php
        $parts = get_field('final_parts'); 
        if($parts) { ?>
            <div class="section-finishing-work__items">
                <?php foreach($parts as $part) { ?>
                    <!--item-->
                    <div class="section-finishing-work-item ">

                        <div class="section-finishing-work-item__text">
                            <?php if($part['title']) { ?>
                                <div class="section-finishing-work-item__title"><?php echo $part['title']; ?></div>
                            <?php } ?>
                            <?php if($part['descr']) { 
                                echo $part['descr'];
                            } ?>
                        </div>
                        <?php if($part['img']) { ?>
                            <div class="section-finishing-work-item__image">
                                <img src="<?php echo $part['img']; ?>" alt="">
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</section>
<?php 
$examples = get_field('examples', 'option');
if($examples) {
?>
<!-- example  reports-->
<section class="section-example-reports">
    <div class="container">
        <h2 class="section-example-reports__title">Примеры отчетов</h2>
        <div class="section-example-reports-row">
            <?php foreach($examples as $example) { ?>
                <a class="site-btn-load" href="<?php echo $example['file']; ?>">
                    <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8 12L3 7L4.4 5.55L7 8.15V0H9V8.15L11.6 5.55L13 7L8 12ZM2 16C1.45 16 0.979333 15.8043 0.588 15.413C0.196666 15.0217 0.000666667 14.5507 0 14V11H2V14H14V11H16V14C16 14.55 15.8043 15.021 15.413 15.413C15.0217 15.805 14.5507 16.0007 14 16H2Z">
                        </path>
                    </svg>
                    <?php echo $example['title']; ?>
                </a>
            <?php } ?>
        </div>
    </div>
</section>
<?php 
}
?>
<!-- example work-->
<section class="section-example-works">
    <div class="container">
        <h2 class="section-example-reports__title"> Примеры работ</h2>
        <div class="work-slider__wrapper">
            <div class="works-slider swiper">
                <div class="swiper-wrapper">
                    <!--item-->
                    <div class="work-slider__item swiper-slide">
                        <div class="work-slider__image">
                            <img src="./assets/images/portfolio1.png" alt="">
                        </div>
                    </div>

                    <!--item-->
                    <div class="work-slider__item swiper-slide">
                        <div class="work-slider__image">
                            <img src="./assets/images/portfolio1.png" alt="">
                        </div>
                    </div>


                    <!--item-->
                    <div class="work-slider__item swiper-slide">
                        <div class="work-slider__image">
                            <img src="./assets/images/finish-service.png" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="section-example-works__button">
            <a class="site-btn-2 site-btn-2_eqiupment" href="javascript:void(0)">Смотреть все
                работы</a>
        </div>
    </div>
</section>

<!-- requpment -->
<section class="section-equipment section-equipment_service">
    <div class="container">
        <div class="section-equipment__inner">
            <h2 class="section-equipment__title">Наше оборудование</h2>
            <div class="section-equipment-row swiper equipment-slider ">
                <div class="swiper-wrapper">
                    <!--item-->
                    <div class="section-equipment-item swiper-slide">
                        <div class="section-equipment-item__image">
                            <img src="./assets/images/ex1.png" alt="">
                        </div>
                        <div class="section-equipment-item__title">
                            Малогабаритная установка УКБ-12/25
                        </div>
                        <div class="section-equipment-item__text">
                            Малогабаритная легкоперевозимая установка УКБ-12/25 предназначена для бурения
                            скважин глубиной до 15 м шнековым способом и до 25 м твердосплавными коронками с
                            промывкой в труднодоступных или стесненных условиях.
                        </div>
                    </div>


                    <!--item-->
                    <div class="section-equipment-item swiper-slide">
                        <div class="section-equipment-item__image">
                            <img src="./assets/images/ex2.png" alt="">
                        </div>
                        <div class="section-equipment-item__title">
                            Агрегат вибрационного бурения АВБ-2М
                        </div>
                        <div class="section-equipment-item__text">
                            Агрегат вибрационного бурения АВБ-2М предназначен для бурения:вертикальных
                            скважин
                            вибрационным методом в породах I-IV категорий при инженерных изысканиях,скважин
                            ударно-канатным методом в породах до VII категории
                        </div>
                    </div>

                    <!--item-->
                    <div class="section-equipment-item swiper-slide">
                        <div class="section-equipment-item__image">
                            <img src="./assets/images/ex3.png" alt="">
                        </div>
                        <div class="section-equipment-item__title">
                            Буровая установка ПБУ-50
                        </div>
                        <div class="section-equipment-item__text">
                            Буровая установка ПБУ—50 используется при:проведении инженерно—геологических
                            или
                            технических изысканий,бурении скважин при сейсморазведке,бурении
                            инженерно—геологических скважин.
                        </div>
                    </div>

                    <!--item-->
                    <div class="section-equipment-item swiper-slide">
                        <div class="section-equipment-item__image">
                            <img src="./assets/images/ex3.png" alt="">
                        </div>
                        <div class="section-equipment-item__title">
                            Буровая установка ПБУ-50
                        </div>
                        <div class="section-equipment-item__text">
                            Буровая установка ПБУ—50 используется при:проведении инженерно—геологических
                            или
                            технических изысканий,бурении скважин при сейсморазведке,бурении
                            инженерно—геологических скважин.
                        </div>
                    </div>
                </div>

                <div class="swiper-pagination slider-pagination"></div>
            </div>


            <div class="section-equipment-all">
                <a class="site-btn-2 site-btn-2_eqiupment" href="javascript:void(0)">Смотреть все
                    оборудование</a>
            </div>


        </div>
    </div>
</section>
<!-- end equpment-->


<!-- section advantages service-->
<section class="section-advantages section-advantages-services">
    <div class="container">
        <div class="section-advantages__inner">
            <div class="section-advantages-services__desc">
                <h2 class="section-advantages-service__title"> Преимущества ООО «Геолог-Краснодар»</h2>
                <p>Одним из ключевых преимуществ нашей компании являются оптимальные цены на изыскательские
                    услуги. Итоговая стоимость работ зависит от площади участка, объема геодезических
                    изысканий, сложности местности и других факторов, но в любом случае остается более чем
                    доступной. Причем как для крупных корпоративных заказчиков, так и для частных лиц,
                    планирующих строительство коттеджа.</p>
                <p>Впрочем, список преимуществ ООО «Геолог-Краснодар» не ограничивается лояльной ценовой
                    политикой. Помимо этого, следует отметить такие плюсы, как:</p>
            </div>
            <div class="section-advantages-row advantages-service-slider swiper">
                <div class="swiper-wrapper">
                    <!--item-->
                    <div class="section-advantages-row__item section-advantages-row-item swiper-slide">
                        <span class="advantages-service-slider__title"> Высокий уровень профессиональной
                            подготовки специалистов.
                        </span>
                        <div class="advantages-service-slider__text">
                            Инженеры, геодезисты, техники компании имеют не только профильное образование,
                            но и богатый практический опыт.
                        </div>
                    </div>

                    <!--item-->
                    <div class="section-advantages-row__item section-advantages-row-item swiper-slide">
                        <span class="advantages-service-slider__title"> Наличие современного оборудования.
                        </span>
                        <div class="advantages-service-slider__text">
                            В распоряжении наших специалистов есть все необходимое для оперативного и
                            качественного решения поставленных задач, включая тахеометры, нивелиры, сканеры,
                            фотокамеры и многое другое.
                        </div>
                    </div>

                    <!--item-->
                    <div class="section-advantages-row__item section-advantages-row-item swiper-slide">
                        <span class="advantages-service-slider__title"> Готовность к выполнению любых
                            заявок. </span>
                        <div class="advantages-service-slider__text">
                            Мы работаем как с масштабными проектами, так и с небольшими частными заказами.
                            При этом всегда стремимся предложить максимально комфортные условия
                            сотрудничества.

                        </div>


                    </div>

                </div>
                <div class="swiper-pagination slider-pagination"></div>
            </div>
        </div>
</section>


<!--section tech task -->
<section class="section-tech-task">
    <div class="container">
        <h2 class="section-tech-task__title"> Техническое задание</h2>
        <div class="section-tech-task__row section-tech-task-row">
            <a class="site-btn-load" href="javascript:void(0)">
                <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M8 12L3 7L4.4 5.55L7 8.15V0H9V8.15L11.6 5.55L13 7L8 12ZM2 16C1.45 16 0.979333 15.8043 0.588 15.413C0.196666 15.0217 0.000666667 14.5507 0 14V11H2V14H14V11H16V14C16 14.55 15.8043 15.021 15.413 15.413C15.0217 15.805 14.5507 16.0007 14 16H2Z">
                    </path>
                </svg>
                Инженерно-геологические изыскания
            </a>

            <a class="site-btn-load" href="javascript:void(0)">
                <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M8 12L3 7L4.4 5.55L7 8.15V0H9V8.15L11.6 5.55L13 7L8 12ZM2 16C1.45 16 0.979333 15.8043 0.588 15.413C0.196666 15.0217 0.000666667 14.5507 0 14V11H2V14H14V11H16V14C16 14.55 15.8043 15.021 15.413 15.413C15.0217 15.805 14.5507 16.0007 14 16H2Z">
                    </path>
                </svg>
                Инженерно-геодезические изыскания
            </a>

            <a class="site-btn-load" href="javascript:void(0)">
                <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M8 12L3 7L4.4 5.55L7 8.15V0H9V8.15L11.6 5.55L13 7L8 12ZM2 16C1.45 16 0.979333 15.8043 0.588 15.413C0.196666 15.0217 0.000666667 14.5507 0 14V11H2V14H14V11H16V14C16 14.55 15.8043 15.021 15.413 15.413C15.0217 15.805 14.5507 16.0007 14 16H2Z">
                    </path>
                </svg>
                Инженерно-экологические изыскания
            </a>

            <a class="site-btn-load" href="javascript:void(0)">
                <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M8 12L3 7L4.4 5.55L7 8.15V0H9V8.15L11.6 5.55L13 7L8 12ZM2 16C1.45 16 0.979333 15.8043 0.588 15.413C0.196666 15.0217 0.000666667 14.5507 0 14V11H2V14H14V11H16V14C16 14.55 15.8043 15.021 15.413 15.413C15.0217 15.805 14.5507 16.0007 14 16H2Z">
                    </path>
                </svg>
                Инженерно-гидрометеорологические изыскания
            </a>
        </div>
    </div>
</section>


<!-- section faq-->
<section class="section-faq">
    <div class="container">
        <h2 class="section-faq__title"> Часто задаваемые вопросы</h2>

        <!--item-->
        <div class="section-faq-question">
            <div class="section-faq-question__header">
                <span> Целесообразно ли обращаться в геологическую компанию с заказом изысканий
                    зимой?</span> <span> <svg viewBox="0 0 15 9" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L7.5 7.5L14 1" stroke="white" stroke-width="2"
                            stroke-linecap="round" />
                    </svg>
                </span>
            </div>
            <div class="section-faq-question__answer">
                Уровень качества инженерно-геологических изысканий от времени года никак не зависит. Это
                связано с использованием лабораторных методов при определении физико-механических свойств
                грунтов.
            </div>
        </div>


        <!--item-->
        <div class="section-faq-question">
            <div class="section-faq-question__header">
                <span> Занимаются ли инженеры компании определением характеристик грунтовых вод,
                    включая их глубина расположения?</span> <span> <svg viewBox="0 0 15 9" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L7.5 7.5L14 1" stroke="white" stroke-width="2"
                            stroke-linecap="round" />
                    </svg>
                </span>
            </div>
            <div class="section-faq-question__answer">
                Уровень качества инженерно-геологических изысканий от времени года никак не зависит. Это
                связано с использованием лабораторных методов при определении физико-механических свойств
                грунтов.
            </div>
        </div>


        <!--item-->
        <div class="section-faq-question">
            <div class="section-faq-question__header">
                <span> Есть ли техническая возможность у вашей компании выполнения геологических изысканий
                    при отсутствии заезда на территорию для буровой техники?</span> <span> <svg
                        viewBox="0 0 15 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L7.5 7.5L14 1" stroke="white" stroke-width="2"
                            stroke-linecap="round" />
                    </svg>
                </span>
            </div>
            <div class="section-faq-question__answer">
                Есть ли техническая возможность у вашей компании выполнения геологических изысканий при
                отсутствии заезда на территорию для буровой техники?
            </div>
        </div>

        <!--item-->
        <div class="section-faq-question">
            <div class="section-faq-question__header">
                <span> При проведении изысканий происходит ли заключение Договора?</span> <span> <svg
                        viewBox="0 0 15 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L7.5 7.5L14 1" stroke="white" stroke-width="2"
                            stroke-linecap="round" />
                    </svg>
                </span>
            </div>
            <div class="section-faq-question__answer">
                Есть ли техническая возможность у вашей компании выполнения геологических изысканий при
                отсутствии заезда на территорию для буровой техники?
            </div>
        </div>


        <!--item-->
        <div class="section-faq-question">
            <div class="section-faq-question__header">
                <span>Обязательно ли заключать Договор в офисе вашей компании?</span> <span> <svg
                        viewBox="0 0 15 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L7.5 7.5L14 1" stroke="white" stroke-width="2"
                            stroke-linecap="round" />
                    </svg>
                </span>
            </div>
            <div class="section-faq-question__answer">
                Есть ли техническая возможность у вашей компании выполнения геологических изысканий при
                отсутствии заезда на территорию для буровой техники?
            </div>
        </div>

        <!--item-->
        <div class="section-faq-question">
            <div class="section-faq-question__header">
                <span>Как ваша компания принимает оплату за проведение изысканий?</span> <span> <svg
                        viewBox="0 0 15 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L7.5 7.5L14 1" stroke="white" stroke-width="2"
                            stroke-linecap="round" />
                    </svg>
                </span>
            </div>
            <div class="section-faq-question__answer">
                Есть ли техническая возможность у вашей компании выполнения геологических изысканий при
                отсутствии заезда на территорию для буровой техники?
            </div>
        </div>

        <!--item-->
        <div class="section-faq-question">
            <div class="section-faq-question__header">
                <span>Что выдают заказчику после завершения изысканий?</span> <span> <svg viewBox="0 0 15 9"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L7.5 7.5L14 1" stroke="white" stroke-width="2"
                            stroke-linecap="round" />
                    </svg>
                </span>
            </div>
            <div class="section-faq-question__answer">
                Есть ли техническая возможность у вашей компании выполнения геологических изысканий при
                отсутствии заезда на территорию для буровой техники?
            </div>
        </div>

        <!--item-->
        <div class="section-faq-question">
            <div class="section-faq-question__header">
                <span>Отчет можно получить только в офисе?</span> <span> <svg viewBox="0 0 15 9" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L7.5 7.5L14 1" stroke="white" stroke-width="2"
                            stroke-linecap="round" />
                    </svg>
                </span>
            </div>
            <div class="section-faq-question__answer">
                Есть ли техническая возможность у вашей компании выполнения геологических изысканий при
                отсутствии заезда на территорию для буровой техники?
            </div>
        </div>

        <!--item-->
        <div class="section-faq-question">
            <div class="section-faq-question__header">
                <span>Можно ли организовать работы в выходные дни?</span> <span> <svg viewBox="0 0 15 9"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L7.5 7.5L14 1" stroke="white" stroke-width="2"
                            stroke-linecap="round" />
                    </svg>
                </span>
            </div>
            <div class="section-faq-question__answer">
                Есть ли техническая возможность у вашей компании выполнения геологических изысканий при
                отсутствии заезда на территорию для буровой техники?
            </div>
        </div>
    </div>
</section>


<!-- garanty-->
<section class="section-garanty section-garanty-service">
    <div class="container">
        <div class="message">

            <h3 class="message-title"> Гарантии</h3>
            <div>
                <p>Компания Геолог-Краснодар гарантирует всем заказчикам высокое качество в сочетании с
                    невысокими расценками на проведение инженерно-геологических, геофизических,
                    экологических,
                    гидрологических и геодезических изысканий.</p>

                <p> Эти преимущества достигаются благодаря наличию в нашем коллективе инженеров и лаборантов
                    высокой квалификации, обладающих отличной подготовкой и большим опытом разнообразных
                    изысканий.</p>

                <p> Если у вас нет справки о доходах, получить микрозайм в Украине все равно можно в одной
                    из
                    микрофинансовых организаций.
                    Дополнительную гарантию качества мы предоставляем в виде сопровождения проектов
                    Государственной экспертизы, включая разделы, соответствующие техническому заданию, по
                    выполнению инженерных изысканий.</p>

                <p>Даже если Госэкспертиза выявляет недостатки, связанные с деятельностью наших заказчиков,
                    мы
                    готовы незамедлительно оказать помощь в проведении дополнительных инженерных изысканий.
                </p>

                <p>Какие МФО или ломбарды готовы кредитовать простых украинцев и выдавать им кредит онлайн
                    на
                    карту без отказа и проверок в интернете.</p>

                <p>Наша компания работает на основании действующей лицензии и допусков на проведение
                    исследований.
                    Мы поможем разобраться с наиболее сложными проблемами, если заказчик доверит нам
                    проведение
                    изыскательских работ.</p>
            </div>

        </div>
    </div>
</section>


<!-- condition payment-->
<section class="section-condition-payment">
    <div class="container">
        <h2 class="section-condition-payment__title">Условия оплаты</h2>
        <p class="section-condition-payment__desc">Основным условием для работы с компанией Геолог-Краснодар
            является создание условий для взаимовыгодного сотрудничества. Мы заботимся о максимальном
            удобстве своих заказчиков, обеспечиваем их материалами высокого качества по любым инженерным
            изысканиям в сочетании
            с высоким уровнем сервиса. Очень важно, что мы принимаем оплату в практически любых формах.</p>

        <div class="section-condition-payment-row condition-slider swiper">
            <div class="swiper-wrapper">
                <!--item-->
                <div class="section-condition-payment-row__item swiper-slide">
                    <div class="section-condition-payment-row__name">Наличная оплата</div>
                    <div class="section-condition-payment-row__text">
                        <p>Это простейшая форма оплаты, предполагающая передачу средств от заказчика к
                            менеджеру
                            нашей компании на основании подписанного договора. Оплата сопровождается
                            оформлением
                            всех необходимых для подтверждения оплаты документов.</p>
                    </div>
                </div>

                <!--item-->
                <div class="section-condition-payment-row__item swiper-slide">
                    <div class="section-condition-payment-row__name">Безналичная форма расчета</div>
                    <div class="section-condition-payment-row__text">
                        <p>По безналичному расчету мы сотрудничаем только с юридическими организациями,
                            которые
                            осуществляют перевод средств по договору на счет компании Геолог-Краснодар.
                            Оформление договора должно производиться с указанием реквизитов компании.</p>
                    </div>
                </div>

                <!--item-->
                <div class="section-condition-payment-row__item swiper-slide">
                    <div class="section-condition-payment-row__name">Оплата банковскими картами Mastercard
                        или
                        Visa</div>
                    <div class="section-condition-payment-row__text">
                        <p>Один из наиболее простых и универсальных способов по перечислению оговоренных
                            средств
                            на счет компании Геолог-Краснодар. Можно оплатить на сайте компании в онлайн
                            режиме,
                            после заполнения специальной формы. </p>
                    </div>
                </div>

                <!--item-->
                <div class="section-condition-payment-row__item swiper-slide">
                    <div class="section-condition-payment-row__name">Оплата денежным переводом</div>
                    <div class="section-condition-payment-row__text">
                        <p>Мы осуществляем прием денежных переводов посредством международных платежных
                            систем
                            Контакт, Юнистрим, Western Union и многих других. Следует учитывать процент,
                            взимаемый платежной системой за услуги.</p>
                    </div>
                </div>

                <!--item-->
                <div class="section-condition-payment-row__item swiper-slide">
                    <div class="section-condition-payment-row__name">Оплата электронным платежом</div>
                    <div class="section-condition-payment-row__text">
                        <p>У компании Геолог-Краснодар есть возможность принять необходимую сумму
                            посредством
                            популярной платежной системы Яндекс.Деньги или PayPal. Заказчик может
                            воспользоваться одним из этих сервисов для оплаты наших услуг.</p>
                    </div>
                </div>

                <!--item-->
                <div class="section-condition-payment-row__item swiper-slide">
                    <div class="section-condition-payment-row__name">Вариант, удобный заказчику</div>
                    <div class="section-condition-payment-row__text">
                        <p>Если вы не можете воспользоваться перечисленными выше вариантами, то можете
                            воспользоваться тем способом, который удобен для вас. Остается лишь согласовать
                            форму платежа с нашими менеджерами. </p>

                        <p>По любым вопросам или для уточнения реквизитов компании связывайтесь с нашими
                            специалистами.</p>
                    </div>
                </div>

                <!--item-->
                <div class="section-condition-payment-row__item swiper-slide">
                    <div class="section-condition-payment-row__name">Вариант, удобный заказчику</div>
                    <div class="section-condition-payment-row__text">
                        <p>Если вы не можете воспользоваться перечисленными выше вариантами, то можете
                            воспользоваться тем способом, который удобен для вас. Остается лишь согласовать
                            форму платежа с нашими менеджерами. </p>

                        <p>По любым вопросам или для уточнения реквизитов компании связывайтесь с нашими
                            специалистами.</p>
                    </div>
                </div>

            </div>
            <div class="swiper-scrollbar slider-scroll-bar"></div>

            <div class="swiper-pagination slider-pagination"></div>
        </div>
    </div>
</section>


<!-- condition work-->
<section class="section-work section-work-serivice">
    <div class="container">
        <div class="message messge_work">
            <h3 class="message-title"> Условия работы</h3>
            <div>
                <p>Компания Геолог-Краснодар работает на основе взаимовыгодного сотрудничества, после
                    заключения
                    Договора и внесения заказчиком авансового платежа.</p>
            </div>
            <div class="order-work">
                <h3 class="message-title order-work__title">Порядок работ</h3>
                <div class="order-work__items order-work-items">
                    <!--item-->
                    <div class="order-work__item order-work-item">
                        <div class="order-work-item__number">
                            1
                        </div>
                        <div class="order-work-item__body">
                            <div class="order-work-item__name">Принимаем заявку</div>
                            <div class="order-work-item__text"> Мы принимаем заявки на сайте или по
                                телефону.</div>
                        </div>
                    </div>

                    <!--item-->
                    <div class="order-work__item order-work-item">
                        <div class="order-work-item__number">
                            2
                        </div>
                        <div class="order-work-item__body">
                            <div class="order-work-item__name">Подписание договора, выезд на участок</div>
                            <div class="order-work-item__text"> Подписание договора может состояться после
                                выезда наших мастеров на объект заказчика для определения подъездных путей к
                                месту работ и ознакомления с рельефом участка.</div>
                        </div>
                    </div>

                    <!--item-->
                    <div class="order-work__item order-work-item">
                        <div class="order-work-item__number">
                            3
                        </div>
                        <div class="order-work-item__body">
                            <div class="order-work-item__name">Выполнение работ</div>
                            <div class="order-work-item__text"> Подписав договор и получив предоплату,
                                специалисты компании Геолог-Краснодар приступают к выполнению своих
                                обязательств в течение максимум трех дней.</div>
                        </div>
                    </div>

                    <!--item-->
                    <div class="order-work__item order-work-item">
                        <div class="order-work-item__number">
                            4
                        </div>
                        <div class="order-work-item__body">
                            <div class="order-work-item__name">Технический отчет</div>
                            <div class="order-work-item__text"> Завершив изыскания на объекте, мы передаем
                                заказчику технический отчет с содержанием материалов по всем произведенным
                                изысканиям.</div>
                        </div>
                    </div>


                    <!--item-->
                    <div class="order-work__item order-work-item">
                        <div class="order-work-item__number">
                            4
                        </div>
                        <div class="order-work-item__body">
                            <div class="order-work-item__name">Сдача работы</div>
                            <div class="order-work-item__text"> По согласованию с заказчиками сдачу работ мы
                                можем осуществлять поэтапно, передавая результаты по каждому завершенному
                                изысканию.</div>
                        </div>
                    </div>
                </div>
                <div>
                    <p>
                        Достоинством компании Геолог-Краснодар является индивидуальное отношение ко всем
                        заказчикам. Это заключается в индивидуальном обсуждении размера аванса, порядка и
                        сроков
                        работ, сопровождения и прохождения экспертизы и стоимости заказа с каждым из
                        заказчиков.
                    </p>
                    <p>
                        Оформить техническое задание для выполнения изысканий можно после скачивания нужного
                        варианта шаблона для проведения работ, размещенных на нашем сайте.
                    </p>
                </div>


            </div>
        </div>
    </div>
</section>

<!-- section sert-->
<section class="section-sert">
    <div class="container">
        <h2 class="section-sert__title"> Лицензии и серфтификаты</h2>
        <div class="swiper sert-slider">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="reviews-slider-item swiper-slide">
                    <a class="trigger-fancy" href="#gallery_1">
                        <img src="./assets/images/review1.png" />
                    </a>

                    <div id="gallery_1" class="global-popup" style="display:none">
                        <div class="global-popup__body">
                            <img src="./assets/images/review1.png" />
                        </div>
                    </div>
                </div>

                <!-- Slides -->
                <div class="reviews-slider-item swiper-slide">
                    <a class="trigger-fancy" href="#gallery_2">
                        <img src="./assets/images/review1.png" />
                    </a>

                    <div id="gallery_2" class="global-popup" style="display:none">
                        <div class="global-popup__body">
                            <img src="./assets/images/review1.png" />
                        </div>
                    </div>
                </div>


                <!-- Slides -->
                <div class="reviews-slider-item swiper-slide">
                    <a class="trigger-fancy" href="#gallery_3">
                        <img src="./assets/images/review1.png" />
                    </a>
                    <div id="gallery_3" class="global-popup" style="display:none">
                        <div class="global-popup__body">
                            <img src="./assets/images/review1.png" />
                        </div>
                    </div>
                </div>


                <!-- Slides -->
                <div class="reviews-slider-item swiper-slide">
                    <a class="trigger-fancy" href="#gallery_4">
                        <img src="./assets/images/review1.png" />
                    </a>

                    <div id="gallery_4" class="global-popup" style="display:none">
                        <div class="global-popup__body">
                            <img src="./assets/images/review1.png" />
                        </div>
                    </div>
                </div>

                <!-- Slides -->
                <div class="reviews-slider-item swiper-slide">
                    <a class="trigger-fancy" href="#gallery_5">
                        <img src="./assets/images/review1.png" />
                    </a>

                    <div id="gallery_5" class="global-popup" style="display:none">
                        <div class="global-popup__body">
                            <img src="./assets/images/review1.png" />
                        </div>
                    </div>
                </div>


            </div>


            <!-- If we need navigation buttons -->
            <div class="sliders-arrows">
                <div class="swiper-button-prev arrow-slider-prev"><svg width="21" height="16"
                        viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.985125 7.60637C0.594601 7.99689 0.594601 8.63006 0.985125 9.02058L7.34909 15.3845C7.73961 15.7751 8.37278 15.7751 8.7633 15.3845C9.15382 14.994 9.15382 14.3609 8.7633 13.9703L3.10645 8.31348L8.7633 2.65662C9.15382 2.2661 9.15382 1.63293 8.7633 1.24241C8.37278 0.851883 7.73961 0.851883 7.34909 1.24241L0.985125 7.60637ZM20.3076 7.31348L1.69223 7.31347L1.69223 9.31347L20.3076 9.31348L20.3076 7.31348Z"
                            fill="white" />
                    </svg>
                </div>
                <div class="swiper-button-next arrow-slider-next"><svg width="20" height="16"
                        viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M19.3899 8.70711C19.7804 8.31658 19.7804 7.68342 19.3899 7.29289L13.0259 0.928932C12.6354 0.538408 12.0022 0.538408 11.6117 0.928932C11.2212 1.31946 11.2212 1.95262 11.6117 2.34315L17.2686 8L11.6117 13.6569C11.2212 14.0474 11.2212 14.6805 11.6117 15.0711C12.0022 15.4616 12.6354 15.4616 13.0259 15.0711L19.3899 8.70711ZM0.0673828 9H18.6828V7H0.0673828V9Z"
                            fill="white" />
                    </svg>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- reviews-->
<section class="section-reviews">
    <div class="container">
        <h2 class="section-reviews__title">Отзывы</h2>
        <div class="swiper reviews-slider">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="reviews-slider-item swiper-slide">
                    <a class="trigger-fancy" href="#gallery_1">
                        <img src="./assets/images/review1.png" />
                    </a>

                    <div id="gallery_1" class="global-popup" style="display:none">
                        <div class="global-popup__body">
                            <img src="./assets/images/review1.png" />
                        </div>
                    </div>
                </div>

                <!-- Slides -->
                <div class="reviews-slider-item swiper-slide">
                    <a class="trigger-fancy" href="#gallery_2">
                        <img src="./assets/images/review1.png" />
                    </a>

                    <div id="gallery_2" class="global-popup" style="display:none">
                        <div class="global-popup__body">
                            <img src="./assets/images/review1.png" />
                        </div>
                    </div>
                </div>


                <!-- Slides -->
                <div class="reviews-slider-item swiper-slide">
                    <a class="trigger-fancy" href="#gallery_3">
                        <img src="./assets/images/review1.png" />
                    </a>
                    <div id="gallery_3" class="global-popup" style="display:none">
                        <div class="global-popup__body">
                            <img src="./assets/images/review1.png" />
                        </div>
                    </div>
                </div>


                <!-- Slides -->
                <div class="reviews-slider-item swiper-slide">
                    <a class="trigger-fancy" href="#gallery_4">
                        <img src="./assets/images/review1.png" />
                    </a>

                    <div id="gallery_4" class="global-popup" style="display:none">
                        <div class="global-popup__body">
                            <img src="./assets/images/review1.png" />
                        </div>
                    </div>
                </div>

                <!-- Slides -->
                <div class="reviews-slider-item swiper-slide">
                    <a class="trigger-fancy" href="#gallery_5">
                        <img src="./assets/images/review1.png" />
                    </a>

                    <div id="gallery_5" class="global-popup" style="display:none">
                        <div class="global-popup__body">
                            <img src="./assets/images/review1.png" />
                        </div>
                    </div>
                </div>


            </div>


            <!-- If we need navigation buttons -->
            <div class="sliders-arrows">
                <div class="swiper-button-prev arrow-slider-prev"><svg width="21" height="16"
                        viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.985125 7.60637C0.594601 7.99689 0.594601 8.63006 0.985125 9.02058L7.34909 15.3845C7.73961 15.7751 8.37278 15.7751 8.7633 15.3845C9.15382 14.994 9.15382 14.3609 8.7633 13.9703L3.10645 8.31348L8.7633 2.65662C9.15382 2.2661 9.15382 1.63293 8.7633 1.24241C8.37278 0.851883 7.73961 0.851883 7.34909 1.24241L0.985125 7.60637ZM20.3076 7.31348L1.69223 7.31347L1.69223 9.31347L20.3076 9.31348L20.3076 7.31348Z"
                            fill="white" />
                    </svg>
                </div>
                <div class="swiper-button-next arrow-slider-next"><svg width="20" height="16"
                        viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M19.3899 8.70711C19.7804 8.31658 19.7804 7.68342 19.3899 7.29289L13.0259 0.928932C12.6354 0.538408 12.0022 0.538408 11.6117 0.928932C11.2212 1.31946 11.2212 1.95262 11.6117 2.34315L17.2686 8L11.6117 13.6569C11.2212 14.0474 11.2212 14.6805 11.6117 15.0711C12.0022 15.4616 12.6354 15.4616 13.0259 15.0711L19.3899 8.70711ZM0.0673828 9H18.6828V7H0.0673828V9Z"
                            fill="white" />
                    </svg>
                </div>
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
                        <input id="political" type="checkbox" checked>
                        <label for="political"></label>
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