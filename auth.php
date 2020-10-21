<?php
require_once('head.php');
?>

<div class="dr-container">
    <a class="dr-btn" href="#" data-modal="modal-auth-1">
        Авторизация через номер телефона 1
    </a>
    <a class="dr-btn" href="#" data-modal="modal-auth-2">
        Авторизация через номер телефона 2
    </a>
    <a class="dr-btn" href="#" data-modal="modal-auth-3">
        Авторизация через номер телефона 3
    </a>
    <a class="dr-btn" href="#" data-modal="modal-auth-4">
        Авторизация через номер телефона 4
    </a>
    <br>
    <br>
    <a class="dr-btn" href="#" data-modal="modal-auth-5">
        успешная авторизация
    </a>
    <br>
    <br>
    <a class="dr-btn" href="#" data-modal="modal-auth-6">
        Авторизация через почту
    </a>
    <br>
    <br>
    <a class="dr-btn" href="#" data-modal="modal-auth-7">
        Регистрация 1
    </a>
    <a class="dr-btn" href="#" data-modal="modal-auth-8">
        Регистрация 2
    </a>
    <a class="dr-btn" href="#" data-modal="modal-auth-9">
        Регистрация 3
    </a>
        <a class="dr-btn" href="#" data-modal="modal-auth-10">
        Регистрация 4
    </a>
        <a class="dr-btn" href="#" data-modal="modal-auth-11">
        Регистрация 5
    </a>
    <br>
    <br>
    <a class="dr-btn" href="#" data-modal="remember-pass-1">
        Вспомнить пароль 1
    </a>
    <a class="dr-btn" href="#" data-modal="remember-pass-2">
        Вспомнить пароль 2
    </a>
    <a class="dr-btn" href="#" data-modal="remember-pass-3">
        Вспомнить пароль 3
    </a>
</div>




<!-- Авторизация через номер телефона 1  -->
<div class="dr-modal dr-modal-sm-biggemore dr-modal__default dr-modal_new" id="modal-auth-1">

    <div class="dr-modal-wrapper">
        <div class="dr-modal__content bg-light">
            <div class="dr-modal__header">
                <div class="dr-modal__title">
                    <p class="dr-h3 ff-secondary">Авторизация</p>
                </div>
                <button class="dr-modal__close">
                    <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.011 6.42627L6.01099 18.4263" stroke="inherit" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M6.01099 6.42627L18.011 18.4263" stroke="inherit" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>
            </div>
            <div class="dr-modal__body">
                <div class="dr-modal__body-content">
                        <div class="auth-modal">
                            <form>
                                <div class="auth-modal__row">
                                    <label>Номер телефона</label>
                                    <input type="text" s placeholder="+7 (___) ___-__-__">
                                </div>
                                <div class="auth-modal__row">
                                    <button class="dr-btn">войти</button>
                                </div>
                                <a href="#" class="auth-another-href">Авторизоваться с помощью email и пароль</a>
                                <div class="auth-socials">
                                    <a href="#">
                                        <img src="image/icons/auth-icons/vk_ic.svg" alt="">
                                    </a>
                                    <a href="#">
                                        <img src="image/icons/auth-icons/facebook_ic.svg" alt="">
                                    </a>
                                    <a href="#">
                                        <img src="image/icons/auth-icons/mailru_ic.svg" alt="">
                                    </a>
                                    <a href="#">
                                        <img src="image/icons/auth-icons/yandex_ic.svg" alt="">
                                    </a>
                                    <a href="#">
                                        <img src="image/icons/auth-icons/ok_ic.svg" alt="">
                                    </a>
                                </div>
                            </form>
                        </div>
                </div>
            </div>

        </div>
    </div>
    <div class="dr-modal__overlay"></div>
</div>

<!-- Авторизация через номер телефона 1 -->


