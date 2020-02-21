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
           //'/vendor/bootstrap/bootstrap.css',
        ] as $file)
            $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . $file);
        
        
        foreach ([
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
    
    

   