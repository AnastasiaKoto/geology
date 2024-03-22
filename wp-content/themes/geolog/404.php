<?
get_header();
?>
<div id="primary" class="content-area">
		test
		<main id="main" class="site-main">
			<div class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentynineteen' ); ?></h1>
				</header><!-- .page-header -->
<section class="section-404">
                <div class="container">
                    <div class="section-404-wrappper">
                        <div class="section-404__image">
                            <img src="/wp-content/themes/geolog/assets/images/404.png" alt="404">
                        </div>
                        <div class="section-404__message">
                            К сожалению, страница не найдена
                        </div>
                        <div class="section-404__btn" >
                            <a class="site-btn-2 site-btn-2_404" href="/">Вернуться на главную </a>
                        </div>

				<div class="page-content">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentynineteen' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</div><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->
                    </div>
                </div>
            </section>

<?php
get_footer();