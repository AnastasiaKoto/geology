<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<script>
	(function (w, d, s, o) {
		var j = d.createElement(s); j.async = true; j.src = '//script.marquiz.ru/v2.js'; j.onload = function () {
			if (document.readyState !== 'loading') Marquiz.init(o);
			else document.addEventListener("DOMContentLoaded", function () {
				Marquiz.init(o);
			});
		};
		d.head.insertBefore(j, d.head.firstElementChild);
	})(window, document, 'script', {
		host: '//quiz.marquiz.ru',
		region: 'eu',
		id: '654d22ac698b0000258bf04c',
		autoOpen: false,
		autoOpenFreq: 'once',
		openOnExit: false,
		disableOnMobile: false
	}
	);
</script>
<!-- Marquiz script end -->
<div id="page" class="site wrapper">
	<header class="header">
		<!-- top header-->
		<div class="header__top header-top">
			<div class="container">
				<div class="header-top__inner">
					<!--Location-->
					<div class="header-top__location header-location">
						<div class="header-location__place">
							<svg viewBox="0 0 14 20" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path
									d="M7 9.5C6.33696 9.5 5.70107 9.23661 5.23223 8.76777C4.76339 8.29893 4.5 7.66304 4.5 7C4.5 6.33696 4.76339 5.70107 5.23223 5.23223C5.70107 4.76339 6.33696 4.5 7 4.5C7.66304 4.5 8.29893 4.76339 8.76777 5.23223C9.23661 5.70107 9.5 6.33696 9.5 7C9.5 7.3283 9.43534 7.65339 9.3097 7.95671C9.18406 8.26002 8.99991 8.53562 8.76777 8.76777C8.53562 8.99991 8.26002 9.18406 7.95671 9.3097C7.65339 9.43534 7.3283 9.5 7 9.5ZM7 0C5.14348 0 3.36301 0.737498 2.05025 2.05025C0.737498 3.36301 0 5.14348 0 7C0 12.25 7 20 7 20C7 20 14 12.25 14 7C14 5.14348 13.2625 3.36301 11.9497 2.05025C10.637 0.737498 8.85652 0 7 0Z" />
							</svg>
							<span>Краснодар</span>
							<svg viewBox="0 0 10 7" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1 1L5 5L9 1" stroke-width="2" stroke-linecap="round" />
							</svg>
						</div>
						<div class="dropdown-menu dropdown-menu__location">
							<ul class="dropdown-menu__list">
								<li><a href="javascript:void(0)">Москва</a></li>
								<li><a href="javascript:void(0)">Орел</a></li>
								<li><a href="javascript:void(0)">Брянск</a></li>
								<li><a href="javascript:void(0)">Казань</a></li>
								<li><a href="javascript:void(0)">Краснодар</a></li>
							</ul>
						</div>
					</div>
					<!--end location -->
					<?php
					if(get_field('header_address', 'option')) {
					?>
						<!-- adress-->
						<div class="header-adress">
							<p><?php echo get_field('header_address', 'option'); ?></p>
						</div>
					<?php } ?>
					<?php
					if(get_field('works_time', 'option')) {
					?>
						<!--mode -->
						<div class="header-mode">
							<p><?php echo get_field('works_time', 'option'); ?></p>
						</div>
					<?php } ?>
					<?php
					if(get_field('email', 'option')) {
					?>
						<!-- mail -->
						<div class="header-mail">
							<a href="mailto:<?php echo get_field('email', 'option'); ?>"><?php echo get_field('email', 'option'); ?></a>
						</div>
					<?php } ?>
					<?php
					if(get_field('phone_link', 'option') && get_field('phone_front', 'option')) {
					?>
						<div class="header-phone">
							<a href="tel:<?php echo get_field('phone_link', 'option'); ?>"><?php echo get_field('phone_front', 'option'); ?></a>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<!-- end top header-->

		<!-- middle header-->
		<div class="middle-header">
			<div class="container">
				<div class="middle-header__inner">
					<div class="middle-header__part1">
						<?php if(get_field('logo', 'option')) { ?>
							<a href="/" class="header__logo">
								<img src="<?php echo get_field('logo', 'option'); ?>" alt="logo">
							</a>
						<?php } ?>
						<?php
						wp_nav_menu(
							array(
								'theme_location'  => 'header',
								'container'       => 'nav',
								'container_class' => 'header-nav',
								'echo'            => true,
								'depth'           => 1,
							));
						?>
						<?php
						if(get_field('phone_link', 'option') && get_field('phone_front', 'option')) {
						?>
							<!-- mobile phone-->
							<a class="middle-header_mobile" href="tel:<?php echo get_field('phone_link', 'option'); ?>"> <?php echo get_field('phone_front', 'option'); ?></a>
						<?php } ?>
						<!-- mobile menu-->
						<div class="mobile-menu-trigger">
							<svg width="29" height="19" viewBox="0 0 29 19" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<line y1="1.5" x2="29" y2="1.5" stroke="#383838" stroke-width="3" />
								<line y1="9.5" x2="29" y2="9.5" stroke="#383838" stroke-width="3" />
								<line y1="17.5" x2="29" y2="17.5" stroke="#383838" stroke-width="3" />
							</svg>

						</div>

						<!-- mobile dropdown-->
						<div class="mobile-menu">
							<div class="mobile-menu-overlay">
								<div class="mobile-menu__content">
									<div class="mobile-menu__header mobile-menu-header__close">
										<div class="mobile-menu__logo">
											<img src="<?php echo get_field('logo', 'option'); ?>" alt="logo">
										</div>
										<div class="mobile-menu__close">
											<svg width="20" height="19" viewBox="0 0 20 19" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<line x1="1.41421" y1="1.1875" x2="17.5405" y2="17.3137"
													stroke="#3CBB53" stroke-width="2" stroke-linecap="round" />
												<line x1="1.8797" y1="17.1263" x2="18.0059" y2="1.00001"
													stroke="#3CBB53" stroke-width="2" stroke-linecap="round" />
											</svg>

										</div>
									</div>

									<div class="mobile-menu__body">
										<?php
										wp_nav_menu(
											array(
												'theme_location'  => 'header-cats',
												'container'       => false,
												'echo'            => true,
												'depth'           => 1,
												'menu_class'      => 'mobile-menu__list'
											));
										?>
										<?php
										wp_nav_menu(
											array(
												'theme_location'  => 'header',
												'container'       => false,
												'echo'            => true,
												'depth'           => 1,
												'menu_class'      => 'mobile-menu__list'
											));
										?>
									</div>

									<div class="mobile-menu__footer">
										<div class="mobile-menu__location mobile-menu-location">
											<div class="mobile-menu-location__city">
												<svg width="14" height="20" viewBox="0 0 14 20" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<path
														d="M7 9.5C6.33696 9.5 5.70107 9.23661 5.23223 8.76777C4.76339 8.29893 4.5 7.66304 4.5 7C4.5 6.33696 4.76339 5.70107 5.23223 5.23223C5.70107 4.76339 6.33696 4.5 7 4.5C7.66304 4.5 8.29893 4.76339 8.76777 5.23223C9.23661 5.70107 9.5 6.33696 9.5 7C9.5 7.3283 9.43534 7.65339 9.3097 7.95671C9.18406 8.26002 8.99991 8.53562 8.76777 8.76777C8.53562 8.99991 8.26002 9.18406 7.95671 9.3097C7.65339 9.43534 7.3283 9.5 7 9.5ZM7 0C5.14348 0 3.36301 0.737498 2.05025 2.05025C0.737498 3.36301 0 5.14348 0 7C0 12.25 7 20 7 20C7 20 14 12.25 14 7C14 5.14348 13.2625 3.36301 11.9497 2.05025C10.637 0.737498 8.85652 0 7 0Z"
														fill="#3CBB53" />
												</svg>
												<span> Краснодар</span>

												<svg width="10" height="7" viewBox="0 0 10 7" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<path d="M1 1L5 5L9 1" stroke="#3CBB53" stroke-width="2"
														stroke-linecap="round" />
												</svg>
											</div>
											<ul class="mobile-menu-location__dropdown">
												<li><a href="javascript:void(0)">Москва</a></li>
												<li><a href="javascript:void(0)">Москва</a></li>
												<li><a href="javascript:void(0)">Москва</a></li>
											</ul>
											
											
										</div>
										<a class="mobile-menu__phone" href="tel:+79916080956"> +7 (991) 608-09-56</a>

										<div class="mobile-menu__socials">
											<div>
											<?php 
											if(get_field('ssylka_telegram', 'option')) {
											?>
												<a href="<?php echo get_field('ssylka_telegram', 'option'); ?>">

													<svg width="33" height="33" viewBox="0 0 33 33" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<rect width="33" height="33" rx="16.5" fill="#419FD9" />
														<rect width="33" height="33" rx="16.5"
															fill="url(#paint0_linear_356_248)" />
														<path
															d="M7.41631 16.1363C12.2146 14.0018 15.4142 12.5946 17.0151 11.9148C21.5861 9.97357 22.5359 9.63636 23.155 9.62511C23.2911 9.62278 23.5956 9.65723 23.7928 9.82061C23.9593 9.95857 24.0051 10.1449 24.027 10.2757C24.049 10.4065 24.0763 10.7045 24.0546 10.9373C23.8069 13.5946 22.735 20.0433 22.1898 23.0196C21.959 24.2789 21.5047 24.7012 21.0649 24.7425C20.1091 24.8323 19.3833 24.0975 18.4575 23.4779C17.0088 22.5084 16.1905 21.9048 14.7843 20.9587C13.1592 19.8653 14.2127 19.2643 15.1388 18.2822C15.3812 18.0252 19.5926 14.1141 19.6741 13.7593C19.6843 13.7149 19.6938 13.5495 19.5975 13.4621C19.5013 13.3748 19.3592 13.4047 19.2567 13.4284C19.1114 13.4621 16.7972 15.0239 12.314 18.1137C11.6571 18.5743 11.0622 18.7987 10.5291 18.7869C9.94138 18.774 8.8109 18.4477 7.97051 18.1687C6.93973 17.8266 6.12049 17.6458 6.19183 17.0648C6.22899 16.7621 6.63715 16.4526 7.41631 16.1363Z"
															fill="white" />
														<defs>
															<linearGradient id="paint0_linear_356_248" x1="16.5"
																y1="0" x2="16.5" y2="32.7551"
																gradientUnits="userSpaceOnUse">
																<stop stop-color="#2AABEE" />
																<stop offset="1" stop-color="#229ED9" />
															</linearGradient>
														</defs>
													</svg>

												</a>
											<?php
											}
											?>
											<?php 
											if(get_field('ssylka_whatsapp', 'option')) {
											?>
												<a href="<?php echo get_field('ssylka_whatsapp', 'option'); ?>">
													<svg width="33" height="33" viewBox="0 0 33 33" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<rect width="33" height="33" rx="16.5" fill="#0DC143" />
														<path
															d="M23.8911 9.0829C22.1222 7.26195 19.6769 6.27344 17.1796 6.27344C11.8729 6.27344 7.60664 10.5917 7.65867 15.8464C7.65867 17.5113 8.12691 19.1241 8.90731 20.5809L7.55461 25.5234L12.6012 24.2228C14.006 25.0032 15.5668 25.3674 17.1276 25.3674C22.3823 25.3674 26.6485 21.0491 26.6485 15.7944C26.6485 13.2451 25.66 10.8518 23.8911 9.0829ZM17.1796 23.7545C15.7749 23.7545 14.3702 23.3903 13.1735 22.662L12.8614 22.5059L9.8438 23.2863L10.6242 20.3207L10.4161 20.0086C8.12691 16.3147 9.21948 11.4241 12.9654 9.13492C16.7114 6.84573 21.5499 7.9383 23.8391 11.6842C26.1283 15.4302 25.0357 20.2687 21.2897 22.5579C20.0931 23.3383 18.6364 23.7545 17.1796 23.7545ZM21.758 17.9795L21.1857 17.7194C21.1857 17.7194 20.3533 17.3552 19.833 17.0951C19.781 17.0951 19.7289 17.043 19.6769 17.043C19.5208 17.043 19.4168 17.0951 19.3127 17.1471C19.3127 17.1471 19.2607 17.1991 18.5323 18.0315C18.4803 18.1356 18.3762 18.1876 18.2722 18.1876H18.2202C18.1681 18.1876 18.0641 18.1356 18.012 18.0836L17.7519 17.9795C17.1796 17.7194 16.6593 17.4072 16.2431 16.991C16.1391 16.887 15.983 16.7829 15.8789 16.6788C15.5147 16.3147 15.1506 15.8984 14.8904 15.4302L14.8384 15.3261C14.7864 15.2741 14.7864 15.2221 14.7343 15.118C14.7343 15.014 14.7343 14.9099 14.7864 14.8579C14.7864 14.8579 14.9945 14.5978 15.1506 14.4417C15.2546 14.3376 15.3066 14.1815 15.4107 14.0775C15.5147 13.9214 15.5668 13.7133 15.5147 13.5572C15.4627 13.2971 14.8384 11.8924 14.6823 11.5802C14.5783 11.4241 14.4742 11.3721 14.3181 11.3201H14.162C14.058 11.3201 13.9019 11.3201 13.7458 11.3201C13.6418 11.3201 13.5377 11.3721 13.4337 11.3721L13.3816 11.4241C13.2776 11.4761 13.1735 11.5802 13.0695 11.6322C12.9654 11.7363 12.9134 11.8403 12.8093 11.9444C12.4452 12.4126 12.237 12.9849 12.237 13.5572C12.237 13.9734 12.3411 14.3897 12.4972 14.7538L12.5492 14.9099C13.0174 15.8984 13.6418 16.7829 14.4742 17.5633L14.6823 17.7714C14.8384 17.9275 14.9945 18.0315 15.0985 18.1876C16.1911 19.1241 17.4397 19.8005 18.8445 20.1647C19.0006 20.2167 19.2087 20.2167 19.3647 20.2687C19.5208 20.2687 19.7289 20.2687 19.885 20.2687C20.1452 20.2687 20.4573 20.1647 20.6654 20.0606C20.8215 19.9565 20.9256 19.9565 21.0296 19.8525L21.1337 19.7484C21.2377 19.6444 21.3418 19.5924 21.4458 19.4883C21.5499 19.3842 21.6539 19.2802 21.706 19.1761C21.81 18.968 21.862 18.7079 21.9141 18.4478C21.9141 18.3437 21.9141 18.1876 21.9141 18.0836C21.9141 18.0836 21.862 18.0315 21.758 17.9795Z"
															fill="white" />
													</svg>

												</a>
											<?php
											}
											?>
											</div>
											<div>
												<a href="javascript:void(0)" class="site-btn">Отправить заявку </a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="middle-header__part2">
						<div class="header-socials">
							<?php 
							if(get_field('ssylka_telegram', 'option')) {
							?>
								<a href="<?php echo get_field('ssylka_telegram', 'option'); ?>">
									<svg viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect width="33" height="33" rx="16.5" fill="#419FD9" />
										<rect width="33" height="33" rx="16.5" fill="url(#paint0_linear_13_116)" />
										<path
											d="M7.41631 16.1363C12.2146 14.0018 15.4142 12.5946 17.0151 11.9148C21.5861 9.97357 22.5359 9.63636 23.155 9.62511C23.2911 9.62278 23.5956 9.65723 23.7928 9.82061C23.9593 9.95857 24.0051 10.1449 24.027 10.2757C24.049 10.4065 24.0763 10.7045 24.0546 10.9373C23.8069 13.5946 22.735 20.0433 22.1898 23.0196C21.959 24.2789 21.5047 24.7012 21.0649 24.7425C20.1091 24.8323 19.3833 24.0975 18.4575 23.4779C17.0088 22.5084 16.1905 21.9048 14.7843 20.9587C13.1592 19.8653 14.2127 19.2643 15.1388 18.2822C15.3812 18.0252 19.5926 14.1141 19.6741 13.7593C19.6843 13.7149 19.6938 13.5495 19.5975 13.4621C19.5013 13.3748 19.3592 13.4047 19.2567 13.4284C19.1114 13.4621 16.7972 15.0239 12.314 18.1137C11.6571 18.5743 11.0622 18.7987 10.5291 18.7869C9.94138 18.774 8.8109 18.4477 7.97051 18.1687C6.93973 17.8266 6.12049 17.6458 6.19183 17.0648C6.22899 16.7621 6.63715 16.4526 7.41631 16.1363Z"
											fill="white" />
										<defs>
											<linearGradient id="paint0_linear_13_116" x1="16.5" y1="0" x2="16.5"
												y2="32.7551" gradientUnits="userSpaceOnUse">
												<stop stop-color="#2AABEE" />
												<stop offset="1" stop-color="#229ED9" />
											</linearGradient>
										</defs>
									</svg>
								</a>
							<?php
							}
							?>
							<?php 
							if(get_field('ssylka_whatsapp', 'option')) {
							?>
								<a href="<?php echo get_field('ssylka_whatsapp', 'option'); ?>">
									<svg viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect width="33" height="33" rx="16.5" fill="#0DC143" />
										<path
											d="M23.8912 9.0829C22.1223 7.26195 19.677 6.27344 17.1797 6.27344C11.8729 6.27344 7.60671 10.5917 7.65874 15.8464C7.65874 17.5113 8.12698 19.1241 8.90739 20.5809L7.55469 25.5234L12.6013 24.2228C14.006 25.0032 15.5668 25.3674 17.1277 25.3674C22.3824 25.3674 26.6486 21.0491 26.6486 15.7944C26.6486 13.2451 25.6601 10.8518 23.8912 9.0829ZM17.1797 23.7545C15.775 23.7545 14.3702 23.3903 13.1736 22.662L12.8614 22.5059L9.84388 23.2863L10.6243 20.3207L10.4162 20.0086C8.12698 16.3147 9.21955 11.4241 12.9655 9.13492C16.7114 6.84573 21.55 7.9383 23.8391 11.6842C26.1283 15.4302 25.0358 20.2687 21.2898 22.5579C20.0932 23.3383 18.6364 23.7545 17.1797 23.7545ZM21.7581 17.9795L21.1858 17.7194C21.1858 17.7194 20.3533 17.3552 19.8331 17.0951C19.781 17.0951 19.729 17.043 19.677 17.043C19.5209 17.043 19.4169 17.0951 19.3128 17.1471C19.3128 17.1471 19.2608 17.1991 18.5324 18.0315C18.4804 18.1356 18.3763 18.1876 18.2723 18.1876H18.2202C18.1682 18.1876 18.0641 18.1356 18.0121 18.0836L17.752 17.9795C17.1797 17.7194 16.6594 17.4072 16.2432 16.991C16.1391 16.887 15.9831 16.7829 15.879 16.6788C15.5148 16.3147 15.1506 15.8984 14.8905 15.4302L14.8385 15.3261C14.7864 15.2741 14.7864 15.2221 14.7344 15.118C14.7344 15.014 14.7344 14.9099 14.7864 14.8579C14.7864 14.8579 14.9946 14.5978 15.1506 14.4417C15.2547 14.3376 15.3067 14.1815 15.4108 14.0775C15.5148 13.9214 15.5668 13.7133 15.5148 13.5572C15.4628 13.2971 14.8385 11.8924 14.6824 11.5802C14.5783 11.4241 14.4743 11.3721 14.3182 11.3201H14.1621C14.0581 11.3201 13.902 11.3201 13.7459 11.3201C13.6418 11.3201 13.5378 11.3721 13.4337 11.3721L13.3817 11.4241C13.2777 11.4761 13.1736 11.5802 13.0696 11.6322C12.9655 11.7363 12.9135 11.8403 12.8094 11.9444C12.4452 12.4126 12.2371 12.9849 12.2371 13.5572C12.2371 13.9734 12.3412 14.3897 12.4973 14.7538L12.5493 14.9099C13.0175 15.8984 13.6418 16.7829 14.4743 17.5633L14.6824 17.7714C14.8385 17.9275 14.9946 18.0315 15.0986 18.1876C16.1912 19.1241 17.4398 19.8005 18.8446 20.1647C19.0006 20.2167 19.2087 20.2167 19.3648 20.2687C19.5209 20.2687 19.729 20.2687 19.8851 20.2687C20.1452 20.2687 20.4574 20.1647 20.6655 20.0606C20.8216 19.9565 20.9256 19.9565 21.0297 19.8525L21.1337 19.7484C21.2378 19.6444 21.3419 19.5924 21.4459 19.4883C21.55 19.3842 21.654 19.2802 21.706 19.1761C21.8101 18.968 21.8621 18.7079 21.9141 18.4478C21.9141 18.3437 21.9141 18.1876 21.9141 18.0836C21.9141 18.0836 21.8621 18.0315 21.7581 17.9795Z"
											fill="white" />
									</svg>

								</a>
							<?php
							}
							?>
						</div>

						<a href="#modal-form" class="site-btn trigger-fancy"> Отправить заявку</a>
					</div>

				</div>
			</div>
		</div>
		<!-- bottom header-->
		<div class="bottom-header">
			<div class="container">
				<div class="bottom-header__inner">
					<?php
					wp_nav_menu(
					array(
						'theme_location'  => 'header-cats',
						'container'       => false,
						'echo'            => true,
						'depth'           => 2,
						'menu_class'      => 'bottom-header__list',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'walker'          => new Custom_Walker_Nav_Menu()
					)
					);
					?>
				</div>
			</div>
		</div>
    </header>
	<!--end header-->
	<div id="content" class="site-content">
