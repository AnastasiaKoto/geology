<?php
/*
 Template name: CPO
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
            $serts = get_field('serts', 'option');
            if($serts) {
                $serts_count = 1;
            ?>
                <div class="rows-square">
                    <?php foreach($serts as $sert) { ?>
                        <!--ITEM-->
                        <div class="rows-square__item  rows-square-item">

                            <a class="trigger-fancy" href="#gallery_<?php echo $serts_count; ?>">
                                <img src="<?php echo $sert; ?>" />
                            </a>

                            <div id="gallery_<?php echo $serts_count; ?>" class="gallery-popup" style="display:none">
                                <div class="global-popup__body">
                                    <img src="<?php echo $sert; ?>" />
                                </div>
                            </div>
                        </div>
                    <?php $serts_count++; } ?>
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
                set_query_var( 'form_name', 'cpo_form' );
                set_query_var( 'form_id', 'cpo_form' );
                get_template_part('templates/form');
                ?>
            </div>
        </div>
    </section>
</div> <!-- end content-->
<?php
get_footer();