<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Главная страница сайта");
?>

    <div class="header-title">
        <div class="background" style="background-image:url(<?=SITE_TEMPLATE_PATH?>/images/temp/header-bg.png)"></div>
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb font-paragraph-small">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">News</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Bright Science Turns Old Reeds into Building Materials</li>
                </ol>
            </nav>
            <h1 class="page-title">Bright Science Turns Old Reeds into Building Materials</h1>
        </div>
    </div>

    <div class="content-wrapper">
        <div class="news-element-page">
            <div class="container">
                <div class="content">
                    <div class="row no-gutters actions">
                        <a href="#" class="link-back">
                            <i class="button-icon icon icon-arrow-left-line"></i>
                            <span class='link-text font-paragraph-base font-bold'>Back</span>
                        </a>
                        <div class="date-wrap">
                            <i class="button-icon icon icon-calendar-event-line"></i>
                            <span class="date font-paragraph-base font-bold">22/11/2019</span>
                        </div>
                    </div>
                    <div class="text font-paragraph-lead">
                        See how a collaboration between DSM, Natuurmonumenten, Wagening UR and Compakboard has developed a sustainable building material based on reeds cleared to maintain the unique habitat of the De Wieden National Park.
                    </div>
                    <div class="video-container">
                         <video src="https://www.youtube.com/watch?v=WTWyosdkx44"></video>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    


    <script>
          wow = new WOW();
          wow.init();
    </script>
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>