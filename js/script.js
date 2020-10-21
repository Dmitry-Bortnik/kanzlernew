
var cities, cities_lowercase, popular_cities;
var auto_city = '';

$.get('/ajax/cities/city_list.json', false, function(data) {
   cities = data;
});

$.get('/ajax/cities/city_list_lower.json', false, function(data) {
   cities_lowercase = data;
});

$.get('/ajax/cities/popular_cities.json', false, function(data) {
   popular_cities = data;
});


$(document).ready(function() {
	delete $.mask.definitions['9'];
	$.mask.definitions['d'] = '[0-9]';

	$('body').on('click', '.hidden-code', function(){
		$(this).addClass('active');
	});

	$('.popular-cities').on('click', 'span',function(){
		var popular_wrap = $('.popular-cities');
		var cities_head = $('.cities-filter .cities-head');

		$('.check-city-inp').val($(this).text());
		cityCheck($(this).text());

		//обновляем блок популярные города
		cities_head.text('Популярные города:');
		popular_wrap.empty();
		$.each(popular_cities, function(index, el) {
			popular_wrap.append('<span>'+el+'</span>');
		});
	});

	$('body').on('click vclick', '.mob-action-btn', function(){
		var target = $(this).attr('data-mob-btn');
		$('[data-mob-target="'+target+'"]').toggleClass('active');
		$('.mob-popup-wrap').addClass('active');
		$('.mob-popup:not([data-mob-target="'+target+'"])').removeClass('active');
		$('html, body').addClass('ovh-fix');
	});

	$('body').on('click vclick touchend', '.mob-popup-close', function(e){
		e.preventDefault();
		e.stopPropagation();
		$('.mob-popup-wrap').removeClass('active');
		$(this).closest('.mob-popup').removeClass('active');
		$('html, body').removeClass('ovh-fix');
	});

	$('body').on('click vclick', '.mob-popup-wrap', function(){
		$(this).removeClass('active');
		$('.mob-popup').removeClass('active');
		$('html, body').removeClass('ovh-fix');
	});

	$('body').on('click vclick', '.mob-section-menu-btn', function(){
		$('.mob-section-menu').toggleClass('active');
	});

	$('body').on('click vclick touchend', '.mob-section-menu-close', function(e){
		console.log('close section');
		e.preventDefault();
		e.stopPropagation();
		$('.mob-section-menu').removeClass('active');
	});

	$('body').on('keyup paste', '.check-city-inp',function(){
		var popular_wrap = $('.popular-cities');
		var cities_head = $('.cities-filter .cities-head');
		var val = $(this).val();

		popular_wrap.empty();

		if(val.length == 0){
			cities_head.text('Популярные города:');

			$.each(popular_cities, function(index, el) {
				popular_wrap.append('<span>'+el+'</span>');
			});
		} else {
			var new_cities = [];
			var counter = 0;

			cities_head.text('Города на "'+ val +'":');

			$.each(cities, function(index, el) {
				if(el.toLowerCase().indexOf(val.toLowerCase()) == 0 && counter <= 15){
					new_cities.push('<span>'+ el +'</span>');
					counter++;
				}
			});

			$.each(new_cities, function(index, el) {
				popular_wrap.append(el);
			});
		}

		cityCheck($(this).val());
	});


	//клик на "выбрать другой"
	$('.select-city-pop').click(function(event) {
		$('.city-check').removeClass('active');
	});

	//клик на "да верно"
	$('.confirm-city').click(function(event){
		var formData = $('.auto_city_form').serialize();
		var city = $('.auto-city-name').val();

		$.ajax({
			url: '/bitrix/templates/kanzler-template/components/bitrix/news.list/city_menu/set_city.php',
			type: 'POST',
			data: formData,
		}).done(function(data) {
			$('.select_shop_top_button span').text(city);
			$('.new-select_shop_top_button span').text(city);
			$('.city-check').removeClass('active');

			if(window.location.pathname == '/personal/order/make/' || window.location.pathname =='/shops/'){
				location.reload();
			}
		})
	});


	//определить автоматически
	$('.auto-set-city').click(function(event) {

		$.get("/ajax/auto_city.php", function( data ) {

			auto_city = data;

			if(auto_city=='undefined' || auto_city=='' || auto_city == false){
				auto_city = 'Москва'
			}

			$('.check-city-inp').val(auto_city);
			cityCheck(auto_city);
			cityId(auto_city);

			$('.remember-choise').trigger('click');
		});
	});

	//запомнить выбор
	$('.remember-choise').click(function(event) {
		var formData = $('.popup-choose-city').serialize();
		var city = $('.check-city-inp').val();

		$.ajax({
			url: '/bitrix/templates/kanzler-template/components/bitrix/news.list/city_menu/set_city.php',
			type: 'POST',
			data: formData,
		}).done(function(data) {
			//console.log(data);
			$('.select_shop_top_button span').text(city);
			$('.new-select_shop_top_button span').text(city);
			$('.mob-your-city span').text(city);
			closePopup('p-another-city');

			if(window.location.pathname == '/personal/order/make/' || window.location.pathname =='/shops/'){
				location.reload();
			}
		});
	});

	$('.select_shop_top_button').click(function(event) {
		// $('.close-button').trigger('click');
	});


	$('.check-bonus-premium').submit(function(event) {
		event.preventDefault();

		var formData = $(this).serialize();
		$.ajax({
			url: '/ajax/bonuspremium.php',
			type: 'POST',
			data: formData,
		}).done(function(data) {
			console.log(data);
			$('#result').html(data);
		})
	});

	$('.ind-poshiv-form').submit(function(event) {
		event.preventDefault();

		var formData = $(this).serialize();
		$.ajax({
			url: '/ajax/individualniyposhiv.php',
			type: 'POST',
			data: formData,
		}).done(function(data) {
			console.log(data);
			$('.ind-poshiv-form .result').html(data);
		})
	});

	$('body').on('keyup paste', '.main-search-wrap .search-inp', delay(function(e) {
		e.preventDefault();
		var form = $('.main-search-wrap');

		if($(this).val().length > 2){
			$.ajax({
				url: '/ajax/search.php',
				type: 'POST',
				data: form.serialize(),
			}).done(function(data) {
				data = $.parseJSON(data);
				//console.log('search result', data);

				if(data.length > 0){
					var val = $('.main-search-wrap .search-inp').val();

					$('.q-search-wrap').remove();
					$('.main-search-wrap').append('<div class="q-search-wrap"><a class="q-search-btn" href="/catalog/?q='+ val +'">Все результаты поиска</a></div>');

					var wrap = $('.q-search-wrap');

					wrap.append('<div class="q-search-list"></div>');

					var list = $('.q-search-list');

					$.each(data, function(index, item) {
						var item = '<a class="item" href="'+ item.URL +'">'+
							'<div class="pic" style="background-image: url('+ item.PHOTO +');"></div>'+
							'<div class="info">'+
								'<div class="title">'+ item.NAME +'</div>'+
								'<div class="num">'+ item.ARTNUMBER +'</div>'+
								'<div class="price">Цена: '+ item.PRICE +' р. </div>'+
							'</div>'+
						'</a>';

						list.append(item);
					});

					wrap.prepend(list);
				}
			}).fail(function() {
				// console.log("error");
			});
		} else {
			$('.q-search-wrap').remove();
		}
	}, 500));

	$('body').click(function(e){
		if(!$(e.target).closest('.main-search-wrap').length){
			$('.q-search-wrap').addClass('hidden-search');
		}

		//закрытие списка телефонов стран по клику за его пределы
		if(!$(e.target).closest('.phone-mask-list').length){
			$('.phone-mask-list').removeClass('active');
		}
	});

	$('.main-search-wrap .search-inp').focus(function(event) {
		$('.q-search-wrap').removeClass('hidden-search');
	});

	$('.mob-search .mob-search-btn').click(function() {
		$('.mob-phone').removeClass('active');
		$(this).closest('.mob-search').toggleClass('active');
	});

	$('.mob-phone .mob-phone-btn').click(function() {
		$('.mob-search').removeClass('active');
		$(this).closest('.mob-phone').toggleClass('active');
	});

	$('.mob-close').click(function() {
		$(this).parent().parent().removeClass('active');
	});

	//скролл к верху страницы
	$('.scroll-top').click(function() {
		$('html, body').animate({ scrollTop:0 }, 500);
	});

	$('.quick-order').submit(function(e) {
		e.preventDefault();

		var form = $(this);

		$.ajax({
			url: '/ajax/quickorder.php',
			type: 'POST',
			dataType: 'json',
			data: form.serialize(),
		}).done(function(data) {
			closePopup('p-one-click');
			openPopup('p-one-click-ty');

			$('.oneclick-text-result').text(data.text);
		});
	});

	$('body').on('click', '.one-click-buy', function(e) {
		var id = $(this).attr('data-item-id');
		var art = $(this).attr('data-art');

		//если на детальной странице
		if($(this).hasClass('one-click-detail')){
			var item = $(this).closest('.card_main_info');
			var size = item.find('.custom-value').text();
			var name = item.find('.card_name').text();
		} else {
		//если в списке
			var item = $(this).closest('.good_item');
			var size = item.find('.bx_size .bx_active').attr('title');
			var name = item.find('.good_name_wrap').text();
		}

		$('.qo-item-id').val(id);
		$('.qo-item-name').text(name);
		$('.qo-item-art').text(art);
		$('.qo-item-size').text(size);
		$('.qo-item-size-inp').val(size);
	});
});