<!-- Авторизация через номер телефона 2  -->
<div class="dr-modal dr-modal-sm-biggemore dr-modal__default dr-modal_new" id="modal-auth-2">

    <div class="dr-modal-wrapper">
        <div class="dr-modal__content bg-light">
            <div class="dr-modal__header">
                <div class="dr-modal__title">
                    <p class="dr-h3 ff-secondary">Авторизация</p>
                </div>
                <button class="dr-modal__close">
                    <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.011 6.42627L6.01099 18.4263" stroke="inherit" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M6.01099 6.42627L18.011 18.4263" stroke="inherit" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>
            </div>
            <div class="dr-modal__body">
                <div class="dr-modal__body-content">
                        <div class="auth-modal">
                            <form>
                                <div class="auth-text">На номер +7 (222) 222 22 22 отправлено СМС с проверочным кодом</div>
                                <div class="auth-greyblock">
                                    <div class="flex">
                                        <div class="code-auth-title">Код авторизации</div>
                                        <input type="nomber" maxlength="4" class="cc-cvc-input" placeholder="____">
                                        <button class="btn btn-small">проверить код</button>
                                    </div>
                                    <div class="flex auth-help-links">
                                        <a href="#">Переотправить (29 сек)</a>
                                        <a href="#">Изменить номер</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                </div>
            </div>

        </div>
    </div>
    <div class="dr-modal__overlay"></div>
</div>

<!-- Авторизация через номер телефона 2 -->

<!-- Авторизация через номер телефона 3  -->
<div class="dr-modal dr-modal-sm-biggemore dr-modal__default dr-modal_new" id="modal-auth-3">

    <div class="dr-modal-wrapper">
        <div class="dr-modal__content bg-light">
            <div class="dr-modal__header">
                <div class="dr-modal__title">
                    <p class="dr-h3 ff-secondary">Авторизация</p>
                </div>
                <button class="dr-modal__close">
                    <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.011 6.42627L6.01099 18.4263" stroke="inherit" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M6.01099 6.42627L18.011 18.4263" stroke="inherit" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>
            </div>
            <div class="dr-modal__body">
                <div class="dr-modal__body-content">
                        <div class="auth-modal">
                            <form>
                                <div class="auth-text">На номер +7 (222) 222 22 22 отправлено СМС с проверочным кодом</div>
                                <div class="auth-greyblock">
                                    <div class="flex">
                                        <div class="code-auth-title">Код авторизации</div>
                                        <input type="nomber" maxlength="4" class="cc-cvc-input" placeholder="____">
                                    </div>
                                    <div class="loading">
                                        <div class="loading-ico"></div>
                                        <span>Проверка кода авторизации...</span>
                                    </div>
                                </div>
                            </form>
                        </div>
                </div>
            </div>

        </div>
    </div>
    <div class="dr-modal__overlay"></div>
</div>

<!-- Авторизация через номер телефона 3 -->

<!-- Авторизация через номер телефона 4  -->
<div class="dr-modal dr-modal-sm-biggemore dr-modal__default dr-modal_new" id="modal-auth-4">

    <div class="dr-modal-wrapper">
        <div class="dr-modal__content bg-light">
            <div class="dr-modal__header">
                <div class="dr-modal__title">
                    <p class="dr-h3 ff-secondary">Авторизация</p>
                </div>
                <button class="dr-modal__close">
                    <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.011 6.42627L6.01099 18.4263" stroke="inherit" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M6.01099 6.42627L18.011 18.4263" stroke="inherit" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>
            </div>
            <div class="dr-modal__body">
                <div class="dr-modal__body-content">
                        <div class="auth-modal">
                            <form>
                                <div class="auth-text">На номер +7 (222) 222 22 22 отправлено СМС с проверочным кодом</div>
                                <div class="auth-greyblock">
                                    <div class="flex">
                                        <div class="code-auth-title">Код авторизации</div>
                                        <input type="nomber" maxlength="4" class="cc-cvc-input err-input" placeholder="____">
                                        <button class="btn btn-small">проверить код</button>
                                    </div>
                                    <div class="err-block">Неверный код</div>
                                    <div class="flex auth-help-links">
                                        <a href="#">Переотправить (29 сек)</a>
                                        <a href="#">Изменить номер</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                </div>
            </div>

        </div>
    </div>
    <div class="dr-modal__overlay"></div>
</div>

<!-- Авторизация через номер телефона 4 -->

<!-- Авторизация через номер телефона 5  -->
<div class="dr-modal dr-modal-sm-biggemore dr-modal__default dr-modal_new" id="modal-auth-5">

    <div class="dr-modal-wrapper">
        <div class="dr-modal__content bg-light">
            <div class="dr-modal__header">
                <div class="dr-modal__title">
                    <p class="dr-h3 ff-secondary">Авторизация</p>
                </div>
                <button class="dr-modal__close">
                    <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.011 6.42627L6.01099 18.4263" stroke="inherit" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M6.01099 6.42627L18.011 18.4263" stroke="inherit" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>
            </div>
            <div class="dr-modal__body">
                <div class="dr-modal__body-content">
                        <div class="auth-modal">
                            <div class="auth-text auth-ok">Здравствуйте, <span> Олег </span>!<br>
                            Добро пожаловать в интернет-магазин KANZLER. </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="dr-modal__overlay"></div>
