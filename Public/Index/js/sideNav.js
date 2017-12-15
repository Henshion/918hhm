;(function(window,document,$){
	'use strict';
	var plugName = 'pageScroll',
		config = {
			'container':'.blog-bd',
			'list' : '.menu-list',
			'goTop':'.goTop',
			'active' : 'active',
			'left' : 16,
		};
	
	//页面滚动构造函数
	function PageScroll(ele,option){
		this._ele = ele;
		this._option = $.extend(config,option);
		this._container = $(this._option.container);
		this._target = this._container.children();
		this._list = $(this._option.list,ele).children();
		this._active = this._option.active;
		this._index = 0;
		this._lastIndex = null;
		this._init();
	};

	PageScroll.prototype = {
		//初始化
		_init : function(){
			var This = this;		
			this._cal();
			this._handler();
			window.on('resize',function(){
				This._cal();
			})
		},
		//调整高度
		_cal : function(){
			var initTop = Math.max(($(window).height()-this._ele.height())/2,0),
				width = this._target.eq(0).width(),
				height = $(window).height()/4,
				initLeft = ($(window).width()-width)/2+width+this._option.left,
				This = this;
			this._ele.css({'top':initTop,'left':initLeft});
			this._targetTop = calTop();
			function calTop(){
				var arrary = [];
				$.each(This._target,function(){
					arrary.push(Math.floor($(this).offset().top-height));
				})
				return arrary;
			}
		},
		//处理时间
		_handler : function(cb){
			var This = this,
				top,
				length;
			$(this._option.goTop,this._ele).on('click',function(){
				$('document,body').animate({'scrollTop':0});
			})
			this._list.on('click',function(){
				This._index = $(this).index();
				This._move();
			});
			window.on('scroll',function(){
				top = $(this).scrollTop();
				length = $.grep(This._targetTop,function(value){
					return top >= value;
				}).length;
				if(length){
					This._list.eq(length-1).addClass(This._active).siblings().removeClass(This._active);
				}else{
					This._list.eq(0).removeClass(This._active);
				}
				cb&&cb.call(This,top);
			});
		},
		//移动
		_move : function(){
			var This = this;
			$('document,body').animate({'scrollTop':This._targetTop[This._index]});
		}
	};

	function sideNav(ele,option){
		PageScroll.call(this,ele,option);
		this._num = $(this._option.num,this._ele);
	}

	sideNav.prototype = $.extend(PageScroll.prototype,{
		//初始化
		_init : function(){
			var This = this;		
			this._cal();
			this._handler(this._cb);
			this._pageHeight =  document.height();
			this._line = $(this._option.line,this._ele);
			this._a = 0 ;
			this._k = 0;
			window.on('resize',function(){
				This._cal();
			})
		},
		//圆度以及公里数
		_cb : function (top){
			var prop = (top/this._pageHeight)*180;
			this._num.text(top);
			this._line.css('transform','rotate('+prop+'deg)');
			var k = top - this._k;
			this._k = top;
			//console.log(k);
		}
	})
	$.fn[plugName] = function(ele,option){
		$.each($(this),function(){
			if(!$(this).data('plug_' + plugName)){
				$.data($(this),'plug_' + plugName,new sideNav(ele,option))
			}
		})
	}

})($(window),$(document),jQuery);