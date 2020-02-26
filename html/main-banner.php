<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Main-banner");
?>

    
    <div class="main-banner">
        <div class="background" style="background-image:url(<?=SITE_TEMPLATE_PATH?>/images/temp/header-bg.png)"></div>
        <div class="container">
            <h1 class="hero-h1">Grain Improvers</h1>
            <div class="text font-paragraph-lead font-bold">Find Your Solution</div>
            <div class="arrow">
                <div class="chevron"></div>
                <div class="chevron"></div>
                <div class="chevron"></div>
            </div>
        </div>
    </div>
    
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>