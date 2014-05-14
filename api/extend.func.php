<?php
defined('IN_DESTOON') or exit('Access Denied');
#Your Functions
#
function property_option_value($moduleid,$options){
    global $db;
    foreach($options as $k => $v){
        $sql = "SELECT itemid FROM {$db->pre}category_value WHERE moduleid={$moduleid} AND oid=$k AND value={$v}";
        $result = $db->query($sql);
        $lists[$k] = array();
        while($r = $db->fetch_array($result)) {
            $lists[$k][] = $r['itemid'];
        }
    }

    return array_reduce($lists,'array_intersect',array_pop($lists));
}

function get_dco_value($name){
    global $_GET;
    $darr = array();
    $len = strlen($name);
    foreach($_GET as $k=>$v){
        if(strlen($v)){
            if(strpos($k,$name) !== FALSE){
                $doption =substr($k,$len + 1);
                $darr[$doption] = $v;
            }
        }
    }
    return $darr;
}
function get_all_param(){
    global $_GET;
    $str = '';
    foreach($_GET as $k => $v){
        if($v)
            $str.='&'.$k.'='.$v;
    }
    return ltrim($str,'&');
}
?>
