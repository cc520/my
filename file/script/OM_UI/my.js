jQuery(document).ready(function($) {
    $('#btn').omButton({
        icons:{left:'./edit_add.png',right:'./down.png'},
        width:150,
        disabled:'disabled',
        label : '这其实是按钮',
        onClick:function() {
        }
    });

    $('#btnmenu').omButtonbar({
        width:550,
        btns:[
        {id:'add',label:'新增',icons:{left:'./edit_add.png'}},
        {separtor:true},
        {id:'modify',label:'修改',icons:{left:'./down.png'}}]
    });
    $('#slider').omSlider({
        animSpeed : 100,
        effect : 'fade',
        delay : 0,
        onBeforeSlide:function(index,event) {
        }
    });
    $('#process').omProgressbar({
        value:0,
        text : function(value){
            if(value < 30){
                return '初始化';
            }else if(value > 30 && value <100){
                return '已完成' + value +'%';
            }else{
                return '任务完成';
            }
        },
        onChange : function(newValue,oldValue,event) {

        }
    });
    $('#myclick').click(function() {
        var $process=$('#process');
        var val = $process.omProgressbar('value');
        if(val < 100){
            val = Math.floor(Math.random() * 10) + val;
            $process.omProgressbar('value',val);
            setTimeout(arguments.callee,200);
        }
    });
    $('#tip1').omTooltip({
        trackMouse:false,
        region : 'top',
        showOn : 'click',
        html:'<div style="color:red">欢迎使用omTooltip组件</div>',
        url:'http://www.baidu.com'
    });
    $('#container').omCalendar({dateFormat:'yy-mm-dd',minDate:new Date(),readOnly:true,startDay:1,
    onSelect:function(date,event) {
    }
    });
    $('#combo').omCombo({
        dataSource:[
            {text:'Java',value:'1'},
            {text:'JavaScript',value:'2'},
            {text:'C',value:'3'},
            {text:'PHP',value:'4'},
            {text:'ASP',value:'5'}
        ],
        width:300,
        multi:true,
        multiSeparator:':',
        lazyLoad : true,
        optionField:function(data,index){
            return '<font color="red">'+index+'：</font>'+data.text+'('+data.value+')';
        },
        inputField:function(data,index) {
            return data.text;
        },
        emptyText:'select one option!',
        value:'1',
        editable:false,
        lazyLoad:true,
        listMaxHeight:300
    });

    $('#onlynum').omNumberField();

    $('#dialog-modal').omDialog({
        autoOpen:false,
        height:140,
        modal:true,
        dialogClass :'class1'
    });
    $('#dialog-modaless').omDialog({
        autoOpen:false,
        height:140
    });
    $('#mshow').click(function(argument) {
        $('#dialog-modal').omDialog('open');
    });
    $('#mlshow').click(function() {
        $('#dialog-modaless').omDialog('open');
    });
    $('#tipshow').click(function() {
        $.omMessageTip.show({
            type : 'warning',
            title : '你好',
            content : '不错哦',
            onClose : function() {
                
            },
            timeout : 3000
        });
    });

    $('#make-tasb').omTabs({});
});
