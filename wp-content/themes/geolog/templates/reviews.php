<?php 
$reviews = get_field('review_scans', 'option');
if($reviews) {
?>
<div class="swiper reviews-slider">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <?php
        foreach($reviews as $review) {
        ?>
            <!-- Slides -->
            <div class="reviews-slider-item swiper-slide">
                <a class="trigger-fancy" href="#gallery_1">
                    <img src="<?php echo $review; ?>" />
                </a>

                <div id="gallery_1" class="global-popup" style="display:none">
                    <div class="global-popup__body">
                        <img src="<?php echo $review; ?>" />
                    </div>
                </div>
            </div>
        <?php 
        } 
        ?>
    </div>


    <!-- If we need navigation buttons -->
    <div class="sliders-arrows">
        <div class="swiper-button-prev arrow-slider-prev"><svg width="21" height="16"
                viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M0.985125 7.60637C0.594601 7.99689 0.594601 8.63006 0.985125 9.02058L7.34909 15.3845C7.73961 15.7751 8.37278 15.7751 8.7633 15.3845C9.15382 14.994 9.15382 14.3609 8.7633 13.9703L3.10645 8.31348L8.7633 2.65662C9.15382 2.2661 9.15382 1.63293 8.7633 1.24241C8.37278 0.851883 7.73961 0.851883 7.34909 1.24241L0.985125 7.60637ZM20.3076 7.31348L1.69223 7.31347L1.69223 9.31347L20.3076 9.31348L20.3076 7.31348Z"
                    fill="white" />
            </svg>
        </div>
        <div class="swiper-button-next arrow-slider-next"><svg width="20" height="16"
                viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M19.3899 8.70711C19.7804 8.31658 19.7804 7.68342 19.3899 7.29289L13.0259 0.928932C12.6354 0.538408 12.0022 0.538408 11.6117 0.928932C11.2212 1.31946 11.2212 1.95262 11.6117 2.34315L17.2686 8L11.6117 13.6569C11.2212 14.0474 11.2212 14.6805 11.6117 15.0711C12.0022 15.4616 12.6354 15.4616 13.0259 15.0711L19.3899 8.70711ZM0.0673828 9H18.6828V7H0.0673828V9Z"
                    fill="white" />
            </svg>
        </div>
    </div>

</div>
<?php 
}
?>