</div>

<!-- Авторизация через номер телефона 5 -->

<!-- Авторизация через номер телефона 6  -->
<div class="dr-modal dr-modal-sm-biggemore dr-modal__default dr-modal_new" id="modal-auth-6">

    <div class="dr-modal-wrapper">
        <div class="dr-modal__content bg-light">
            <div class="dr-modal__header">
                <div class="dr-modal__title">
                    <p class="dr-h3 ff-secondary">Авторизация</p>
                </div>
                <button class="dr-modal__close">
                    <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.011 6.42627L6.01099 18.4263" stroke="inherit" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M6.01099 6.42627L18.011 18.4263" stroke="inherit" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>
            </div>
            <div class="dr-modal__body">
                <div class="dr-modal__body-content">
                        <div class="auth-modal">
                            <form>
                                <div class="auth-modal__row">
                                    <label>Email</label>
                                    <input type="text" placeholder="Введите email">
                                </div>
                                <div class="auth-modal__row">
                                    <label>Пароль</label>
                                    <input type="text" placeholder="Введите пароль">
                                </div>
                                <div class="auth-modal__row">
                                    <button class="dr-btn">войти</button>
                                </div>
                                <a href="#" class="auth-another-href">Авторизоваться с помощью номера телефона</a>
                                <div class="auth-socials">
                                    <a href="#">
                                        <img src="image/icons/auth-icons/vk_ic.svg" alt="">
                                    </a>
                                    <a href="#">
                                        <img src="image/icons/auth-icons/facebook_ic.svg" alt="">
                                    </a>
                                    <a href="#">
                                        <img src="image/icons/auth-icons/mailru_ic.svg" alt="">
                                    </a>
                                    <a href="#">
                                        <img src="image/icons/auth-icons/yandex_ic.svg" alt="">
                                    </a>
                                    <a href="#">
                                        <img src="image/icons/auth-icons/ok_ic.svg" alt="">
                                    </a>
                                </div>
                            </form>
                        </div>
                </div>
            </div>

        </div>
    </div>
    <div class="dr-modal__overlay"></div>
</div>

<!-- Авторизация через номер телефона 6 -->

<!-- Авторизация через номер телефона 7  -->
<div class="dr-modal dr-modal-sm-biggemore dr-modal__default dr-modal_new" id="modal-auth-7">

    <div class="dr-modal-wrapper">
        <div class="dr-modal__content bg-light">
            <div class="dr-modal__header">
                <div class="dr-modal__title">
                    <p class="dr-h3 ff-secondary">Регистрация</p>
                </div>
                <button class="dr-modal__close">
                    <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.011 6.42627L6.01099 18.4263" stroke="inherit" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M6.01099 6.42627L18.011 18.4263" stroke="inherit" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>
            </div>
            <div class="dr-modal__body">
                <div class="dr-modal__body-content">
                        <div class="auth-modal">
                            <form>
                                <div class="auth-modal__l auth-modal__col">
                                    <div>
                                        <label>Имя <span class="color-red">*</span></label>
                                        <input type="text" placeholder="Введите имя">
                                    </div>
                                    <div>
                                        <label>Фамилия <span class="color-red">*</span></label>
                                        <input type="text" placeholder="Введите фамилию">
                                    </div>
                                </div>
                                <div class="auth-modal__l auth-modal__col">
                                    <div>
                                        <label>Дата рождения </label>
                                        <input type="text" name="data-b" placeholder="__ . __ . ____">
                                    </div>
                                    <div class="auth-sex">
                                        <label>Пол</label>
                                        <div class="auth-fem-male">
                                            <label class="radio-item">
                                                <input type="radio" name="payment" value="Мужской">
                                                <span class="radios__value-name">Мужской</span>
                                            </label>
                                            <label class="radio-item">
                                                <input type="radio" name="payment" value="Женский">
                                                <span class="radios__value-name">Женский</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="auth-modal__l auth-modal__col"> 
                                    <div>
                                        <label>Номер телефона <span class="color-red">*</span></label>
                                        <input type="text" name="phone" placeholder="+7 (___) ___-__-__">
                                    </div>
                                    <div>
                                        <button class="dr-btn">подтвердить номер</button>
                                    </div>
                                </div>
                                <div class="auth-modal__l auth-modal__col-12"> 
                                    <div>
                                        <label>Email <span class="color-red">*</span></label>
                                        <input type="text" placeholder="Введите email">
                                    </div>
                                </div>
                                <div class="auth-modal__l auth-modal__col-6"> 
                                    <div>
                                        <label>Пароль <span class="color-red">*</span></label>
                                        <input type="password" placeholder="Введите пароль">
                                    </div>
                                    <div>
                                        <label>Подтверждение пароля <span class="color-red">*</span></label>
                                        <input type="password" placeholder="Подтвердите  пароль">
                                    </div>
                                </div>

                                <div class="auth-modal__l">
                                    <label class="dr-checkbox active">
                                        <input type="checkbox">
                                        <span class="dr-checkbox-value-name">Нажимая кнопку “Зарегистрироваться” я подтверждаю свою дееспособность, даю согласие на обработку моих персональных данных в соответствии с <a href="#">Уловиями</a></span>
                                    </label>
                                    <label class="dr-checkbox">
                                        <input type="checkbox">
                                        <span class="dr-checkbox-value-name">Получать специальные предложение на email</span>
                                    </label>
                                </div>

                                <div class="auth-modal__l auth-modal__col-12">
                                    <button class="dr-btn">зарегистрироваться</button>
                                </div>
                               
                            </form>
                        </div>
                </div>
            </div>

        </div>
    </div>
    <div class="dr-modal__overlay"></div>
