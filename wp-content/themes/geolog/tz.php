<?php
/*
 Template name: Техзадание
*/
get_header();
?>
<!-- Begin content-->
<div class="content">
    <!-- breadcrumbs-->
    <div class="container">
        <!-- wrapper for margin-->
        <div class="page-navigation  page-navigation_tz">
            <?php get_template_part('templates/breadcrumbs') ?>
        </div>
    </div>

    <!-- tz-->
    <section class="section-page-tz">
        <div class="container">
            <?php get_template_part('templates/tech', 'task') ?>
        </div>
    </section>
    <?php
    $tzs = get_field('tex_examples', 'option');
    if($tzs) {
        $count_section = 1;
        foreach($tzs as $tz) {
            $gallery = $tz['gallery'];
    ?>
            <!-- first example-->
            <section class="section-example section-example-first ">
                <div class="container">
                    <div class="section-example__desc">
                        <h4><?php echo $tz['title']; ?></h4>
                        <a target="_blank" href="<?php echo $tz['file']; ?><">Смотреть весь документ </a>
                    </div>
                    <?php
                    if($gallery) {
                        $count_image = 1;
                    ?>
                        <div class="section-example__row section-example-row">
                            <?php 
                            foreach($gallery as $image) {
                            ?>
                                <!--item-->
                                <a class="trigger-fancy section-example-row__item section-example-row-item"
                                    href="#section-example-<?php echo $count_section; ?>__gal_<?php echo $count_image; ?>">
                                    <div class="section-example-row-item__image">
                                        <img src="<?php echo $image; ?>" />
                                    </div>

                                    <div id="section-example-<?php echo $count_section; ?>__gal_<?php echo $count_image; ?>" class="gallery-popup" style="display:none">
                                        <div class="global-popup__body">
                                            <img src="<?php echo $image; ?>" />
                                        </div>
                                    </div>
                                </a>
                            <?php
                                $count_image++;
                            }
                            ?>
                        </div>
                    <?php 
                    }
                    ?>
                </div>
            </section>
    <?php
            $count_section++;
        }
    } ?>
    
    <!-- begin callback-->
    <section class="section-form" id="callback">
        <div class="container">
            <div class="callback-form">
                <div class="callback-form__desc">
                    <h2 class="callback-form__title">Оставьте заявку</h2>
                    <p> и получите бесплатную консультацию специалиста</p>
                </div>
                <?php 
                set_query_var( 'form_name', 'tz_form' );
                set_query_var( 'form_id', 'tz_form' );
                get_template_part('templates/form');
                ?>
            </div>
        </div>
    </section>

</div> <!-- end content-->
<?php
get_footer();