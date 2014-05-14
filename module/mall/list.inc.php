<?php 
defined('IN_DESTOON') or exit('Access Denied');
if(!$CAT || $CAT['moduleid'] != $moduleid) include load('404.inc');
require DT_ROOT.'/module/'.$module.'/common.inc.php';
require DT_ROOT.'/include/post.func.php';
include load('search.lang');

if($MOD['list_html']) {
	$html_file = listurl($CAT, $page);
	if(is_file(DT_ROOT.'/'.$MOD['moduledir'].'/'.$html_file)) d301($MOD['linkurl'].$html_file);
}
if(!check_group($_groupid, $MOD['group_list']) || !check_group($_groupid, $CAT['group_list'])) include load('403.inc');
$CP = $MOD['cat_property'] && $CAT['property'];
if($MOD['cat_property'] && $CAT['property']) {
	require DT_ROOT.'/include/property.func.php';
	$PPT = property_condition($catid);
}
$cityid = @$_GET['cityid'];
unset($CAT['moduleid']);
extract($CAT);
$maincat = get_maincat($child ? $catid : $parentid, $moduleid);
/*print_r($maincat);*/
$condition = 'status=3';
$condition .= ($CAT['child']) ? " AND catid IN (".$CAT['arrchildid'].")" : " AND catid=$catid";
if(isset($day)){
    $starttime = $DT_TIME - $day * 60 * 60 * 24;
    $condition .= " AND addtime >= '$starttime'";
}

//检测属性分类

$doption = get_dco_value('ppt');
if(!empty($doption)){
    $pptitemids = property_option_value($moduleid,$doption);
    if(!empty($pptitemids)){
        $condition .= ' AND itemid IN ('.implode(',',$pptitemids).') ';
    }else{
        $condition .= ' AND 1=0';
    }
}
$vip = isset($vip) ? intval($vip) : 0;
$condition.= " AND vip={$vip}";


if($cityid) {
	$areaid = $cityid;
	$ARE = $AREA[$cityid];
	$condition .= $ARE['child'] ? " AND areaid IN (".$ARE['arrchildid'].")" : " AND areaid=$areaid";
	$items = $db->count($table, $condition, $CFG['db_expires']);
} else {
	if($page == 1) {
		$items = $db->count($table, $condition, $CFG['db_expires']);
		if($items != $CAT['item']) {
			$CAT['item'] = $items;
			$db->query("UPDATE {$DT_PRE}category SET item=$items WHERE catid=$catid");
		}
	} else {
		$items = $CAT['item'];
	}
}
$pagesize = $MOD['pagesize'];
$offset = ($page-1)*$pagesize;
$pages = listpages($CAT, $items, $page, $pagesize);

$dorder  = array($MOD['order'], '', 'price DESC', 'price ASC', 'vip DESC', 'vip ASC', 'amount DESC', 'amount ASC', 'minamount DESC', 'minamount ASC');
isset($order) && isset($dorder[$order]) or $order = 0;

$timeorder = array('0'=>'更新时间','1'=>'1天内','7'=>'7天内','15'=>'15天内','30'=>'30天内');
$sorder  = array($L['order'], $L['order_auto'], $L['price_dsc'], $L['price_asc'], $L['vip_dsc'], $L['vip_asc'], $L['amount_dsc'], $L['amount_asc'], $L['minamount_dsc'], $L['minamount_asc']);
$vipcheck = array(1=>'vip');
$order_select  = dselect($sorder, 'order', '', $order,"onchange=\"Go(sh+'&order='+this.value)\"");
$timeorder_select = dselect($timeorder,'day','',@$day,"onchange=\"Go(sh+'&day='+this.value)\"");

$vipcheckbox = dcheckbox($vipcheck,VIP,$vip,"onclick=\"var vip=1-{$vip};Go(sh+'&vip='+vip);\"");


$tags = array();
if($items) {
	$worder = $dorder[$order] ? " ORDER BY $dorder[$order]" : '';
    $sql = "SELECT ".$MOD['fields']." FROM {$table} WHERE {$condition}{$worder} LIMIT {$offset},{$pagesize}";
	$result = $db->query($sql,($CFG['db_expires'] && $page == 1) ? 'CACHE' : '', $CFG['db_expires']);
	while($r = $db->fetch_array($result)) {
		$r['adddate'] = timetodate($r['addtime'], 5);
		$r['editdate'] = timetodate($r['edittime'], 5);
		if($lazy && isset($r['thumb']) && $r['thumb']) $r['thumb'] = DT_SKIN.'image/lazy.gif" original="'.$r['thumb'];
		$r['alt'] = $r['title'];
		$r['title'] = set_style($r['title'], $r['style']);
		$r['linkurl'] = $MOD['linkurl'].$r['linkurl'];
		$tags[] = $r;
	}
	$db->free_result($result);
}
$showpage = 1;
$datetype = 5;
$seo_file = 'list';

include DT_ROOT.'/include/seo.inc.php';
if($EXT['wap_enable']) $head_mobile = $EXT['wap_url'].'index.php?moduleid='.$moduleid.'&catid='.$catid.($page > 1 ? '&page='.$page : '');
$template = $CAT['template'] ? $CAT['template'] : 'list';
include template($template, $module);
?>