</div>

<!-- Авторизация через номер телефона 7 -->

<!-- Авторизация через номер телефона 8  -->
<div class="dr-modal dr-modal-sm-biggemore dr-modal__default dr-modal_new" id="modal-auth-8">

    <div class="dr-modal-wrapper">
        <div class="dr-modal__content bg-light">
            <div class="dr-modal__header">
                <div class="dr-modal__title">
                    <p class="dr-h3 ff-secondary">Регистрация</p>
                </div>
                <button class="dr-modal__close">
                    <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.011 6.42627L6.01099 18.4263" stroke="inherit" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M6.01099 6.42627L18.011 18.4263" stroke="inherit" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>
            </div>
            <div class="dr-modal__body">
                <div class="dr-modal__body-content">
                        <div class="auth-modal">
                            <form>
                                <div class="auth-modal__l auth-modal__col">
                                    <div>
                                        <label>Имя <span class="color-red">*</span></label>
                                        <input type="text" placeholder="Введите имя">
                                    </div>
                                    <div>
                                        <label>Фамилия <span class="color-red">*</span></label>
                                        <input type="text" placeholder="Введите фамилию">
                                    </div>
                                </div>
                                <div class="auth-modal__l auth-modal__col">
                                    <div>
                                        <label>Дата рождения </label>
                                        <input type="text" name="data-b" placeholder="__ . __ . ____">
                                    </div>
                                    <div class="auth-sex">
                                        <label>Пол</label>
                                        <div class="auth-fem-male">
                                            <label class="radio-item">
                                                <input type="radio" name="payment" value="Мужской">
                                                <span class="radios__value-name">Мужской</span>
                                            </label>
                                            <label class="radio-item">
                                                <input type="radio" name="payment" value="Женский">
                                                <span class="radios__value-name">Женский</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="auth-modal__l auth-modal__col"> 
                                    <div>
                                        <label>Номер телефона <span class="color-red">*</span></label>
                                        <input disabled type="text" name="phone" value="+7 (927) 341-91-66" placeholder="+7 (___) ___-__-__">
                                    </div>
                                    <div>
                                        <button disabled class="dr-btn">подтвердить номер</button>
                                    </div>
                                </div>
                                <div class="auth-modal__l">
                                <div class="auth-text">На номер +7 (222) 222 22 22 отправлено СМС с проверочным кодом</div>
                                <div class="auth-greyblock">
                                    <div class="flex">
                                        <div class="code-auth-title">Код авторизации</div>
                                        <input type="nomber" maxlength="4" class="cc-cvc-input" placeholder="____">
                                        <button class="btn btn-small">проверить код</button>
                                    </div>
                                    <div class="flex auth-help-links">
                                        <a href="#">Переотправить (29 сек)</a>
                                        <a href="#">Изменить номер</a>
                                    </div>
                                </div>
                                </div>
                                <div class="auth-modal__l auth-modal__col-12"> 
                                    <div>
                                        <label>Email <span class="color-red">*</span></label>
                                        <input type="text" placeholder="Введите email">
                                    </div>
                                </div>
                                <div class="auth-modal__l auth-modal__col-6"> 
                                    <div>
                                        <label>Пароль <span class="color-red">*</span></label>
                                        <input type="password" placeholder="Введите пароль">
                                    </div>
                                    <div>
                                        <label>Подтверждение пароля <span class="color-red">*</span></label>
                                        <input type="password" placeholder="Подтвердите  пароль">
                                    </div>
                                </div>

                                <div class="auth-modal__l">
                                    <label class="dr-checkbox active">
                                        <input type="checkbox">
                                        <span class="dr-checkbox-value-name">Нажимая кнопку “Зарегистрироваться” я подтверждаю свою дееспособность, даю согласие на обработку моих персональных данных в соответствии с <a href="#">Уловиями</a></span>
                                    </label>
                                    <label class="dr-checkbox">
                                        <input type="checkbox">
                                        <span class="dr-checkbox-value-name">Получать специальные предложение на email</span>
                                    </label>
                                </div>

                                <div class="auth-modal__l auth-modal__col-12">
                                    <button class="dr-btn">зарегистрироваться</button>
                                </div>
                               
                            </form>
                        </div>
                </div>
            </div>

        </div>
    </div>
    <div class="dr-modal__overlay"></div>
