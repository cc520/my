jQuery(document).ready(function($) {
    var p=new AMap.LngLat($lng,$lat);

    var mymap=new AMap.Map('mymap',{
        center:p,
        level:20
    });

    var marker=new AMap.Marker({
        position:p,
        icon:'q5.png'
    });
    marker.setMap(mymap);
});
