<form method="post" name="<?php echo get_query_var('form_name'); ?>" id="<?php echo get_query_var('form_id'); ?>">
    <div class="callback-form__inputs">
        <div class="callback-form__input">
            <input type="text" name="name" placeholder="Имя">
        </div>

        <div class="callback-form__input">
            <input type="text" name="phone" placeholder="+7 (___) ___-__-__">
        </div>

        <div class="callback-form__input">
            <input value="Оставить заявку" type="submit" class="site-btn-2 callback-form__btn">
        </div>

        <div class="callback-form__input  callback-form__checkbox">
            <input id="political_3" type="checkbox" name="agree" checked>
            <label for="politica_3"></label>
            <p>Нажимая на кнопку, Вы соглашаетесь с <a href="javascript:void(0)"> Политикой
                    конфиденциальности </a></p>
        </div>

    </div>
    <p class="global_err">Дождитесь отправки предыдущей формы!</p>
</form>