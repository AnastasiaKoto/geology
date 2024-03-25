<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>
<!-- Begin content-->
<div class="content">
	<!--404-->
	<section class="section-404">
		<div class="container">
			<div class="section-404-wrappper">
				<div class="section-404__image">
					<img src="./assets/images/404.png" alt="404">
				</div>
				<div class="section-404__message">
					К сожалению, страница не найдена
				</div>
				<div class="section-404__btn" >
					<a class="site-btn-2 site-btn-2_404" href="/">Вернуться на главную </a>
				</div>

			</div>
		</div>
	</section>
</div> <!-- end content-->
<?php
get_footer();
