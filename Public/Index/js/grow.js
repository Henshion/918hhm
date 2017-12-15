;(function(window,document,$){
	'use strict'
	var $growLi = $('.container-item','.bd-grow').children();
	$growLi.hover(function(){
		$(this).addClass('active');
	},function(){
		$(this).removeClass('active');
	});
})($(window),$(document),jQuery);