<?php 
if( have_rows('banner') ):
    while( have_rows('banner') ): the_row();
        $banner_back = get_sub_field('background');
        $banner_descr = get_sub_field('descr');
        $utps = get_sub_field('utps');
?>
        <section style="background-image: url(<?php echo $banner_back; ?>);" class="section-main-banner">
            <div class="container">
                <div class="section-main-banner__row">
                    <div class="section-main-banner__col ">
                        <div class="section-main-banner__desc">
                            <h1><?php the_title(); ?></h1>
                            <p><?php echo $banner_descr; ?></p>
                        </div>
                        <div class="section-main-banner__buttons">
                            <a href="#modal-form" class="banner-btn trigger-fancy">Заказать услугу </a>
                        </div>
                    </div>

                    <div class="section-main-banner__col  ">
                        <?php 
                        if($utps) {
                        ?>
                            <div class="section-main-banner-adv main-banner-slider swiper">
                                <div class="swiper-wrapper ">
                                    <?php 
                                    $count = 1;
                                    $all = count($utps);
                                    foreach($utps as $utp) {
                                    ?>
                                    <!-- item-->
                                        <div
                                            class="section-main-banner-adv__item section-main-banner-adv-item swiper-slide">
                                            <div class="section-main-banner-adv-item__counter">
                                                <span><?php echo $count; ?></span> <span>/</span> <span> <?php echo $all; ?></span>

                                            </div>
                                            <div class="section-main-banner-adv-item__title">
                                                <?php echo $utp->post_title; ?>
                                            </div>
                                            <div class="section-main-banner-adv-item__text">
                                                <p>
                                                    <?php echo $utp->post_content; ?>
                                                </p>
                                            </div>
                                        </div>
                                    <?php
                                    $count++;
                                    }
                                    ?>
                                </div>
                            </div>
                        <?php
                        } 
                        ?>
                    </div>

                </div>
            </div>
        </section>
<?php 
    endwhile;
endif;
?>