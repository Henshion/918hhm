;(function(window,document,$){
	'use strict';

	//插件名以及默认配置
	var	plugName = 'RunNav',
		config = {
			'target' :'',
			'event' : 'mouseenter',
			'class' : 'active',
			'range' : '',
		};

	//RunNav构造函数
	function RunNav(ele,option){
		this._ele = $(ele);
		this._eleIndex = this._ele.find('.index-box').children();
		this._init(option);
		this._index = null;
	};

	//RunNav原型
	RunNav.prototype = {
		//参数配置并初始化
		_init : function(option){
			this._option = $.extend(config,option);
			this._range = this._option.range||this._ele.parent();
			this._target = $('#'+this._option.target).css('display','none');
			this._tarIndex = this._target.find('.index-box').children().css('display','none');
			this._handle(this._option.event,this._option.class);
		},
		//处理
		_handle : function(event,name){
			var This = this;
			this._range.hover(function(){
				This._ele.parent().css('z-index',999);
				This._target.css('display','block');
			},function(){
				This._ele.parent().css('z-index',0);
				This._target.css('display','none');
				This._last && This._tarIndex.eq(This._last.index()).css('display','none');
				This._last && This._last.removeClass(name);
			})
			$.each(this._eleIndex,function(i){
				$(this).on(event,function(){
					if(!This._index){
						This._last && This._last.removeClass(name) && This._tarIndex.eq(This._last.index()).css('display','none');
						This._last = $(this).addClass(name);
						This._tarIndex.eq(i).css('display','block');
					}
				})
			})
		}
	};

	$.fn[plugName] = function(ele,option){
		$.each($(this),function(){
			if(!$.data(this,'plugin_' + plugName)){
				$.data(this,'plugin_' + plugName,new RunNav(this,option));
			}
		})
	}
	/*搜索*/
$(document).ready(function(){
  $(".sousuo").click(function(){
    $(".sousuo-box").slideDown();
  });
  $('.wx').click(function(){
    $(".sousuo-box").slideUp();
  });
});

})($(window),$(document),jQuery);