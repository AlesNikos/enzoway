<div class="popup-content popup-submit">
    <a href="javascript:void(0);" onclick="$('.popup').jqmHide();" class="close"><i class='icon button-icon icon-close-line'></i></a>
    <div class="form-popup row no-gutters content">
        <h2 class="form-title">Contact Us</h2>
        <form>
            <div class="form-row">
                <div class="right-block">
                    <div class="form-group"> <!-- add class 'error' for error-message -->
                        <label for="exampleFormControlTextarea3">Text message</label>
                        <textarea required class="form-control" id="exampleFormControlTextarea3" rows="2"></textarea>
                        <div class="error-msg">Incorrect text message</div> 
                    </div>
                    <div class="form-group">
                        <label for="inputPassword7">Your Name</label>
                        <input type="text" required class="form-control" id="inputPassword7" placeholder="Konstantin Petrov">
                        <div class="error-msg">Incorrect name</div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword8">Phone</label>
                        <input data-mask="phone" type="text" required class="form-control" id="inputPassword8" placeholder="+7 (987) 654-32-10">
                        <div class="error-msg">Incorrect phone number</div>
                    </div>

                </div>
            </div>
            <div class="buttons">
                <button type="submit" class="btn btn-primary btn-normal font-bold">Send</button>
                <span class="privacy font-paragraph-small">By clicking the button you agree to the <a href="">privacy&nbsp;policy</a>.</span>
            </div>
        </form>
    </div>
</div>