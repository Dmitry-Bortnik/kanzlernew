<div class="dr-modal dr-modal-xl dr-modal__default dr-modal_new" id="modal-pickuppoint">

    <div class="dr-modal-wrapper">
        <div class="dr-modal__content bg-light">
            <div class="dr-modal__header">
                <div class="dr-modal__title">
                    <p class="dr-h3 ff-secondary">Список магазинов / пунктов для самовывоза</p>
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

                    <div class="dr-operation-controls dr-operation-controls_flex">
                        <div class="dr-operation-controls__item">
                            <ul class="nav nav-tabs dr-nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#map-point">Карта</a></li>
                                <li><a data-toggle="tab" href="#list-point">Список</a></li>
                            </ul>
                        </div>
                        <div class="dr-operation-controls__item">
                            <div class="dr-form-group">
                                <p class="dr-form-label dr-form-label_new dr-text__small">Город</p>
                                <div class="dr-form-control">
                                    <div class="simple-select simple-select_new">
                                        <div class="simple-select-main" tabindex="0" role="combobox" aria-expanded="false">
                                            <input hidden required type="text" name="sort-view" value="1" data-default-value="1">
                                            <p class="simple-select-selected" data-placeholder="Москва">
                                                <button type="button" data-id="plan-payment" class="tab">Москва</button>
                                            </p>
                                            <div class="simple-select-btn-drop">
                                                <svg width="11" height="6" viewBox="0 0 11 6"  xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5.35139 5.64556L1.05168 1.34571C0.778022 1.07219 0.778022 0.628717 1.05168 0.355327C1.32509 0.0819156 1.76854 0.0819156 2.04193 0.355327L5.84652 4.16003L9.65098 0.355438C9.9245 0.0820266 10.3679 0.0820266 10.6413 0.355438C10.9148 0.62885 10.9148 1.0723 10.6413 1.34582L6.34153 5.64567C6.20476 5.78238 6.02569 5.85065 5.84654 5.85065C5.6673 5.85065 5.4881 5.78224 5.35139 5.64556Z" fill="inherit"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="simple-select-drop">
                                            <div class="simple-select-drop-inner">
                                                <ul class="simple-select-list" role="listbox">
                                                    <li class="simple-select-item is-active" data-value="1" role="option">
                                                        <button type="button" data-id="point1" class="tab">Москва</button>
                                                    </li>
                                                    <li class="simple-select-item" data-value="2" role="option">
                                                        <button type="button" data-id="point2" class="tab">Москва2</button>
                                                    </li>
                                                    <li class="simple-select-item" data-value="3" role="option">
                                                        <button type="button" data-id="poin3" class="tab">Москва3</button>
                                                    </li>
                                                    <li class="simple-select-item" data-value="3" role="option">
                                                        <button type="button" data-id="poin3" class="tab">Москва4</button>
                                                    </li>
                                                    <li class="simple-select-item" data-value="3" role="option">
                                                        <button type="button" data-id="poin3" class="tab">Москва5</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dr-form-group">
                                <p class="dr-form-label dr-form-label_new dr-text__small">Выберите метро</p>
                                <div class="dr-form-control">
                                    <div class="simple-select simple-select_new">
                                        <div class="simple-select-main" tabindex="0" role="combobox" aria-expanded="false">
                                            <input hidden required type="text" name="sort-view" value="1" data-default-value="1">
                                            <p class="simple-select-selected" data-placeholder="Москва">
                                                <button type="button" data-id="plan-payment" class="tab">Метро1</button>
                                            </p>
                                            <div class="simple-select-btn-drop">
                                                <svg width="11" height="6" viewBox="0 0 11 6"  xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5.35139 5.64556L1.05168 1.34571C0.778022 1.07219 0.778022 0.628717 1.05168 0.355327C1.32509 0.0819156 1.76854 0.0819156 2.04193 0.355327L5.84652 4.16003L9.65098 0.355438C9.9245 0.0820266 10.3679 0.0820266 10.6413 0.355438C10.9148 0.62885 10.9148 1.0723 10.6413 1.34582L6.34153 5.64567C6.20476 5.78238 6.02569 5.85065 5.84654 5.85065C5.6673 5.85065 5.4881 5.78224 5.35139 5.64556Z" fill="inherit"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="simple-select-drop">
                                            <div class="simple-select-drop-inner">
                                                <ul class="simple-select-list" role="listbox">
                                                    <li class="simple-select-item is-active" data-value="1" role="option">
                                                        <button type="button" data-id="point1" class="tab">Метро1</button>
                                                    </li>
                                                    <li class="simple-select-item" data-value="2" role="option">
                                                        <button type="button" data-id="point2" class="tab">Метро2</button>
                                                    </li>
                                                    <li class="simple-select-item" data-value="3" role="option">
                                                        <button type="button" data-id="poin3" class="tab">Метро3</button>
                                                    </li>
                                                    <li class="simple-select-item" data-value="3" role="option">
                                                        <button type="button" data-id="poin3" class="tab">Метро4</button>
                                                    </li>
                                                    <li class="simple-select-item" data-value="3" role="option">
                                                        <button type="button" data-id="poin3" class="tab">Метро5</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="dr-tab-content tab-content">
                        <div id="map-point" class="tab-pane active">
                            <div class="dr-map-select is-active">

                                <div class="point-shop__item point-shop__item_selected">
                                    <div class="point-shop__item-header">
                                        <div class="point-shop__item-title">
                                            <p class="point-shop__item-name">ТРК “Город” Лефортово</p>
                                            <p class="point-shop__item-delivery">Доставка: 500₽</p>
                                        </div>
                                        <button class="point-shop__item_selected_close">
                                            <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M18.011 6.42627L6.01099 18.4263" stroke="inherit" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M6.01099 6.42627L18.011 18.4263" stroke="inherit" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="point-shop__item-body">
                                        <div class="point-shop__options">
                                            <p class="point-shop__option">
                                                <svg class="dr-icon">
                                                    <use xlink:href="image/dr-sprite.svg#point"></use>
                                                </svg>
                                                <span>шоссе Энтузиастов, д.12, корп.2, 1 этаж</span>
                                            </p>
                                            <p class="point-shop__option">
                                                <svg class="dr-icon">
                                                    <use xlink:href="image/dr-sprite.svg#gift"></use>
                                                </svg>
                                                <span>срок доставки до 3 дней</span>
                                            </p>
                                            <p class="point-shop__option">
                                                <svg class="dr-icon">
                                                    <use xlink:href="image/dr-sprite.svg#call"></use>
                                                </svg>
                                                <span>8 800 555 3535</span>
                                            </p>
                                            <p class="point-shop__option">
                                                <svg class="dr-icon">
                                                    <use xlink:href="image/dr-sprite.svg#time"></use>
                                                </svg>
                                                <span>пн - пт, 10:00 - 20:00</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="point-shop__item-footer">
                                        <div class="dr-form-group__flex justify-content-center">
                                            <button class="dr-btn dr-btn__small dr-btn-inline dr-btn-brown__light">Выбрать</button>
                                        </div>
                                    </div>
                                </div>

                                <!-- внутри класса dr-map-select расположить карту -->
                                <div class="select_shops_map" id="map">
                                    <!-- YANDEX MAP-->
                                    <div id="ymap" class="contacts-map"></div>
                                    <!-- /YANDEX MAP-->
                                </div>
                            </div>
                        </div>
                        <div id="list-point" class="tab-pane ">
                            <div class="point-shop__list">
                                <?php for($i = 0; $i < 5; $i++) :?>
                                <div class="point-shop__item">
                                    <div class="point-shop__item-header">
                                        <div class="point-shop__item-title">
                                            <p class="point-shop__item-name">ТРК “Город” Лефортово</p>
                                            <p class="point-shop__item-delivery">Доставка: 500₽</p>
                                        </div>
                                        <p class="point-shop__option">
                                            <svg class="dr-icon">
                                                <use xlink:href="image/dr-sprite.svg#point"></use>
                                            </svg>
                                            <span>шоссе Энтузиастов, д.12, корп.2, 1 этаж</span>
                                        </p>
                                    </div>
                                    <div class="point-shop__item-body">
                                        <div class="point-shop__options">
                                            <p class="point-shop__option">
                                                <svg class="dr-icon">
                                                    <use xlink:href="image/dr-sprite.svg#gift"></use>
                                                </svg>
                                                <span>срок доставки до 3 дней</span>
                                            </p>
                                            <p class="point-shop__option">
                                                <svg class="dr-icon">
                                                    <use xlink:href="image/dr-sprite.svg#call"></use>
                                                </svg>
                                                <span>8 800 555 3535</span>
                                            </p>
                                            <p class="point-shop__option">
                                                <svg class="dr-icon">
                                                    <use xlink:href="image/dr-sprite.svg#time"></use>
                                                </svg>
                                                <span>пн - пт, 10:00 - 20:00</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="point-shop__item-footer">
                                        <div class="dr-form-group__flex">
                                            <button class="dr-btn dr-btn__small dr-btn-inline dr-btn-gray__superlight dr-btn_abs_icon toggle-content-point" data-btn-text-alternate="Свернуть">
                                                <span class="toggle-content-point__text">Развернуть</span>
                                                <svg class="dr-icon dr-icon_angle ml-10">
                                                    <use xlink:href="image/dr-sprite.svg#angle_top"></use>
                                                </svg>
                                            </button>
                                            <button class="dr-btn dr-btn__small dr-btn-inline dr-btn-brown__light">Выбрать</button>
                                        </div>
                                    </div>
                                </div>
                                <?php endfor; ?>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
            <div class="dr-modal__footer">
                <div class="dr-btn-wrapper justify-content-center dr-visible-sm  dr-btn__close-repeat">
                    <button class="dr-btn dr-btn-inline bg-brown__light"
                            onclick="drModalHide(this)">
                        Закрыть
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="dr-modal__overlay"></div>

</div>
