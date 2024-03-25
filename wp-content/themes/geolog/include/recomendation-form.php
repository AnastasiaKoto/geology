<?php
add_action( 'wp_ajax_callback-recomend', 'callback_recomend' );
add_action( 'wp_ajax_nopriv_callback-recomend', 'callback_recomend' );

function callback_recomend(){

    $my_error = new WP_Error();
    $message = [];
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $mail=htmlspecialchars($_POST['mail']);
    $adress=htmlspecialchars($_POST['adress']);
    $floor=htmlspecialchars($_POST['floor']);
    $gabarity=htmlspecialchars($_POST['gabarite']);
    $material=htmlspecialchars($_POST['material']);
    $roof=htmlspecialchars($_POST['material']);


    if(empty($name)){
        $my_error->add( 'name', 'Поле является обязательным.');
    }

    if(empty($phone)){
        $my_error->add( 'phone', 'Поле является обязательным.');
    }
    if(empty($mail)){
        $my_error->add( 'mail', 'Поле является обязательным.');
    }
    if(empty($adress)){
        $my_error->add( 'adress', 'Поле является обязательным.');
    }
    if(empty($floor)){
        $my_error->add( 'floor', 'Поле является обязательным.');
    }
    if(empty($gabarity)){
        $my_error->add( 'gabarite', 'Поле является обязательным.');
    }
    if(empty($material)){
        $my_error->add( 'material', 'Поле является обязательным.');
    }
    if(empty($roof)){
        $my_error->add( 'roof', 'Поле является обязательным.');
    }

    if (empty($my_error->errors)){
        $message2 = '<table width="600" border="0" cellspacing="0" cellpadding="0" style="font: 300 14px Arial;">';
        $message2 .= '<tr><td colspan="2" style="padding-top:15px; font-weight:bold;"><strong>Данные: </strong></td>';
        $message2 .= '<tr><td>Имя: </td><td>' . $name . '</td></tr>';
        if ($phone){
            $message2 .= '<tr><td>Телефон: </td><td>' . $phone . '</td></tr>';
        }

        if ($mail){
            $message2 .= '<tr><td>Телефон: </td><td>' . $mail . '</td></tr>';
        }
        if ($adress){
            $message2 .= '<tr><td>Телефон: </td><td>' . $adress . '</td></tr>';
        }
        if ($floor){
            $message2 .= '<tr><td>Телефон: </td><td>' . $floor . '</td></tr>';
        }
        if ($gabarity){
            $message2 .= '<tr><td>Телефон: </td><td>' . $gabarity . '</td></tr>';
        }
        if ($material){
            $message2 .= '<tr><td>Телефон: </td><td>' . $material . '</td></tr>';
        }
        if ($roof){
            $message2 .= '<tr><td>Телефон: </td><td>' . $roof . '</td></tr>';
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
