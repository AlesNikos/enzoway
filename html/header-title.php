<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Топ");
?>

    <div class="header-title">
        <div class="background" style="background-image:url(<?=SITE_TEMPLATE_PATH?>/images/temp/header-bg.png)"></div>
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb font-caption10-18">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About</li>
                </ol>
            </nav>
            <h1 class="page-title">About EnzoWay</h1>
        </div>
    </div>

<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>