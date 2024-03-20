<?php
/*
 Template name: About
*/
get_header();
?>
<!-- Begin content-->
<div class="content">

    <!-- breadcrumbs-->
    <div class="container">
        <?php get_template_part('templates/breadcrumbs') ?>
    </div>

    <!-- about section-->
    <section class="section-company-about">
        <div class="container">
            <!--desc-->
            <div class="section-company-about__desc section-company-about-desc">
                <div class="section-company-about-desc__part1">
                    <?php the_content(); ?>
                </div>

                <div class="section-company-about-desc__part2">
                    <div class="section-company-about-desc__image">
                        <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>" alt="">
                    </div>
                </div>

            </div>

            <?php 
            $about_list = get_field('about_list');
            if($about_list) {
            ?>
                <div class="section-company-about-desc__adv section-company-about-desc-adv">
                    <?php foreach($about_list as $item) { ?>
                        <!--item-->
                        <div class="section-company-about-desc-adv__item">
                            <div><?php echo $item['title']; ?></div>
                            <div>
                                <?php echo $item['descr']; ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
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
            set_query_var( 'form_name', 'about_form' );
            set_query_var( 'form_id', 'about_form' );
            get_template_part('templates/form');
            ?>
        </div>
    </div>
</section>
</div> <!-- end content-->
<?php
get_footer();