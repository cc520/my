jQuery(document).ready(function($) {
    var point=new AMap.LngLat(116.404,39.915);
    var isShow=false;
    var opts={
        center:point,
        level:15
    };
    var mapObj=new AMap.Map('container',opts);

    
    function addMarker(){
        marker=new AMap.Marker({
            icon:'q5.png',
            position:point,
            draggable:true
        });
        marker.setMap(mapObj);
    }
    addMarker();

    var _panomarker=new AMap.Marker({
        //draggable:true
    });

    AMap.event.addListener(_panomarker,'dragend',function(e) {
        if(pano != undefined)
            pano.setPosition(e.lnglat);
    });
    $('#J_addmark').click(function() {
        addMarker();
    });
    var panoLayer=new AMap.PanoramaLayer();
    $('#J_showjj').toggle(function(event) {
        panoLayer.setMap(mapObj);
        isShow = true;
    },function() {
        panoLayer.setMap(null);
        _panomarker.setMap(null);
        isShow =false;
    });

    $('#J_loc').click(function(event) {
        toolBar.doLocation();
    });

    mapObj.plugin(['AMap.ToolBar','AMap.MapType'],function() {
        mt=new AMap.MapType({defaultType:0});
        mapObj.addControl(mt);
        toolBar=new AMap.ToolBar();
        mapObj.addControl(toolBar);
        AMap.event.addListener(toolBar,'location',function(e) {
            locationInfo = e.lnglat;
        });
    });


    var pano = null;
    AMap.event.addListener(mapObj,'click',function(e) {
        if(!isShow) return;
        $('#panowrap').show();
        _panomarker.setPosition(e.lnglat);
        _panomarker.setMap(mapObj);
        if(pano == undefined){
            pano=new AMap.Panorama('pano',{
                systemLabel:false,
                position:e.lnglat,
                pov:{
                    heading:0,
                    pitch:0
                }
            });
            AMap.event.addListener(pano,'panochange',function() {
                var pano_position=pano.getPosition();
                _panomarker.setPosition(pano_position);
            });
        }else{
            pano.setPosition(e.lnglat);
        }
    });

    $('#J_closejj').click(function() {
        $('#panowrap').hide();
        pano=null;
    });



    //搜索功能
    var MSearch;
    mapObj.plugin(['AMap.PlaceSearch'],function() {
        MSearch=new AMap.PlaceSearch({
            pageSize:1,
            pageIndex:1
        });
        AMap.event.addListener(MSearch,'complete',function(data) {
            if(data.info){
                var loc=data.poiList.pois[0];
                var name=loc.name;
                var lng=loc.location.lng;
                var lat=loc.location.lat;
                var point = new AMap.LngLat(lng,lat);
                var _marker = new AMap.Marker({
                    icon:'q5.png',
                    position:point,
                    draggable:true
                });
                var _infoWindow = new AMap.InfoWindow({
                    content:'<h3>'+name+'</h3>',
                    size:new AMap.Size(300,0),
                    autoMove:true
                });
                AMap.event.addListener(_marker,'click',function(e){
                    _infoWindow.open(mapObj,_marker.getPosition());
                });

                _marker.setMap(mapObj);
                mapObj.setCenter(point);
                $('#citylist').append('<a href="javascript:void(0);" lng='+lng+' lat='+lat+' class="city">'+name+'</a>');
            }else{
                alert('未找到相关信息');
            }
        });
        $('#J_search').click(function() {
            MSearch.search($('#s_txt').val());
        });
        $('#citylist').delegate('.city','click',function() {
            var lng = $(this).attr('lng');
            var lat= $(this).attr('lat');
            var point=new AMap.LngLat(lng,lat);
            mapObj.setCenter(point);
        });
    });
    //点击显示信息窗
    var infoWindow = new AMap.InfoWindow({
        content:'<h3>你好</h3>',
        size:new AMap.Size(300,0),
        autoMove:true
    });
    AMap.event.addListener(marker,'click',function(e){
        infoWindow.open(mapObj,marker.getPosition());
    });
    //右键上下文
    
    var contextItem = new AMap.ContextMenu();
    contextItem.addItem('放大一级',function() {
        mapObj.zoomIn();
    },0);
    contextItem.addItem('缩小一级',function() {
        mapObj.zoomOut();
    },1);
    contextItem.addItem('缩放至全国范围',function() { 
        mapObj.setZoomAndCenter(4,new AMap.LngLat(108,34));
    },2);
    var infonum=0;
    contextItem.addItem('添加标记',function() {
        var marker = new AMap.Marker({
            map:mapObj,
            position:contextMenuPosition,
            icon : 'xin.png',
            offset:{x:-8,y:-10}
        });
        var info=new AMap.InfoWindow({
            content:'这是第'+(++infonum)+'个',
            position:contextMenuPosition,
            closeWhenClickMap:true
        });
        AMap.event.addListener(marker,'click',function(e){
            info.open(mapObj);
        });
    },3);
    AMap.event.addListener(mapObj,'rightclick',function(e) {
        contextItem.open(mapObj,e.lnglat);
        contextMenuPosition = e.lnglat;
    });

    AMap.plugin(['AMap.Geocoder'],function() {
        geo=AMap.Geocoder();
        $('#J_get_addr').click(function() {
            var J_lng = $('#J_lng');
            var J_lat = $('#J_lat');
        });
    });



    point = new AMap.LngLat(100,100);
    var _opts={
        center:point,
        level:15
    }; 
    var osel=AMap.Map('selcitymap',_opts);
    AMap.event.addListener(osel,'click',function(e) {
        alert('我点击了地图');
    });
});
