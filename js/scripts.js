var _tmpl_isMobile      = false,
    _tmpl_animated      = true,
    
    _tmpl_goodsLoad     = true,
    _tmpl_newDays       = 7;


if (navigator.userAgent.match(/Android/i) ||
    navigator.userAgent.match(/webOS/i) ||
    navigator.userAgent.match(/iPhone/i) ||
    navigator.userAgent.match(/iPad/i)||
    navigator.userAgent.match(/iPod/i) ||
    navigator.userAgent.match(/IEMobile/i) ||
    navigator.userAgent.match(/BlackBerry/i)) {
    _tmpl_isMobile = true;
};


window.onload = function () {
	_func_loader();

	if ( _tmpl_animated == true) {
		_func_animate();
	};

	_func_navigation();
	_func_slider();
	_func_bestsellers();
	_func_blogcarousel();
	_func_factCount();
	_func_goTop();
	_func_pathReplace();
	_func_skills();
	_func_restTabs();
	_func_goodsViewMode();
    _func_toBasket();
    _func_goodTabs();
    _func_blogEntries();
    _func_photoEntries();

    if ( _ucoz_moduleId == 'shop' && ( _ucoz_pageId == 'allgoods' || _ucoz_pageId == 'category' ) && _tmpl_goodsLoad == true ) {
        goodsLoad.start();
    };

    _func_newGood();
};
	


function _func_loader() {
	$("#loader").fadeOut(500);
};

function _func_navigation() {
	$('#navigation .uWithSubmenu').append('<span class="fa fa-angle-down"></span>');
	$('#navigation .fa').click(function() {
		$(this).toggleClass('fa-angle-down').toggleClass('fa-angle-up').parent().children('ul').toggleClass('uWithSubmenuActive');
	});
	$('.navicon').click(function() {
		$(this).toggleClass('navicon-open');
		$('body').toggleClass('menu-is-opened');
	})
};

function _func_slider() {
	if ( _tmpl_isMobile == false) {
		$('#slider-wrap').height( $(window).height() );
		$(window).resize(function() {
			$('#slider-wrap').height( $(window).height() );
		});
	} else {
		$('#slider-wrap').height(500);
	};
	$('#slider').aSlider({
		nextBtn: '.slider-next',
		prevBtn: '.slider-prev',
		fadeSpeed: 500,
		autoPlay: true,
		autoPlayDelay: 5000,
		slideDelay: 0
	});
};

function _func_bestsellers() {
    $('#bestsellers .goods-list').addClass('owl-carousel');
    var owl = $(".owl-carousel");
    owl.owlCarousel({
        items: 4,
        itemsDesktop: [1199, 4],
        itemsDesktopSmall: [1024,3],
        itemsTablet: [790,2],
        itemsTabletSmall: [500,1],
        itemsMobile: [500,1]
    });
    $('.bestsellers-right').click(function() {
        owl.trigger('owl.next');
    });
    $('.bestsellers-left').click(function() {
        owl.trigger('owl.prev');
    });
};

function _func_blogcarousel() {
    $('.blog-carousel').addClass('blog-owl-carousel');
    var owl = $(".blog-owl-carousel");
    owl.owlCarousel({
        items: 3,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [1024, 2],
        itemsTablet: [790,2],
        itemsTabletSmall: [500,1],
        itemsMobile: [500,1]
    });
    $('.blog-right').click(function() {
        owl.trigger('owl.next');
    });
    $('.blog-left').click(function() {
        owl.trigger('owl.prev');
    });
};

function _func_factCount() {
	$(document.body).on('appear', '.fact-count', function(e, $affected) {
		var c = $(this).data('count');
    	if ( $(this).is(':appeared') && !$(this).hasClass('starting') ) {
    		$(this).addClass('starting');
	    	$(this).countTo({
		        from: 0,
		        to: c
		    });
		}
	});
	$('.fact-count').appear({force_process: true});
};