function cityId(city){
	$.each(cities_lowercase, function(index, el){
		if(el == city.toLowerCase()) {
			$('.city-hid-id').val(index);
			$('.auto-city-id').val(index);
		}
	});
}

function cityCheck(city){
	if($.inArray(city.toLowerCase(), Object.values(cities_lowercase)) != -1){
		$('.remember-choise').removeClass('disabled-btn');
		cityId(city);
	} else {
		$('.remember-choise').addClass('disabled-btn');
	}
}

function delay(callback, ms) {
	var timer = 0;
	return function() {
		var context = this, args = arguments;
		clearTimeout(timer);
		timer = setTimeout(function () {
			callback.apply(context, args);
		}, ms || 0);
	};
}

function toggle(el) {
	el.style.display = (el.style.display == 'none') ? '' : 'none'
}

function showHint(counter){
		var tooltipWrapp = counter;
		//tooltipWrapp.click(function(e){e.stopPropagation();})
		if(tooltipWrapp.is(".active")){

		}
		else {
			tooltipWrapp.addClass("active").find(".mytooltip").slideDown(200);
			tooltipWrapp.find(".tooltip_close").click(function (e) {
				e.stopPropagation();
				tooltipWrapp.removeClass("active").find(".mytooltip").slideUp(100);
			});
			/*$(':not(.plus)').click(function () {
			 if(tooltipWrapp.hasClass("active")) {

			 tooltipWrapp.removeClass("active").find(".mytooltip").slideUp(100);
			 }
			 });*/
			setTimeout(function(){tooltipWrapp.removeClass("active").find(".mytooltip").slideUp(100); },5000);
		}
	}

