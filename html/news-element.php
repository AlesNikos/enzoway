<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Главная страница сайта");
?>

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