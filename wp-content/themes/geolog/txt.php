<?php
/*
 Template name: Текстовая страница
*/
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
                <?php 
                set_query_var( 'form_name', 'txt_form' );
                set_query_var( 'form_id', 'txt_form' );
                get_template_part('templates/form');
                ?>
            </div>
        </div>
    </section>


</div> <!-- end content-->
<?php
get_footer();