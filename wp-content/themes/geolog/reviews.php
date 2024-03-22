<?php
/*
 Template name: Отзывы
*/
get_header();
?>
<!-- Begin content-->
<div class="content">


    <!-- breadcrumbs-->
    <div class="container">
        <!-- wrapper for margin-->
        <div class="page-navigation  page-navigation_cpo">
            <?php get_template_part('templates/breadcrumbs') ?>
        </div>

    </div>
    <!-- section cpo-->
    <section class="section-cpo">
        <div class="container">
            <?php 
            $reviews = get_field('review_scans', 'option');
            if($reviews) {
                $rev_count = 1;
            ?>
            <div class="rows-square">
                <?php
                foreach($reviews as $review) {
                ?>
                <!--ITEM-->
                <div class="rows-square__item  rows-square-item">
                    <a class="trigger-fancy" href="#gallery_<?php echo $rev_count; ?>">
                        <img src="<?php echo $review; ?>" />
                    </a>

                    <div id="gallery_<?php echo $rev_count; ?>" class="gallery-popup" style="display:none">
                        <div class="global-popup__body">
                            <img src="<?php echo $review; ?>" />
                        </div>
                    </div>

                </div>
                <?php 
                $rev_count++;
                } 
                ?>

            </div>
            <?php 
            }
            ?>
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
                set_query_var( 'form_name', 'reviews_form' );
                set_query_var( 'form_id', 'reviews_form' );
                get_template_part('templates/form');
                ?>
            </div>
        </div>
    </section>


</div> <!-- end content-->
<?php
get_footer();