</div>

<!-- Авторизация через номер телефона 8 -->


<!-- Авторизация через номер телефона 9  -->
<div class="dr-modal dr-modal-sm-biggemore dr-modal__default dr-modal_new" id="modal-auth-9">

    <div class="dr-modal-wrapper">
        <div class="dr-modal__content bg-light">
            <div class="dr-modal__header">
                <div class="dr-modal__title">
                    <p class="dr-h3 ff-secondary">Регистрация</p>
                </div>
                <button class="dr-modal__close">
                    <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.011 6.42627L6.01099 18.4263" stroke="inherit" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M6.01099 6.42627L18.011 18.4263" stroke="inherit" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>
            </div>
            <div class="dr-modal__body">
                <div class="dr-modal__body-content">
                        <div class="auth-modal">
                            <form>
                                <div class="auth-modal__l auth-modal__col">
                                    <div>
                                        <label>Имя <span class="color-red">*</span></label>
                                        <input type="text" placeholder="Введите имя">
                                    </div>
                                    <div>
                                        <label>Фамилия <span class="color-red">*</span></label>
                                        <input type="text" placeholder="Введите фамилию">
                                    </div>
                                </div>
                                <div class="auth-modal__l auth-modal__col">
                                    <div>
                                        <label>Дата рождения </label>
                                        <input type="text" name="data-b" placeholder="__ . __ . ____">
                                    </div>
                                    <div class="auth-sex">
                                        <label>Пол</label>
                                        <div class="auth-fem-male">
                                            <label class="radio-item">
                                                <input type="radio" name="payment" value="Мужской">
                                                <span class="radios__value-name">Мужской</span>
                                            </label>
                                            <label class="radio-item">
                                                <input type="radio" name="payment" value="Женский">
                                                <span class="radios__value-name">Женский</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="auth-modal__l auth-modal__col"> 
                                    <div>
                                        <label>Номер телефона <span class="color-red">*</span></label>
                                        <input disabled type="text" name="phone" value="+7 (927) 341-91-66" placeholder="+7 (___) ___-__-__">
                                    </div>
                                    <div>
                                        <button disabled class="dr-btn">подтвердить номер</button>
                                    </div>
                                </div>
                                <div class="auth-modal__l">
                                <div class="auth-text">На номер +7 (222) 222 22 22 отправлено СМС с проверочным кодом</div>
                                <div class="auth-greyblock">
                                    <div class="flex">
                                        <div class="code-auth-title">Код авторизации</div>
                                        <input type="nomber" maxlength="4" class="cc-cvc-input" value="1234" placeholder="____">
                                    </div>
                                    <div class="loading">
                                        <div class="loading-ico"></div>
                                        <span>Проверка кода авторизации...</span>
                                    </div>
                                </div>
                                </div>
                                <div class="auth-modal__l auth-modal__col-12"> 
                                    <div>
                                        <label>Email <span class="color-red">*</span></label>
                                        <input type="text" placeholder="Введите email">
                                    </div>
                                </div>
                                <div class="auth-modal__l auth-modal__col-6"> 
                                    <div>
                                        <label>Пароль <span class="color-red">*</span></label>
                                        <input type="password" placeholder="Введите пароль">
                                    </div>
                                    <div>
                                        <label>Подтверждение пароля <span class="color-red">*</span></label>
                                        <input type="password" placeholder="Подтвердите  пароль">
                                    </div>
                                </div>

                                <div class="auth-modal__l">
                                    <label class="dr-checkbox active">
                                        <input type="checkbox">
                                        <span class="dr-checkbox-value-name">Нажимая кнопку “Зарегистрироваться” я подтверждаю свою дееспособность, даю согласие на обработку моих персональных данных в соответствии с <a href="#">Уловиями</a></span>
                                    </label>
                                    <label class="dr-checkbox">
                                        <input type="checkbox">
                                        <span class="dr-checkbox-value-name">Получать специальные предложение на email</span>
                                    </label>
                                </div>

                                <div class="auth-modal__l auth-modal__col-12">
                                    <button class="dr-btn">зарегистрироваться</button>
                                </div>
                               
                            </form>
                        </div>
                </div>
            </div>

        </div>
    </div>
    <div class="dr-modal__overlay"></div>
