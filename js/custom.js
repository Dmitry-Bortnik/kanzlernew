function theRotator() {

    let itemImage = $('.image-box__slider .image-box__item');
    // Устанавливаем прозрачность всех картинок в 0
    itemImage.css({opacity: 0.0});

    // Берем первую картинку и показываем ее (по пути включаем полную видимость)
    itemImage.eq(0).css({opacity: 1.0});

    // Вызываем функцию rotate для запуска слайдшоу, 3000 = смена картинок происходит раз в 3 секунд
    setInterval('rotate()',3000);
}

function rotate() {
    let itemShowed = $('.image-box__slider .image-box__item.show');
    let itemFirst = $('.image-box__slider .image-box__item').eq(0);

    // Берем первую картинку
    var current = (itemShowed?  itemShowed : itemFirst);

    // Берем следующую картинку, когда дойдем до последней начинаем с начала
    var next = ((current.next().length) ? ((current.next().hasClass('show')) ? itemFirst :current.next()) : itemFirst);

    // Подключаем эффект растворения/затухания для показа картинок, css-класс show имеет больший z-index
    next.css({opacity: 0.0})
        .addClass('show')
        .animate({opacity: 1.0}, 1000);

    // Прячем текущую картинку
    current.animate({opacity: 0.0}, 1000).removeClass('show');
}

$(document).ready(function() {
    // Запускаем слайдшоу
    theRotator();
});


let modalBtnClose = ".dr-modal__close";
let activeClass = "is-active";
let activeClassForBody = "dr-modal-open"

/* открытие модалки по нажатию на кнопку */
$(".dr-btn, .checkout-data__open-modal").on('click', function (e) {
    e.preventDefault();
    drModalShow($(this));
});

/* закрытие модалки по нажатию на кнопку */
$(modalBtnClose).on('click', function () {
    drModalHide($(this));
});

function drModalHide(context) {
    $(context).closest('.dr-modal').removeClass(activeClass);
    $('body').removeClass(activeClassForBody);
}

function drModalShow(currentTarget, overlayStatus = true){
    let btnModalId = currentTarget.data('modal');
    let modal = `.dr-modal[id="${btnModalId}"]`;

    if (btnModalId) {
        $('body').addClass(activeClassForBody);
        $(modal).addClass(activeClass);
    }

    $(modal).find('.dr-modal__overlay').eq(0).css("opacity", overlayStatus ? "1" : "0" );
}

/* кастомный select */
$(document).ready(function () {
    $(function () {
        $(document).on('click.simple-select', '.simple-select .simple-select-main', function (e) {
            let $dropdown = $(this).closest('.simple-select');

            $('.simple-select').not($dropdown).removeClass('is-active');
            $dropdown.toggleClass('is-active');
            if (e.originalEvent) {$dropdown.find('.focus').removeClass('focus'); return;}
            if ($dropdown.hasClass('is-active')) {
                $dropdown.find('.focus').removeClass('focus');
                if ($dropdown.find('.simple-select-item.is-active').length) {
                    $dropdown.find('.is-active').addClass('focus');
                } else {
                    $dropdown.find('.simple-select-item').first().addClass('focus');
                }
            } else {
                $dropdown.focus();
            }
        });
        $(document).on('click.simple-select', '.simple-select .simple-select-item:not(.is-active)', function (e) {
            let val = $(this).data('value');
            let select = $(this).closest('.simple-select');
            let text = $(this).html();

            select.removeClass('is-active');
            select.find('.simple-select-item').removeClass('is-active');
            select.find('.simple-select-selected').html(text);
            select.find('input').val(val).change();
            $(this).addClass('is-active').blur();//blur для закрытия списка, из-за стилей, которые позволяют открыть список при фокусе на эл. списка
        });
        $(document).on('click', function (e) {
            if (!$(e.target).closest('.simple-select').length) {
                $('.simple-select').removeClass('is-active');
            }
        });
        $(document).on('keydown.simple-select', '.simple-select', function(event) {
            let $dropdown = $(this);
            let $toggle = $dropdown.find('.simple-select-main');
            let $focused_option = $($dropdown.find('.focus') || $dropdown.find('.simple-select-item.is-active'));
            $focused_option.length === 0 ? $focused_option = $dropdown.find('.simple-select-item').first() : '';
            if (event.keyCode === 32 || event.keyCode === 13) {// Space or Enter
                if ($dropdown.hasClass('is-active')) {
                    $focused_option.trigger('click');
                } else {
                    $toggle.trigger('click');
                }
                return false;
            } else if (event.keyCode === 40) {// Down
                if (!$dropdown.hasClass('is-active')) {
                    $toggle.trigger('click');
                } else {
                    let $next = $focused_option.nextAll('.simple-select-item:not(.disabled)').first();
                    if ($next.length > 0) {
                        $dropdown.find('.focus').removeClass('focus');
                        $next.addClass('focus');
                    }
                }
                return false;
            } else if (event.keyCode === 38) {// Up
                if (!$dropdown.hasClass('is-active')) {
                    $toggle.trigger('click');
                } else {
                    var $prev = $focused_option.prevAll('.simple-select-item:not(.disabled)').first();
                    if ($prev.length > 0) {
                        $dropdown.find('.focus').removeClass('focus');
                        $prev.addClass('focus');
                    }
                }
                return false;
            } else if (event.keyCode === 27) {// Esc
                if ($dropdown.hasClass('is-active')) {
                    $toggle.trigger('click');
                }
            } else if (event.keyCode === 9) {// Tab
                if ($dropdown.hasClass('is-active')) {
                    return false;
                }
            }
        });
    });
});
/* кастомный select */

