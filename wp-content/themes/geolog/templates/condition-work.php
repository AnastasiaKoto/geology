<?php if(get_field('work_preview', 'option')) { ?>
<p><?php echo get_field('work_preview', 'option'); ?></p>
<?php } ?>
<div class="order-work">
    <h3 class="message-title order-work__title">Порядок работ</h3>
    <?php
    $work_conditions = get_field('work_conditions', 'option'); 
    if($work_conditions) {
        $work_count = 1;
    ?>
        <div class="order-work__items order-work-items">
            <?php foreach($work_conditions as $work_condition) { ?>
                <!--item-->
                <div class="order-work__item order-work-item">
                    <div class="order-work-item__number">
                        <?php echo $work_count; ?>
                    </div>
                    <div class="order-work-item__body">
                        <div class="order-work-item__name"><?php echo $work_condition['title']; ?></div>
                        <div class="order-work-item__text"><?php echo $work_condition['descr']; ?></div>
                    </div>
                </div>
            <?php } $work_count++; ?>
        </div>
    <?php
    }
    ?>
    <?php
    if(get_field('work_ps', 'option')) {
        echo get_field('work_ps', 'option');
    }
    ?>
</div>