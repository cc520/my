jQuery(document).ready(function($) {
    $('div.icommend_left').slide({titOnClassName:'ic_sel'});
    $('div.switcharea').slide({titOnClassName:'g_sel',tagetCell:'.bd .g_c3c2',triggerTime:0});
    $('div.slide_tool').slide({mainCell:'.bd ul',autoPlay:true,vis:4,effect:'top',autoPage:true})
    $('#idx_slide').slide({titCell:'.slide_icon li',mainCell:'.slide_img ul',titOnClassName:'g_sel',autoPlay:true,effect:'leftLoop',prevCell:null,nextCell:null})
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

    $('#J_sd').slide({titCell:'.sdicon a',titOnClassName:'sel',mainCell:'.sdimg',triggerTime:0})
});
