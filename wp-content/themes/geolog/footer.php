<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

?>

</div><!-- #content -->

<!-- Footer-->
<footer class="footer">
	<div class="footer-top">
		<div class="container">
			<div class="footer-top__row">
				<div class="footer-top__adress">
					<?php echo get_field('header_address', 'option'); ?>
				</div>
				<?php if (get_field('works_time', 'option')) { ?>
					<div class="footer-top__mode">
						<?php echo get_field('works_time', 'option'); ?>
					</div>
				<?php } ?>
				<?php if (get_field('email', 'option')) { ?>
					<div class="footer-top__mail">
						<a href="mailto:<?php echo get_field('email', 'option'); ?>">
							<?php echo get_field('email', 'option'); ?>
						</a>
					</div>
				<?php } ?>
				<?php if (get_field('phone_link', 'option') && get_field('phone_front', 'option')) { ?>
					<div class="footer-top__phone">
						<a href="tel:<?php echo get_field('phone_link', 'option'); ?>">
							<?php echo get_field('phone_front', 'option'); ?>
						</a>
					</div>
				<?php } ?>
			</div>

			<div class="footer-top__row">
				<div class="footer-top__socials">
					<?php
					if (get_field('ssylka_telegram', 'option')) {
						?>
						<a href="<?php echo get_field('ssylka_telegram', 'option'); ?>">
							<svg viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect width="33" height="33" rx="16.5" fill="#419FD9" />
								<rect width="33" height="33" rx="16.5" fill="url(#paint0_linear_253_125)" />
								<path
									d="M7.41631 16.1363C12.2146 14.0018 15.4142 12.5946 17.0151 11.9148C21.5861 9.97357 22.5359 9.63636 23.155 9.62511C23.2911 9.62278 23.5956 9.65723 23.7928 9.82061C23.9593 9.95857 24.0051 10.1449 24.027 10.2757C24.049 10.4065 24.0763 10.7045 24.0546 10.9373C23.8069 13.5946 22.735 20.0433 22.1898 23.0196C21.959 24.2789 21.5047 24.7012 21.0649 24.7425C20.1091 24.8323 19.3833 24.0975 18.4575 23.4779C17.0088 22.5084 16.1905 21.9048 14.7843 20.9587C13.1592 19.8653 14.2127 19.2643 15.1388 18.2822C15.3812 18.0252 19.5926 14.1141 19.6741 13.7593C19.6843 13.7149 19.6938 13.5495 19.5975 13.4621C19.5013 13.3748 19.3592 13.4047 19.2567 13.4284C19.1114 13.4621 16.7972 15.0239 12.314 18.1137C11.6571 18.5743 11.0622 18.7987 10.5291 18.7869C9.94138 18.774 8.8109 18.4477 7.97051 18.1687C6.93973 17.8266 6.12049 17.6458 6.19183 17.0648C6.22899 16.7621 6.63715 16.4526 7.41631 16.1363Z"
									fill="white" />
								<defs>
									<linearGradient id="paint0_linear_253_125" x1="16.5" y1="0" x2="16.5" y2="32.7551"
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
					if (get_field('ssylka_whatsapp', 'option')) {
						?>
						<a href="https://wa.me/79031390038">
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
				<div class="footer-top__button">
					<a class="site-btn site-btn_footer" href="#callback">Отправить заявку</a>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="fotter-bottom__body">
				<span>© 2015 - 2024 ООО "ГЕОЛОГ-КРАСНОДАР". Все права защищены.</span>
				<a href="javascript:void(0)">Политика конфиденциальности </a>
			</div>
		</div>
	</div>
</footer>

</div><!-- #page -->
<!-- modal-->

<!-- modal success-->
<div id="success-form" class="global-popup form-popup success-popup" style="display:none">
	<div class="global-popup__body">
		<div class="success-popup__body">
			<div class="callback-form__desc">
				<h2 class="callback-form__title">Ваша заявка отправлена</h2>
				<p> и получите бесплатную консультацию специалиста</p>
			</div>
		</div>
	</div>
</div>

 <!-- modal rec-->
 <div id="modal-recomendation" class="recomendation-popup" style="display:none">
        <div class="global-popup__body">
            <div class="modal-recomendation-form-wrapper">
                <div class="modal-recomendation__title">
                    <h4> Рекомендации по фундаменту</h4>
                    <a href="tel:89008009080"> 8 900 800 90 80</a>
                </div>

                <form action="/" name="form-recomendation">
                    <div class="form-recomendation__inputs-text">
                        <!--input-->
                        <div class="form-recomendation__input">
                            <label>Имя: *</label>
                            <input name="name" type="text" placeholder="Введите имя">
                        </div>
                        <!--input-->
                        <div class="form-recomendation__input">
                            <label>Номер телефона: *</label>
                            <input name="phone" type="text" placeholder="Введите телефон">
                        </div>
                        <!--input-->
                        <div class="form-recomendation__input">
                            <label>Почта:</label>
                            <input name="mail" type="text" placeholder="Введите почту">
                        </div>

                        <!--input-->
                        <div class="form-recomendation__input">
                            <label>Адрес установки:</label>
                            <input name="adress" type="text" placeholder="Введите адрес">
                        </div>

                        <!--input-->
                        <div class="form-recomendation__input">
                            <label>Технический этаж/подвал (материал стен):</label>
                            <input name="adress" type="text" placeholder="Введите тех. этаж">
                        </div>



                        <!--input-->
                        <div class="form-recomendation__input">
                            <label>Габариты здания (длина/ширина/высота/этаж):</label>
                            <input name="gabarite" type="text" placeholder="Введите габариты здания">
                        </div>

                        <!--input-->
                        <div class="form-recomendation__input">
                            <label>Материал перекрытий:</label>
                            <input name="material" type="text" placeholder="Введите материал перекрытий">
                        </div>

                        <!--input-->
                        <div class="form-recomendation__input">
                            <label>Кровля (конструкция, особенности, материал):</label>
                            <input name="roof" type="text" placeholder="Введите текст">
                        </div>

                    </div>
                    <div class="form-recomendation__submit">
                        <input class="site-btn-2 " type="submit" value="Отправить">
                    </div>

                    <div class="form-recomendation__privacy">
                        <div>
                            <input checked type="checkbox" name="agree" id="agree">
                            <label for="agree"> </label>

                        </div>
                        <p> Нажимая на кнопку, Вы соглашаетесь
                            с <a href="javascript:void(0)"> Политикой конфиденциальности </a></p>
                    </div>

                </form>
            </div>
        </div>

    </div>

<div id="modal-form" class="global-popup form-popup" style="display:none">
	<div class="global-popup__body">
		<div class="callback-form">
			<div class="callback-form__desc">
				<h2 class="callback-form__title">Оставьте заявку</h2>
				<p> и получите бесплатную консультацию специалиста</p>
			</div>
			<?php
			set_query_var('form_name', 'modal_form');
			set_query_var('form_id', 'modal_form');
			get_template_part('templates/form');
			?>
		</div>
	</div>
</div>
<div class="modal_ok">
	<div class="title">
		Ваша заявка отправлена!
	</div>
</div>
<?php wp_footer(); ?>
<script>
	//отправка формы
	//let footerSubmitted = false;
	/*$('#').on('click', '.btn__submit', function (e) {
	  e.preventDefault();
	  let form = $(this).closest('form');
	  form.find('.global_err').removeClass('active');
	  //if (footerSubmitted == false) {
		let policy = form.find('input[name="agree"]');

		form.find('.error').removeClass('error');
		form.find('.form__error').remove();

		if (policy.is(':checked')) {
		  //footerSubmitted = true;
		  $.ajax({
			url: '/wp-admin/admin-ajax.php',
			data: form.serialize() + '&action=main_callback',
			type: 'POST',
		  }).done(function (result) {
			//footerSubmitted = false;
			if (result.errors) {
			  $.each(result.errors, function (e, index) {
				form.find('input[name="' + e + '"]').addClass('error');
				form
				  .find('input[name="' + e + '"]')
				  .parent()
				  .append('<div class="form__error">' + index[0] + '</div>');
			  });
			} else {
			  if (result.success == true) {
				form[0].reset();
				if ($('.order-form')) {
				  let submitBlock = '<div class="footer__submit-block"><div>спасибо, ваша&nbsp;заявка&nbsp;отправлена</div><p>Мы с Вами свяжемся в ближайшее время</p></div>';
				  $('.order-form .form__content').remove();
				  $('.order-form .container').append(submitBlock);
				}
				if ($('.page-template-contacts')) {
				  console.log('contacts');
				  $('.overlay').addClass('active');
				  $('.modal-result').addClass('active');
				  body.classList.add('stop-scroll');
				}
			  }
			}
		  });
		} else {
		  console.log('политика не заполнена');
		  policy.parent().addClass('error');
		  policy.parent.append('<div class="form__error">Это обязательное поле</div>')
		}
	  /*} else {
		form.find('.global_err').addClass('active');
	  }*/
	/* });*/
</script>
</body>

</html>