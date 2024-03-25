<?php
if ( function_exists('yoast_breadcrumb') ) {
    yoast_breadcrumb( '<div class="breadcrumbs">','</div>' );
}
if(is_archive('') && !is_post_type_archive('machines')) {
    echo '<h2 class="page-navigation__divide-title">Статьи <span>' .  single_cat_title( '', false ) . '</span></h2>';
} elseif(is_archive() && is_post_type_archive('machines')) {
    echo '<h2 class="page-navigation__divide-title">Оборудование</h2>';
?>
<?php } else { ?>
    <h2><?php the_title(); ?></h2>
<?php } ?>