jQuery(document).ready(function($) {
	//IMG TO SCG
	$(".js-img-to-svg").each(function(index, el) {
		$.imgToSvg($(this));
	});

    // HEADER
    $.dimentionHeader();
    //END HEADER

    // SLIDE
    $('.principal-slide').each(function(index, el) {
        $.principalSlide();
    });
    // END SLIDE

    // SHOW MENU
    $('.principal-menu .button').on('click', function(event) {
        event.preventDefault();
        var nav = $(this).parent();

        if(nav.hasClass('active')){
            nav.removeClass('active');
            $('.menu_responsive').removeClass('active');
        }
        else{
            nav.addClass('active');
            $('.menu_responsive').addClass('active');
        }
    });
    // END SHOW MENU

    // EFECT SCROLL
    $('.efect-bottom').smoove({
        offset  : '-30px',
        moveY   : '100px',
    });
    $('.efect-left').smoove({
        offset  : '-30px',
        moveX   : '-250px',
    });
    $('.efect-right').smoove({
        offset  : '-30px',
        moveX   : '250px',
    });
    $('.efect-circle').smoove({
        offset  : '-30px',
        opacity : 1,
        rotate  : '270deg',
    });
    $('.efect-scale').smoove({
        offset  : '-30px',
        scale   : '1.7',
    });
    // END EFECT SCROLL

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

    // LINK CIRCLE
    $('.js-link-hover').hover(function() {
        var link = $(this).parent();
        link.addClass('hover');
    }, function() {
        var link = $(this).parent();
        link.removeClass('hover');
    });
    // END LINK CIRCLE

    // PARALLAX
    $('.parallax').parallax();
    // END PARALLAX

    // SHOW MAP SALES
    $('.js-tablet-map').on('click', function(event) {
        event.preventDefault();

        if($(this).hasClass('active')){
            $(this).removeClass('active');
            $('.directions').removeClass('active');
        }
        else{
            $(this).addClass('active');
            $('.directions').addClass('active');
            setTimeout(function(){
                map.gmap3({trigger:"resize"});
                map.gmap3({trigger:"projection_changed"});
            }, 800);
        }
    });
    // END SHOW MAP SALES
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
    if(fullHeight > 800)
        fullHeight = 800;
    else if(fullHeight < 600)
        fullHeight = 600;

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
                width: ((($(this).outerWidth() / widthAll) * 100) - 5)+'%'
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
$.loadMaps = function(div, inLocations){
    var locations = [],
        overLayers = [];
    
    if ((typeof inLocations == 'undefined'))
        inLocations = mapLocations;
    $.each(inLocations, function(index, val) {
        console.log(inLocations);
        locations.push({
            latLng: [$(this)[0].lat, $(this)[0].lng],
            data: $(this)[0].title,
            options:{
                icon: $(this)[0].icon
            }
        });
        overLayers.push({
            latLng: [$(this)[0].lat, $(this)[0].lng],
            options:{
                content: $(this)[0].html,
                offset:{
                    y: 5,
                    x: 45
                }
            }
        });
    });
    var map = $(div).gmap3({
        map:{
            options:{
                center: [6.248365, -75.594243],
                zoom: 6,
                maxZoom: 16,
                scrollwheel: false,
                zoomControl: true,
                zoomControlOptions: {
                    style: google.maps.ZoomControlStyle.SMALL
                },
                panControl: false
            }
        },
        marker:{
            values: locations
        },
        overlay:{
            values: overLayers
        }
    }, "autofit");

    return $(div);
}
// END MAPS
// MAP FOOTER
$.showMapFooter = function(){
    $.loadMaps('#map-footer', footerLocation);
}
// END MAP FOOTER