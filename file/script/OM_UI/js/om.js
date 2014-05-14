jQuery(document).ready(function($) {
    $('#J_estimation').omNumberField({
        'decimalPrecision' : 2
    });
    $('#booking_time').omCalendar({
        minDate : new Date(),
        readOnly : true
    });

    $.validator.addMethod('qc',function(value) {
        return /^[\u4e00-\u9fa5]{1}[A-Z]{1}[A-Z_0-9]{5}$/.test(value);
    },'车牌号码格式不正确');

    $('#p_form').validate({
        'rules' : {
            'post[booking_name]' : {
                'required' : true,
                'minlength' : 5,
                'maxlength' : 10 
            },
            'post[booking_time]' : {
                'required' : true,
                'date' : true
            },
            'post[booking_estimation]' : 'required',
            'post[booking_member]' : {
                'required' : true,
                'minlength' : 2,
                'maxlength' : 3
            },
            'post[booking_brand]' : {
                'required' : true,
                'qc'  : true
            },
            'post[booking_content]' : {
                'maxlength' : 200
            }
        },
        'messages' : {
            'post[booking_name]' : {
                'required': '服务项目名称不能为空',
                'minlength' : '不能少于5个字',
                'maxlength' : '不能多于12个字'
            },
            'post[booking_brand]' : {
                'required' : '车牌不能为空'
            },
            'post[booking_time]' : {
                'required' : '到点时间不能为空',
                'date' : '时间格式错误'
            },
            'post[booking_member]' : {
                'required' : '车主姓名不能为空',
                'minlength' : '名字不能少于2个字',
                'maxlength' : '名字不能多于3个字'
            },
            'post[booking_estimation]' : {
                'required' : '费用预算不能为空'
            },
            'post[booking_content]': {
                'maxlength' : '上传文字200字以内'
            }
        },
        'submitHandler' : function() {
            alert('提交成功');
            $('#p_form').ajaxSubmit();
            $('#p_form')[0].reset();
        },
        'onkeyup':false,
        'validateOnEmpty' : true,
        'showErrors' : function(errorMap,errorList) {
            if(errorList && errorList.length > 0){
                $.each(errorList,function(idx,obj) {
                    $(obj.element).closest('.item').find('label.error').html(obj.message);
                });
            }else{
                $(this.currentElements).closest('.item').find('label.error').html('');
            }
        }
    });
    $('#p_form').find('.fieldinput').focus(function() {
        var f_name =$(this).attr('name');
        var msg = WarnMsg[f_name];
        $(this).addClass('focus').closest('.item').find('label.error').html(msg).addClass('twarn');
    }).focusout(function() {
        $(this).removeClass('focus').closest('.item').find('label.error').removeClass('twarn');
    });
    var WarnMsg = {
        'post[booking_time]' : '预约时间',
        'post[booking_name]' : '填写范围5-12个字',
        'post[booking_member]' : '姓名2-3个字',
        'post[booking_brand]' : '例:苏D12345',
        'post[booking_estimation]' : '例:100.5',
        'post[thumb]' : '上传图片格式为png、jpg，大小2M以内',
        'post[booking_content]' : '上传文字200字以内'
    };
    $('#sub').omButton();
    $('#J_booking_content').keyup(function() {
        $('#j_word_num').text('已经输入'+$(this).val().length + '字');
    });
/*
    Handlebars.registerHelper('list',function(item,options) {
        var out = '<section>';
        for(var i = 0;i<item.length;++i){
            out += '<div>' + options.fn(item[i]) + '</div>';
        }
        out += '</section>';
        return out;
    });
    var m = $('#myview').html();
    var data = {
        article : [
        {
            'title' : '你好1',
            content : '主题1'
        },
        {
            'title' : '你好2',
            content : '主题2'
        },
        {
            'title' : '你好3',
            content : '主题3'
        }
        ]
    };
    var template = Handlebars.compile(m);
    var html = template(data);
    $('#myviewInto').html(html);*/
});
