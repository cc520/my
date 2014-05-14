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
    },'���ƺ����ʽ����ȷ');

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
                'required': '������Ŀ���Ʋ���Ϊ��',
                'minlength' : '��������5����',
                'maxlength' : '���ܶ���12����'
            },
            'post[booking_brand]' : {
                'required' : '���Ʋ���Ϊ��'
            },
            'post[booking_time]' : {
                'required' : '����ʱ�䲻��Ϊ��',
                'date' : 'ʱ���ʽ����'
            },
            'post[booking_member]' : {
                'required' : '������������Ϊ��',
                'minlength' : '���ֲ�������2����',
                'maxlength' : '���ֲ��ܶ���3����'
            },
            'post[booking_estimation]' : {
                'required' : '����Ԥ�㲻��Ϊ��'
            },
            'post[booking_content]': {
                'maxlength' : '�ϴ�����200������'
            }
        },
        'submitHandler' : function() {
            alert('�ύ�ɹ�');
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
        'post[booking_time]' : 'ԤԼʱ��',
        'post[booking_name]' : '��д��Χ5-12����',
        'post[booking_member]' : '����2-3����',
        'post[booking_brand]' : '��:��D12345',
        'post[booking_estimation]' : '��:100.5',
        'post[thumb]' : '�ϴ�ͼƬ��ʽΪpng��jpg����С2M����',
        'post[booking_content]' : '�ϴ�����200������'
    };
    $('#sub').omButton();
    $('#J_booking_content').keyup(function() {
        $('#j_word_num').text('�Ѿ�����'+$(this).val().length + '��');
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
            'title' : '���1',
            content : '����1'
        },
        {
            'title' : '���2',
            content : '����2'
        },
        {
            'title' : '���3',
            content : '����3'
        }
        ]
    };
    var template = Handlebars.compile(m);
    var html = template(data);
    $('#myviewInto').html(html);*/
});
