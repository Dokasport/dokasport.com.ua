function uniFlyMenu() {
	if($('#unicheckout').length) return;
	
	var prodPage = uniJsVars.fly_menu_product && $('#product').length;
	
	var init = function() {		
		$('#fly-menu').remove();
		
		var windowWidth = $(window).width(),
			breakpoint = 992,
			desktop_menu = (uniJsVars.fly_menu_desktop && windowWidth > breakpoint) ? true : false,
			mobile_menu = (uniJsVars.fly_menu_mobile && windowWidth <= breakpoint) ? true : false,
			html = '';
			
		if(!desktop_menu && !mobile_menu) return;
		
		html = '<div id="fly-menu" class="fly-menu"><div class="container"><div class="row">';
			
		if(desktop_menu) {
			if(prodPage) {
				html += '<div class="fly-menu__product col-md-8 col-lg-8 col-xxl-12">';
				html += '<div class="fly-menu__product-name"><span>'+$('.heading-h1 h1').text()+'</span></div>';
				html += '<div class="fly-menu__product-price price">'+$('#product .price').html()+'</div>';
				
				var btn = $('#product').find('.product-page__add-to-cart');
				
				html += '<button type="button" class="fly-menu__product-btn '+btn.attr('class').replace('btn-lg', '')+'" data-pid="'+btn.data('pid')+'">'+btn.html()+'</button>';
				html += '</div>';
			} else {
				html += '<div class="fly-menu__menu col-md-3 col-lg-3 col-xxl-4"><div id="menu" class="menu menu1">'+$('header #menu').html()+'</div></div>';
				html += '<div class="fly-menu__search col-md-5 col-lg-5 col-xxl-8">'+$('header #search').html()+'</div>';
			}
			
			html += '<div class="fly-menu__phone col-xs-3 col-md-2 col-lg-2 col-xxl-4">'+$('.header-phones__main').html()+'</div>';
		} 
		
		if(mobile_menu){
			html += '<div class="fly-menu__block fly-menu__menu-m col-xs-3">';
			html += '<i class="fly-menu__icon fa fa-bars"></i>';
			html += '<div class="fly-menu__wrap"><div class="fly-menu__overlay"></div><div id="menu" class="menu menu1">'+$('header #menu').html()+'</div></div>';
			html += '</div>';
			
			html += '<div class="fly-menu__block fly-menu__search-m col-xs-3">';
			html += '<i class="fly-menu__icon fa fa-search"></i>';
			html += '<div class="fly-menu__wrap">'+$('header #search').html()+'<div class="fly-menu__overlay"></div></div>';
			html += '</div>';
		}
		
		html += '<div class="fly-menu__block fly-menu__account col-xs-3 col-md-1 col-lg-1 col-xxl-2">';
		html += '<i class="fly-menu__icon fly-menu__icon-account fa fa-user"></i>';
		html += '<ul class="fly-menu__account-dropdown dropdown-menu dropdown-menu-right">'+$('#top #account ul').html()+'</ul>';
		html += '</div>';

		html += '<div class="fly-menu__block fly-menu__cart col-xs-3 col-md-1 col-lg-1 col-xxl-2">';
		html += '<i class="fly-menu__icon fly-menu__icon-cart fa fa-shopping-bag"></i>';
		html += '<span class="fly-menu__cart-total-items">'+$('header .header-cart__total-items').text()+'</span>';
		html += '<div class="fly-menu__cart-dropdown header-cart__dropdown dropdown-menu dropdown-menu-right">'+$('header .header-cart__dropdown').html()+'</div>';
		html += '</div>';
		html += '</div></div></div>';
		
		menuData = html.replace(/main-menu__collapse/g, "fly-menu__collapse");
		
		$(window).scroll(function(){
			if($(this).scrollTop() > 100 && !$('#fly-menu').length) {
				uniAddCss('catalog/view/theme/unishop2/stylesheet/flymenu.css');
					
				$('html body').append(menuData);
				
				var block = $('.fly-menu__block'),
					block_i = $('.fly-menu__icon');
					
				block_i.on('click', function(){
					$(this).parent().toggleClass('show');
							
					block.not($(this).parent()).removeClass('show');
							
					if(block.hasClass('show')){
						$('html body').addClass('fly-menu-open');
					} else {
						$('html body').removeClass('fly-menu-open');
					}
				});
					
				$('main, footer, .fly-menu__overlay').on('click', function(){
					block.removeClass('show');
					$('html body').removeClass('fly-menu-open');
				});
						
				if(desktop_menu) {
					uniMenuAim();
					uniMenuBlur();
						
					if(prodPage) {
						$(document).on('change', '#product input, #product select', function() {
							setTimeout(function() { 
								$('.fly-menu__product-price').html($('.product-page__price').html());
							}, 350);
						});

						$('.fly-menu__product-btn').click(function() {
							$('#button-cart').click();
						});
			
						$('.fly-menu__product-name').mouseover(function () {
							var boxWidth = $(this).width();
									
							$text = $('.fly-menu__product-name span');
							$textWidth = $('.fly-menu__product-name span').width();

							if ($textWidth > boxWidth) {
								$($text).animate({left: -(($textWidth+20) - boxWidth)}, 500);
							}
						}).mouseout(function () {
							$($text).stop().animate({left: 0}, 500);
						});
					} else {
						$('.fly-menu .live-search__ul').wrap('<div class="fly-menu__wrap"></div>');
					}
				}
					
				if(mobile_menu) {
					$('.fly-menu__menu-m > i').on('click', function() {
						$('.menu-wrap li').removeClass('open');
						$('.fly-menu .menu__collapse').removeAttr('style')
					});
						
					$('.fly-menu__search-m > i').on('click', function() {
						if($('.fly-menu__search-m').hasClass('show')) {
							$('.fly-menu__search-m .form-control').focus();
						}
					});
				}
			}
			
			$(document).ajaxStop(function() {
				$('.fly-menu__cart-dropdown').html($('header .header-cart__dropdown').html());
				$('.fly-menu__cart-total-items').text($('header .header-cart__total-items').text());
			});
		});
	};
	
	init();
	
	let windowWidth = $(window).width();

	$(window).resize(function() {
		if($(this).width() != windowWidth) {
			windowWidth = $(this).width();
			init();
		}
	});
	
	$(window).scroll(function(){
		if($(this).scrollTop() > 200) {
			$('#fly-menu').addClass('show');
		} else {
			$('#fly-menu, #fly-menu .row > div').removeClass('show');
			$('html body').removeClass('fly-menu-open');
		}
	});
}
 
$(function() {
	if(uniJsVars.fly_menu_desktop || uniJsVars.fly_menu_mobile) {
		uniFlyMenu();
		fly_menu_enabled = 1;
	} else {
		fly_menu_enabled = 0;
	}
	
	if(uniJsVars.fly_cart && !fly_menu_enabled) {
		if($(window).width() > 992) {
			$(window).scroll(function(){		
				$(this).scrollTop() > 200 ? $('#cart').addClass('fly') : $('#cart').removeClass('fly');
			});
		}
	}
});