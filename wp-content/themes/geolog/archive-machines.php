<?php
get_header();
?>
<!-- Begin content-->
<div class="content">
    <!-- breadcrumbs-->
    <div class="container">
        <!-- wrapper for margin-->
        <div class="page-navigation  page-navigation_links">
            <?php get_template_part('templates/breadcrumbs') ?>
        </div>

    </div>
    <?php
    $args = array(
        'post_type' => 'machines',
        'posts_per_page' => -1,
        'tax_query' => array(
            array(
                'taxonomy' => 'machine_category',
                'field'    => 'slug',
                'terms'    => 'osnovnaya',
            ),
        ),
    );

    $query = new WP_Query( $args );  
    ?>
    <!-- links article-->

    <section class="section-page-equipment">
        <div class="container">
            <div class="section-page-equipment__desc">
                <p>Специалисты нашей компании оснащены парком разнообразного бурового оборудования, позволяющего
                    заниматься бурением инженерных скважин во всем диапазоне, как на удаленных участках, так и в
                    труднодоступных или стесненных условиях.</p>
            </div>
            <div class="section-page-equipment-rows">
                <?php 
                if ( $query->have_posts() ) {
                    while ( $query->have_posts() ) {
                        $query->the_post();
                ?>
                    <!--item-->
                    <div class="section-page-equipment__item section-page-equipment-item">
                        <div class="section-page-equipment-item__image">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                        </div>

                        <div class="section-page-equipment-item__desc">
                            <div
                                class="message section-page-equipment-item__message section-page-equipment-item-message ">

                                <h4 class="section-page-equipment-item-message__title"> <?php the_title(); ?></h4>
                                <div>
                                    <?php the_content(); ?>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php
                    }
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>
    <?php
    $terms = get_terms(
        array(
            'taxonomy'   => 'machine_category',
            'hide_empty' => true,
            'parent'     => 0,
            'orderby'    => 'date',
            'order'      => 'DESC',
            'exclude'    => 24,
        )
    );
    if (!empty($terms) && !is_wp_error($terms)) { 
        foreach ($terms as $term) {
    ?>
            <!-- laboratory-->
            <section class="section-<?php echo $term->slug; ?>">
                <div class="container">
                    <h4 class="section-laboratory__title"><?php echo $term->name; ?></h4>
                    <div class="section-laboratory-row">
                        <?php
                        $args     = array(
                            'post_type'      => 'machines',
                            'post_status'    => 'publish',
                            'posts_per_page' => -1,
                            'tax_query'      => array(
                                array(
                                    'taxonomy' => 'machine_category',
                                    'field'    => 'id',
                                    'terms'    => $term->term_id,
                                ),
                            ),
                        );
                        $childrens = new WP_Query($args);
                        if ($childrens->have_posts()) {
                            $ch_count = 1;
                            while ($childrens->have_posts()) {
                                $childrens->the_post();
                                ?>
                                <!--item-->
                                <a href="#<?php echo $term->slug . '_' . $ch_count; ?>" class="trigger-fancy section-laboratory-row__item section-laboratory-row-item">
                                    <div class="section-laboratory-row-item__image">
                                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                                    </div>
                                    <div class="section-laboratory-row-item__name">
                                        <?php the_title(); ?>
                                    </div>

                                    <div id="<?php echo $term->slug . '_' . $ch_count; ?>" class="gallery-popup" style="display:none">
                                        <div class="global-popup__body">
                                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" />
                                        </div>
                                    </div>
                                </a>
                        <?php
                                $ch_count++; 
                            } 
                        }
                        ?>
                    </div>
                </div>
            </section>
    <?php
        } 
    } 
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
                set_query_var( 'form_name', 'machines_form' );
                set_query_var( 'form_id', 'machines_form' );
                get_template_part('templates/form');
                ?>
            </div>
        </div>
    </section>
</div> <!-- end content-->
<?php
get_footer();