function _func_goTop() {
    $('<span id="go-top" class="fa fa-angle-up" title="Вверх!"></span>').appendTo('body');
    $('#go-top').css({
                'opacity'    : '0',
                'visibility' : 'hidden'
            });
    $(window).scroll(function() {
        if ($(this).scrollTop() > 10) {
            $('#go-top').css({
                'opacity'    : '1',
                'visibility' : 'visible'
            });
        } else {
            $('#go-top').css({
                'opacity'    : '0',
                'visibility' : 'hidden'
            });
        }
    });
    $('#go-top').click(function() {
        $('body,html').animate({
            scrollTop: 0
        }, 800);
        return false
    });
};

function _func_pathReplace() {
	$('.path-links').each(function() {
		$(this).html($(this).html().replace(/\»/g, '<i class="fa fa-angle-right"></i>'));
	});
};

function _func_skills() {
	$(document.body).on('appear', '.skill-line-wrap > span', function(e, $affected) {
		var percent = $(this).data('percent');
		if ( $(this).is(':appeared') && !$(this).hasClass('skill-starting') ) {
			$(this).children('b').append(percent+'%');
			$(this).addClass('skill-starting');			
			$(this).width($(this).parent().width()*percent/100);
		}
	});
	$('.skill-line-wrap > span').appear({force_process: true});
};

function _func_restTabs() {
	$('.rest-menu-tabs-header > a').click(function() {
		if ( !$(this).hasClass('active') ) {
			var tabId = $(this).data('tab-id');
			$('.rest-menu-tabs-header > a').removeClass('active');
			$(this).addClass('active');
			$('.rest-menu-tabs > div').each(function() {
				$(this).fadeOut(0);
				if ( this.id == tabId ) {
					$(this).fadeIn(500);
				};
			})

		}
        
        
	});
};

function _func_goodsViewMode() {
    switch (getCookie('itemViewMode')) {
        case 'grid':
            $('.goods-view-mode-grid').addClass('goods-view-mode-active');
            $('.content #goods_cont').removeClass('list-item-view-mode-list');
        break
        case 'list':
            $('.goods-view-mode-list').addClass('goods-view-mode-active');
            $('.content #goods_cont').addClass('list-item-view-mode-list');
        break
        case undefined:
            setCookie('itemViewMode', _tmpl_viewMode);
            switch (getCookie('itemViewMode')) {
                case 'grid':
                    $('.goods-view-mode-grid').addClass('goods-view-mode-active');
                    $('.content #goods_cont').removeClass('list-item-view-mode-list');
                break
                case 'list':
                    $('.goods-view-mode-list').addClass('goods-view-mode-active');
                    $('.content #goods_cont').addClass('list-item-view-mode-list');
                break
                default:
                alert('ERROR!\ninvalid _tmpl_viewMode: "'+_tmpl_viewMode+'"');
            };
        break
        default:
            alert('ERROR!\ninvalid _tmpl_viewMode: "'+_tmpl_viewMode+'"');
    };

    $('.goods-view-mode > span').click(function() {
        if ( $(this).hasClass('goods-view-mode-active') ) {
            return false;
        }   else {
            $('.goods-view-mode > span').removeClass('goods-view-mode-active');
            $(this).addClass('goods-view-mode-active');
            if ( $(this).hasClass('goods-view-mode-grid') ) {
                setCookie('itemViewMode', 'grid');
                $('.content #goods_cont').removeClass('list-item-view-mode-list');
            } else if ( $(this).hasClass('goods-view-mode-list') ) {
                setCookie('itemViewMode', 'list');
                $('.content #goods_cont').addClass('list-item-view-mode-list');
            }
        }
    });
};

function _func_toBasket() {
    $('.to-basket input[type="text"]').before('<span class="fa fa-minus"></span>');
    $('.to-basket input[type="text"]').after('<span class="fa fa-plus"></span>');

    $('.to-basket .fa-plus').click(function() {
        var inputVal = +$('.to-basket input[type="text"]').val();
        $('.to-basket input[type="text"]').val(inputVal+1)
    });
    $('.to-basket .fa-minus').click(function() {
        var inputVal = +$('.to-basket input[type="text"]').val();
        if ( inputVal > 1 ) {
            $('.to-basket input[type="text"]').val(inputVal-1)
        }
    });
};

function _func_goodTabs() {
    $('#tabs').aTabs();
};

