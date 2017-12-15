	
//点击或hover事件调用

var $pop = $('.plug-pop');
$.each($pop,function(){
	var data = $(this).data('pop'),
		option = getOption(data);
	$(this).Popup(option);
});

//导航条调用
var $nav = $('.plug-nav');
$.each($nav,function(){
	var data = $(this).data('nav'),
		option = getOption(data);
	$(this).RunNav($(this),option);
});

//轮播调用
var $carousel = $('.plug-carousel');
$.each($carousel,function(){
	var data = $(this).data('carousel'),
		option = getOption(data);
	$(this).Carousel($(this),option);
});

//侧导航调用
var $pageScroll = $('.blog-SideNav');

$pageScroll.pageScroll($pageScroll,{
'container' : '.blog-bd',
'list' : '.menu-list',
'goTop':'.goTop',
'num' : '.num',
'line' : '.extend-line'
});
function getOption(data){
	var option = {},
		op = data.replace('hover','mouseenter').split(';');
	$.each(op,function(){
		if(this!=''){
			var attr = this.split(':');
			option[attr[0]] = attr[1];
		};
	});
	return option;
};