<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>��ʾ��ͼ</title>
<script type="text/javascript" src="http://apis.mapabc.com/webapi/auth.json?t=javascriptmap&v=3.1.1&key=6f774361474f183fd96d55fa51022c36652303f13bcfea8d737da4b457f21e735eaee9b475a6e3dd"></script>
<script type="text/javascript">
    var mapObj=null;
    function mapInit() {
        var opt = {
            level:13,//��ʼ��ͼ��Ұ���� 
            center:new MMap.LngLat(116.397428,39.90923)//���õ�ͼ���ĵ� 
        }
        mapObj = new MMap.Map("mapObj",opt); 
        mapObj.plugin(["MMap.ToolBar","MMap.OverView","MMap.Scale"],function()
        { 
        toolbar = new MMap.ToolBar(); 
        toolbar.autoPosition=false; //���ع����� 
        mapObj.addControl(toolbar); 
        overview = new MMap.OverView(); //����ӥ�� 
        mapObj.addControl(overview); 
        }); 
    }
</script>
</head>
<body onload="mapInit();">
<div id="mapObj" style="width: 500px; height: 300px"></div>
</body>
</html>
