function init(){
    var map = new BMap.Map('map');
    var point=new BMap.Point(116.404,39.915);
    map.centerAndZoom(point,10);
    map.addControl(new BMap.ScaleControl());
    map.addControl(new BMap.OverviewMapControl());
    map.addControl(new BMap.MapTypeControl());
    var opts={type:BMAP_NAVIGATION_CONTROL_LARGE};
    map.addControl(new BMap.NavigationControl(opts));
    /*var myIcon=new BMap.Icon('q5.png',new BMap.Size(0,0),{
        offset:new BMap.Size(0,0),
        imageOffset:new BMap.Size(0,0)
    });
    */
    var myGeo=new BMap.Geocoder();
    /*myGeo.getPoint("江苏常州金梅花园",function(point) { 
        if(point){
            map.centerAndZoom(point,16);
            map.addOverlay(new BMap.Marker(point));
        }
    },'常州市');*/
    var title='城市地图信息';

    randomTenCity();

    function addMarket(point,i){
        var icon=new BMap.Icon('q5.png',new BMap.Size(51,51));
        var marker= new BMap.Marker(point,{icon:icon});
        marker.addEventListener('click',function() {
            var opts={
                width:250,
                height:100,
                title:title
            };
            myGeo.getLocation(point,function(gresult) {
                //console.log(gresult);
                if(gresult){
                    var infoWindow=new BMap.InfoWindow();
                    infoWindow.setContent('地点：' + gresult.address);
                    infoWindow.setWidth(250);
                    infoWindow.setHeight(100);
                    map.openInfoWindow(infoWindow,point);
                }
            });

        });

        map.addOverlay(marker);

    }
    function randomTenCity(){
        var bounds=map.getBounds();
        var southwest=bounds.getSouthWest();
        var northeast=bounds.getNorthEast();
        var spn=bounds.toSpan();
        /*console.log(southwest);
        console.log(northeast);*/
        
        var lngSpan=spn.lng;
        var latSpan=spn.lat;
        for(var i=0;i<10;i++){
            var point=new BMap.Point(southwest.lng + lngSpan*(Math.random()),southwest.lat+latSpan*(Math.random()));
            addMarket(point,i);
        }
    }
    $('#querycity').click(function() {
        var qtxt = $('#querytext').val();
        var myGeo=new BMap.Geocoder();
        myGeo.getPoint(qtxt,function(point) {
            if(point){
                var icon=new BMap.Icon('q5.png',new BMap.Size(51,51));
                var marker = new BMap.Marker(point,{icon:icon});
                marker.addEventListener('click',function() {
                    var infoWindow=new BMap.InfoWindow();
                    infoWindow.setContent('地点：' + qtxt);
                    infoWindow.setWidth(250);
                    infoWindow.setHeight(100);
                    map.openInfoWindow(infoWindow,point);
                });
                map.addOverlay(marker);
                $('#citylist').append('<a href="javascript:void(0)" class="cityloc" lng='+point.lng+' lat='+point.lat+'>' + qtxt + '</a>');
                map.centerAndZoom(point,16);
            }else{
                alert('未找到相关地址');
            }
        });
    });
    $('#citylist').delegate('.cityloc','click',function(argument) {
        var lng=$(this).attr('lng');
        var lat=$(this).attr('lat');
        var point = new BMap.Point(lng,lat);
        map.centerAndZoom(point,16);
    });
    var selmarket=null;
    /*map.addEventListener('click',function(obj) {
        var point = obj.point;
        if(selmarket) map.removeOverlay(selmarket);
        var marker=new BMap.Marker(point);
        selmarket = marker;
        var geo = new BMap.Geocoder();

        marker.addEventListener('click',function() {
            geo.getLocation(point,function(result) {
                if(result){
                    var infoWindow=new BMap.InfoWindow();
                    infoWindow.setContent('地点：' + result.address);
                    infoWindow.setWidth(250);
                    infoWindow.setHeight(100);
                    map.openInfoWindow(infoWindow,point);
                }
            });
            return false;
        });
        map.addOverlay(marker);
        geo.getLocation(point,function(result) {
            if(result){
                var infoWindow=new BMap.InfoWindow();
                infoWindow.setContent('地点：' + result.address);
                infoWindow.setWidth(250);
                infoWindow.setHeight(100);
                map.openInfoWindow(infoWindow,point);
            }
        });
    });*/
}