/* всплытие карты в модалке */
var mapWrapper = $('.dr-map-select');
var mapWrapperNext = mapWrapper.next();
$(window).on('load resize', function () {
    let mapWrapperHeight = mapWrapper.height();
    mapWrapperNext.css('margin-top', `${mapWrapperHeight * -1}px`);
});
$('#dr-show-map').on('click', function () {
    if (mapWrapper) {
        mapWrapper.toggleClass('is-active');
    }
});
/* всплытие карты в модалке */

$(document).ready(function () {
    $("[data-toggle='tab']").on('click', function (e) {
        e.preventDefault();
        showHideTabs($(this));
        showHideTabsContent($(this));
    });
});


function showHideTabs(tab) {
    var $navTabs = tab.closest('.dr-nav-tabs'),
        $navTabsLi = $navTabs.find('li'),
        $targetLi = tab.closest('li');

    if (!$targetLi.hasClass('active')) {
        $navTabsLi.each(function () {
            $(this).removeClass('active');
        });
        $targetLi.addClass('active');
    }
}
function showHideTabsContent(tab) {
    var targetTabPane = $(`.tab-pane[id='${tab.attr('href').replace(/#/, '')}']`);
    targetTabPane
        .closest('.tab-content')
        .find('.tab-pane').each(function () {
            $(this).removeClass('active')
        });
    targetTabPane.addClass('active');
}

$(document).ready(function () {
    $(".toggle-content-point").on('click', function (e) {
        e.preventDefault();
        var pointItem = $(this)
            .closest('.point-shop__item');

        /* меняем название кнопки */
        let btnTextDefault = "";
        btnTextDefault = $(this).find('.toggle-content-point__text').text();
        $(this).find('.toggle-content-point__text').text($(this).data('btn-text-alternate'));
        $(this).data('btn-text-alternate', btnTextDefault);

        pointItem.toggleClass('active');
        pointItem
            .find('.point-shop__item-body')
            .slideToggle(300);

    });
});

// $(document).ready(function () {
//     var $target = $('.point-shop__item');
//     var hold = 300;
//
//     $.each($target,function(i,t){
//         var $this = $(t);
//         setTimeout(function(){ $this.addClass('in-visible') },i*hold);
//     });
// });

// custom radio 
$('.radio-item input[type="radio"]').on('click', function() {

    var $this = $(this);
    $($this).parent().siblings().removeClass('active');
    $($this).parent().addClass('active');

});


// custom checkbox
$('[type="checkbox"]').on('click', function() {
    var $this = $(this);
    $($this).closest('label').toggleClass('active');

});


// mask inputs
$('input[name=data-b]').mask('99 . 99 . 9999');
$('input[name=phone]').mask('+7 (999) 999-99-99');