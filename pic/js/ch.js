jQuery(document).ready(function($) {
    $('div.icommend_left').slide({titOnClassName:'ic_sel',triggerTime:0});
    $('div.switcharea').slide({titOnClassName:'g_sel',tagetCell:'.bd .g_c3c2',triggerTime:0});
    $('div.slide_tool').slide({mainCell:'.bd ul',autoPlay:true,vis:4,effect:'top',autoPage:true})
    $('#idx_slide').slide({titCell:'.slide_icon li',mainCell:'.slide_img ul',titOnClassName:'g_sel',autoPlay:true,effect:'leftLoop',prevCell:null,nextCell:null})
    $('#J_sd').slide({titCell:'.sdicon a',titOnClassName:'sel',mainCell:'.sdimg_wrapper',triggerTime:0,effect:'leftLoop',autoPlay:true})
    $('.new .msec .sd').slide({titCell:'.sdicon a',titOnClassName:'sel',mainCell:'.sdimg',triggerTime:0});
    $('#s_key').bind('focusin',function() {
        $(this).prev('label').hide();
        return false;
    }).focusout(function() {
        var $self = $(this);
        if(!$self.val().length){
            $self.prev('label').show();
        }else{
            $self.prev('label').hide();
        }
    }).focusout();
    var H = $(window).height();
    $('div.sub_p_menu').find('.g_b').mouseenter(function() {
        var $self = $(this);
        var dx = $self.attr('dx');
        $self.parent().find('.g_b').removeClass('prevsel');
        $('div.sub_p_menu').find('.g_b_content').hide();
        var $current = $self.siblings().removeClass('g_sel').end().addClass('g_sel').find('.g_b_content').css('top',(-40)*dx + 'px').show();
        $self.prev().addClass('prevsel');
        return false;
    });
    $('div.sub_p_menu').mouseleave(function() {
        $(this).find('.g_b').removeClass('g_sel prevsel').end().find('.g_b_content').hide();
        return false;
    });

    $('div.icommend_left .hd li').mouseenter(function() {
        $(this).siblings().removeClass('g_prev g_next');
        $(this).prev().addClass('g_prev');
        $(this).next().addClass('g_next');
    });

    $('#search_module').find('a').click(function() {
        $('#j_search_m').text($(this).text());
    });

    /* 资讯页面 */
    $('.new .newhost').slide({
        titCell:'.gnav a',
        titOnClassName : 'sel',
        mainCell : '.newhostcontent',
        triggerTime : 0
    });
});
