<?php
get_header();
$current_page = !empty($_GET['req']) ? $_GET['req'] : 1;
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
    if ( is_category() ) {
        $category = get_queried_object(); 
        $category_id = $category->term_id;
    
        $args = array(
            'cat' => $category_id,
            'posts_per_page' => 12,
            'paged' => $current_page, // Учитываем текущую страницу
        );
    
        $query = new WP_Query( $args );  
    ?>
    <!-- links article-->

    <section class="section-links-articles">
        <div class="container">
            <div class="section-links-articles__row">
                <?php 
                if ( $query->have_posts() ) {
                    while ( $query->have_posts() ) {
                        $query->the_post();
                ?>
                        <!--item-->
                        <article class="section-links-articles-row__item section-links-articles-row-item">
                            <div class="section-links-articles-row-item__image">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>">
                            </div>
                            <div class="section-links-articles-row-item__desc">
                                <div class="section-links-articles-row-item__name">
                                    <?php the_title(); ?>
                                </div>
                                <div class="section-links-articles-row-item__date">
                                    <?php echo get_the_date('d.m.Y'); ?> 
                                </div>
                                <div class="section-links-articles-row-item__preview">
                                    <?php echo get_field('article_short-descr'); ?>
                                </div>

                                <div class="section-links-articles-row-item__button">
                                    <a href="<?php echo get_permalink(); ?>">Читать статью</a>
                                </div>
                            </div>
                        </article>
                <?php
                    }
                }
            
                wp_reset_postdata();
                ?>
            </div>

            <!-- pagination-->
            <div class="pagination ">
                <?php global $wp; echo paginate_links( [
                    'base'    => user_trailingslashit( wp_normalize_path( home_url( $wp->request ) . '%_%' ) ),
                    'format' => '?req=%#%',
                    'current' => max(1, $current_page),
                    'total'   => $query->max_num_pages,
                    'type' => 'list',
                    'prev_next' => false,
                ] ); ?>
            </div>
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
                set_query_var( 'form_name', 'articles_form' );
                set_query_var( 'form_id', 'articles_form' );
                get_template_part('templates/form');
                ?>
            </div>
        </div>
    </section>

</div> <!-- end content-->
<?php
get_footer();