</div>

<!-- Авторизация через номер телефона 9 -->

<!-- Авторизация через номер телефона 10  -->
<div class="dr-modal dr-modal-sm-biggemore dr-modal__default dr-modal_new" id="modal-auth-10">

    <div class="dr-modal-wrapper">
        <div class="dr-modal__content bg-light">
            <div class="dr-modal__header">
                <div class="dr-modal__title">
                    <p class="dr-h3 ff-secondary">Регистрация</p>
                </div>
                <button class="dr-modal__close">
                    <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.011 6.42627L6.01099 18.4263" stroke="inherit" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M6.01099 6.42627L18.011 18.4263" stroke="inherit" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>
            </div>
            <div class="dr-modal__body">
                <div class="dr-modal__body-content">
                        <div class="auth-modal">
                            <form>
                                <div class="auth-modal__l auth-modal__col">
                                    <div>
                                        <label>Имя <span class="color-red">*</span></label>
                                        <input type="text" placeholder="Введите имя">
                                    </div>
                                    <div>
                                        <label>Фамилия <span class="color-red">*</span></label>
                                        <input type="text" placeholder="Введите фамилию">
                                    </div>
                                </div>
                                <div class="auth-modal__l auth-modal__col">
                                    <div>
                                        <label>Дата рождения </label>
                                        <input type="text" name="data-b" placeholder="__ . __ . ____">
                                    </div>
                                    <div class="auth-sex">
                                        <label>Пол</label>
                                        <div class="auth-fem-male">
                                            <label class="radio-item">
                                                <input type="radio" name="payment" value="Мужской">
                                                <span class="radios__value-name">Мужской</span>
                                            </label>
                                            <label class="radio-item">
                                                <input type="radio" name="payment" value="Женский">
                                                <span class="radios__value-name">Женский</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="auth-modal__l auth-modal__col"> 
                                    <div>
                                        <label>Номер телефона <span class="color-red">*</span></label>
                                        <input disabled type="text" name="phone" value="+7 (927) 341-91-66" placeholder="+7 (___) ___-__-__">
                                    </div>
                                    <div>
                                        <button disabled class="dr-btn">подтвердить номер</button>
                                    </div>
                                </div>
                                <div class="auth-modal__l">
                                    <div class="auth-text">На номер +7 (222) 222 22 22 отправлено СМС с проверочным кодом</div>
                                    <div class="auth-greyblock">
                                        <div class="flex">
                                            <div class="code-auth-title">Код авторизации</div>
                                            <input type="nomber" maxlength="4" class="cc-cvc-input err-input" placeholder="____">
                                            <button class="btn btn-small">проверить код</button>
                                        </div>
                                        <div class="err-block">Неверный код</div>
                                        <div class="flex auth-help-links">
                                            <a href="#">Переотправить (29 сек)</a>
                                            <a href="#">Изменить номер</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="auth-modal__l auth-modal__col-12"> 
                                    <div>
                                        <label>Email <span class="color-red">*</span></label>
                                        <input type="text" placeholder="Введите email">
                                    </div>
                                </div>
                                <div class="auth-modal__l auth-modal__col-6"> 
                                    <div>
                                        <label>Пароль <span class="color-red">*</span></label>
                                        <input type="password" placeholder="Введите пароль">
                                    </div>
                                    <div>
                                        <label>Подтверждение пароля <span class="color-red">*</span></label>
                                        <input type="password" placeholder="Подтвердите  пароль">
                                    </div>
                                </div>

                                <div class="auth-modal__l">
                                    <label class="dr-checkbox active">
                                        <input type="checkbox">
                                        <span class="dr-checkbox-value-name">Нажимая кнопку “Зарегистрироваться” я подтверждаю свою дееспособность, даю согласие на обработку моих персональных данных в соответствии с <a href="#">Уловиями</a></span>
                                    </label>
                                    <label class="dr-checkbox">
                                        <input type="checkbox">
                                        <span class="dr-checkbox-value-name">Получать специальные предложение на email</span>
                                    </label>
                                </div>

                                <div class="auth-modal__l auth-modal__col-12">
                                    <button class="dr-btn">зарегистрироваться</button>
                                </div>
                               
                            </form>
                        </div>
                </div>
            </div>

        </div>
    </div>
    <div class="dr-modal__overlay"></div>
