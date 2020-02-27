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
                    <li class="breadcrumb-item active" aria-current="page">Science</li>
                </ol>
            </nav>
            <h1 class="page-title">Science</h1>
        </div>
    </div>

    <div class="content-wrapper">
        <div class="science-page">
            <div class="container">
                <div class="items">
                    <div class="item">
                        <div class="h2">European Stressless Flour</div>
                        <div class="description">
                            This material is a logical continuation of the series of articles about the features of the European flour mill, published in the September and October issues of the magazine: "Comparison of the principles of operation of Russian and European flour mills" and "Secrets of European flour mills".
                        </div>
                        <div class="row no-gutters info-block">
                            <div class="col-auto info-block-item views">
                                <div class="row no-gutters font-paragraph-base font-bold">
                                    <i class="button-icon icon icon-eye-line"></i>
                                    <span>345</span>
                                </div>
                            </div>
                            <div class="col-auto info-block-item show-more">
                                 <div class="row no-gutters font-paragraph-base font-bold">
                                     <a href="#"  onclick="openModalSubmit()"  class="show-more">
                                        <i class="button-icon icon icon-add-line"></i>
                                        <span>Read More</span>
                                     </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item"></div>
                    <div class="item"></div>
                    <div class="item"></div>
                    <div class="item"></div>
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