$(document).ready(function () {
	$('body').on("click", "button[name=send_account_info]", function(event) {
		var USER_EMAIL = $(this).closest('form').find('input[name=USER_EMAIL]').val();
		$.ajax({
			url: '/ajax/forgotpassw.php',
			type: 'POST',
			data: {USER_EMAIL:USER_EMAIL},
		}).done(function(data) {

			if(data.length>1){
				console.log(data);
				setTimeout( function (){
					$('.forgot-check-email .message').html(data);
				}, 200);
			}
		})
	});


	$('.load-actions').click(function(event) {
		let section    = $(this).attr('data-section');
		let discount   = $(this).attr('data-discount');
		let collection = $(this).attr('data-col');
		let product    = $(this).attr('data-product');

		$.ajax({
			url: '/ajax/aviable_actions.php',
			data: { section:section,discount:discount, collection:collection, product:product},
		}).done(function(data) {
			$('.popup.p-det-sh').html(data)
		})

	});

	//закрываем селект с размерами в товарах по клику за его пределы
	$('body').click(function(event){
		if(!$(event.target).closest(".select_styles").length){;
			$(".product-item-scu-item-list").removeClass('active');
		}
	});

	//выпадашка нового селекта
	$('.custom-style').on('click', '.custom-value', function(event) {
		$(this).next('ul').toggleClass('active');
	});

	//выбираем новый размер
	$('.custom-style').on('click', 'li', function(event) {
		var val = $(this).text();
		$(this).closest('.custom-style').find('.custom-value').text(val);
		$(this).closest('ul').removeClass('active').find('li').removeClass('active');
		$(this).addClass('active');
		$('.detalis_link.pickup_today').attr('data-size', val.trim());
	});

	//запрещаем отправку пустого запроса в поиск
	$('.main-search-btn').click(function(e) {
		var inp = $(this).closest('form').find('.search-inp');
		if(inp.val().length == 0){
			e.preventDefault();
			inp.focus();
		}
	});

	//запрещаем отправку пустого запроса в поиск на enter
	$('.main-search-form').submit(function(e){
		var inp = $(this).find('.search-inp');
		if(inp.val().length == 0){
			e.preventDefault();
			inp.focus();
		}
	});

	//открываем попап по его номеру/классу
	$('a.pop-link').click(function(e){
		e.preventDefault();
		openPopup($(this).attr('href'));
	});

	//открываем попап по его номеру/классу
	$('div.pop-link, span.pop-link').click(function(e){
		e.preventDefault();
		//if($(this).attr('data-id').length) openPopup($(this).attr('data-id'));
		openPopup($(this).attr('data-id'));
	});

	//закрываем попап по клику за его пределы
	$('body').click(function(e){
		if(!$(e.target).closest('.popup').length && $(e.target).closest('.popup-wrap').length){
			closePopup();
		}
	});

	//закрываем попап по клику на крестик
	$('body').on("click", ".close-popup, .close-popup-btn", function(){
		closePopup();
	});

	$('div.order-sel .act').click(function(e){
		$(this).closest('.order-sel').toggleClass('open');
	});

	$('div.order-sel ul li').click(function(){
		var txt = $(this).text();
		var id = $(this).attr('data-id');
		$(this).closest('div.order-sel').removeClass('open');
		$(this).closest('div.order-sel').find('.act').text(txt);

		var d = new Date();
	    d.setTime(d.getTime() + (1*24*60*60*1000));
	    var expires = "expires="+ d.toUTCString();

	    setCookie('ACTIONS_NAME', txt, 1);
	    setCookie('ACTIONS_ID', id, 1);
	});

	$('body').click(function(e){
		if(!$(e.target).closest('div.order-sel').length){
			$('div.order-sel').removeClass('open');
		}
	});

	$('.use-bday-code').click(function() {
		setCookie('USE_BIRTHDAY_PROMO', '1', 1);
		closePopup('p-bday');
	});

	setTimeout(function(){
		$('.bday-btn.animate-btn').addClass('active');
	}, 2000);

	$('.cart-sh').change(function(event) {
		var text = $(this).next('label').text();
		var id = $(this).attr('id');
		$('.cart-sh-button').text(text);

		var d = new Date();
	    d.setTime(d.getTime() + (1*24*60*60*1000));
	    var expires = "expires="+ d.toUTCString();

	    setCookie('ACTIONS_NAME', text, 1);
	    setCookie('ACTIONS_ID', id, 1);
	});

	$('.close-p-info-actions').click(function(event) {
		closePopup('p-info-actions')
	});

	//клик на выбор акции в списке акций
	$('.p-det-sh .p-chose-btn').click(function(event) {

		var chkd = $('.p-det-sh .rad-btn:checked')

		var text = chkd.next('label').text();
		var id = chkd.attr('id');
		$('.cart-sh-button').text(text);

		var d = new Date();
	    // d.setTime(d.getTime() + (1*24*60*60*1000));
	    d.setTime(d.getTime() + 3600);
	    var expires = "expires="+ d.toUTCString();

	    mark_cart_actions(id);
	    setCookie('ACTIONS_NAME', text, 1);
	    setCookie('ACTIONS_ID', id, 1);

	    closePopup('p-info-actions');
	    closePopup('p-det-sh');
	});

	$('.save-phone-btn').click(function(event) {
		var phone = $(this).closest('.p-body').find('input').val()

		if(phone){
			$.ajax({
				url: '/ajax/update_phone.php',
				type: 'POST',
				dataType: 'json',
				data: {phone: phone},
			}).done(function(data) {
				console.log(data);
				if(data.text){
					$('.save-phone-btn').parent().find('.info-message').html(data.text);
				}else{
					location.reload();
				}
			})
		}else{
			event.preventDefault();
		}
	});

	$('.review-form').submit(function(e) {
		e.preventDefault();
		
		$.ajax({
			url: '/ajax/product/review.php',
			type: 'POST',
			//dataType: 'json',
			data: $(this).serialize(),
		}).done(function(data) {
			console.log('review success', data);

			closePopup('p-user-review');
			openPopup('p-user-review-ty');
		});
	});

	$('body').on('click', '.review-buttons span', function(e) {
		var t = $(this);
		var sib = t.hasClass('r-like') ? t.next('.r-dislike') : t.prev('.r-like');
		var id = t.closest('.review-buttons').attr('data-id');
		var type = t.attr('data-type');
		var data = { id: id };

		console.log(getCookie('review_'+id), getCookie('review_'+id) == type);

		//первый клик
		if(!getCookie('review_'+id) || getCookie('review_'+id) == null){
			console.log('first click!');
			setCookie('review_'+id, type, 1000);
			t.text(parseInt(t.text())+1);

			type == 'like' ? data.like = 'plus' : data.dislike = 'plus';
			console.log(data);
		//меняем балл
		} else if(getCookie('review_'+id) != null && getCookie('review_'+id) != type) {
			console.log('cookie here, new action');
			setCookie('review_'+id, type, 1000);
			t.text(parseInt(t.text())+1);
			if(sib.text() > 0) sib.text(parseInt(sib.text())-1);

			if(type == 'like'){
				data.like = 'plus';
				data.dislike = 'minus';
			} else {
				data.like = 'minus';
				data.dislike = 'plus';
			}
			console.log(data);
		//иначе ничего не делаем
		} else {
			return false;
		}
		
		$.ajax({
			url: '/ajax/product/like.php',
			type: 'POST',
			//dataType: 'json',
			data: data,
		}).done(function(data) {
			console.log('review success', data);

			
		});
	});

	$('.card_form .select_label_hint').click(function(){$('.corn_size').trigger('click');});

    // $(".telinp").mask("+7 (ddd) ddd-dddd");
    $(".bonus-premium-mask").mask("7dddddddddd");

	// BX.addCustomEvent('onAjaxSuccess', function(){
	//    $(".telinp").mask("+7 (ddd) ddd-dddd");
	// });


	$('.like_good_ico').each(function(i){
		if($(this).find('.exists').length)
		    $(this).addClass('active');
		else
		    $(this).removeClass('active');
		}
	);

	$(document).foundation();

	$('input, textarea').placeholder();
	$('input[name=phone]').mask('+7 (ddd) ddd-dd-dd');

	$('.play_video').click(function(event){
		event.preventDefault();
		$('.video_item').fadeIn();
		player.playVideo();
	});

	//маска с кодами стран bgn
		if($('.phone-inp').length){
			var mask = $('.phone-inp').attr('data-mask');
			var pholder = $('.phone-inp').attr('data-placeholder');
			$('.phone-mask-list .phone-inp').attr('placeholder', pholder).mask(mask);
		}
		$('body').on('click', '.phone-mask-list .phone-inp-wrap', function(e) {
			if(!$(e.target).is('input')){
				$(this).closest('.phone-mask-list').toggleClass('active');
			}
		});

		$('body').on('click', '.phone-mask-list li', function(e) {
			var code = $(this).attr('data-code');
			var mask = $(this).attr('data-mask');
			var pholder = $(this).attr('data-placeholder');
			var wrap = $('.phone-inp-wrap');

			$('.phone-mask-list').removeClass('active');
			wrap.find('.flag').attr('class', 'flag flag-'+code);
			wrap.find('.phone-inp').attr('placeholder', pholder).val('').mask(mask);
			wrap.find('.selected_type').val(code)
		});
	//маска с кодами стран end

	var formFooterInput = $('.form_footer input[type="email"]');
	formFooterInput.focusin(function(){
		$(this).attr('placeholder', "");
	});

	formFooterInput.focusout(function(){
		$(this).attr('placeholder', "Введите ваш e-mail");
	});

	// ============== main Gallery ================
			var mainGallery = $('.main_gallery');
			/*var navElement = $('.main_gallery_nav li');

			mainGallery.on('beforeChange', function(event, slick, currentSlide){
				if($('.main_gallery_wrap.small').css('display')=='block'){
					navElement = $('.main_gallery_wrap.small .main_gallery_nav li');
				}else if($('.main_gallery_wrap.big').css('display')=='block'){
					navElement = $('.main_gallery_wrap.big .main_gallery_nav li');
				}
				navElement.removeClass('active');
				navElement.eq(currentSlide).addClass('active');
			});

			mainGallery.on('init', function(){
				//navElement.removeClass('active');
				//navElement.eq(navElement.length-1).addClass('active');
			});*/

			mainGallery.slick({
				adaptiveHeight: true,
				autoplay: true,
				autoplaySpeed: 3000,
				speed: 800,
				pauseOnFocus: false,
				pauseOnHover: false,
				dots: true,
				//fade: true
				//cssEase: 'linear'
			});
	// ============== main Gallery END ================
		$('.card_main_info .count_card_plus').click(function(){
		 var countCard = $(this).siblings('.count_card');
 var max = countCard.attr('max'), newVal = parseInt(countCard.val()) + 1;

    if (newVal > max && max > 0) {
      newVal = max;
      showHint($(".count_card_wrap"));
      return false;
    }

		 countCard.val(function() {
			 return +countCard.val() + 1;
		 });
		});
		$('.card_main_info .count_card_minus').click(function(){
		 var countCard = $(this).siblings('.count_card');
		 if (countCard.val() > 1) {
			 countCard.val(function() {
				 return +countCard.val() - 1;
			 });
		 };
		});
		$( ".close-button" ).on( "click", function( event ) {
			var basketId = $(this).attr('data-id');
			console.log(prodItems[basketId]);
			dataLayer.push({
			    "ecommerce": {
			        "remove": {
			            "products": [
			                {
			                    "id": prodItems[basketId].code,
								"name": prodItems[basketId].name,
			                    "quantity": prodItems[basketId].quantity
			                    // "category": "",
			                }
			            ]
			        }
			    }
			});

			$( event.target ).closest( ".cart_item" ).fadeOut(300, function() {
				$(this).remove(); });
		});

		$( ".card_prev_photo" ).on( "click", function() {
			$( ".card_prev_photo" ).removeClass("active");
			$( this ).addClass("active");
			});

	$('.more_goods_list').slick({
		infinite: true,
		slidesToShow: 4,
		//centerMode: true,
		slidesToScroll: 4,
		responsive: [
		{
			breakpoint: 1024,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 3,
				infinite: true,
			}
		},
		{
			breakpoint: 768,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2
			}
		},
		{
			breakpoint: 360,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}
		// You can unslick at a given breakpoint now by adding:
		// settings: "unslick"
		// instead of a settings object
	]
	});

	var top_line_profile_button = document.getElementsByClassName('top_line_profile_button')[0];
	var top_profile_menu = document.getElementsByClassName('top_profile_menu')[0];

	if (top_profile_menu) {
		top_profile_menu.style.display = "none";

		top_line_profile_button.onclick = function (event) {
			event.stopPropagation();
			toggle(top_profile_menu);
		};
	}



	/*Prof*/
	if( document.getElementById('your_prof_id') ) {
		var yourProfButton = document.getElementById('your_prof_id');
		var yourProfList = document.getElementById('your_prof_select');
		yourProfButton.onclick = function(event) {
			event.stopPropagation();
			toggle(yourProfList);
		}
		yourProfList.onclick = function (event) {
			event.stopPropagation();
		};
		var yourProfListBlock = $('#your_prof_list_id');
		yourProfListBlock.bind('jsp-initialised', function () {
			yourProfList.style.opacity = 1;
			yourProfList.style.display = "none";
		});

		yourProfListBlock.jScrollPane();
		fillCareerList();
	};

	$(".career_prof_wrap ul li>a").on("click",function(a) {
		//console.log('!!!');
		$(this).closest('ul').find('.active').removeClass('active');
		$(this).parent().addClass('active');
		if ($(this).closest('ul').hasClass('prof_select') && $(this).text()  == 'Все') {
			$('#your_prof_id').find('.prof_select_selected').text('Выбрать проф. область');
		} else if ($(this).closest('ul').hasClass('city_select') && $(this).text()  == 'Все') {
			$('#your_city_id').find('.prof_select_selected').text('Выбрать город');
		} else {
			$(this).closest('.career_prof_wrap').find('.prof_select_selected').text($(this).text());
		}

		fillCareerList();

		a.preventDefault();
	});

	if ($('input').is('#file')) {
		var file = $('#file');

		file.on('change', function() {
			var filename = file[0].files[0]['name'];
			//console.log(filename);
			$('#filename').text('- '+filename);
		});
	}



	/*Subway*/
	if( document.getElementById('subway_button') ) {
		var subwayButton = document.getElementById('subway_button');
		var subwayList = document.getElementById('subway_wrap_id');
		subwayButton.onclick = function(event) {
			event.stopPropagation();
			toggle(subwayList);
		}
		subwayList.onclick = function (event) {
			event.stopPropagation();
		};
		var subwayListBlock = $('#subway_list_id');
		subwayListBlock.bind('jsp-initialised', function () {
			subwayList.style.opacity = 1;
			subwayList.style.display = "none";
		});

		subwayListBlock.jScrollPane();
		};
		/*CityListOnPage*/

	if( document.getElementById('your_city_id') ) {
		var yourCityButton = document.getElementById('your_city_id');
		var yourCityList = document.getElementById('your_city_select');
		yourCityButton.onclick = function(event) {
			event.stopPropagation();
			toggle(yourCityList);
			//console.log('!!!!');
		}
		yourCityList.onclick = function (event) {
			event.stopPropagation();
		};
		var yourCityListBlock = $('#your_city_list_id');
		yourCityListBlock.bind('jsp-initialised', function () {
			yourCityList.style.opacity = 1;
			yourCityList.style.display = "none";
		});

		if (yourCityListBlock.is(':visible')) {
			yourCityListBlock.jScrollPane();
		}

		$('.detalis_link[data-open="availability_modal"]').click(function() {
			setTimeout(function() {
				yourCityListBlock.jScrollPane();
			},200);
		})

		$(".map_select ul li>a").on("click",function(a) {
			$(this).closest('ul').find('.active').removeClass('active');
			$(this).parent().addClass('active');

			$(this).closest('.map_select').find('.map_select_selected').text($(this).text());
			yourCityList.style.display = 'none';
			a.preventDefault();
		});
		$("body").on("click", "#availability_modal", function(a) {
			//console.log(yourCityList);
			yourCityList.style.display = 'none';
		});
	};

	var collection = $('.submit_select_wrap');
	for( i=0; i<collection.length; i++ ){
		$(collection[i]).jScrollPane();
		$(collection[i]).css('display', 'none');
	};

	$(document).on('click','.block_link_item',function(){
		setTimeout(function(){
		var collection = $('.submit_select_wrap_modal');
		for( i=0; i<collection.length; i++ ){
			$(collection[i]).jScrollPane();
			$(collection[i]).css('display', 'none');
		};
		}, 10);
	});

	$('.submit_settings_wrap').on('click', function(){
		$(this).find(".submit_select_wrap_modal").toggle();
	});

	$('.submit_settings_wrap').on('click', function(){
	//if( $(this).children('.submit_settings').hasClass('.disabled') ) {
			$(this).find(".submit_select_wrap").toggle();
	});

	//};

		/* order_list */
	if( document.getElementById('order_list_wrap') ) {
		var orderListButton = document.getElementById('order_list_wrap');
		var orderList = document.getElementById('order_list_id');
		orderListButton.onclick = function(event) {
			event.stopPropagation();
			toggle(orderList);
		}
		orderList.onclick = function (event) {
			event.stopPropagation();
		};
		var orderListBlock = $('#order_list_id');

		/*orderListBlock.bind('jsp-initialised', function () {
			orderList.style.opacity = 1;
			orderList.style.display = "none";
		});*/


		orderListBlock.jScrollPane();
	};


	/*CityList*/


	var shopTopButtons = document.getElementsByClassName('select_shop_top_button')[0];
	// var cityList = document.getElementsByClassName('city_list_wrap')[0];
	var cityList = document.getElementsByClassName('city_select_wrap')[0];
	shopTopButtons.onclick = function (event) {
		//console.log(this);
		event.stopPropagation();
		toggle(cityList);
	};

	if(cityList){
		cityList.onclick = function (event) {
			event.stopPropagation();
		};
	}
	var scrollPaneBlock = $('.city_list');

	scrollPaneBlock.bind('jsp-initialised', function () {
		cityList.style.opacity = 1;
		cityList.style.display = "none";
	});
	scrollPaneBlock.jScrollPane();

	document.getElementsByTagName('body')[0].onclick = function (e) {
		if(cityList)
			cityList.style.display = 'none';

		if (top_profile_menu) {
			top_profile_menu.style.display = 'none';
		}
		if( subwayList ) {
			subwayList.style.display = 'none';
			yourCityList.style.display = 'none';
		};
		if( yourProfList ) {
			yourProfList.style.display = 'none';
			yourCityList.style.display = 'none';
		};
		if (!$(e.target).closest(".bx_filter_section").length)
    		$('.sort_list').slideUp().prev('.sort_list_button').removeClass('active');
	};
		$('.jspPane').on('click', function () {
			if(cityList)
				cityList.style.display = 'none';
			if (top_profile_menu) {
				top_profile_menu.style.display = 'none';
			}
			if( subwayList ) {
				subwayList.style.display = 'none';
				yourCityList.style.display = 'none';
			};
			if( yourProfList ) {
				yourProfList.style.display = 'none';
				yourCityList.style.display = 'none';
			};
		});

	var selectEl = $('.select_styles');
	if (selectEl.length) {
		selectEl.styler();
	}

	$('.reveal').on('open.zf.reveal', function() {
		setTimeout(function() {
			$('.select_styles').trigger('refresh');
		}, 1)
	})
	$('.reset_form').click(function() {
		$('.select_styles option:selected').each(function(){
		this.selected=false;
		});
		$("#size1").html('');
		$("#size2").html('');
		$("#size3").html('');
		$("#size4").html('');
		setTimeout(function() {
			$('.select_styles').trigger('refresh');
		}, 1)
	})

	$('.jq-selectbox__select-text').css('width', '100%')

	$('.accordion_header').click(function(){
		var thisParent = $(this).parents('.accordion_item');

		if (thisParent.hasClass('active')) {
			thisParent.removeClass('active');
			thisParent.find('.accordion_text').slideUp(300);
		} else {
			$('.accordion_item').removeClass('active');
			$('.accordion_text').slideUp(300);
			thisParent.addClass('active');
			thisParent.find('.accordion_text').slideDown(300);
		}
	});

	$('.like_good_ico').click(function () {
		$(this).toggleClass('active');
		$('.like_good_ico_animate').toggleClass('animate');
	});

	$('.unlike').click(function(){
		$(this).toggleClass('active');
	});





	var openSort = function(e){
		if( !$(this).hasClass('active') ) $('.sort_list').slideUp();
		$(this).next('.sort_list').slideToggle(300);
		$(this).toggleClass('active');
	}

	//$('.sort_list_button').on('click', openSort);

	$('body').on('click', '.sort_list_button', function(e) {
		e.stopPropagation();
		toggleSort($(this));
	});

	var mobileNoHoverState = function() {
		var hoverClass = 'hover',
				$target = $(".like_good_ico"),
				preventMouseover = false;

		function forTouchstart() {
				preventMouseover = true;
		}

		function forMouseover() {
				if (preventMouseover === false) {
						$(this).addClass(hoverClass);
				} else {
						preventMouseover = false;
				}
		}

		function forMouseout() {
				$(this).removeClass(hoverClass);
		}

		function init() {
				$target.on({
						touchstart  : forTouchstart,
						mouseover   : forMouseover,
						mouseout    : forMouseout
				});
		}

		return {
				init: init
		};
}();

