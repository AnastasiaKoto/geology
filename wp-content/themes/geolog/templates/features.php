<?php 
$features = get_field('features');
if($features) {
?>
    <div class="section-advantages-row advantages-slider swiper">
        <div class="swiper-wrapper">
            <?php
            foreach($features as $feature) {
            ?>
                <!--item-->
                <div class="section-advantages-row__item section-advantages-row-item swiper-slide">
                    <?php echo $feature['feature']; ?>
                </div>
            <?php
            }
            ?>
        </div>
        <div class="swiper-pagination slider-pagination slider-pagination__adv"></div>
    </div>
<?php
}
?>