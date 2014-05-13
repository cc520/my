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
    myGeo.getPoint("江苏常州金梅花园",function(point) { 
        if(point){
            map.centerAndZoom(point,16);
            map.addOverlay(new BMap.Marker(point));
        }
    },'常州市');
    var title='城市地图信息';
    $.getJSON('city.json',function(dcity){

        randomTenCity();

        function addMarket(point,i){
            var marker= new BMap.Marker(point);
            marker.addEventListener('click',function() {

                var opts={
                    width:250,
                    height:100,
                    title:title
                };
                var infoWindow=new BMap.InfoWindow();
                infoWindow.setContent('<div id="city"><p><label for="">城市：</label><span>' + dcity[i]['name'] + '</span></p><p><label for="">地址：</label><span>' + dcity[i]['addr']+ '</span></p></div>');
                infoWindow.setWidth(250);
                infoWindow.setHeight(100);
                map.openInfoWindow(infoWindow,point);
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
    });
}

