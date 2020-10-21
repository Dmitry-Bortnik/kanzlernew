<?php
require_once('head.php');
?>
<div class="remember-pass-page">
    <div class="wrapper">




                        <div class="auth-modal">
                            <form>
                                <div class="auth-modal__row">
                                    <label>Пароль</label>
                                    <input type="text" placeholder="Введите пароль">
                                </div>
                                <div class="auth-modal__row">
                                    <label>Подтвердите пароль</label>
                                    <input type="text" placeholder="Подвердите ввод пароля">
                                </div>
                                <div class="auth-modal__row mt--5">
                                    <div class="auth-mark">*Пароль должен быть не менее 6 символов длиной.</div>
                                </div>
                                <div class="auth-modal__row">
                                    <button class="dr-btn">изменить пароль</button>
                                </div>
                                <a href="#" class="auth-another-href">Авторизоваться</a>
                            </form>
                        </div>

        </div>
    </div>

   

    <?php
require_once("modal_pickuppoints.php");
require_once("footer.php");
require_once('foot.php'); ?>

<script src="js/checkout/checkout-products.js"></script>
<script src="js/checkout/checkout-sidear.js"></script>