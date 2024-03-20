<?php 
if(get_field('pay_preview', 'option')) {
?>
    <p class="section-condition-payment__desc"><?php echo get_field('pay_preview', 'option'); ?></p>
<?php 
}
?>
<?php
$pay_conditions = get_field('pay_conditions', 'option');
if($pay_conditions) {
?>
    <div class="section-condition-payment-row condition-slider swiper">
        <div class="swiper-wrapper">
            <?php 
            foreach($pay_conditions as $pay_condition) {
            ?>
                <!--item-->
                <div class="section-condition-payment-row__item swiper-slide">
                    <div class="section-condition-payment-row__name"><?php echo $pay_condition['title']; ?></div>
                    <div class="section-condition-payment-row__text">
                        <p><?php echo $pay_condition['descr']; ?></p>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
        <div class="swiper-scrollbar slider-scroll-bar"></div>

        <div class="swiper-pagination slider-pagination"></div>
    </div>
<?php 
}
?>