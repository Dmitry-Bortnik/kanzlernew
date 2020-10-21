ymaps.ready(init);
var myMap,PointsManager,fltrs="";

function init(){
	myMap=new ymaps.Map("ymap",{
		center:[55.71694627715869,37.64316549999999],
		zoom:10,
		controls:["zoomControl","typeSelector","rulerControl"]
	});

	myMap.behaviors.enable("scrollZoom");
	var c=ymaps.templateLayoutFactory.createClass('<div class="marker_container clusterLayout"><b>{{ properties.geoObjects.length }}</b></div>');

	loadOm_Markers=function(t,a,filename) {
		var b = new ymaps.ObjectManager({
				clusterize:!0,
				clusterHasBalloon:!1,
				geoObjectOpenBalloonOnClick:!0
			});

			b.clusters.options.set({
				clusterIconLayout:c,
				iconOffset:[-20,-20],
				clusterIconShape:{
					type:"Circle",
					coordinates:[20,20],
					radius:20
				}
			});

			b.objects.options.set({
				iconLayout: 'default#image',
				iconImageHref: '/bitrix/templates/kanzler-template/image/icons/map_marker.png',
				iconImageSize: [45,58],
				iconImageOffset: [-20,-50]
			});


			b.objects.events.add('add', function (e) {
		        var obj = e.get('child');

		        obj.options = obj.options || {};
		        obj.options.iconLayout = 'default#image';
		        obj.options.iconImageHref = obj.marker_src;
		        obj.options.iconImageSize = [45,58];
		        obj.options.iconImageOffset = [-20,-50];
		    });

			jQuery.getJSON("/include/"+filename+".json",function(a){
				$('.shop_list').empty();
				if(typeof(a)!='undefined' && typeof(a.features)!='undefined')
				for(var key in a.features)
				{
					$('.shop_list').append('<div id="shoppa'+a.features[key].id+'" class="shops_list_item" data-open="shops_modal" aria-controls="shops_modal" aria-haspopup="true" tabindex="0" data-coords="'+a.features[key].geometry.coordinates+'" data-tc_photo="'+a.features[key].tc_photo+'" data-shop_photo="'+a.features[key].shop_photo+'" data-sch_photo="'+a.features[key].sch_photo+'" data-img="'+a.features[key].marker_src+'">'+a.features[key].properties.balloonContent+'</div>');
				}
				if(a.features!=null){
					b.add(a);
					ymaps.geoQuery(a).applyBoundsToMap(myMap,{checkZoomRange:!0,zoomMargin:20})
				}

				myMap.options.set("maxZoom",17);
				myMap.geoObjects.removeAll();
				myMap.geoObjects.add(b);

				myMap.behaviors.enable("scrollZoom");
			});
		};


	$.ajax({
		url: "/include/shops.php",
		data: "city="+encodeURI($('.your_city_header').text()),
		success: function(data) {
			loadOm_Markers('city',$('.your_city_header').text(),data);
		}
	});
};


