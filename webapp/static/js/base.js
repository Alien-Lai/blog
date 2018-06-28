//获取url参数 fn
function GetRequest(queryString) {
    var url = arguments[0] ? arguments[0] : location.search; //获取url中"?"符后的字串
    var theRequest = new Object();
    if (url.indexOf("?") != -1) {
        var str = url.substr(1);
        strs = str.split("&");
        for (var i = 0; i < strs.length; i++) {
            theRequest[strs[i].split("=")[0]] = unescape(strs[i].split("=")[1]);
        }
    }
    return theRequest;
}
var Request = new Object();
Request = GetRequest();

/*所有api方法接口集合*/
//ajax发起请求的方法
var action = [], obj = [], callback = [], tpl_id, tpl_isshow;
var done = true;
function getdata(action, obj, callback, showLoading = true) {
    if (!arguments[1]) var obj = {};
    if (!arguments[2]) var callback = function (data) {
        console.log('default success', data);
    };
    if (!arguments[0]) {
        console.log('without action');
        return false;
    } else if (typeof arguments[0] == 'object') {
        var mod = arguments[0];
        var action = mod.action;
        obj = mod.obj ? mod.obj : obj;
        callback = mod.callback ? mod.callback : callback;
    }
    var param = $.param(obj);
    var url = action;

    if(done){
        $.ajax({
            type: 'post',//HTTP请求类型
            url: url,
            data: obj,
            dataType: "json",
            beforeSend: function(){
                !showLoading ? '' : layer.load(2);
                done = false;
                // load();
            },
            success: function (res) {
                !showLoading ? '' : layer.closeAll('loading');
                callback(res);
                done = true;
            },
            complete: function(e){
                // load({
                //     isClose: true
                // });
            },
            error: function (a, b, c) {
                console.log(b);
            }
        });
    }
}
// 转化格式
var formate = new Object();
/*
* fmt: 格式，如yyyy-MM-dd hh:mm:ss,
* date: 要转化的日期，不填就默认是当前时间，可以是时间戳，字符串日期
**/
formate.date = function(fmt, date){
    if(date && (typeof date === 'string' || typeof date === 'number')) date = new Date(date);
    if(!date) date = new Date();
    if (/(y+)/.test(fmt)) {
        fmt = fmt.replace(RegExp.$1, (date.getFullYear() + '').substr(4 - RegExp.$1.length));
    }
    var o = {
        'M+': date.getMonth() + 1,
        'd+': date.getDate(),
        'h+': date.getHours(),
        'm+': date.getMinutes(),
        's+': date.getSeconds()
    };
    for (var k in o) {
        if (new RegExp('(' + k + ')').test(fmt)) {
          var str = o[k] + '';
          fmt = fmt.replace(RegExp.$1, (RegExp.$1.length === 1) ? str : padLeftZero(str));
        }
    }

    /*
    * 月份补参
    */
    function padLeftZero(str) {
        return ('00' + str).substr(str.length);
    };
    return fmt;
};
// 分页
var pageAction = '',pageParam = {};
var pagenav = function (_total, _param, action, callback){
    var self = this;
    var pc = 'pi-pagination';
    var page = function(s){
        return '.'+ pc + '-' + s;
    }
    // 当前页
    self.curr = 1;
    // 总页数
    self.total = _total >= 0 ? _total : 20;
    if(action && action.length){
        pageAction = action;
    }
     if(count(_param) > 0){
        pageParam = _param;
    }
    self.action = action || pageAction;

    function dom() {
        var str = '';
        var curr = self.curr;
        total = self.total
        // 上一页
        var preview = '<span class="pi-pagination-preview">前一页</span>';
        // 下一页
        var next = '<a href="javascript:;" class="pi-pagination-next">后一页</a>';
        // ...
        var dot = '<span class="pi-pagination-dot">...</span>';
        // 页数以及选中页
        var num = function(n){ 
            return n == curr 
                ? '<a href="javascript:;" class="pi-pagination-num pi-pagination-current">'+ n +'</a>' 
                : '<a href="javascript:;" class="pi-pagination-num ">'+ n +'</a>';
        };
        // 上一页
        str += preview;
        // 第一页
        str += num(1);
        // 第一个...出现的情况
        if(curr >= 4) str += dot;
        // 选中的前一页
        if(curr - 1 > 2) str += num(curr -2);
        if(curr - 2 >= 1) str += num(curr -1);
        // 当前页
        if(curr > 1) str += num(curr);
        // 当前后一页
        if(curr + 1 < total && curr != total - 1) str += num(curr+1);
        if(curr + 2 < total && curr != total - 1) str += num(curr + 2);
        // 第二个...出现情况
        if(curr + 3 < total) str += dot;
        // 倒数第二页
        // if(curr == total -3) str += num(total - 1);
        // 总页数
        if(curr < total) str += num(total);
        // 下一页
        str += next;

        $('#J_PageNav').find('.'+pc).html(str);
    };
    // 初始化
    init();
    function init(){
        var pagen = '<div class="pi-pagination"></div>';
        if($('#J_PageNav').length && self.total > 0){
            $('.no-data').remove();
            $('#J_PageNav').html('').append(pagen).prev().show();
            if(self.total == 1){
                $('#J_PageNav').hide();
            }else{
                $('#J_PageNav').show();
            }
            dom();
        }else{
            if(!$('.no-data').length){
                $('#J_PageNav').hide().prev().hide();
                $('#J_PageNav').hide().after('<div class="no-data"><div><i></i>暂无数据</div></div>');
            }
            noData();
        }
    };
    // 请求
    function query(){
        pageParam.page = self.curr;
        if(action){
            getdata(self.action, pageParam, function(res){
                callback(res);
                dom();
                scrollTo(0,0);
            });
        }
    };
    // 上一页
    $(document).on('click', page('preview'), function(){
        self.curr = $(page('current')).text();
        self.curr = parseInt(self.curr) -1;
        if(self.curr < 1){
            self.curr = 1;
        }else{
            query();
        }
    });
    // 数码页
    $(document).on('click', page('num'), function(){
        self.curr = parseInt($(this).text());
        query();
    });
    // 下一页
    $(document).on('click', page('next'), function(){
        self.curr = $(page('current')).text();
        self.curr = parseInt(self.curr) +1;
        if(self.curr > self.total){
            self.curr = self.total;
        }else{
            query();
        }
    });

}
/**
 * ie8下面的check,radio
 */
