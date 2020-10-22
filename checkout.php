<?php
require_once('head.php');
?>
<div class="checkout-page">
    <div class="wrapper">
        <div class="dr-grid">
            <div class="dr-col-8">
                <div class="checkout-products">
                    <div class="checkout-products__header">
                        <div class="checkout-products__header__col-1">
                            Товар
                        </div>
                        <div class="checkout-products__header__col-2">
                            Количество
                        </div>
                        <div class="checkout-products__header__col-3">
                            Цена
                        </div>
                    </div>
                    <div class="checkout-products__body">
                        <div class="checkout-products__del">
                            <a class="checkout-products__delete" href="#"></a>
                        </div>
                        <div class="checkout-products__main">
                            <div class="checkout-products__img">
                                <a href=""><img src="images/good1.png" alt=""></a>
                            </div>
                            <div class="checkout-products__info">
                                <div class="checkout-products__info-top">
                                    <a class="checkout-products__title">Костюмный приталенный пиджак из шерсти
                                        KANZLER</a>
                                    <div class="checkout-products__action-yes">Участвует в акции</div>
                                </div>
                                <div class="checkout-products__info-bott">
                                    <div class="checkout-products__char">
                                        <span>Размер:</span> 52<br>
                                        <span>Код модели:</span> R239996<br>
                                        <span>Артикул:</span> 18S-SBB1/BL1/N/171
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="checkout-products__nom">
                            <div class="quantity-block">
                                <button class="quantity-arrow-minus" disabled> - </button>
                                <input class="quantity-num" type="number" value="1" />
                                <button class="quantity-arrow-plus"> + </button>
                            </div>
                        </div>
                        <div class="checkout-products__price-col">
                            <div class="checkout-products__sale-text">Скидка 40%</div>
                            <div class="checkout-products__old-price">22 999<ruble><span class="text">руб.</span>
                                </ruble>
                            </div>
                            <div class="checkout-products__actual-price">12 999<ruble><span class="text">руб.</span>
                                </ruble>
                            </div>
                        </div>
                    </div>

                    <div class="checkout-products__body">
                        <div class="checkout-products__del">
                            <a class="checkout-products__delete" href="#"></a>
                        </div>
                        <div class="checkout-products__main">
                            <div class="checkout-products__img">
                                <a href=""><img src="images/good1.png" alt=""></a>
                            </div>
                            <div class="checkout-products__info">
                                <div class="checkout-products__info-top">
                                    <a class="checkout-products__title">Костюмный приталенный пиджак из шерсти
                                        KANZLER</a>
                                    <div class="checkout-products__action-yes">Участвует в акции</div>
                                </div>
                                <div class="checkout-products__info-bott">
                                    <div class="checkout-products__char">
                                        <span>Размер:</span> 52<br>
                                        <span>Код модели:</span> R239996<br>
                                        <span>Артикул:</span> 18S-SBB1/BL1/N/171
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="checkout-products__nom">
                            <div class="quantity-block">
                                <button class="quantity-arrow-minus" disabled> - </button>
                                <input class="quantity-num" type="number" value="1" />
                                <button class="quantity-arrow-plus"> + </button>
                            </div>
                        </div>
                        <div class="checkout-products__price-col">
                            <div class="checkout-products__sale-text">Скидка 40%</div>
                            <div class="checkout-products__old-price">22 999<ruble><span class="text">руб.</span>
                                </ruble>
                            </div>
                            <div class="checkout-products__actual-price">12 999<ruble><span class="text">руб.</span>
                                </ruble>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="checkout-data">
                    <div class="checkout-data__row">
                        <div class="checkout-data__title">
                            <div class="checkout-data__title-nom">1</div>
                            <div class="checkout-data__title-text">Контактные данные</div>
                        </div>
                        <div class="checkout-data__body">
                            <div class="checkout-data__input input-fullwidth">
                                <label>Ф. И. О. </label>
                                <input type="text" name="name" placeholder="Введите Ф.И.О.">
                            </div>
                            <div class="checkout-data__input input-half">
                                <div class="checkout-data__phone">
                                    <label>Номер телефона</label>
                                    <div class="checkout-data__cust-phone">
                                        <div class="phone-mask-list">
                                            <div class="phone-inp-wrap">
                                                <input type="hidden" name="selected_type" class="selected_type"
                                                    value="ru">
                                                <span class="flag flag-ru"></span>
                                                <input class="viz phone-inp" type="text" maxlength="250" id="phone_te"
                                                    data-mask="+7 (ddd) ddd-dddd" data-placeholder="+7 (___) ___-____"
                                                    value="" name="ORDER_PROP_3" required=""
                                                    placeholder="+7 (___) ___-____">
                                            </div>
                                            <ul class="phone-list">
                                                <li data-code="ru" data-mask="+7 (ddd) ddd-dddd"
                                                    data-placeholder="+7 (___) ___-____">
                                                    <span class="flag flag-ru"></span>
                                                    Russia + 7 </li>
                                                <li data-code="by" data-mask="+375 (dd) ddd-dddd"
                                                    data-placeholder="+375 (__) ___-____">
                                                    <span class="flag flag-by"></span>
                                                    Belarus + 375 </li>
                                                <li data-code="kz" data-mask="+7 (ddd) ddd-dddd"
                                                    data-placeholder="+7 (___) ___-____">
                                                    <span class="flag flag-kz"></span>
                                                    Kazahstan + 7 </li>
                                                <li data-code="am" data-mask="+374 (dd) ddd-dddd"
                                                    data-placeholder="+374 (__) ___-____">
                                                    <span class="flag flag-am"></span>
                                                    Armenia + 374 </li>
                                                <li data-code="kg" data-mask="+996 (dd) ddd-dddd"
                                                    data-placeholder="+996 (__) ___-____">
                                                    <span class="flag flag-kg"></span>
                                                    Kyrgyzstan + 996 </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout-data__email">
                                    <label>Введите email </label>
                                    <input type="text" name="name" placeholder="Введите email">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="checkout-data__row">
                        <div class="checkout-data__title">
                            <div class="checkout-data__title-nom">2</div>
                            <div class="checkout-data__title-text">Адрес</div>
                        </div>
                        <div class="checkout-data__body">
                            <div class="checkout-data__input input-fullwidth">
                                <label>Введите адрес </label>
                                <input type="text" name="name"
                                    placeholder="Введите адрес, например: г. Москва, ул. Ленина, д.1, кв.1">
                            </div>
                            <div class="checkout-data__radios">
                                <label class="radio-item active">
                                    <input type="radio" name="deverly" value="Доставка курьером">
                                    <span class="radios__value-name">Доставка курьером</span>
                                </label>
                                <label class="radio-item">
                                    <input type="radio" name="deverly" value="Почта России (Курьер EMS)">
                                    <span class="radios__value-name">Почта России (Курьер EMS)</span>
                                </label>
                                <label class="radio-item">
                                    <input type="radio" name="deverly" value="Самовывоз из магазина KANZLER">
                                    <span class="radios__value-name">Самовывоз из магазина KANZLER
                                        <a href="#" class="checkout-data__open-modal"
                                        data-modal="modal-pickuppoint">Выбрать магазин</a>
                                    </span>

                                </label>
                                <label class="radio-item">
                                    <input type="radio" name="deverly"
                                        value="Самовывоз PickPoint (постаматы и пункты выдачи)">
                                    <span class="radios__value-name">Самовывоз PickPoint (постаматы и
                                        пункты выдачи)
                                        <a href="#" class="checkout-data__open-modal"
                                        data-modal="modal-pickuppoint">Выбрать пункт самовывоза</a>
                                    </span>

                                </label>
                                <label class="radio-item">
                                    <input type="radio" name="deverly" value="Самовывоз СДЭК (пункты выдачи)">
                                    <span class="radios__value-name">Самовывоз СДЭК (пункты
                                        выдачи)
                                        <a href="#" class="checkout-data__open-modal"
                                        data-modal="modal-pickuppoint">Выбрать пункт самовывоза</a>
                                    </span>

                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="checkout-data__row">
                        <div class="checkout-data__title">
                            <div class="checkout-data__title-nom">3</div>
                            <div class="checkout-data__title-text">Способ оплаты</div>
                        </div>
                        <div class="checkout-data__body">
                            <div class="checkout-data__radios mt-0">
                                <label class="radio-item active">
                                    <input type="radio" name="payment" value="Банковской картой">
                                    <span class="radios__value-name">Банковской картой</span>
                                </label>
                                <label class="radio-item">
                                    <input type="radio" name="payment" value="Наличными в магазине">
                                    <span class="radios__value-name">Наличными в магазине</span>
                                </label>
                                <label class="radio-item">
                                    <input type="radio" name="payment" value="Выставить счёт">
                                    <span class="radios__value-name">Выставить счёт</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="checkout-data__row">
                        <div class="checkout-data__title">
                            <div class="checkout-data__title-nom">4</div>
                            <div class="checkout-data__title-text">Комментарий</div>
                        </div>
                        <div class="checkout-data__body">
                            <div class="checkout-data__input input-fullwidth">
                                <label>Введите комментарий</label>
                                <textarea name="comment"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dr-col-4">
                <div class="checkout-sidear">
                    <div class="checkout-login">
                        <a href="#">Вход</a> <span>|</span> <a href="#">Регистрация</a>
                    </div>
                    <div class="sidebar__block">
                        <div class="sidebar__block-title">Промо-код</div>
                        <div class="sidebar__block-body">
                            <label>Промо-код</label>
                            <div class="sidebar__promo">
                                <input type="text">
                                <button class="btn btn-small" disabled>применить</button>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar__block">
                        <div class="sidebar__block-title">Промо-код</div>
                        <div class="sidebar__block-body">
                            <label>Промо-код</label>
                            <div class="sidebar__promo">
                                <input type="text" value="PROMO123">
                                <button class="btn btn-small">применить</button>
                            </div>
                            <div class="err-message">Ошибка применения промо-кода</div>
                        </div>
                    </div>
                    <div class="sidebar__block">
                        <div class="sidebar__block-title">Промо-код</div>
                        <div class="sidebar__block-body">
                            <div class="loading">
                                <div class="loading-ico"></div>
                                <span>Проверка промо-кода...</span>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar__block">
                        <div class="sidebar__block-title">Промо-код</div>
                        <div class="sidebar__block-body">
                            <div class="ok-block">
                                <div class="ok-ico"></div>
                                <span>Промо-код применен</span>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar__block">
                        <div class="sidebar__block-title">Промо-код</div>
                        <div class="sidebar__block-body">
                            <div class="err-block">
                                <div class="err-ico"></div>
                                <span>Промо-код не найден</span>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar__block">
                        <div class="sidebar__block-title">Промо-код</div>
                        <div class="sidebar__block-body">
                            <div class="assept-promo">
                                <label>Промо-код</label>
                                <div class="assept-promo__row">
                                    <div class="assept-promo__name">ПРОМОКОД23</div>
                                    <a class="delete-icon" href="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar__block">
                        <div class="sidebar__block-title">Бонусная карта
                            <div class="mark mark-right">
                                <div>Обратите внимание, что только зарегистрированные пользователи могут пользоваться
                                    преимуществами программы лояльности, получать скидки и бонусные начисления, а также
                                    просматривать информацию по заказу</div>
                            </div>
                        </div>
                        <div class="sidebar__block-body">
                            <div class="bonuses">
                                <div class="bonuses__row">
                                    <div class="bonuses__nom-name">Номер карты</div>
                                    <div class="bonuses__nom-card">4728 2434 2342 2523</div>
                                </div>
                                <div class="bonuses__row">
                                    <div class="bonuses__nom-name color-red">Доступно бонусов</div>
                                    <div class="bonuses__nom-card color-red">145</div>
                                </div>
                                <div class="bonuses__use">
                                    <div class="bonuses__mark">
                                        <div class="mark mark-left">
                                            <div>Потратить возможно не более 20% от покупки, при этом скидка на отдельно
                                                взятый товар не должна быть более 80% от базовой цены</div>
                                        </div>
                                    </div>
                                    <div class="bonuses__input">
                                        <label>Кол-во для списания</label>
                                        <div class="checkout-sidebar__promo">
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="bonuses__btn">
                                        <button class="btn btn-small" disabled>списать</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar__block">
                        <div class="sidebar__block-title">Бонусная карта
                            <div class="mark mark-right">
                                <div>Обратите внимание, что только зарегистрированные пользователи могут пользоваться
                                    преимуществами программы лояльности, получать скидки и бонусные начисления, а также
                                    просматривать информацию по заказу</div>
                            </div>
                        </div>
                        <div class="sidebar__block-body">
                            <p>Для проверки бонусов авторизуйтесь и подтвердите номер телефона в личном кабинете</p>
                        </div>
                    </div>

                    <div class="scroll-fixed-sidebar">
                        <div class="sidebar__block">
                            <div class="sidebar__block-inner">
                                <div class="sidebar__block-inner__title">Ваша корзина</div>
                                <div class="sidebar__block-inner__body">
                                    <div class="sidebar__block-inner__list">
                                        <div class="sidebar__block-inner__list-row">
                                            <span>Товары</span> <span class="sidebar__block-inner__price">60
                                                588<ruble><span class="text">руб.</span></ruble></span>
                                        </div>
                                        <div class="sidebar__block-inner__list-row">
                                            <span>Скидка</span> <span
                                                class="checkout-sidebar__block-inner___price color-red">-23 688
                                                <ruble><span class="text">руб.</span></ruble></span>
                                        </div>
                                        <div class="sidebar__block-inner__list-row">
                                            <span>Бонусы</span> <span class="sidebar__block-inner__price color-red">-289
                                                <ruble>
                                                    <span class="text">руб.</span></ruble></span>
                                        </div>
                                        <div class="sidebar__block-inner__list-row">
                                            <span>Промо-код</span> <span
                                                class="sidebar__block-inner__price color-red">-560<ruble>
                                                    <span class="text">руб.</span></ruble></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar__block-inner">
                                <div class="sidebar__block-inner__title">Доставка</div>
                                <div class="sidebar__block-inner__body">
                                    <div class="sidebar__block-inner__list">
                                        <div class="sidebar__block-inner__list-row">
                                            <span>Самовывоз СДЭК (пункты выдачи)</span> <span
                                                class="sidebar__block-inner__price">1 588<ruble><span
                                                        class="text">руб.</span></ruble></span>
                                        </div>
                                        <div class="sidebar__block-inner__list-row">
                                            <span>Акция</span> <span class="sidebar__block-inner__price color-red">-150
                                                <ruble>
                                                    <span class="text">руб.</span></ruble></span>
                                        </div>
                                        <div class="sidebar__block-inner__list-row">
                                            <span class="weight-600">Итого</span> <span
                                                class="sidebar__block-inner__price color-red">1 438
                                                <ruble><span class="text">руб.</span></ruble></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar__block-inner">
                                <div class="sidebar__block-inner__title">Подытог
                                    <div class="sidebar__block-inner__final-summ">44 999<ruble><span
                                                class="text">руб.</span></ruble>
                                    </div>
                                </div>
                                <div class="sidebar__block-inner__body">
                                    <div class="sidebar__block-inner__list">
                                        <div class="sidebar__block-inner__list-row">
                                            <span>Сумма корзины + Доставка</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar__block">
                            <div class="sidebar__block-title">Подарочная карта</div>
                            <div class="sidebar__block-body">
                                <div class="gift-card">
                                    <div class="gift-card__col1">
                                        <label>Номер карты</label>
                                        <input type="text" maxlength="19" class="cc-number-input"
                                            placeholder="**** **** **** ****">
                                    </div>
                                    <div class="gift-card__col2">
                                        <label>Пин-код</label>
                                        <input type="text" maxlength="4" class="cc-cvc-input" placeholder="****">
                                    </div>
                                    <div class="gift-card__col3">
                                        <button class="btn btn-small" disabled>применить</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar__block">
                            <div class="sidebar__block-title">Подарочная карта</div>
                            <div class="sidebar__block-body">
                                <div class="gift-card">
                                    <div class="gift-card__col1">
                                        <label>Номер карты</label>
                                        <input type="text" maxlength="19" class="cc-number-input"
                                            placeholder="**** **** **** ****">
                                    </div>
                                    <div class="gift-card__col2">
                                        <label>Пин-код</label>
                                        <input type="text" maxlength="4" class="cc-cvc-input" placeholder="****">
                                    </div>
                                    <div class="gift-card__col3">
                                        <button class="btn btn-small">применить</button>
                                    </div>
                                </div>
                                <div class="err-message">Ошибка применения</div>
                            </div>
                        </div>
                        <div class="sidebar__block">
                            <div class="sidebar__block-title">Подарочная карта</div>
                            <div class="sidebar__block-body">
                                <div class="ok-block">
                                    <div class="ok-ico"></div>
                                    <span>Успешно применена</span>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar__block">
                            <div class="sidebar__block-title">Подарочная карта</div>
                            <div class="sidebar__block-body">
                                <div class="err-block">
                                    <div class="err-ico"></div>
                                    <span>Подарочная карта не найдена</span>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar__block">
                            <div class="sidebar__block-title">Подарочная карта
                                <a class="add-gift-card" href="#">+</a>
                            </div>
                            <div class="sidebar__block-body">
                                <div class="assept__gift-card">

                                    <div class="assept__gift-card__row">
                                        <div class="assept__gift-card__name">
                                            <label>Карта</label>
                                            2893 2342 2344 1409 <span>(1000<ruble><span class="text">руб.</span></ruble>
                                                )</span></div>
                                        <a class="delete-icon" href="#"></a>
                                    </div>
                                    <div class="assept__gift-card__row">
                                        <div class="assept__gift-card__name">
                                            <label>Карта</label>
                                            2893 2342 2344 1409 <span>(1000<ruble><span class="text">руб.</span></ruble>
                                                )</span></div>
                                        <a class="delete-icon" href="#"></a>
                                    </div>
                                    <div class="assept__gift-card__row">
                                        <div class="assept__gift-card__name">
                                            <label>Карта</label>
                                            2893 2342 2344 1409 <span>(1000<ruble><span class="text">руб.</span></ruble>
                                                )</span></div>
                                        <a class="delete-icon" href="#"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="checkout-sidebar__finalprice">
                            <div class="finalprice__row">
                                <div class="finalprice-title">Итого к оплате</div>
                                <div class="finalprice-price">44 999<ruble><span class="text">руб.</span>
                                    </ruble>
                                </div>
                                <p>в сумму входит товары, скидка, бонусы подарочная карта</p>
                            </div>
                            <input class="btn-finalprice" type="submit" value="оформить заказ">
                            <p class="checkout-rules">Нажимая кнопку «Оформить заказ», я принимаю условия <a
                                    href="#">«Публичной оферты»</a> и даю своё согласие на обработку своих персональных
                                данных в соответствии с соглашением <a href="#">«Об обработке персональных данных»</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mobile-fixed">
                <div class="mobile-fixed__itog">
                    Итого к оплате
                    <div class="finalprice-price">44 999<ruble><span class="text">руб.</span></ruble>
                    </div>
                </div>
                <input type="submit" value="оформить заказ">
            </div>
        </div>
    </div>

   

    <?php
require_once("modal_pickuppoints.php");
require_once("footer.php");
require_once('foot.php'); ?>

<script src="js/checkout/checkout-products.js"></script>
<script src="js/checkout/checkout-sidear.js"></script>