</div>

<!-- Авторизация через номер телефона 10 -->

<!-- Авторизация через номер телефона 11  -->
<div class="dr-modal dr-modal-sm-biggemore dr-modal__default dr-modal_new" id="modal-auth-11">

    <div class="dr-modal-wrapper">
        <div class="dr-modal__content bg-light">
            <div class="dr-modal__header">
                <div class="dr-modal__title">
                    <p class="dr-h3 ff-secondary">Регистрация</p>
                </div>
                <button class="dr-modal__close">
                    <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.011 6.42627L6.01099 18.4263" stroke="inherit" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M6.01099 6.42627L18.011 18.4263" stroke="inherit" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>
            </div>
            <div class="dr-modal__body">
                <div class="dr-modal__body-content">
                        <div class="auth-modal">
                            <form>
                                <div class="auth-modal__l auth-modal__col">
                                    <div>
                                        <label>Имя <span class="color-red">*</span></label>
                                        <input type="text" placeholder="Введите имя">
                                    </div>
                                    <div>
                                        <label>Фамилия <span class="color-red">*</span></label>
                                        <input type="text" placeholder="Введите фамилию">
                                    </div>
                                </div>
                                <div class="auth-modal__l auth-modal__col">
                                    <div>
                                        <label>Дата рождения </label>
                                        <input type="text" name="data-b" placeholder="__ . __ . ____">
                                    </div>
                                    <div class="auth-sex">
                                        <label>Пол</label>
                                        <div class="auth-fem-male">
                                            <label class="radio-item">
                                                <input type="radio" name="payment" value="Мужской">
                                                <span class="radios__value-name">Мужской</span>
                                            </label>
                                            <label class="radio-item">
                                                <input type="radio" name="payment" value="Женский">
                                                <span class="radios__value-name">Женский</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="auth-modal__l auth-modal__col"> 
                                    <div>
                                        <label>Номер телефона <span class="color-red">*</span></label>
                                        <input disabled type="text" name="phone" value="+7 (927) 341-91-66" placeholder="+7 (___) ___-__-__">
                                    </div>
                                    <div>
                                        <button disabled class="dr-btn dr-btn-assept">Номер подтвержден!</button>
                                    </div>
                                </div>

                                <div class="auth-modal__l auth-modal__col-12"> 
                                    <div>
                                        <label>Email <span class="color-red">*</span></label>
                                        <input type="text" placeholder="Введите email">
                                    </div>
                                </div>
                                <div class="auth-modal__l auth-modal__col-6"> 
                                    <div>
                                        <label>Пароль <span class="color-red">*</span></label>
                                        <input type="password" placeholder="Введите пароль">
                                    </div>
                                    <div>
                                        <label>Подтверждение пароля <span class="color-red">*</span></label>
                                        <input type="password" placeholder="Подтвердите  пароль">
                                    </div>
                                </div>

                                <div class="auth-modal__l">
                                    <label class="dr-checkbox active">
                                        <input type="checkbox">
                                        <span class="dr-checkbox-value-name">Нажимая кнопку “Зарегистрироваться” я подтверждаю свою дееспособность, даю согласие на обработку моих персональных данных в соответствии с <a href="#">Уловиями</a></span>
                                    </label>
                                    <label class="dr-checkbox">
                                        <input type="checkbox">
                                        <span class="dr-checkbox-value-name">Получать специальные предложение на email</span>
                                    </label>
                                </div>

                                <div class="auth-modal__l auth-modal__col-12">
                                    <button class="dr-btn">зарегистрироваться</button>
                                </div>
                               
                            </form>
                        </div>
                </div>
            </div>

        </div>
    </div>
    <div class="dr-modal__overlay"></div>