function checked4ie8(){
    var input = $('[type="checkbox"]');
    input.each(function(i){
        if($(input[i]).is(':checked')){
            $(input[i]).addClass('checked');
        }else{
            $(input[i]).removeClass('checked');
        }
    }).bind('click', function(){
        checked4ie8();
    })
};
// 没有数据的高度
function noData(){
    if(!$('.no-data').length) return false;
    var t = $('.no-data').offset().top,
        wh = $(window).height();
    var h = wh - t - 80;
    $('.no-data').height(h);
    bodyHeight();
};
/* loading
*   @param option: eml: selector, isClose: true ->close load 
*/
function load(option){
    if(!arguments[0]){
        var option = {};
    }
    if(!option.isClose && !$('.loading').length){
        var loading = '<div class="loading"><div><i class="icon-loading"></i></div></div>';
        var selector = $('body');
        if(option.eml) selector = $(option.eml);
        selector.append(loading);
    }else{
        $('.loading').remove();
    }
};

/*获取对象、数组的长度、元素个数
 *@param obj 要计算长度的元素，可以为object、array、string
 */
function count(obj){
    var objType = typeof obj;
    if(objType == "string"){
        return obj.length;
    }else if(objType == "object"){
        var objLen = 0;
        for(var i in obj){
            objLen++;
        }
        return objLen;
    }
    return false;
}
/*倒计时*/
var cutdownTime = {
    time: 60,
    cut: function(){
        if(cutdownTime.time > 0) {
            cutdownTime.time--;
            $('.getCode').text(cutdownTime.time + '秒后重新获取');
            cutdownTime.ct = setTimeout(cutdownTime.cut, 1000)
        }else{
            cutdownTime.time = 60;
            $('.getCode').text('获取验证码').removeClass('disabled');
            window.clearTimeout(cutdownTime.ct);
        }
    },
    close: function(){
        cutdownTime.time = 60;
        $('.getCode').text('获取验证码').removeClass('disabled');
        window.clearTimeout(cutdownTime.ct);
    },
    init: function(){
        $(document).on('click', '.getCode', function(){
            if(/^0?1[3|4|5|8|7][0-9]\d{8}$/.test($('#registePhone').val()) && !$(this).hasClass('disabled')){
                $(this).removeClass('on').addClass('disabled');
                cutdownTime.cut();
            }
        })
    }
}
// 转为utf8
function toUtf8(str) {   
    var out, i, len, c;   
    out = "";   
    len = str.length;   
    for(i = 0; i < len; i++) {   
        c = str.charCodeAt(i);   
        if ((c >= 0x0001) && (c <= 0x007F)) {   
            out += str.charAt(i);   
        } else if (c > 0x07FF) {   
            out += String.fromCharCode(0xE0 | ((c >> 12) & 0x0F));   
            out += String.fromCharCode(0x80 | ((c >>  6) & 0x3F));   
            out += String.fromCharCode(0x80 | ((c >>  0) & 0x3F));   
        } else {   
            out += String.fromCharCode(0xC0 | ((c >>  6) & 0x1F));   
            out += String.fromCharCode(0x80 | ((c >>  0) & 0x3F));   
        }   
    }   
    return out;   
}

function p(data){
    layer.msg(data);
}

function checkField(json){
    
}
// function bodyHeight(){
//     var wh = $(window).height();
//     var h = $('.footer').height() + $('.header').siblings('.page')[0].offsetTop + 30;
//     if($('.pay-way').length){
//         h += 100;
//     }
//     $('.header').siblings('.page').css('min-height', '0');
//     var ch = wh - $('.header').siblings('.page').height() <= h ? $('.header').siblings('.page').height() : wh - h;
//     ch = ch < 500 ? 500 : ch;
//     $('.header').siblings('.page').css('min-height', ch);

//     if($('.refund-record').length == 1){
//         var ot = $('.refund-record').offset().top,
//             oh = $('.refund-record').height();
//         if(wh > ( ot + oh + 30)){
//             $('.refund-record').css('min-height', wh - ot - oh + 80);
//         }
//     }
// }
// // body补足高度
// $(function(){ 
//     cutdownTime.init();
//     bodyHeight();
//     window.resize = function(){
//         bodyHeight();
//         noData();
//     }
//     checked4ie8();
// })
