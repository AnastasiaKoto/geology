<?php
/*
 Template name: Политика
*/
get_header();
?>
<!-- Begin content-->
<div class="content">
    <!-- breadcrumbs-->
    <div class="container">
        <!-- wrapper for margin-->
        <div class="page-navigation  page-navigation_contacts">
            <?php get_template_part('templates/breadcrumbs') ?>
        </div>
    </div>

    <!-- privacy-->
    <section class="section-privacy">
        <div class="container">
            <div class="message">
                <?php the_content(); ?>
            </div>
        </div>
    </section>


</div> <!-- end content-->
<?php
get_footer();