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

    function addMarket(point,i){
        var marker= new BMap.Marker(point);
        marker.addEventListener('click',function() {
            alert(i);
        });
        map.addOverlay(marker);
    }
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

