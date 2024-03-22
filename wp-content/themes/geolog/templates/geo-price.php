<?php
$geo_prices = get_field('geolog_price', 'option');
if ($geo_prices) {
    ?>
    <div class="section-prices__row section-prices-row">
        <?php
        foreach ($geo_prices as $geo_price) {
            $rows = $geo_price['row'];
            ?>
            <!--item-->
            <div class=" section-prices-row__item section-prices-row-item  ">
                <div class="section-prices-row-item__header">
                    <?php echo $geo_price['wells_quant']; ?>
                </div>
                <?php
                if ($rows) {
                    ?>
                    <div class="section-prices-row-item__body section-prices-row-item-body">
                        <?php
                        foreach ($rows as $row) {
                            ?>
                            <!-- sub-item-->
                            <div class="section-prices-row-item-body__item">
                                <div class="section-prices-row-item-body__name">
                                    <?php echo $row['depth']; ?>
                                </div>
                                <div class="section-prices-row-item-body__price">
                                    <?php echo $row['wells_price']; ?>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <?php
                }
                ?>
            </div>
            <!-- end item-->
        <?php } ?>
    </div>
    <?php
}
?>