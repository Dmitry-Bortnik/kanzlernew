jQuery(document).ready(function($){
	function makeMap( obj ){
		var map, controls, mapId, center, zoom, coords, title, content, img, size, offset;
		if( $(obj) != 'undefined' ){
			mapId = $(obj).attr('id');
			controls = $(obj).attr('data-controls');
			center = $(obj).attr('data-center').split(',');;

			zoom = $(obj).attr('data-zoom');

			try{

					map = new ymaps.Map ( mapId, {
			            center: center,
			            zoom: zoom,
			            controls:[]
			        });
			        map.controls.add('zoomControl');

			}
			catch(err){
				console.log(err);
			}

			loadMarkers=function(obj) {
				placemarks = $(obj).find('[data-type="placemark"]');
				//console.log(placemarks);
				if( placemarks != 'undefine' && placemarks.length > 0){
					if( placemarks.length > 1 ){
						placemarkObjs = [];
						mapCollection = new ymaps.GeoObjectArray();
						placemarks.each(function( i ){
							//console.log(i);

							title   = $(this).attr('data-title');
							content = $(this).attr('data-content');
							coords  = $(this).attr('data-coords').split(',');
							img     = $(this).attr('data-img');
							size    = $(this).attr('data-size').split(',');
							offset  = $(this).attr('data-offset').split(',');
							//console.log(img, size, offset)


								placemarkObjs[i] = new ymaps.Placemark(coords,
									{
										hintContent: title,
										balloonContent: content
									},
									{
										iconLayout: 'default#image',
										iconImageHref: img,
										iconImageSize: size,
										iconImageOffset: offset
								});
								mapCollection.add(placemarkObjs[i]);

						});
						map.geoObjects.add(mapCollection);


					}else{
						title   = placemarks.attr('data-title');
						content = placemarks.attr('data-content');
						coords  = placemarks.attr('data-coords').split(',');
						img     = placemarks.attr('data-img');
						size    = placemarks.attr('data-size').split(',');
						offset  = placemarks.attr('data-offset').split(',');

						placemarkObj = new ymaps.Placemark(coords,
							{
								hintContent: title,
								balloonContent: content
							},
							{
								iconLayout: 'default#image',
								iconImageHref: img,
								iconImageSize: size,
								iconImageOffset: offset
						});

						map.geoObjects.removeAll();
						map.geoObjects.add(placemarkObj);
						map.setCenter(coords);
					}
				}
			}
			loadMarkers(obj);
		}
	}
	//Trigger
	ymaps.ready(function(){
		collection = $('[data-type="map"]');
		for( i=0; i<collection.length; i++ ){
			makeMap(collection[i]);
		}
	});

	$("body").on("click", ".shops_list_item", function(a) {
		//console.log($(this).data());
		$('.modal_shops_header .shop-name').html($(this).find('.shop_title').html());
		$('#modal-contacts').attr('data-center', $(this).data('coords'));
		$('#modal-contacts [data-type="placemark"]').attr('data-coords', $(this).data('coords'));
		$('#modal-contacts [data-type="placemark"]').attr('data-img', $(this).data('img'));
		if ($(this).children().is('.shop_subway')) {
			$('#shops_modal .modal_contact .shop_subway').removeClass('hide').html($(this).find('.shop_subway').html());
		} else {
			$('#shops_modal .modal_contact .shop_subway').addClass('hide').html('');
		}
		$('#shops_modal .modal_contact .shop_adress.adress').html($(this).find('.shop_adress').html());
		$('#shops_modal .modal_contact .shop_adress.phone').html($(this).find('.shop_phone').html());
		$('#shops_modal .modal_contact .shop_adress.working_hours').html($(this).find('.shop_working_hours').html());

		if ($(this).data("tc_photo")) {
			$('#shops-tabs .tabs-title:eq(1)').show();
			$('#shops_modal #panel2').css('background', 'url('+$(this).data("tc_photo")+') center/contain no-repeat');
		} else {
			$('#shops-tabs .tabs-title:eq(1)').hide();
			$('#shops-tabs .tabs-title:eq(0)').trigger('click');
			$('#shops_modal #panel2').css('background', '');
		}
		if ($(this).data("shop_photo")) {
			$('#shops-tabs .tabs-title:eq(2)').show();
			$('#shops_modal #panel3').css('background', 'url('+$(this).data("shop_photo")+') center/contain no-repeat');
		} else {
			$('#shops-tabs .tabs-title:eq(2)').hide();
			$('#shops-tabs .tabs-title:eq(0)').trigger('click');
			$('#shops_modal #panel3').css('background', '');
		}
		if ($(this).data("sch_photo")) {
			$('#shops_modal #panel4').css('background', 'url('+$(this).data("sch_photo")+') center/contain no-repeat');
			$('#shops-tabs .tabs-title:eq(3)').show();
		} else {
			$('#shops-tabs .tabs-title:eq(3)').hide();
			$('#shops-tabs .tabs-title:eq(0)').trigger('click');
			$('#shops_modal #panel4').css('background', '');
		}

		loadMarkers('#modal-contacts');
	})
});