<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

$bIsMainPage = $APPLICATION->GetCurPage(false)  == SITE_DIR;
?>
<!DOCTYPE html>
<!--[if lt IE 8]>  <html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]>     <html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]>  <html class="no-js"><![endif]-->
<head>
	<!--[if IE]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?$APPLICATION->ShowTitle();?></title>
	<?$APPLICATION->ShowHead();?>

	<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/add.css")?>
	<link rel="icon" href="<?=SITE_TEMPLATE_PATH?>/ico/favicon_bx.png">
	<?
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/vendor/jquery.min.js')
	?>
</head>
<body>
<!--[if lt IE 8]>
<p class="chromeframe">Вы используете <strong>устаревший </strong> браузер. Пожалуйста <a
	href="http://browsehappy.com/">
	обновите свой браузер</a> или <a href="http://www.google.com/chromeframe/?redirect=true">установите Google Chrome
	Frame</a> чтобы улучшить взаимодействие с сайтом.</p>
<![endif]-->
<?$APPLICATION->ShowPanel();?>
<div class="container">
	<header>
        <br><br>
        header
        <h1><?$APPLICATION->ShowTitle(false)?></h1>
	</header>

    


						