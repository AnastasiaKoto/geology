<?php
$workers = get_field('workers');
if($workers) {
?>
<div class="section-employers-row employers-slider swiper">
    <div class="swiper-wrapper">
        <?php
        foreach($workers as $worker) {
            $worker_id = $worker->ID;
        ?>
            <!--item-->
            <div class="section-employers__item section-employers-item  swiper-slide">
                <div class="section-employers-item__image">
                    <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($worker_id)); ?>" alt="">
                </div>

                <div class="section-employers-item__pos">
                    <?php 
                    echo $worker->post_title;
                    ?>
                </div>

                <div class="section-employers-item__name">
                    <?php echo get_field('worker_name', $worker_id); ?>
                </div>

                <div class="section-employers-item__btn">
                    <a class="site-btn-2 site-btn-2_emp" href="#callback">Отправить заявку </a>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>
<?php
}
?>