function _func_blogEntries() {
    $('.post').parent().addClass('post-wrap').parent().addClass('oh');
};

function _func_photoEntries() {
    $('.photo').parent().removeAttr('id').removeAttr('class').removeAttr('style').parent().removeAttr('id').removeAttr('class').removeAttr('style').addClass('photo-wrap').parent().removeAttr('id').removeAttr('class').removeAttr('style').addClass('photo-list');
};

function _func_newGood() {
    c_date = new Date(_ucoz_date.replace(/(\d+).(\d+).(\d+)/, '$3/$2/$1'));
    $('.item-img, .good-images').each(function() {
            g_date = new Date($(this).data('date').replace(/(\d+).(\d+).(\d+)/, '$3/$2/$1'));
            n_date = Math.floor((c_date - g_date) / (1000 * 60 * 60 * 24));
        if ( n_date <= _tmpl_newDays ) {
            $(this).find('.item-new').css('display', 'block');
        };
    });
};

function setCookie(name, value, options) {
    options = options || {};
    var expires = options.expires;
    if (typeof expires == "number" && expires) {
        var d = new Date();
        d.setTime(d.getTime() + expires * 1000);
        expires = options.expires = d;
    }
    if (expires && expires.toUTCString) {
        options.expires = expires.toUTCString();
    }
    value = encodeURIComponent(value);
    var updatedCookie = name + "=" + value;
    for (var propName in options) {
        updatedCookie += "; " + propName;
        var propValue = options[propName];
        if (propValue !== true) {
            updatedCookie += "=" + propValue;
        }
    }
    document.cookie = updatedCookie;
};

function getCookie(name) {
    var matches = document.cookie.match(new RegExp(
        "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
};

function deleteCookie(name) {
    setCookie(name, "", {
        expires: -1
    });
};

function _func_animate() {    
    if (_tmpl_isMobile == true) {
        $('.animated').removeClass('animated');
    }
    if (_tmpl_isMobile == false) {
        $('*[data-animated]').each(function() {
            if ( !$(this).parent().parent().hasClass('owl-item') ) {
                $(this).addClass('animated');
            };
        });
    }
    function animated_contents() {
        $('.animated:appeared').each(function (i) {
            var $this    = $(this),
                animated = $(this).data('animated');

            setTimeout(function () {
                $this.addClass(animated);
            }, 100 * i);

        });
    }
    if (_tmpl_isMobile == false) {
        animated_contents();
        $(window).scroll(function () {
            animated_contents();
        });
    }
};

var goodsLoad = {

    page_last_num:  +$(".plist .pgSwch:last").text(),
    page_to_load:   +$(".plist .pgSwchA:last").text() + 1,
    shop_loader: true,

    get_url: function() {
        if (location.href.indexOf("/all") != -1) {
            return location.href + "/" + goodsLoad.page_to_load
        } else if (location.href.indexOf(";") != -1) {
            return location.href.substr(0, location.href.lastIndexOf(";")) + ";" + goodsLoad.page_to_load
        } else {
            return location.href + ";" + goodsLoad.page_to_load
        }
    },

    load: function() {
        if (goodsLoad.page_last_num >= goodsLoad.page_to_load) {
            $("#goods_cont").append('<div id="goods-list-' + goodsLoad.page_to_load + '" class="goods-list with-clear"><div class="g-loading"><img src="/img/loader.gif" alt="Loading..."></div></div></div>');
            $("#goods-list-" + goodsLoad.page_to_load).load(goodsLoad.get_url() + " #goods_cont .list-item");
            goodsLoad.page_to_load++
        } else {
            goodsLoad.shop_loader = false;
            var goods_count = $('.list-item').length;
            $("#goods_cont").append('<div class="g-loading-end">Показаны все товары раздела</div>');
        }
    },

    start: function() {
        $(".plist").css("opacity", "0");
        $(".slist a, .flist a").click(function() {
            goodsLoad.page_to_load = 2
        });
        $(document.body).on('appear', '.plist', function(e, $affected) {
            if (goodsLoad.shop_loader == true) {
                goodsLoad.load();
            };
        });
        $('.plist').appear({
            force_process: true
        });
    }
};