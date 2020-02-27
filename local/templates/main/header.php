<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Page\Asset;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<? $APPLICATION->ShowMeta("viewport"); ?>
        <title><? $APPLICATION->ShowTitle() ?></title>
        <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        
        <? $APPLICATION->AddHeadString('<script>BX.message(' . CUtil::PhpToJSObject($MESS, false) . ')</script>', true); ?>
        <?
        CJSCore::Init();
        
        foreach ([
           '/vendor/bootstrap/bootstrap.css',
           '/vendor/bootstrap/bootstrap-select.min.css',
           "/vendor/fonts/fonts.css",
           "/vendor/icons/style.css",
           "/vendor/animate/animate.css",
        ] as $file)
            $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . $file);
        
        
        foreach ([
            "/vendor/jquery/jquery.min.js",
            "/vendor/jquery/jquery.inview.js",
            "/vendor/bootstrap/popper.min.js",
            "/vendor/bootstrap/bootstrap.min.js",
            "/vendor/bootstrap/bootstrap-select.min.js",
            "/vendor/bootstrap/i18n/defaults-ru_RU.min.js",
            "/vendor/jquery/jquery.modal.js",
            "/vendor/jquery/jquery.validate.min.js",
            "/vendor/jquery/jquery.cookie.js",
            "/vendor/maskedinput/jquery.maskedinput.min.js",
            "/vendor/jquery/jquery.lazy.min.js",
            "/vendor/wow/wow.min.js",
            "/script.js",
        ] as $file)
            $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . $file);
        
        
                $arLessFiles = [
                    'elements.less',
                    'template_styles.less',
                    'mediaqueries.less'
                ];
                $APPLICATION->IncludeComponent(
                        "nextype:less", "", array(
                        'FILES' => implode(",", $arLessFiles)
                        ), false
                );
                
        // favicons
                
        $APPLICATION->AddHeadString('<link rel="apple-touch-icon" sizes="256x256" href="'.SITE_TEMPLATE_PATH.'/img/favicons/256x256.png">', true);
        $APPLICATION->AddHeadString('<link rel="icon" type="image/png" sizes="128x128" href="'.SITE_TEMPLATE_PATH.'/img/favicons/128x128.png">', true);
        $APPLICATION->AddHeadString('<link rel="icon" type="image/png" sizes="32x32" href="'.SITE_TEMPLATE_PATH.'/img/favicons/32x32.png">', true);
        $APPLICATION->AddHeadString('<link rel="icon" type="image/png" sizes="16x16" href="'.SITE_TEMPLATE_PATH.'/img/favicons/16x16.png">', true);
              
        
        ?>   
        
        <? $APPLICATION->ShowHead(); ?>
</head>

<body>
  
    <div id="panel"><? $APPLICATION->ShowPanel(); ?></div>
    
       <!-- noindex -->
    <nav class="menu-list-mobile">
        <a href="#" class="menu-link">Home</a>
        <a href="#" class="menu-link">About</a>
        <a href="#" class="menu-link">Solutions</a>
        <a href="#" class="menu-link">Science</a>
        <a href="#" class="menu-link">News</a>
    </nav>
    <!-- /noindex -->

    <div class="header">
        <div class="container">
            <div class="main-header">
                <div class="logo">
                    <a href="">
                        <img src="<?=SITE_TEMPLATE_PATH?>/images/logo.svg" alt="">
                    </a>
                </div>
                <div class="menu">
                    <div class="menu-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <nav class="menu-list">
                        <a href="#" class="menu-link">Home</a>
                        <a href="#" class="menu-link">About</a>
                        <a href="#" class="menu-link">Solutions</a>
                        <a href="#" class="menu-link">Science</a>
                        <a href="#" class="menu-link">News</a>
                    </nav>
                    
                </div>
            </div>
        </div>
    </div>

   