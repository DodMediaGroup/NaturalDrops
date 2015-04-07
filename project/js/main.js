jQuery(document).ready(function($) {
	//IMG TO SVG
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

    // PAGE STORES
    if($('.page-contact').length > 0){
        $.countries();
        $.cities();
        $.reDrawMap();
        $.getLocation();

        $('#stores-countries').change(function(event) {
            var country = $(this).val();
            $.each(countries, function(index, val) {
                if(this.name != ""){
                    if(this.id == country)
                        this.show = true;
                    else
                        this.show = false;
                    if(country == 0)
                        this.show = true;
                }
            });
            $.reDrawMap();
            console.log(countries);
        });

        $('#stores-cities').change(function(event) {
            var city = $(this).val();
            $.each(cities, function(index, val) {
                if(this.name != ""){
                    if(this.id == city)
                        this.show = true;
                    else
                        this.show = false;
                    if(city == 0)
                        this.show = true;
                }
            });
            $.reDrawMap();
            console.log(cities);
        });
    }
    // END PAGE STORES

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
    $(document).on('click', '.treatments .info .close', function(event) {
        event.preventDefault();

        if(tratItem != null){
            tratItem.append(tratInfo);
            tratItem.removeClass('active');
            tratItem = null;
            tratInfo = null;
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

// MAPS STORES
$.countries = function(){
    $.each(mapLocations, function(index, val) {
        countries[this.country.id] = {
            id: this.country.id,
            name: this.country.name,
            show: true
        };
    });
    $('#stores-countries').append($('<option>',{
        text: 'Pais'
    }).attr('value', 0));
    $.each(countries, function(index, val) {
        if(this.name != ""){
            $('#stores-countries').append($('<option>',{
                text: this.name
            }).attr('value', this.id));
        }
    });
}
$.cities = function(){
    $.each(mapLocations, function(index, val) {
        cities[this.city.id] = {
            id: this.city.id,
            name: this.city.name,
            show: true
        };
    });
    $('#stores-cities').append($('<option>',{
        text: 'Ciudad'
    }).attr('value', 0));
    $.each(cities, function(index, val) {
        if(this.name != ""){
            $('#stores-cities').append($('<option>',{
                text: this.name
            }).attr('value', this.id));
        }
    });
}
$.activeShow = function(){
    $.each(mapLocations, function(index, val) {
        if(countries[this.country.id].show && cities[this.city.id].show)
            this.show = true;
        else
            this.show = false;
    });
}
$.showResultStore = function(){
    $('.page-contact .directions .results .mCSB_container').html('');
    $.each(mapLocations, function(index, val) {
        if(this.show){
            var store = $('<div>',{
                class: 'result'
            }).append($('<h3>',{
                text: this.name
            })).append($('<address>')
                .append($('<p>',{
                    text: this.city.name+' - '+this.country.name
                })).append($('<p>',{
                    text: 'Dirección: '+this.address
                })).append($('<p>',{
                    text: 'Horario Atención: '+this.attention
                })));
            if(this.website != ''){
                store.find('address').append($('<a>',{
                    text: this.website
                }).attr('href', this.website));
            }

            $('.page-contact .directions .results .mCSB_container').append(store);
        }
    });
}
$.loadMapsStore = function(){
    map = new GMaps({
        div: '#show-map',
        lat: -12.043333,
        lng: -77.028333
    });
    $.each(mapLocations, function(index, val) {
        if(this.show){
            map.addMarker({
                lat: this.lat,
                lng: this.lng,
                icon: this.icon,
                animation: this.animation,
                dataStore: this.id,
                click: function(){
                    if($('#store-overlay-'+this.dataStore).hasClass('active'))
                        $('#store-overlay-'+this.dataStore).removeClass('active');
                    else{
                        $('.map-overlay').removeClass('active');
                        $('#store-overlay-'+this.dataStore).addClass('active');
                        map.setCenter(this.getPosition().lat(), this.getPosition().lng());
                    }
                }
            });
            map.drawOverlay({
                lat: this.lat,
                lng: this.lng,
                content: '<div class="map-overlay" id="store-overlay-'+this.id+'">'+
                        '<h2>'+this.name+'</h2>'+
                        ((this.address != "")?('<p>Dirección: '+this.address+'</p>'):'')+
                        ((this.locality != "")?('<p>Barrio/Localidad: '+this.locality+'</p>'):'')+
                        ((this.attention != "")?('<p>Horario de Atencion: '+this.attention+'</p>'):'')+
                        ((this.phone != "")?('<p>Teléfono: '+this.phone+'</p>'):'')+
                        ((this.email != "")?('<p>'+this.email+'</p>'):'')+
                        ((this.website != "")?('<a href="'+this.website+'">'+this.website+'</a>'):'')+
                    '</div>'
            });
        }
    });
    map.fitZoom();
}
$.reDrawMap = function(){
    $.activeShow();
    $.showResultStore();
    $.loadMapsStore();
}

$.getLocation = function(){
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showMyPosition);
    }
}
function showMyPosition(position){
    map.setCenter(position.coords.latitude, position.coords.longitude);
    map.setZoom(15);
}
// END MAPS STORES