<?php
/*
 Template name: Фото
*/
get_header();
?>
<!-- Begin content-->
<div class="content">
    <!-- breadcrumbs-->
    <div class="container">
        <!-- wrapper for margin-->
        <div class="page-navigation  page-navigation_photos">
            <?php get_template_part('templates/breadcrumbs') ?>
        </div>

    </div>
    <?php 
    $works_gallery = get_field('work_gallery', 'option');
    if($works_gallery) {
        $gallery_count = 1;
    ?>
    <!-- photos-->
    <section class="section-photos">
        <div class="container">
            <div class="section-photos__row section-photos-row">
                <?php foreach($works_gallery as $image) { ?>
                <!--item-->
                <div class="section-photos-row__item">
                    <a class="trigger-fancy" href="#gallery_<?php echo $gallery_count; ?>">
                        <img src="<?php echo $image; ?>" />
                    </a>

                    <div id="gallery_<?php echo $gallery_count; ?>" class="gallery-popup" style="display:none">
                        <div class="global-popup__body">
                            <img src="<?php echo $image; ?>" />
                        </div>
                    </div>
                </div>
                <?php $gallery_count++; } ?>
            </div>
        </div>
    </section>
    <?php } ?>
    <!-- begin callback-->
    <section class="section-form" id="callback">
        <div class="container">
            <div class="callback-form">
                <div class="callback-form__desc">
                    <h2 class="callback-form__title">Оставьте заявку</h2>
                    <p> и получите бесплатную консультацию специалиста</p>
                </div>
                <?php 
                set_query_var( 'form_name', 'photos_form' );
                set_query_var( 'form_id', 'photos_form' );
                get_template_part('templates/form');
                ?>
            </div>
        </div>
    </section>


</div> <!-- end content-->
<?php
get_footer();