function toggleSort(item) {
	var ind = item.closest('.sort_list_wrap').index();

	$('.sort_list_wrap').not(':eq('+ ind +')').find('.sort_list').slideUp(300).prev('.sort_list_button').removeClass('active');
	$('.sort_list_wrap:eq('+ ind +')').find('.sort_list').slideToggle(300).prev('.sort_list_button').toggleClass('active');
}

	if (!("ontouchstart" in document.documentElement)) {
	document.documentElement.className += " no-touch";
	}


	$(window).scroll(function () {
		/*if ($('html, body').scrollTop() > 50 || $(document).scrollTop() > 50) {
			$('.menu_line').addClass('menu_line-mini');
			$('.category_menu').addClass('category_menu-mini');
			$('#header-mini-menu').addClass('header-mini-menu-small');
		} else {
			$('.menu_line').removeClass('menu_line-mini');
			$('.category_menu').removeClass('category_menu-mini');
			$('#header-mini-menu').removeClass('header-mini-menu-small');
		}*/

		scrollTopIcon();
		fixedMenu();
	});

	$('.menu-btn').click(function(){
		$('.mobile-menu-wrap').addClass('active');
	});

	$('.mobile-menu-wrap .shadow-bg, .mobile-menu-wrap .mob-close').click(function(){
		$('.mobile-menu-wrap').removeClass('active');
	});

	$('.mobile-menu .inner-li:not(.fixed-item) .inner-item').click(function(e){
		var li = $(this).closest('li');
		var list = $(this).attr('data-list');
		var ind = $(this).parent().index();

		if($(this).closest('.inner-li').hasClass('fixed-item')) return false; 

		if(li.hasClass('inner-li')){
			if(!li.hasClass('open')){
				e.preventDefault();

				if(list != 0){
					if(list == 2){
						var wrap = $(this).closest('.mob-ul.list-2');
					} else if(list == 1) {
						var wrap = $(this).closest('.mob-ul.list-1');
						if(!$('.mob-ul.list-2 .inner-li > ul').hasClass('fixed-list')){
							$('.mob-ul.list-2 .inner-li').removeClass('open').find('> ul').slideUp(250);
						}
					}

					wrap.find('> .inner-li').not(':eq('+ ind +')').removeClass('open').find('> ul').slideUp(250);
				}

				$(this).parent().toggleClass('open');
				$(this).next('ul').slideToggle(250);
			} else {
				if(!$(e.target).is('a')){
					if(list != 0){
						if(list == 2){
							var wrap = $(this).closest('.mob-ul.list-2');
						} else if(list == 1) {
							var wrap = $(this).closest('.mob-ul.list-1');
							if(!$('.mob-ul.list-2 .inner-li > ul').hasClass('fixed-list')){
								$('.mob-ul.list-2 .inner-li').removeClass('open').find('> ul').slideUp(250);
							}
						}
					}

					$(this).parent().toggleClass('open');
					$(this).next('ul').slideToggle(250);
				}
			}

			//закрываем другие открытые блоки
			$(this).parent('li').siblings('li').removeClass('open').find('> .mob-ul').slideUp(250);
		}
	});

	$('.mob-city .pop-link, .mob-links .pop-link').click(function(){
		$('.mobile-menu-wrap').removeClass('active');
		openPopup($(this).attr('data-href'));
	});

