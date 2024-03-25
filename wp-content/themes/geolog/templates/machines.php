<?php 
$args = array(
    'post_type'      => 'machines',
    'post_status'    => 'publish',
    'posts_per_page' => 3,
    'tax_query' => array(
        array(
            'taxonomy' => 'machine_category',
            'field'    => 'slug',
            'terms'    => 'osnovnaya',
        ),
    ),
);

$machines = new WP_Query($args);
if ($machines->have_posts()) {
?>
<div class="section-equipment-row swiper equipment-slider ">
    <div class="swiper-wrapper">
        <?php
        while ($machines->have_posts()) {
            $machines->the_post();
            $machine_img = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
        ?>
            <!--item-->
            <div class="section-equipment-item swiper-slide">
                <div class="section-equipment-item__image">
                    <img src="<?php echo $machine_img; ?>" alt="">
                </div>
                <div class="section-equipment-item__title">
                    <?php the_title(); ?>
                </div>
                <?php if(get_field('m_short-descr')) { ?>
                <div class="section-equipment-item__text">
                    <?php echo get_field('m_short-descr'); ?>
                </div>
                <?php } ?>
            </div>
        <?php 
        }
        ?>
    </div>

    <div class="swiper-pagination slider-pagination"></div>
</div>
<?php
}
wp_reset_postdata(); ?>

<div class="section-equipment-all">
    <a class="site-btn-2 site-btn-2_eqiupment" href="/machines/">Смотреть все
        оборудование</a>
</div>