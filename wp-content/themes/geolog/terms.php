<?php
/*
 Template name: Рубрики статей
*/
get_header();
?>
<!-- Begin content-->
<div class="content">
    <!-- breadcrumbs-->
    <div class="container">
        <!-- wrapper for margin-->
        <div class="page-navigation  page-navigation_category-articles">
            <?php get_template_part('templates/breadcrumbs') ?>
        </div>

    </div>
    <?php
    $categories = get_categories(array(
        'hide_empty' => 1, // Не показывать пустые рубрики
    ));
    if($categories) {   
    ?>
        <!-- links article-->
        <section class="section-categories-articles">
            <div class="container">
                <ul class="section-categories-article__list">
                    <?php 
                    foreach( $categories as $category ) {
                    ?>
                        <li><a href="<?php echo get_category_link( $category->term_id ); ?>"><?php echo $category->name; ?></a></li>
                    <?php } ?>
                </ul>
            </div>
        </section>
    <?php } ?>
    <!-- begin callback-->
    <section class="section-form" id="callback">
        <div class="container">
            <div class="callback-form">
                <div class="callback-form__desc">
                    <h2 class="callback-form__title">Оставьте заявку</h2>
                    <p> и получите бесплатную консультацию специалиста</p>
                </div>
                <?php 
                set_query_var( 'form_name', 'articles_list_form' );
                set_query_var( 'form_id', 'articles_list_form' );
                get_template_part('templates/form');
                ?>
            </div>
        </div>
    </section>
</div> <!-- end content-->
<?php
get_footer();