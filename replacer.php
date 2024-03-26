<?php

/*

if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/replacer.php')) {
include_once($_SERVER['DOCUMENT_ROOT'] . '/replacer.php');
}

Проверить title на главной после подключения

*/

/*
#редирект c // на /
if (strpos($_SERVER["REQUEST_URI"], '//') !== FALSE){
    $new_host = str_replace('//','/',$_SERVER["REQUEST_URI"]);
    header("HTTP/1.1 301 Moved Permanently"); 
    header("Location: $new_host"); 
}
*/


$arTitle = array(
	//    '/url/' => '/url/',
);

$arDesc = array(
	//    '/url/' => '/url/',
);

$arKeyw = array(
	//    '/url/' => '/url/',
);

# массив 301 редиректов
$ar301 = array(

	
);

# массив для замены урлов внутри контента
$arReplaceLinks = array(
	//    '/url/' => '/url/',
);

# ЧПУ - обязательно проверять после внесения
$arFriendlyUrls = array(
	//    '/url/' => '/url/',
);

# добавляем чпу в замену урлов
$arReplaceLinks = array_merge($arReplaceLinks, $arFriendlyUrls);

# Добавляем чпу в редиректы
$ar301 = array_merge($ar301, $arFriendlyUrls);

# меняем ключи и значения местами
$arFriendlyFlip = array_flip($arFriendlyUrls);

# 301 редиректы из массива
$url_w_params = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
if (isset($ar301[$url_w_params])) {
	header('Location:' . $ar301[$url_w_params], true, 301);
	exit;
}

# подмена REQUEST_URI для чпу. Должна идти только после 301 редиректов.
if (isset($arFriendlyFlip[$_SERVER['REQUEST_URI']])){
    $_SERVER['REQUEST_URI'] = $arFriendlyFlip[$_SERVER['REQUEST_URI']];
}

ob_start('replacer');

function replacer($sContent) {
	global $arReplaceLinks, $arDesc, $arTitle, $arKeyw;

	# заменяем ссылки
	foreach ($arReplaceLinks as $key => $value) {
		$sContent = preg_replace("#href=\"(.*)$key(.*)\"#siU", "href=\"$1$value$2\"", $sContent);
	}

	# заменяем дескрипшен
	if (isset($arDesc[$_SERVER['REQUEST_URI']])) {
		$sContent = preg_replace('#(<meta name="description".*content=")[^"]*(" ?/?>)#siU',
			'$1' . $arDesc[$_SERVER['REQUEST_URI']] . '$2', $sContent);
	}
	
	# устанавливаем пустой кейвордс, если нет
	if(strpos($sContent,'<meta name="keywords"')===false)
		$sContent=str_replace('<meta name="description"','<meta name="keywords" content="" />
<meta name="description"',$sContent);
	
	# заменяем кейвордс
	if (isset($arKeyw[$_SERVER['REQUEST_URI']])) {
		$sContent = preg_replace('#(<meta name="keywords".*content=")[^"]*(" ?/?>)#siU','$1' . $arKeyw[$_SERVER['REQUEST_URI']] . '$2', $sContent);
	}

	# заменяем тайтл
	if(isset($arTitle[$_SERVER['REQUEST_URI']])) {
		$sContent = preg_replace('%<title>[^<]*</title>%', "<title>".$arTitle[$_SERVER['REQUEST_URI']]."</title>", $sContent);
	}


	#Блок sContent

	//$sContent = str_replace('/themes/geogrunt/', '/themes/geologie/', $sContent);


	
	return $sContent;
}