<?php
/*
 Template name: Цены
*/
get_header();
?>
<!-- Begin content-->
<div class="content">


    <!-- breadcrumbs-->
    <div class="container">
        <!-- wrapper for margin-->
        <div class="page-navigation  page-navigation_prices">
            <?php get_template_part('templates/breadcrumbs') ?>
        </div>

    </div>

    <!-- prices-->
    <section class="section-page-prices">
        <div class="container">
            <!-- cost-->
            <div class="section-page-prices__cost section-page-prices-cost">
                <div class="section-page-prices-cost__desc">
                    <?php echo get_field('page_descr'); ?>
                </div>
            </div>
            <!-- sales-->
            <div class="section-page-prices__sales section-page-prices-sales">
                <h2> Скидки</h2>
                <div class="section-page-prices-sales__desc">
                    <?php echo get_field('sales'); ?>
                </div>
            </div>
        </div>
    </section>

    <!-- prices-->
    <section class="section-prices section-prices_page-prices">
        <div class="container">
            <h3 class="section-prices__title"> Цены на геологию</h3>
            <?php get_template_part('templates/geo', 'price'); ?>
        </div>
    </section>

    <!-- table geo-->
    <section class="section-prices-table">
        <div class="container">
            <h3>Цены на геодезию</h3>
            <div class="section-prices-table__table-wrap">
                <?php echo get_field('geodez_price'); ?>
            </div>
        </div>
    </section>


    <!-- table eco-->
    <section class="section-prices-table">
        <div class="container">
            <h3>Цены на экологию</h3>
            <div class="section-prices-table__table-wrap">
                <?php echo get_field('eco_price'); ?>
            </div>
        </div>
    </section>

    <!-- table OOC-->
    <section class="section-prices-table">
        <div class="container">
            <h3>Цены на раздел ПМ ООС</h3>
            <div class="section-prices-table__table-wrap">
                <?php echo get_field('pm_price'); ?>
            </div>
        </div>
    </section>


    <!-- table gidro-->
    <section class="section-prices-table">
        <div class="container">
            <h3>Цены на гидромтеорологию</h3>
            <div class="section-prices-table__table-wrap">
                <?php echo get_field('gidro_price'); ?>
            </div>
        </div>
    </section>


    <!-- table gidro-->
    <section class="section-prices-table">
        <div class="container">
            <h3>Цены на гидромтеорологию</h3>
            <div class="section-prices-table__table-wrap">
                <?php echo get_field('gidro2_price'); ?>
            </div>
        </div>
    </section>
    <!-- text message -->
    <section class="section-prices-page-messages">
        <div class="container">
            <!-- message-->
            <div class="message">
                <div>
                    <?php the_content(); ?>
                </div>
            </div>
            <!-- message-->
            <div class="message">
                <h3>Как сделать заказ</h3>
                <div>
                    <?php echo get_field('how_order'); ?>
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
                set_query_var( 'form_name', 'prices_form' );
                set_query_var( 'form_id', 'prices_form' );
                get_template_part('templates/form');
                ?>
            </div>
        </div>
    </section>


</div> <!-- end content-->
<?php
get_footer();