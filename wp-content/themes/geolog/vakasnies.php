<?php
/*
 Template name: Вакансии
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
    <!-- vacancies-->
    <section class="section-vacancies">
        <div class="container">
            <?php 
            $vakansies = get_field('vakansies');
            if($vakansies) {
            ?>
                <div class="section-vacancies-faq">
                    <?php foreach($vakansies as $vakansy) { ?>
                        <!--item-->
                        <div class="section-faq-question">
                            <div class="section-faq-question__header">
                                <span><?php echo $vakansy['vak_name']; ?></span> <span> <svg viewBox="0 0 15 9" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L7.5 7.5L14 1" stroke="white" stroke-width="2"
                                            stroke-linecap="round" />
                                    </svg>
                                </span>
                            </div>
                            <div class="section-faq-question__answer">
                                <?php if($vakansy['vak_descr']) { ?>
                                    <!--item-->
                                    <div>
                                        <?php echo $vakansy['vak_descr']; ?>
                                    </div>
                                <?php } ?>
                                <?php if($vakansy['vak_work']) { ?>
                                    <!--item-->
                                    <div>

                                        <p> <b>Обязанности:</b></p>
                                        <?php echo $vakansy['vak_work']; ?>
                                    </div>
                                <?php } ?>
                                <?php if($vakansy['vak_requests']) { ?>
                                    <!--item-->
                                    <div>
                                        <p> <b>Требования:</b></p>
                                        <?php echo $vakansy['vak_requests']; ?>
                                    </div>
                                <?php } ?>
                                <?php if($vakansy['vak_conditions']) { ?>
                                    <!--item-->
                                    <div>
                                        <div>
                                            <p> <b>Условия:</b></p>
                                            <?php echo $vakansy['vak_conditions']; ?>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>
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
                set_query_var( 'form_name', 'vak_form' );
                set_query_var( 'form_id', 'vak_form' );
                get_template_part('templates/form');
                ?>
            </div>
        </div>
    </section>
</div> <!-- end content-->
<?php
get_footer();