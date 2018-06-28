(function($){

	var app = {

		init : function(){
			this.scroll();
		},
		loadMore : function(data,tp){
            
			var _this = $('#fa-loadmore');
			if(data.code == 200){
				app.page++;
				var html = '';
				$.each(data.data,function(index,value){
					var type = value.type;
					var tagLength = value.tags.length;
					if(type == 1){
						// 纯文本
						html+='<div class="ajax-load-con content posts-default wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">';
	                    html+='        <div class="content-box">';
	                    html+='            <div class="posts-default-box">';
	                    html+='                <div class="posts-default-content">';
	                    html+='                    <div class="posts-text">';
	                    html+='                        <a href="/'+ value.id +'">'+ value.content +'</a>';
	                    html+='                    </div>';
	                    html+='                    <div class="posts-default-info">';
	                    html+='                        <ul>';
	                    html+='                            <li class="ico-cat"><i class="icon-list-2"></i> <a href="//category/'+ value.category +'">'+ value.category +'</a></li></li>';
	                    html+='                            <li class="ico-time"><i class="icon-clock-1"></i> '+ formate.date('yyyy-MM-dd', value.create_time * 1000) +'</li>';
	                    html+='                            <li class="ico-eye hidden-xs hidden-sm"><i class="icon-eye-4"></i>'+ value.view +'</li>';
	                    html+='                            <li class="ico-like hidden-xs hidden-sm"><i class="icon-heart"></i>'+ value.like +'</li>';
	                    html+='                        </ul>';
	                    html+='                    </div>';
	                    html+='               </div>';
	                    html+='            </div>';
	                    html+='        </div>';
	                    html+='    </div>';
					}else if(type == 2){
						// 单图文（大）
						html += '<div class="ajax-load-con content posts-default wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">';
                        html += '    <div class="content-box">';
                        html += '        <div class="posts-default-img">';
                        html += '            <a href="/'+ value.id +'"';
                        html += '               title="'+ value.title +'" target="_blank">';
                        html += '                <div class="overlay"></div>';

                        html += '                    <img class="lazy thumbnail" data-original="" src="http://172.23.117.1:721'+ value.face[0]+'" alt="'+ value.title +'" style="display: block;">';

                        html += '            </a>';
                        html += '        </div>';
                        html += '        <div class="posts-default-box">';
                        html += '            <div class="posts-default-title">';
                        html += '                <div class="post-entry-categories">';
                        $.each(value.tags,function(k,v){
                        	html += '                        <a href="//tag/'+ v +'" rel="tag">'+ v +'</a>';
                        })
                        html += '                </div>';
                        html += '                <h2><a href="'+ value.id +'" title="'+ value.title +'" target="_blank">'+ value.title +'</a>';
                        html += '                </h2>';
                        html += '            </div>';
                        html += '            <div class="posts-default-content">';
                        html += '                <div class="posts-text">'+ value.introduction +'</div>';
                        html += '                <div class="posts-default-info">';
                        html += '                    <ul>';
                        html += '                        <li class="ico-cat"><i class="icon-list-2"></i> <a href="//category/'+ value.category +'">'+ value.category +'</a></li></li>';
                        html += '                        <li class="ico-time"><i class="icon-clock-1"></i> '+ formate.date('yyyy-MM-dd', value.create_time * 1000) +'</li>';
                        html += '                        <li class="ico-eye hidden-xs hidden-sm"><i class="icon-eye-4"></i>'+ value.view +'</li>';
                        html += '                        <li class="ico-like hidden-xs hidden-sm"><i class="icon-heart"></i>'+ value.like +'</li>';
                        html += '                    </ul>';
                        html += '                </div>';
                        html += '            </div>';
                        html += '        </div>';
                        html += '    </div>';
                        html += '</div>';
					}else if(type == 3){
						// 单图文（小）
						html +='<div class="ajax-load-con content wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">';
                        html +='        <div class="content-box posts-gallery-box">';
                        html +='            <div class="posts-gallery-img">';
                        html +='                <a href="//'+ value.id +'" title="'+ value.title +'">';
                        
                        html +='                        <img class="lazy thumbnail" data-original="" src="http://172.23.117.1:721'+ value.face[0] +'" alt="'+ value.title +'" style="display: block;">';
                        
                        html +='                </a>';
                        html +='            </div>';
                        html +='            <div class="posts-gallery-content">';
                        html +='                <h2>';
                        html +='                    <a href="/'+ value.id +'" title="'+ value.title +'">'+ value.title +'</a>';
                        html +='                </h2>';
                        html +='                <div class="posts-gallery-text">'+ value.introduction +'</div>';
                        html +='                <div class="posts-default-info posts-gallery-info">';
                        html +='                    <ul>';
                        html +='                        <li class="ico-cat"><i class="icon-list-2"></i> <a href="//category/'+ value.category +'">'+ value.category +'</a></li></li>';
                        html +='                        <li class="ico-time"><i class="icon-clock-1"></i> '+ formate.date('yyyy-MM-dd', value.create_time * 1000) +'</li>';
                        html +='                        <li class="ico-eye hidden-xs hidden-sm"><i class="icon-eye-4"></i> '+ value.view +'</li>';
                        html +='                        <li class="ico-like hidden-xs hidden-sm"><i class="icon-heart"></i> '+ value.like +'</li>';
                        html +='                    </ul>';
                        html +='                </div>';
                        html +='            </div>';
                        html +='        </div>';
                        html +='    </div>';
					}else if(type == 4){
						html +='<div class="ajax-load-con content wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">';
                        html +='        <div class="content-box posts-image-box">';
                        html +='            <div class="posts-default-title">';
                        html +='                <div class="post-entry-categories">';
                        $.each(value.tags,function(k,v){
                        	html +='                <a href="//tag/'+ v +'" rel="tag">'+ v +'</a>';
                        });
                        html +='                </div>';
                        html +='                <h2><a href="//'+ value.id +'" title="'+ value.title +'" target="_blank">'+ value.title +'</a></h2>';
                        html +='            </div>';
                        html +='            <div class="post-images-item">';
                        html +='                <ul>';
                        $.each(value.face,function(k,v){
	                        html +='                        <li>';
	                        html +='                            <div class="image-item">';
	                        html +='                                <a href="//'+ value.id +'">';
	                        html +='                                    <div class="overlay"></div>';
	                        html +='                                    <img class="lazy thumbnail" data-original="" src="http://172.23.117.1:721'+ v +'" alt="'+ value.title +'" style="display: block;">';
	                        html +='                                </a>';
	                        html +='                            </div>';
	                        html +='                        </li>';
                        });
                        html +='                </ul>';
                        html +='            </div>';
                        html +='            <div class="posts-default-content">';
                        html +='                <div class="posts-text">'+ value.introduction +'</div>';
                        html +='            </div>';
                        html +='            <div class="posts-default-info">';
                        html +='                <ul>';
                        html +='                    <li class="ico-cat"><i class="icon-list-2"></i> <a href="//category/'+ value.category +'">'+ value.category +'</a></li></li>';
                        html +='                    <li class="ico-time"><i class="icon-clock-1"></i> '+ formate.date('yyyy-MM-dd', value.create_time * 1000) +'</li>';
                        html +='                    <li class="ico-eye hidden-xs hidden-sm"><i class="icon-eye-4"></i> '+ value.view +'';
                        html +='                    </li>';
                        html +='                    <li class="ico-like hidden-xs hidden-sm"><i class="icon-heart"></i> '+ value.like +'</li>';
                        html +='                </ul>';
                        html +='            </div>';
                        html +='        </div>';
                        html +='    </div>';
					}
				});
				(tp == 'submenu') ? $('.ajax-load-box').html(html) : $('.ajax-load-box').append(html)
				_this.html('加载更多');
			}else{
                (tp == 'submenu') ? $('.ajax-load-box').html('') : '';
				_this.html('无更多数据');
			}
		},
		loadComplated : false,
		page : 2,
		scroll : function(){
			//滚动到底部加载数据
			$(window).on('scroll',function(){
				var _this    = $('#fa-loadmore');
                var category = $('.current').data('category');
				var scrollTop 	 = $(this).scrollTop(),
					windowHeight = $(this).height(),
					scrollHeight = $(document).height();

				if (scrollTop + windowHeight == scrollHeight && app.loadComplated == false) {
					app.loadComplated = true;
					_this.addClass('is-loading');
					_this.html('<i class="icon-spin6 animate-spin"></i> 加载中...');
					getdata('/Index/loadMore',{
						page     : app.page,
                        category : category
					},function(data){
                        app.loadComplated = false;
						app.loadMore(data,'load-more');
						_this.removeClass('is-loading');
					});
				}
			});
		},
        submenu : function(_this){
            app.page = 1;
            _this.addClass('current').siblings().removeClass('current');
            var category = _this.data('category');
            getdata('/Index/loadMore',{
                page     : app.page,
                category : category
            },function(data){
                app.loadMore(data,'submenu');
                //关闭layer.load();
                layer.closeAll('loading');
            });
        }
	};

	app.init();
    // SubMenu
    $(document).on('click','.post-nav span',function(){
        //加载层-默认风格
        layer.load();
        app.submenu($(this));
    });
})(jQuery);


