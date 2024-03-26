<?php
define( 'WP_USE_THEMES', false );
require_once( '../../../wp-load.php' ); ?>

<ul class="dropdown-menu__list">
<?php 
   $towns = get_posts("post_type=town&orderby=title&order=ASC&showposts=-1"); foreach($towns as $town):
   if($town->post_title!="Москва"){
 ?>
 <li class="town"><a href="#" data-town="<?php echo get_field('domain',$town); ?>"><?php echo $town->post_title; ?></a></li>
<?php }; endforeach; ?>
</ul>