$(document).ready(function($){
	if ($('#your_city_id>.map_select_selected').text() == 'Москва') {
		$('#subway_button').show();
		$(".filter-6466").show();
		$(".filter-6470").show();
		$(".filter-6471").show();
		$(".filter-6478").hide();
	} else if ($('#your_city_id>.map_select_selected').text() == 'Санкт-Петербург') {
		$('#subway_button').show();
		$(".filter-6466").show();
		$(".filter-6478").show();
		$(".filter-6470").hide();
		$(".filter-6471").hide();
	} else if ($('#your_city_id>.map_select_selected').text() == 'Казань') {
		$('#subway_button').show();
		$(".filter-6466").hide();
		$(".filter-6470").hide();
		$(".filter-6471").hide();
	} else if ($('#your_city_id>.map_select_selected').text() == 'Екатеринбург') {
		$('#subway_button').show();
		$(".filter-6466").hide();
		$(".filter-6470").hide();
		$(".filter-6471").hide();
	} else if ($('#your_city_id>.map_select_selected').text() == 'Нижний Новгород') {
		$('#subway_button').show();
		$(".filter-6466").hide();
		$(".filter-6470").hide();
		$(".filter-6471").hide();
	} else if ($('#your_city_id>.map_select_selected').text() == 'Новосибирск') {
		$('#subway_button').show();
		$(".filter-6466").hide();
		$(".filter-6470").hide();
		$(".filter-6471").hide();
	} else if ($('#your_city_id>.map_select_selected').text() == 'Самара') {
		console.log("1");
		$('#subway_button').show();
		$(".filter-6466").hide();
		$(".filter-6470").hide();
		$(".filter-6471").hide();
	} else {
		$('#subway_button').hide();
		$(".filter-6466").hide();
		$(".filter-6470").hide();
		$(".filter-6471").hide();
	}
	
	
	

	$(".map_select ul li>a").on("click",function(a) {
		$(this).closest('ul').find('.active').removeClass('active');
		$(this).parent().addClass('active');
		if ($(this).closest('ul').hasClass('city_select')) {
			var type = 'city';
		} else {
			type = 'metro';
		}
		if ($(this).closest('ul').hasClass('city_select') && $(this).text()  == 'Москва') {
			$(".filter-6470").show();
			$(".filter-6471").show();
			$(".filter-6478").hide();
			$('#subway_button').show().find('.map_select_selected').text('Выбрать ст. метро');
			$('#subway_list_id').find('.active').removeClass('active');
			$('#subway_list_id li:first-child').addClass('active');
			$('.shops_list_block .checks').removeClass('hidden');
		} else if ($(this).closest('ul').hasClass('city_select') && $(this).text()  == 'Санкт-Петербург') {
			$(".filter-6478").show();
			$(".filter-6470").hide();
			$(".filter-6471").hide();
		} else if ($(this).closest('ul').hasClass('city_select') && $(this).text()  != 'Москва') {
			$(".filter-6470").hide();
			$(".filter-6471").hide();
			$(".filter-6478").hide();
			$('#subway_button').hide().find('.map_select_selected').text('Выбрать ст. метро');
			//$('.shops_list_block .checks').addClass('hidden');
		}
		
	if ($(this).closest('ul').hasClass('city_select') && $(this).text()  == 'Москва') {
		$('#subway_button').show();
		$(".filter-6466").show();
		$(".filter-6470").show();
		$(".filter-6471").show();
		$(".filter-6478").hide();
	} else if ($(this).closest('ul').hasClass('city_select') && $(this).text() == 'Санкт-Петербург') {
		$('#subway_button').show();
		$(".filter-6466").show();
		$(".filter-6478").show();
		$(".filter-6470").hide();
		$(".filter-6471").hide();
	} else if ($(this).closest('ul').hasClass('city_select') && $(this).text() == 'Казань') {
		$('#subway_button').show();
		$(".filter-6466").hide();
		$(".filter-6470").hide();
		$(".filter-6471").hide();
	} else if ($(this).closest('ul').hasClass('city_select') && $(this).text() == 'Екатеринбург') {
		$('#subway_button').show();
		$(".filter-6466").hide();
		$(".filter-6470").hide();
		$(".filter-6471").hide();
	} else if ($(this).closest('ul').hasClass('city_select') && $(this).text() == 'Нижний Новгород') {
		$('#subway_button').show();
		$(".filter-6466").hide();
		$(".filter-6470").hide();
		$(".filter-6471").hide();
	} else if ($(this).closest('ul').hasClass('city_select') && $(this).text() == 'Новосибирск') {
		$('#subway_button').show();
		$(".filter-6466").hide();
		$(".filter-6470").hide();
		$(".filter-6471").hide();
	} else if ($(this).closest('ul').hasClass('city_select') && $(this).text() == 'Самара') {
		console.log("1");
		$('#subway_button').show();
		$(".filter-6466").hide();
		$(".filter-6470").hide();
		$(".filter-6471").hide();
	} else {
		$('#subway_button').hide();
		$(".filter-6466").hide();
		$(".filter-6470").hide();
		$(".filter-6471").hide();
	}
	
	
		if ($(this).closest('ul').hasClass('subway_list') && $(this).text()  == 'Все') {
			$('#subway_button').find('.map_select_selected').text('Выбрать ст. метро');
			$('#subway_list_id').find('.active').removeClass('active');
			$('#subway_list_id li:first-child').addClass('active');
			$('.shops_list_block .checks').removeClass('hidden');
		} else {
			$(this).closest('.map_select').find('.map_select_selected').text($(this).text());
			//$('.shops_list_block .checks').addClass('hidden');
		}

		$.ajax({
			url: "/include/shops.php",
			data: ""+type+"="+encodeURI($(this).text()),
			success: function(data) {
				loadOm_Markers(type,$(this).text(),data);
			}
		});

		a.preventDefault();
	});


	$('.shop_type').change(function(event) {
		var shop_type = [];
        $('.shop_type:checked').each(function(i){
          shop_type[i] = $(this).val();
        });
		var city = $('.your_city .map_select_selected').text();

		//if(city == 'Москва'){
			$.ajax({
				url: "/include/shops.php",
				data: {city:city, shop_type:shop_type},
				success: function(data) {
					loadOm_Markers('city', city, data);
				}
			});
		//}

	});

});