</div>

<!-- Авторизация через номер телефона 11 -->


<!-- Вспомнить пароль  -->
<div class="dr-modal dr-modal-sm-biggemore dr-modal__default dr-modal_new" id="remember-pass-1">

    <div class="dr-modal-wrapper">
        <div class="dr-modal__content bg-light">
            <div class="dr-modal__header">
                <div class="dr-modal__title">
                    <p class="dr-h3 ff-secondary">Вспомнить пароль</p>
                </div>
                <button class="dr-modal__close">
                    <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.011 6.42627L6.01099 18.4263" stroke="inherit" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M6.01099 6.42627L18.011 18.4263" stroke="inherit" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>
            </div>
            <div class="dr-modal__body">
                <div class="dr-modal__body-content">
                        <div class="auth-modal">
                            <form>
                                <div class="auth-modal__row">
                                    <label>Email</label>
                                    <input type="text" placeholder="Введите email">
                                </div>
                                
                                <div class="auth-modal__row">
                                    <button class="dr-btn">восстановить</button>
                                </div>
                                <a href="#" class="auth-another-href">Я вспомнил пароль</a>
                            </form>
                        </div>
                </div>
            </div>

        </div>
    </div>
    <div class="dr-modal__overlay"></div>
</div>

<!-- Вспомнить пароль -->

<!-- Вспомнить пароль  2 -->
<div class="dr-modal dr-modal-sm-biggemore dr-modal__default dr-modal_new" id="remember-pass-2">

    <div class="dr-modal-wrapper">
        <div class="dr-modal__content bg-light">
            <div class="dr-modal__header">
                <div class="dr-modal__title">
                    <p class="dr-h3 ff-secondary">Вспомнить пароль</p>
                </div>
                <button class="dr-modal__close">
                    <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.011 6.42627L6.01099 18.4263" stroke="inherit" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M6.01099 6.42627L18.011 18.4263" stroke="inherit" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>
            </div>
            <div class="dr-modal__body">
                <div class="dr-modal__body-content">
                        <div class="auth-modal">
                            <form>
                                <div class="auth-modal__row">
                                    <label>Email</label>
                                    <input type="text" placeholder="Введите email">
                                </div>
                                <div class="auth-text">На вашу почту выслана информация по восстановлению пароля</div>
                                <div class="auth-modal__row">
                                    <button class="dr-btn">восстановить</button>
                                </div>
                                <a href="#" class="auth-another-href">Я вспомнил пароль</a>
                            </form>
                        </div>
                </div>
            </div>

        </div>
    </div>
    <div class="dr-modal__overlay"></div>
</div>

<!-- Вспомнить пароль 2 -->

<!-- Вспомнить пароль  3 -->
<div class="dr-modal dr-modal-sm-biggemore dr-modal__default dr-modal_new" id="remember-pass-3">

    <div class="dr-modal-wrapper">
        <div class="dr-modal__content bg-light">
            <div class="dr-modal__header">
                <div class="dr-modal__title">
                    <p class="dr-h3 ff-secondary">Вспомнить пароль</p>
                </div>
                <button class="dr-modal__close">
                    <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.011 6.42627L6.01099 18.4263" stroke="inherit" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M6.01099 6.42627L18.011 18.4263" stroke="inherit" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>
            </div>
            <div class="dr-modal__body">
                <div class="dr-modal__body-content">
                        <div class="auth-modal">
                            <form>
                                <div class="auth-modal__row">
                                    <label>Email</label>
                                    <input type="text" class="err-input" placeholder="Введите email">
                                </div>
                                <div class="auth-modal__row mb-0 mt--5">
                                    <div class="err-block text-left">Пользователь с данным email адресом не зарегистрирован в системе.<br>
                                    Проверьте правильность ввода.</div>
                                </div>
                                <div class="auth-modal__row">
                                    <button class="dr-btn">восстановить</button>
                                </div>
                                <a href="#" class="auth-another-href">Я вспомнил пароль</a>
                            </form>
                        </div>
                </div>
            </div>

        </div>
    </div>
    <div class="dr-modal__overlay"></div>
</div>

<!-- Вспомнить пароль 3 -->


<?php

require_once('foot.php'); ?>
