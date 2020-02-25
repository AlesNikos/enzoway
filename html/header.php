<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("header");
?>

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

<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>