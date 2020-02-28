<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("form");
?>

    <div class="wrapper-section">
        <div class="container">
            <div class="form-wrapper">
                <div class="form">
                    <h2 class="form-title">Send us an email</h2>
                    <form>
                        <div class="form-row">
                            <div class="form-group col">
                                <div class="error-msg">Incorrect phone number</div>
                                <label for="exampleFormControlTextarea1">Text message<span>*</span></label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                            </div>
                            <div class="right-block col-auto">
                                <div class="form-group">
                                    <div class="error-msg">Incorrect phone number</div>
                                    <label for="inputEmail4">Email<span>*</span></label>
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="email@gmail.com">
                                </div>
                                <div class="form-group">
                                    <div class="error-msg">Incorrect phone number</div>
                                    <label for="inputPassword4">Your Name or Company</label>
                                    <input type="password" class="form-control" id="inputPassword4" placeholder="">
                                </div>
                                <div class="form-group">
                                    <div class="error-msg">Incorrect phone number</div>
                                    <label for="inputPassword4">Phone number</label>
                                    <input type="password" class="form-control" id="inputPassword4" placeholder="+7">
                                </div>

                            </div>
                        </div>
                        <div class="buttons">
                            <button type="submit" class="btn btn-primary btn-normal font-bold">Send an Email</button>
                            <span class="privacy font-paragraph-small">By clicking the button you agree to the <a href="">privacy&nbsp;policy</a>.</span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>