if ( $(window).width() < 769) {
	$('#contacts').css({height: 400});
	};
		$('.club_slider').slick({
		infinite: false,
		slidesToShow: 1,
		fade: true,
		speed: 700,
		cssEase: 'linear',
		dots: true,
		swipe: false,
		centerMode: true,
		slidesToScroll: 1,
		prevArrow: false,
		nextArrow: false,
		customPaging: function(slider, i) {
		// this example would render "tabs" with titles
		return '<div class="slider_nav_item">' + $(slider.$slides[i]).find('.club_slider_head').text() + '</div>';
	},
	});
	$('.slick-dots').addClass('club_slider_nav');
		$('.slider_nav_item').on("click", function() {
		$('.slider_nav_item').removeClass("active");
		$(this).addClass("active");
		});
	/*range*/
	if ( $( "#slider-range" ).length!=0 ) {
		$( function() {
		$( "#slider-range" ).slider({
			range: true,
			min: 0,
			max: 16500,
			values: [ 0, 16500 ],
			slide: function( event, ui ) {
				$( "#price1" ).val( ui.values[ 0 ] );
				$( "#price2" ).val( ui.values[ 1 ] );
			}
		});

/*
		$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
			" - $" + $( "#slider-range" ).slider( "values", 1 ) );
*/
	} );
	};

	/*$('.good_name').each(function() {
		if ($(this).find('.good_name_wrap').height() > $(this).height()) {
			$(this).addClass('ellipsis');
		} else {
			$(this).removeClass('ellipsis');
		}
	})
	$(window).resize(function () {
		$('.good_name').each(function() {
			if ($(this).find('.good_name_wrap').height() > $(this).height()) {
				$(this).addClass('ellipsis');
			} else {
				$(this).removeClass('ellipsis');
			}
		})

		//$('.px-info').text($(window).width());
	});*/

	$('.fias-slider').slick({
		adaptiveHeight: true,
		autoplay: true,
		autoplaySpeed: 3000,
		speed: 800,
		pauseOnFocus: false,
		pauseOnHover: false,
		dots: false,
		//fade: true
		//cssEase: 'linear'
	});

	$('.card-photos-swipe').slick({
		infinite: true,
		adaptiveHeight: true,
		autoplay: true,
		//autoplaySpeed: 3000,
		speed: 800,
		//pauseOnFocus: false,
		//pauseOnHover: false,
		dots: false,
		//arrows: false,
		//fade: true
		//cssEase: 'linear'
	});

	$('.guide-slider').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		adaptiveHeight: true,
		autoplay: true,
		autoplaySpeed: 6000,
		speed: 800,
		pauseOnFocus: false,
		pauseOnHover: false,
		dots: false,
		infinite: true,
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 2,
					//slidesToScroll: 3,
				}
			},
			/*{
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
					//slidesToScroll: 2
				}
			},*/
			{
				breakpoint: 640,
				settings: {
					slidesToShow: 1,
					//slidesToScroll: 1
				}
			}
		]
	});

	$('.reviews-desktop-slider').slick({
		infinite: false,
		adaptiveHeight: true,
		speed: 800,
		dots: false,
		//fade: true
		//cssEase: 'linear'
	});

	$('.reviews-mobile-slider').slick({
		infinite: false,
		adaptiveHeight: true,
		speed: 800,
		dots: false,
		//fade: true
		//cssEase: 'linear'
	});
});


