<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("How");
?>

    <div class="wrapper-section">
        <div class="advantages">
            <!-- <div class="section-name">
                <div class="font-subheader">Video</div>
                <div class="hero-h2 title">Advantages of this technology</div>
            </div> -->
            <div class="video-block" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/images/video-bg.png')">
                <div class="section-name white">
                    <div class="font-subheader">Video</div>
                    <div class="hero-h2 title">Advantages of this technology</div>
                </div>
                <a href="#" class="btn-play"><i class="icon icon-play-fill"></i></a>
            </div>

        </div>
    </div>

<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>