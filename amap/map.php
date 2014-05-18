<?php
    include '../common.inc.php';
    $sql="SELECT * FROM {$db->pre}company_setting WHERE `userid`=5 AND `item_key`='map'";
    $item=$db->get_one($sql);
    $item_value=$item['item_value'];
    list($lng,$lat)=explode(',',$item_value);
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
<style type="text/css">
    #mymap{width:500px;height:500px;}
</style>
  <script src="jquery.min.js" type="text/javascript"></script>
  <script src="http://webapi.amap.com/maps?v=1.2&key=c84af8341b1cc45c801d6765cda96087" type="text/javascript"></script>
  <script src="mymap.js" type="text/javascript"></script>
    <script type="text/javascript">
    var $lng=<?php echo $lng;?>;
    var $lat=<?php echo $lat;?>;
    </script>
</head>
<body>
<label for="">lng×ø±ê£º</label><input id="J_lng" name="" type="text" value="<?php echo $lng?>"/>
<label for="">lat×ø±ê£º</label><input id="J_lat" name="" type="text" value="<?php echo $lat?>"/>
<div id="mymap"></div>
</body>
</html>