function mark_cart_actions(id){
	$('.promo-label').each(function(index, el) {
		var aviable = $(this).attr('data-abiable');
		if(aviable.indexOf(id) >= 0){
			$(this).addClass('active').html('Товар участвует в акции')
		}else{
			$(this).removeClass('active').html('Товар не участвует в акции')
		}
	});
}

function setCookie(cname, cvalue, exdays) {
	//console.log(cname,cvalue,exdays);
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(name) {
    var dc = document.cookie;
    var prefix = name + "=";
    var begin = dc.indexOf("; " + prefix);
    if (begin == -1) {
        begin = dc.indexOf(prefix);
        if (begin != 0) return null;
    }
    else
    {
        begin += 2;
        var end = document.cookie.indexOf(";", begin);
        if (end == -1) {
        end = dc.length;
        }
    }
    // because unescape has been deprecated, replaced with decodeURI
    //return unescape(dc.substring(begin + prefix.length, end));
    return decodeURI(dc.substring(begin + prefix.length, end));
}

function deleteCookie(name) {
	document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}

function showImage(imgName) {
	 var curImage = document.getElementById('card_photo');
	 var thePath = '';
	 var theSource = thePath + imgName;
	 curImage.src = theSource;
	 curImage.alt = imgName;
	 curImage.title = imgName;
 };


/*
* add 13.09.16 by j-tap
*/

$(function () {
	oCatNav.init();
	oNews.init();
})

oCatNav = {
	eHead: null,
	eTitle: null,
	eList: null,
	eSub: null,
	sSub: 'category_list_sub',
	sData: 'data-origtxt',
	sAct: 'active',
	init: function () {
		oCatNav.eHead = $('.catalog-subnav');
		if (oCatNav.eHead.length && $(window).width() < 1024) {
			oCatNav.action();
		}
	},
	action: function () {
		oCatNav.eList = oCatNav.eHead.next('.category_list');
		oCatNav.eTitle = oCatNav.eHead.find('.catalog-subnav__title');

		$('.'+ oCatNav.sSub).children('ul').wrap($('<div/>', {
			height: $('.'+ oCatNav.sSub).height() - 40
		}));
		$('.'+ oCatNav.sSub).first().css({
			padding: '20px 30px'
		});

		var oCatNavScrlBlock = $('.'+ oCatNav.sSub).children('div');
		oCatNavScrlBlock.bind('jsp-initialised', function () {});
		oCatNavScrlBlock.jScrollPane();

		oCatNav.eTitle.click(function () {
			if (oCatNav.isHeadAct())
				oCatNav.goBackNav()
			else
				oCatNav.slideNav();
		})

		oCatNav.eList.find('a').click(function () {
			var eThis = $(this);
			if (eThis.siblings().length) oCatNav.openSub(eThis);
		})

		$('.catalog-subnav__filter').click(function () {
			var eThis = $(this);
			if (eThis.hasClass(oCatNav.sAct))
				oCatNav.closeFilter()
			else
				oCatNav.openFilter(eThis);
		})
	},
	isHeadAct: function () {
		return oCatNav.eHead.hasClass(oCatNav.sAct);
	},
	slideNav: function () {
		oCatNav.eList.slideToggle(200);
		oCatNav.eHead.toggleClass('openned');
	},
	goBackNav: function () {
		var eActItem = oCatNav.eList.find('.'+ oCatNav.sAct);
		if (eActItem.length > 1) {
			eActItem.last().removeClass(oCatNav.sAct)
				.children('.'+ oCatNav.sSub).slideUp(200);
			oCatNav.updTitle(eActItem.eq(eActItem.length - 2).children('a').text());
		} else {
			oCatNav.eHead.removeClass(oCatNav.sAct);
			eActItem.removeClass(oCatNav.sAct)
				.children('.'+ oCatNav.sSub).slideUp(200);
			oCatNav.updTitle();
		}
		oCatNav.closeFilter();
		$('.catalog-subnav__filter').hide();
	},
	openSub: function (eCurItem) {
		oCatNav.eSub = eCurItem.siblings('.'+ oCatNav.sSub);

		eCurItem.parent().addClass(oCatNav.sAct)
			.siblings().removeClass(oCatNav.sAct);
		eCurItem.parent().siblings().children('.'+ oCatNav.sSub).slideUp(200)
			.find('.'+ oCatNav.sAct).removeClass(oCatNav.sAct);

		if (oCatNav.eSub.length) {
			oCatNav.eHead.addClass(oCatNav.sAct);
			oCatNav.updTitle(eCurItem.text());
			if (oCatNav.eSub.siblings('.category_list_filter').length)
				$('.catalog-subnav__filter').show();
			oCatNav.eSub.slideDown(200);
			setTimeout(function () {
				var api = oCatNav.eSub.children('div').data('jsp');
				api.reinitialise();
			}, 200);
			return false;
		}
	},
	closeFilter: function () {
		$('.catalog-subnav__filter.'+ oCatNav.sAct).removeClass(oCatNav.sAct);
		$('.category_list_filter').slideUp(200);
	},
	openFilter: function (eThis) {
		var eActItem = oCatNav.eList.find('.'+ oCatNav.sAct);
		var eCurItem = eActItem.last().children('a');
		var eFilt = eCurItem.siblings('.category_list_filter');
		if (eFilt.length) {
			eThis.addClass(oCatNav.sAct);
			eFilt.slideDown(200);
		}

	},
	updTitle: function (s) {
		if (oCatNav.isHeadAct()) {
			if (!oCatNav.eTitle.attr(oCatNav.sData))
				oCatNav.eTitle.attr(oCatNav.sData, oCatNav.eTitle.text());
			oCatNav.eTitle.text(s);
		} else {
			oCatNav.eTitle.text(oCatNav.eTitle.attr(oCatNav.sData));
			oCatNav.eTitle.removeAttr(oCatNav.sData);
		}
	}
}

oNews = {
	iCol: 0,
	eTitle: null,
	sElemList: 'main_news_list',
	sElemTitle: 'news_item_header',
	init: function () {
		oNews.eTitle = $('.'+ oNews.sElemList)
			.find('.'+ oNews.sElemTitle);
		if (oNews.eTitle.length) {
			if (oNews.checkSize()) oNews.colPos();

			var timer = false;
			$(window).resize(function () {
				if (oNews.checkSize()) {
					if (!timer) {
						timer = setTimeout(function () {
							oNews.colPos();
							timer = false;
						} ,200)
					}
				} else {
					$('.'+ oNews.sElemList)
						.find('.'+ oNews.sElemTitle).height('auto');
				}
			})
		}
	},
	checkSize: function () {
		var is = $(window).width() >= 640;
		if (is && $(window).width() < 1024) oNews.iCol = 3
		else oNews.iCol = 4;
		return is;
	},
	colPos: function () {
		var n = 0, l = 0,
			eAllColumn = $('.'+ oNews.sElemList).find('.columns'),
			sPrev = 'js-prevpos',
			sTrg = 'js-target';

		if (eAllColumn.length) {
			var ePrevCol = eAllColumn.filter('.'+ sPrev);
			if (ePrevCol.length && oNews.iCol == 4) {
				ePrevCol.each(function (i) {
					var eCol = $(this);
					if (eCol.hasClass(sPrev)) {
						eCol.next().removeClass(sTrg)
							.after(eCol.removeClass(sPrev));
					}
					//if (i+1 == ePrevCol.length) _setPos();
				})
			} else {
				_setPos();
			}

			function _setPos () {
				eAllColumn.each(function () {
					var eColumn = $(this);
					l++;
					n++;
					if (n == oNews.iCol && eColumn.hasClass('medium-8')) {
						var eNext = eColumn.next();
						eColumn.addClass(sTrg).before(eNext.addClass(sPrev));
					}
					if (eColumn.hasClass('medium-8')) n++;
					if (n == oNews.iCol) n = 0;
					if (l == eAllColumn.length) {
						delete n, l;
						oNews.titleH();
					}
				})
			}
		}
	},
	titleH: function () {
		var eCollTitle = false,
			iInd = 0,
			iMaxHeight = 0,
			eAllColumn = $('.'+ oNews.sElemList).find('.columns');

		$('.'+ oNews.sElemList)
			.find('.'+ oNews.sElemTitle).height('auto');

		eAllColumn.css('clear','none').each(function (i) {
			iInd++;

			var eColumn = $(this),
				eThisTitle = eColumn.find('.'+ oNews.sElemTitle);

			// if (iInd == 1) eColumn.css('clear','left');

			if (eThisTitle.length) {
				var iHeight = eThisTitle.height();

				if (eCollTitle.length) {
					eCollTitle = eCollTitle.add(eThisTitle);
				} else eCollTitle = eThisTitle;

				if (iMaxHeight < iHeight) iMaxHeight = iHeight;
			} else {
				if (iInd == oNews.iCol) _apply();
				iInd++;
			}

			if (iInd == oNews.iCol || iInd == eAllColumn.length) {
				_apply();
			}

			function _apply () {
				eCollTitle.height(iMaxHeight);
				eCollTitle = false;
				iMaxHeight = 0;
				iInd = 0;
			}
		})
	}
}

function showBlock(id){
	var dv = document.getElementById(id);
	if(dv.style.display=='block'){
		dv.style.display='none';
	}else{
		dv.style.display='block';
	}
}

function fillCareerList(){
	$.ajax({
		url: "/include/career.php?prof="+$('#your_prof_id>.prof_select_selected').text()+"&city="+$('#your_city_id>.prof_select_selected').text(),
		success: function(data) {
			$('.career_list_wrap>ul').empty();
			$('.career_list_wrap>ul').append(data);
		}
	});
}

$(window).load(function() {
	setTimeout(function(){
		$('.city_list_wrap').css({
			'opacity': '1',
			'display': 'none'
		});

		$('.your_place').removeClass('ovh');
	}, 200);

	if(!$('input[name=geo_city]').length > 0){
		$.get("/ajax/auto_city.php", function( data ) {
			auto_city = data;
			if(auto_city=='undefined' || auto_city=='' || auto_city == false){
				auto_city = 'Москва'
			}

			cityId(auto_city);

			$('.auto-city-name').val(auto_city)
			$('.ur-city span').text(auto_city);

			$('.city-check').addClass('active');


			setTimeout(function(){
				if($('.city-check').hasClass('active')){
					//$('.city-check').removeClass('active');
					$('.confirm-city').trigger('click');

					if(window.location.pathname == '/personal/order/make/' || window.location.pathname =='/shops/'){
						location.reload();
					}
				}
			}, 5000);
		});
	}

	//$('body').append('<div class="px-info"></div>');
	//$('.px-info').text($(window).width());

	setTimeout(function(){
		$(window).trigger('resize');
	}, 1000);

	scrollTopIcon();
	fixedMenu();
});

//открыть-закрыть попап
function openPopup(item){
	$('body').addClass('ovh');
	$('.popup-wrap.'+item).addClass('active');
	$('.popup.'+item).addClass('active');
}

function closePopup(item){
	$('body').removeClass('ovh');
	if(item){
		$('.popup-wrap.'+item).removeClass('active');
		$('.popup.'+item).removeClass('active');
	} else {
		$('.popup-wrap').removeClass('active');
		$('.popup').removeClass('active');
	}

	if($('.gift-iframe').length > 0)
		$('.gift-iframe')[0].contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*');
}

//добавить в избранное для RR
function add_to_wish(product_id){
	var current = current_wish_list();
	if($.inArray(product_id, current) !== -1){
		$.ajax({
			url: '/bitrix/templates/kanzler-template/components/brsoft/wishlist.add/spisok/ajax.php',
			type: 'POST',
			data: {
				ACTION: 'DELETE',
				IID: 23,
				PID: product_id,
			},
		}).done(function(data) {
			var current = current_wish_list();
			$('#mywish').text(current.length)
		})

	}else{
		$.ajax({
			url: '/bitrix/templates/kanzler-template/components/brsoft/wishlist.add/spisok/ajax.php',
			type: 'POST',
			data: {
				ACTION: 'ADD',
				PARAM1: 'iblock',
				PARAM2: 23,
				PARAM3: product_id,
			},
		}).done(function() {
			var current = current_wish_list();
			$('#mywish').text(current.length)
		})

	}
}

//добавить в корзину для RR
function add_to_cart(offer_id){
	$.ajax({
		url: '/ajax/addtocart.php',
		type: 'POST',
		data: {
			ACTION: 'ADD',
			PRODUCT: offer_id,
		},
	}).done(function(data) {
		data = $.parseJSON(data);

		//Yandex Ecommerce
		dataLayer.push({
			"ecommerce": {
				"add": {
					"products": [
						{
							"id": data.code,
							"name": data.name,
							"price": data.price,
							"brand": "KANZLER",
							// "category": this.product.section,
							"quantity": 1
						}
					]
				}
			}
		});

		if(!data.error){
			var popupContent = '<div class="td img"><img src="'+data.picture+'" height="130" style="max-height:130px"></div><div class="td info"><div>'+data.name+'</div><div>Код модели: '+data.code+'</div><div>Размер: '+data.size+'</div><a href="/personal/cart/" class="main-button gold-button abs-button">оформить заказ</a></div>';
			$('.basket-tov .popup-window-titlebar .popup-window-titlebar-text').text("Товар добавлен в корзину");
		}else{
			var popupContent = '<div style="width: 100%; margin: 0; text-align: center;"><div> Неизвестная ошибка при добавлении товара в корзину </div></div>';
			$('.basket-tov .popup-window-titlebar .popup-window-titlebar-text').text("Уважаемый покупатель");
		}

		$('.add-basket-info').empty().append(popupContent)
		$('.basket-tov').addClass('active');
		setTimeout(function(){
			$('.basket-tov').removeClass('active');
		}, 4000);

		BX.onCustomEvent('OnBasketChange');
	})
}

//список избранного RR
function current_wish_list(){
	var ids = []
	var res = $.ajax({url: '/ajax/wishlist.php',dataType: 'json',async: false});
	if(res.responseJSON == null){
		return [];
	}else{
		$.each(res.responseJSON, function(index, val) {
			ids.push(parseInt(val));
		});
		return ids;
	}
}

function load_available_actions(productId){
	$.ajax({
		url: '/ajax/aviable_actions.php',
		data: { product:productId},
	}).done(function(data) {
		openPopup('p-det-sh');
		$('.popup.p-det-sh').html(data)
	})
}



/* beeline pixel */
$(document).ready(function($) {
	//кнопка купить
	$('.pixel-buy-btn').click(function(event) {
		var date = new Date();var current_hour = date.getHours();new Image().src = 'https://resolving.rtb.beeline.ru/conv?aid=11100&convid=8077&orderid='+current_hour+'&random=' + Math.random();

		//facebook
		fbq('track', 'AddToCart');
	});

	//оформить заказ в корзине
	$('.pixel-order-btn').click(function(event) {
		var date = new Date();var current_hour = date.getHours();new Image().src = 'https://resolving.rtb.beeline.ru/conv?aid=11100&convid=8078&orderid='+current_hour+'&random=' + Math.random();

		//facebook
		fbq('track', 'InitiateCheckout');
	});

	//заказать обратный звонок
	$('.pixel-call-back-btn').click(function(event) {
		var date = new Date();var current_hour = date.getHours();new Image().src = 'https://resolving.rtb.beeline.ru/conv?aid=11100&convid=8083&orderid='+current_hour+'&random=' + Math.random();

		//facebook
		fbq('track', 'Contact');

		yaCounter13074007.reachGoal('click_zvonok');
	});

	//клик на позвонить
	$('.pixel-call-btn').click(function(event) {
		var date = new Date();var current_hour = date.getHours();new Image().src = 'https://resolving.rtb.beeline.ru/conv?aid=11100&convid=8082&orderid='+current_hour+'&random=' + Math.random();

		//facebook
		fbq('track', 'Contact');
	});

	//добавить в избранное
	$('.pixel-add-wish').click(function(event) {

		fbq('track', 'AddToWishlist');
	});

	//поиск
	$('.pixel-search-form').submit(function(event) {

		fbq('track', 'Search');
	});

	//подписка на рассылки в подвале
	$('.pixel-subscribe-btn').click(function(event) {
		yaCounter13074007.reachGoal('submit_rassylka');
	});

	//заполнение формы индивидуальный пошив
	$('.ind-poshiv-form input').click(function(event) {
		yaCounter13074007.reachGoal('click_poshiv');
	});

	//отправка формы индивидуальный пошив
	$('.pixel-poshiv-btn').click(function(event) {
		yaCounter13074007.reachGoal('submit_poshiv');
	});

	//заполнение формы обратной связи
	$('form[name=contacts] input, form[name=contacts] textarea').click(function(event) {
		yaCounter13074007.reachGoal('click_obrsvyaz');
	});

	//отправка формы обратной связи
	$('form[name=contacts]').submit(function(event) {
		yaCounter13074007.reachGoal('submit_obrsvyaz');
	});

	//открытие окна регистрации
	$('#link_reg').click(function(event) {
		yaCounter13074007.reachGoal('click_registr');
	});

	//открытие окна регистрации
	$('#link_reg').click(function(event) {
		yaCounter13074007.reachGoal('click_registr');
	});

	//отправка формы обратного звонка
	$('form[name=callback]').submit(function(event) {
		yaCounter13074007.reachGoal('submit_zvonok');
	});

});

function fixedMenu() {
	if ($('html, body').scrollTop() > 34 || $(document).scrollTop() > 34) {
		$('.sticky_header').addClass('fixed-line');
	} else {
		$('.sticky_header').removeClass('fixed-line');
	}
}

function scrollTopIcon() {
	if ($('html, body').scrollTop() > 120 || $(document).scrollTop() > 120) {
		$('.scroll-top').addClass('active');
	} else {
		$('.scroll-top').removeClass('active');
	}
}