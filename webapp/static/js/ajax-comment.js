jQuery(document).ready(function(jQuery) {

	var web = {

		init : function (){
			$('textarea[name=comment]').val('');
		},
		respond : function (_this){
			var parent = _this.parent().parent().parent().parent();
			parent.find('.form-comment-info').show();
			parent.find('.comment-respond').slideToggle();
		},
		commentSub : function (_this){
			var author  = _this.parent().parent().parent().find('#author').val();
			var email   = _this.parent().parent().parent().find('#email').val();
			var comment = _this.parent().parent().parent().find('#comment').val(); 
			var article_id = _this.attr('article-id');
			var fid     = _this.attr('cid');
			var html    = '';

			if(author.length == 0){
				$('#author').focus();
				layer.tips('× 昵称不得为空', '#author');
				return false;
			}else if(!web.checkEmail(email)){
				$('#email').focus();
				layer.tips('× 请输入正确的邮箱', '#email');
				return false;
			}
			getdata('/Comment/subComment',{
				name 	: author,
				email 	: email,
				comment : comment,
				article_id : article_id,
				fid 	: fid
			},function(data){
				if(data.status > 0){
					layer.msg('√ 评论成功');
					var face = $('.face').val(),
						name = $('.name').val(),
						email = $('.email').val();
					_this.parent().parent().parent().find('#comment').val('');	
					if(fid == 0){
						html+= '<li id="comment-'+ data.data +'" class="comment even thread-even depth-1">';
                  html+= '    <article id="div-comment-27" class="comment-body">';
                  html+= '        <div class="comment-avatar vcard">';
                  html+= '            <img alt="" src="'+ face +'" class="avatar avatar-50 photo" width="50" height="50"></div>';
                  html+= '        <div class="comment-text">';
                  html+= '            <div class="comment-info">';
                  html+= '                <h6 class="comment-author">';
                  html+= '                    '+ name +'';
                  html+= '				</h6>';
                  html+= '            </div>';
                  html+= '            <div class="comment-content">';
                  html+=				comment;
                  html+= '            </div><!-- .comment-content -->';
                  html+= '            <div class="comment-meta">';
                  html+= '                 <time class="comment-date">刚刚</time>';
                  html+= '                <a href="javascript:;" data-id="7" data-caction="up" data-action="comment_up_down" class="like comment-action"><i class="icon icon-like" aria-hidden="true"> 0</i></a>';
                  html+= '                <a href="javascript:;" data-id="7" data-caction="down" data-action="comment_up_down" class="fuck comment-action"><i class="icon icon-dislike" aria-hidden="true"> 0</i></a>';
                  html+= '                <a class="comment-reply-link" rel="nofollow" cid="27"><i class="icon icon-action-undo" aria-hidden="true"></i> 回复</a>';
                  html+= '            </div>';
                  html+= '        </div><!-- .comment-text -->';
                  html+= '    </article><!-- .comment-body -->';
                  html+= '    <ul class="children">';
                  html+= '    </ul>';
                  html+= '    <div id="respond" class="comment-respond" style="display: none;">';
                  html+= '        <div id="commentform" class="comment-form">';
                  html+= '            <div class="comment-avatar">';
                  html+= '                <img alt="" src="'+ face +'" class="avatar avatar-50 photo" width="50" height="50"></div>';
                  html+= '            <div class="comment-author-from">';
                  html+= '                <div class="form-comment-info">';
                  html+= '                    <div class="form-group row" style="display:none;">';
                  html+= '                            <div class="col-xs-12 col-sm-6 col-md-6 comment-form-author">';
                  html+= '                                <input class="form-control" id="author" placeholder="昵称" name="author" value="'+ name +'" required="required" type="text"></div>';
                  html+= '                            <div class="col-xs-12 col-sm-6 col-md-6 comment-form-email">';
                  html+= '                                <input id="email" class="form-control" name="email" placeholder="邮箱" value="'+ email +'" required="required" type="email"></div>';
                  html+= '                    </div>';
                  html+= '                </div>';
                  html+= '                <div class="form-group comment-form-comment">';
                  html+= '                    <div class="comment-textarea">';
                  html+= '                        <textarea id="comment" name="comment" placeholder="" cols="45" rows="8" maxlength="65525" aria-required="true" required="required"></textarea>';
                  html+= '                        <div id="comment_message" style=""></div>';
                  html+= '                        <div class="text-bar">';
                  html+= '                            <button class="btn add_code">';
                  html+= '                                <i class="fa fa-code" aria-hidden="true"></i>';
                  html+= '                            </button>';
                  html+= '                        </div>';
                  html+= '                    </div>';
                  html+= '                </div>';
                  html+= '                <div class="form-submit  row">';
                  html+= '                    <div class="col-form-captcha col-xs-12 col-sm-6 col-md-6"></div>';
                  html+= '                    <div class="col-xs-12 col-sm-6 col-md-6 text-right">';
                  html+= '                        <input name="submit" id="submit" class="btn btn-primary" value="发表评论" article-id="'+ article_id +'" cid="'+ data.data +'" type="submit"></div>';
                  html+= '                </div>';
                  html+= '            </div>';
                  html+= '        </div>';
                  html+= '    </div>';
                  html+= '</li>';
                  $('.comment-list').prepend(html);
					}else{
   						html+= '<li id="comment-87" class="comment even thread-even depth-1">';
                     html+= '    <article id="div-comment-87" class="comment-body">';
                     html+= '        <div class="comment-avatar vcard">';
                     html+= '            <img alt="" src="'+ face +'" class="avatar avatar-50 photo" width="50" height="50">';
                     html+= '        </div><!-- .comment-author -->';
                     html+= '            <div class="comment-text">';
                     html+= '            <div class="comment-info">';
                     html+= '                <h6 class="comment-author">';
                     html+= '                    <a href="javascript:;" rel="external nofollow" class="url">'+ name +'</a> ';                            
                     html+= '                </h6>';     
                     html+= '            </div>';
                     html+= '            <div class="comment-content">';
                     html+= '                <p><a href="javascript:;">@lmj</a>&nbsp;'+ comment +'</p>';
                     html+= '            </div><!-- .comment-content -->';
                     html+= '            <div class="comment-meta">';
                     html+= '                <time class="comment-date">刚刚</time>';        
                     html+= '            </div>';
                     html+= '        </div><!-- .comment-text -->';          
                     html+= '    </article><!-- .comment-body -->';
                     html+= '</li>';
                     _this.parent().parent().parent().parent().parent().hide();
                     _this.parent().parent().parent().parent().parent().parent().find('.children').prepend(html);
					}
					
				}else{
					layer.msg('× 评论出错');
				}
			});
		},
		checkEmail : function (email){
			var myreg = /^([\.a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-])+/; 
	        if(!myreg.test(email)){
	            return false;
	        }
	        return true;
		},
		checkUrl : function (url){
			var RegUrl = new RegExp(); 
			RegUrl.compile("^[A-Za-z]+://[A-Za-z0-9-_]+\\.[A-Za-z0-9-_%&\?\/.=]+$");
			if (!RegUrl.test(url)) { 
				return false; 
			} 
			return true; 
		}
	}

	web.init();
	// 回复
	$(document).on('click','.comment-reply-link',function(){
		web.respond($(this));
	});
	// 评论
	$(document).on('click','#submit',function(){
		web.commentSub($(this));
	});
});
