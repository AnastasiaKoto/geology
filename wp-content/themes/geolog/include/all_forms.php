<?php
add_action( 'wp_ajax_callback', 'callback' );
add_action( 'wp_ajax_nopriv_callback', 'callback' );

function callback(){

    $my_error = new WP_Error();
    $message = [];
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);

    if(empty($name)){
        $my_error->add( 'name', 'Поле является обязательным.');
    }

    if(empty($phone)){
        $my_error->add( 'phone', 'Поле является обязательным.');
    }

    if (empty($my_error->errors)){
        $message2 = '<table width="600" border="0" cellspacing="0" cellpadding="0" style="font: 300 14px Arial;">';
        $message2 .= '<tr><td colspan="2" style="padding-top:15px; font-weight:bold;"><strong>Данные: </strong></td>';
        $message2 .= '<tr><td>Имя: </td><td>' . $name . '</td></tr>';
        if ($phone){
            $message2 .= '<tr><td>Телефон: </td><td>' . $phone . '</td></tr>';
        }
        $message2 .= '</table>';

        $headers  = "Content-type: text/html; charset=utf-8 \r\n";
        $headers .= "From: <wordpress@patent.veht.ru>\r\n";

        $mailstat = mail('kotova.kotovashisha@yandex.ru', 'Письмо с сайта', $message2, $headers);

        wp_send_json([
            'success' => true,
            'class' => '_success',
        ]);

    } else {
        $message = [
            'success' => false,
            'errors' => $my_error->errors
        ];
    }

    wp_send_json($message);

    wp_die();
}
