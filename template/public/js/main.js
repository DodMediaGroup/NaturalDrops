jQuery(document).ready(function($) {
	//IMG TO SCG
	$(".js-img-to-svg").each(function(index, el) {
		$.imgToSvg($(this));
	});

    // SLIDE
    $('.principal-slide').each(function(index, el) {
        $.principalSlide();
    });
    // END SLIDE

    // EFECT SCROLL
    $('.efect-bottom').smoove({
        offset  : '-15px',
        moveY   : '100px',
    });
    $('.efect-left').smoove({
        offset  : '-15px',
        moveX   : '-250px',
    });
    $('.efect-right').smoove({
        offset  : '-15px',
        moveX   : '250px',
    });
    $('.efect-circle').smoove({
        offset  : '-15px',
        opacity : 1,
        rotate  : '270deg',
    });
    $('.efect-scale').smoove({
        offset  : '-15px',
        scale   : '1.7',
    });
    // END EFECT SCROLL

    // PARALLAX
    $('.parallax').parallax();
    // END PARALLAX

    //CUSTOM SCROLL
    $('.js-custom-scroll').mCustomScrollbar({
        theme: 'dark-thin'
    });

    // MAP FOOTER
    if($('#map-footer').length > 0){
        $.showMapFooter();
    }
    // END MAP FOOTER

    // PAGE CONTACT
    if($('.page-contact').length > 0){
        map = $.loadMaps('.show-map', mapLocations);
        map.Load();
    }
    // END PAGE CONTACT

    //MOSTRAR INFO TRATAMIENTO
    $(document).on('click', '.js-show-info', function(event) {
        event.preventDefault();

        if(tratItem != null){
            tratItem.append(tratInfo);
            tratItem.removeClass('active');
            tratItem = null;
            tratInfo = null;
        }

        var info = $(this).find('.info');
        console.log(info);
        if(info.length > 0){
            $(this).after(info);
            $(this).addClass('active');
            tratItem = $(this);
            tratInfo = info;
        }
    });
    // END SHOW INFO TRATAMIENTO

    // IMAGES ZOOM
    $(".image-zoom").each(function(index, el) {
        $(this).elevateZoom({
            zoomType: "lens",
            lensShape: "round",
            lensSize: 200
        });
    });
    // END IMAGES ZOOM

	$.dimentionHeader();
});

$(window).on('load', function(event) {
    event.preventDefault();

    $('.modal-loading').removeClass('active');
    $('body').css({
        overflowY: 'auto',
    });
});

$.dimentionHeader = function(){
	var fullHeight = $(window).outerHeight();

	$('.principal-header.slide-container').each(function(index, el) {
        $(this).css({
            height: fullHeight,
        });
        $(this).find('.principal-slide').css({
            height: fullHeight - $(this).find('.principal-logo').outerHeight(),
        });
    });
}
$.imgToSvg = function(image){
	var $img = image;
    var imgID = $img.attr('id');
    var imgClass = $img.attr('class');
    var imgURL = $img.attr('src');

    $.get(imgURL, function(data) {
        var $svg = jQuery(data).find('svg');
        if(typeof imgID !== 'undefined') {
            $svg = $svg.attr('id', imgID);
        }
        if(typeof imgClass !== 'undefined') {
            $svg = $svg.attr('class', imgClass+' replaced-svg');
        }
        $svg = $svg.removeAttr('xmlns:a');
        $img.replaceWith($svg);
        if($img.hasClass('efect-circle'))
            $svg.smoove({
                offset  : '15%',
                opacity : 1,
                rotate  : '-360deg',
            });
    }, 'xml');
}

// PRINCIPAL SLIDE
$.nextSlide = function(){
    var item = slideItems[slideItemActive];

    $('.principal-slide .item-slide.active').addClass('change');
    setTimeout(function() {
        $('.principal-slide .item-slide.active').removeClass('active change');
        item.addClass('active');

        if(!slideItemsResize){
            $.resizeImgSlide();
            slideItemsResize = true;
        }
    }, (slideTime/5));

    $('.principal-slide .pagination-item').removeClass('active');
    $('.principal-slide .pagination-item:nth-child('+(slideItemActive+1)+')').addClass('active');

    if((slideItemActive+1) >= slideItems.length)
        slideItemActive = 0;
    else
        slideItemActive++;
}
$.startSlide = function(){
    $.nextSlide();
    if(slideItems.length > 1)
        slideInterval = setInterval($.nextSlide, slideTime);
}
$.resizeImgSlide = function(){
    var maxWidth = $('.principal-menu').outerWidth(),
        widthAll = 0;

    $('.principal-slide .item-slide').each(function(index, el) {
        widthAll = 0;
        $(this).find('img').each(function(index, el) {
            widthAll += $(this).outerWidth();
        });
        $(this).find('img').each(function(index, el){
            $(this).css({
                maxWidth: $(this).outerWidth(),
                width: ((($(this).outerWidth() / widthAll) * 100) - 1)+'%'
            });
        });
    });
}
$.principalSlide = function(){
    var slidePagination = $('<div>',{
        class: 'slide-pagination',
    });
    $('.principal-slide').append(slidePagination);
    $('.principal-slide .item-slide').each(function(index, el) {
        slidePagination.append($('<div>',{
            class: 'pagination-item'
        }).attr({
            'data-item':index
        }));
    });
    $(document).on('click', '.principal-slide .pagination-item', function(event) {
        event.preventDefault();
        clearInterval(slideInterval);
        slideItemActive = $(this).attr('data-item');
        $.startSlide();
    });

    $('.principal-slide .item-slide').each(function(index, el) {
        slideItems.push($(this));
    });

    $.startSlide();
}
// END PRINCIPAL SLIDE
// MAPS
$.loadMaps = function(div, locations){
    if (typeof locations == 'undefined')
        locations = mapLocations;
    var map = new Maplace({
        map_div: div,
        locations: locations,
        start: 1,
        controls_on_map: false,
        map_options: {
            set_center: [11.2000551,-74.2283659],
            zoom: 14,
            scrollwheel: false,
            zoomControl: true,
            zoomControlOptions: {
              style: google.maps.ZoomControlStyle.SMALL
            },
            panControl: false
        }
    });
    return map;
}
// END MAPS
// MAP FOOTER
$.showMapFooter = function(){
    var locations = [{
        icon: $("#map-footer").attr('data-icon'),
        lat: 11.2003165,
        lon: -74.2259294,
        html: '<p>Dir: Carrera 18 # 11b-01</p><p>Tel: 770 5128</p>',
        animation: google.maps.Animation.DROP
    }];
    var mapFooter = $.loadMaps('#map-footer', locations);
    mapFooter.Load();
}
// END MAP FOOTER