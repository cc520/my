<?php defined('IN_DESTOON') or exit('Access Denied');?><?php $CSS = array('index');?>
<?php include template('header');?>
<div id="ipad_tips" style="display:none;"></div>
<div class="m">
<table width="100%" cellspacing="0" cellpadding="0">
<tr align="center">
<td><?php echo ad(20);?></td>
<td><?php echo ad(21);?></td>
<td><?php echo ad(22);?></td>
<td><?php echo ad(23);?></td>
<td><?php echo ad(24);?></td>
<td><?php echo ad(25);?></td>
</tr>
</table>
</div>
<div class="m b10">&nbsp;</div>
<div class="m">
<div class="m_l f_l">
<div class="topr">
<div><?php echo ad(14);?></div>
<div class="b10">&nbsp;</div>
<?php if($DT['page_trade']) { ?>
<div id="trades">
<div class="tab_head">
<ul>
<li class="tab_2" id="trade_t_1" onmouseover="Tb(1, 4, 'trade', 'tab');"><a href="<?php echo $MODULE['6']['linkurl'];?>">��</a></li>
<li class="tab_1" id="trade_t_2" onmouseover="Tb(2, 4, 'trade', 'tab');"><a href="<?php echo $MODULE['5']['linkurl'];?>">��Ӧ</a></li>
<li class="tab_1" id="trade_t_3" onmouseover="Tb(3, 4, 'trade', 'tab');"><a href="<?php echo $MODULE['22']['linkurl'];?>">����</a></li>
<li class="tab_1" id="trade_t_4" onmouseover="Tb(4, 4, 'trade', 'tab');"><a href="<?php echo $MODULE['16']['linkurl'];?>">�̳�</a></li>
</ul>
</div>
<div class="box_body li_dot">
<div id="trade_c_1" class="itrade" style="display:">
<?php echo tag("moduleid=6&condition=status=3&areaid=$cityid&pagesize=".$DT['page_trade']."&datetype=2&target=_blank&order=addtime desc");?>
</div>
<div id="trade_c_2" class="itrade" style="display:none">
<?php echo tag("moduleid=5&condition=status=3&areaid=$cityid&pagesize=".$DT['page_trade']."&datetype=2&target=_blank&order=addtime desc");?>
</div>
<div id="trade_c_3" class="itrade" style="display:none">
<?php echo tag("moduleid=22&condition=status=3&areaid=$cityid&pagesize=".$DT['page_trade']."&datetype=2&target=_blank&order=addtime desc");?>
</div>
<div id="trade_c_4" class="itrade" style="display:none">
                        <?php echo tag("moduleid=16&condition=status=3&areaid=$cityid&pagesize=".$DT['page_trade']."&datetype=2&target=_blank&order=addtime desc&template=list-mall");?>
</div>
</div>
</div>
<?php } ?>
</div>
<div class="topl">
<?php if($DT['page_catalog']) { ?>
<div class="icatalog_head"><div><span class="f_r c_p" onclick="Go('<?php echo DT_PATH;?>sitemap/<?php echo rewrite('index.php?mid=5');?>');">չ��ȫ��</span><strong>��ҵ����</strong></div></div>
<div class="icatalog_body">
<div class="icatalog">
<?php $mid = 5;?>
<?php $child = get_maincat(0, $mid, 1);?>
<?php if(is_array($child)) { foreach($child as $i => $c) { ?>
<?php if($i<12) { ?>
<?php $sub = get_maincat($c['catid'], $mid, 1);?>
<ul>
<li><a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $c['linkurl'];?>" target="_blank"><strong><?php echo set_style($c['catname'], $c['style']);?></strong></a></li>
<?php if(is_array($sub)) { foreach($sub as $j => $s) { ?>
<?php if($j<4) { ?><li><a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $s['linkurl'];?>" target="_blank"><?php echo set_style($s['catname'], $s['style']);?></a></li><?php } ?>
<?php } } ?>
</ul>
<?php } ?>
<?php } } ?>
</div>
</div>
<?php } ?>
</div>
</div>
<div class="m_n f_l">&nbsp;</div>
<div class="m_r f_l">
<div class="iuser"><a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_login'];?>" rel="nofollow" class="iuser_l" title="��¼">��¼</a><a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_register'];?>" rel="nofollow" class="iuser_r" title="ע��">ע��</a><a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>" rel="nofollow" class="iuser_m" title="������Ϣ">������Ϣ</a></div>
<div class="b10">&nbsp;</div>
<div class="box_head">
<div id="site_stats">
<ul>
<li>��Ʒ����:<span><?php echo $db->count($DT_PRE.'sell_5', 'status=3', 1800);?></span></li>
<li>������:<span><?php echo $db->count($DT_PRE.'buy_6', 'status=3', 1800);?></span></li>
<li>��ҵ����:<span><?php echo $db->count($DT_PRE.'company', '1', 1800);?></span></li>
<li>���߻�Ա:<span><?php echo $db->count($DT_PRE.'online', '1', 1800);?></span></li>
</ul>
</div>
<a href="<?php echo $EXT['announce_url'];?>"><strong>��վ��̬</strong></a>
</div>
<div class="box_body li_dot">
<div class="announce"><?php echo tag("table=announce&condition=totime=0 or totime>$today_endtime-86400&areaid=$cityid&pagesize=3&datetype=2&order=listorder desc,addtime desc&target=_blank");?></div>
</div>
<?php if($DT['page_com']) { ?>
<div class="b10">&nbsp;</div>
<div class="box_head">
<span class="f_r"><a href="<?php echo $MODULE['2']['linkurl'];?>grade.php" rel="nofollow" class="g">��ҲҪ����������&raquo;</a></span>
<a href="<?php echo $MODULE['4']['linkurl'];?>"><strong>��ҵչʾ</strong></a>
</div>
<div class="box_body li_dot">
<div style="height:220px;overflow:hidden;" id="company"><?php echo tag("moduleid=4&condition=vip>0 and catids<>''&areaid=$cityid&pagesize=".$DT['page_com']."&order=fromtime desc&template=list-com");?></div>
</div>
<?php } ?>
</div>
</div>
<div class="m b10">&nbsp;</div>
<div class="m">
<div class="box_head">
<span class="f_r f_gray">
 <?php if(isset($MODULE['5'])) { ?><a href="<?php echo $MODULE['5']['linkurl'];?>"><?php echo $MODULE['5']['name'];?></a> &nbsp;|&nbsp;<?php } ?>
 <?php if(isset($MODULE['6'])) { ?><a href="<?php echo $MODULE['6']['linkurl'];?>"><?php echo $MODULE['6']['name'];?></a> &nbsp;|&nbsp;<?php } ?>
 <?php if(isset($MODULE['22'])) { ?><a href="<?php echo $MODULE['22']['linkurl'];?>"><?php echo $MODULE['22']['name'];?></a> &nbsp;|&nbsp;<?php } ?>
 <?php if(isset($MODULE['16'])) { ?><a href="<?php echo $MODULE['16']['linkurl'];?>"><?php echo $MODULE['16']['name'];?></a> &nbsp;|&nbsp;<?php } ?>
 <?php if(isset($MODULE['17'])) { ?><a href="<?php echo $MODULE['17']['linkurl'];?>"><?php echo $MODULE['17']['name'];?></a> &nbsp;|&nbsp;<?php } ?>
 <?php if(isset($MODULE['7'])) { ?><a href="<?php echo $MODULE['7']['linkurl'];?>"><?php echo $MODULE['7']['name'];?></a> &nbsp;|&nbsp;<?php } ?>
 <a href="<?php echo $MODULE['4']['linkurl'];?>"><?php echo $MODULE['4']['name'];?></a>
</span>
<a href="<?php echo $MODULE['21']['linkurl'];?>"><strong>��ҵ�г�</strong></a>
</div>
<div class="box_body">
<div class="m_l f_l">
<div class="isell_head">
<div class="isell_2" id="isell_t_1" onmouseover="Tb(1, 2, 'isell', 'isell');"><a href="<?php echo $MODULE['5']['linkurl'];?>">�Ƽ���Ʒ</a></div>
<?php if($DT['page_mall'] && isset($MODULE['16'])) { ?><div class="isell_1" id="isell_t_2" onmouseover="Tb(2, 2, 'isell', 'isell');"><a href="<?php echo $MODULE['16']['linkurl'];?>">�̳�����</a></div><?php } ?>
</div>
<div id="isell_c_1" class="isell_s" style="display:">
<?php echo tag("moduleid=5&length=36&condition=status=3 and level>0 and thumb<>''&areaid=$cityid&pagesize=".$DT['page_sell']."&order=addtime desc&width=100&height=100&cols=5&target=_blank&lazy=$lazy&template=thumb-table&aaa=1");?>
</div>
<?php if($DT['page_mall'] && isset($MODULE['16'])) { ?>
<div id="isell_c_2" class="isell_m" style="display:none">
<?php echo tag("moduleid=16&length=36&condition=status=3&areaid=$cityid&pagesize=".$DT['page_mall']."&order=orders desc&width=90&height=90&cols=5&target=_blank&lazy=$lazy&template=thumb-mall");?>
</div>
<?php } ?>
</div>
<div class="w290 f_r">
<?php if($DT['page_quote'] && isset($MODULE['7'])) { ?>
<div class="ibox_head">
<a href="<?php echo $MODULE['7']['linkurl'];?>"><strong>����</strong></a>
</div>
<div class="li_dot"><?php echo tag("moduleid=7&condition=status=3&areaid=$cityid&pagesize=".$DT['page_quote']."&datetype=2&order=addtime desc&target=_blank");?></div>
<div class="b10"></div>
<?php } ?>
<?php if($DT['page_price'] && isset($MODULE['7'])) { ?>
<div class="ibox_head">
<a href="<?php echo $MODULE['7']['linkurl'];?>product.php"><strong>����</strong></a>
</div>
<?php $tags=tag("table=quote_product&condition=level>0&areaid=$cityid&pagesize=".$DT['page_price']."&order=addtime desc&length=14&template=null");?>
<table cellpadding="3" cellspacing="1" width="100%" bgcolor="#DDDDDD">
<?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
<?php if($i%3==0) { ?><tr bgcolor="#FFFFFF" align="center"><?php } ?>
<td width="33%"><a href="<?php echo $MODULE['7']['linkurl'];?><?php echo rewrite('price.php?itemid='.$t['itemid']);?>" target="_blank" title="<?php echo $t['alt'];?> <?php echo $t['item'];?>������"><?php echo $t['title'];?></a></td>
<?php if($i%3==2) { ?></tr><?php } ?>
<?php } } ?>
</table>
<div class="b10"></div>
<?php } ?>
<?php if($DT['page_group'] && isset($MODULE['17'])) { ?>
<div class="ibox_head">
<a href="<?php echo $MODULE['17']['linkurl'];?>"><strong>�Ź�</strong></a>
</div>
<div class="li_dot">
<?php $tags=tag("moduleid=17&condition=status=3 and level>0&areaid=$cityid&pagesize=".$DT['page_group']."&order=addtime desc&template=null");?>
<ul>
<?php if(is_array($tags)) { foreach($tags as $t) { ?>
<li><span class="f_r f_price">��<?php echo $t['price'];?></span><a href="<?php echo $t['linkurl'];?>" target="_blank" title="<?php echo $t['alt'];?>"><?php echo $t['title'];?></a></li>
<?php } } ?>
</ul>
</div>
<?php } ?>
</div>
<div class="c_b"></div>
</div>
</div>
<div class="m b10"></div>
<div class="m">
<div class="box_head">
<span class="f_r f_gray">
<?php $tags=tag("table=category&condition=moduleid=21 and parentid=0&pagesize=10&order=listorder,catid&template=null");?>
<?php if(is_array($tags)) { foreach($tags as $i => $t) { ?><?php if($i) { ?> &nbsp;|&nbsp; <?php } ?>
<a href="<?php echo $MODULE['21']['linkurl'];?><?php echo $t['linkurl'];?>"><?php echo $t['catname'];?></a><?php } } ?>
</span>
<a href="<?php echo $MODULE['21']['linkurl'];?>"><strong>��Ѷ����</strong></a>
</div>
<div class="box_body">
<div style="margin:0 0 0 10px;" class="m_r f_l">
<?php if($DT['page_rank'] && isset($MODULE['21'])) { ?>
<div class="ibox_head">
<a href="<?php echo $MODULE['21']['linkurl'];?>"><strong>��Ѷ����</strong></a>
</div>
<div class="rank_list"><?php $tags=tag("moduleid=21&condition=status=3 and addtime>$today_endtime-30*86400&areaid=$cityid&order=hits desc&pagesize=".$DT['page_rank']."&template=null");?>
<ul>
<?php if(is_array($tags)) { foreach($tags as $t) { ?>
<li><span class="f_r px11 f_gray"><?php echo $t['hits'];?></span><a href="<?php echo $t['linkurl'];?>" target="_blank" title="<?php echo $t['alt'];?>"><?php echo $t['title'];?></a></li>
<?php } } ?>
</ul>
</div>
<div class="b10">&nbsp;</div>
<?php } ?>
<?php if($DT['page_special'] && isset($MODULE['11'])) { ?>
<div class="ispecial">
<a href="<?php echo $MODULE['11']['linkurl'];?>" class="w">ר��</a>
<?php $tags=tag("moduleid=11&condition=status=3 and level>0&pagesize=".$DT['page_special']."&order=addtime desc&template=null");?>
<?php if(is_array($tags)) { foreach($tags as $t) { ?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo $t['linkurl'];?>" target="_blank" title="<?php echo $t['alt'];?>"><?php echo $t['title'];?></a>
<?php } } ?>
</div>
<div class="b10">&nbsp;</div>
<?php } ?>
<?php if($DT['page_comnews']) { ?>
<div class="ibox_head">
<a href="<?php echo $MODULE['4']['linkurl'];?><?php echo rewrite('news.php?more=1');?>"><strong>��ҵ����</strong></a>
</div>
<div class="li_dot f_gray">
<?php echo tag("table=news&condition=status=3 and level>0&pagesize=".$DT['page_comnews']."&datetype=2&order=addtime desc&target=_blank");?>
</div>
<div class="b10">&nbsp;</div>
<?php } ?>

</div>
<div style="width:360px;" class="f_l">
<?php if($DT['page_newsh'] && isset($MODULE['21'])) { ?>
<div class="headline">
<?php echo tag("moduleid=21&condition=status=3 and level=5&areaid=$cityid&order=addtime desc&pagesize=1&target=_blank&template=list-hl");?>
</div>
<?php } ?>
<?php if($DT['page_news'] && isset($MODULE['21'])) { ?>
<div class="ibox_body">
<?php echo tag("moduleid=21&condition=status=3 and level>0&areaid=$cityid&pagesize=".$DT['page_news']."&datetype=2&order=addtime desc&target=_blank");?>
</div>
<div class="ibox_body_s b10">&nbsp;</div>
<div class="ibox_body">
<?php echo tag("moduleid=21&condition=status=3 and level>0&areaid=$cityid&pagesize=".$DT['page_news']."&datetype=2&page=2&order=addtime desc&target=_blank");?>
</div>
<?php } ?>
</div>
<div class="w290 f_r">
<?php if($DT['page_photo'] && isset($MODULE['12'])) { ?>
<div class="ibox_head">
<a href="<?php echo $MODULE['12']['linkurl'];?>"><strong>ͼ��</strong></a>
</div>
<div class="thumb"><?php echo tag("moduleid=12&condition=status=3 and open=3 and level>0&pagesize=".$DT['page_photo']."&order=addtime desc&width=80&height=60&cols=3&target=_blank&lazy=$lazy&template=list-photo");?></div>
<?php } ?>
<?php if($DT['page_video'] && isset($MODULE['14'])) { ?>
<div class="ibox_head">
<a href="<?php echo $MODULE['14']['linkurl'];?>"><strong>��Ƶ</strong></a>
</div>
<div class="video"><?php echo tag("moduleid=14&condition=status=3 and level>0&pagesize=".$DT['page_video']."&datetype=2&order=addtime desc&target=_blank");?></div>
<div class="b10">&nbsp;</div>
<?php } ?>
</div>
<div class="c_b"></div>
</div>
</div>
<div class="m b10"></div>
<div class="m">
<div class="box_head">
<span class="f_r f_gray">
 <?php if(isset($MODULE['10'])) { ?><a href="<?php echo $MODULE['10']['linkurl'];?>"><?php echo $MODULE['10']['name'];?></a> &nbsp;|&nbsp;<?php } ?>
 <?php if(isset($MODULE['8'])) { ?><a href="<?php echo $MODULE['8']['linkurl'];?>"><?php echo $MODULE['8']['name'];?></a> &nbsp;|&nbsp;<?php } ?>
 <?php if(isset($MODULE['13'])) { ?><a href="<?php echo $MODULE['13']['linkurl'];?>"><?php echo $MODULE['13']['name'];?></a> &nbsp;|&nbsp;<?php } ?>
 <?php if(isset($MODULE['9'])) { ?><a href="<?php echo $MODULE['9']['linkurl'];?>"><?php echo $MODULE['9']['name'];?></a> &nbsp;|&nbsp;<?php } ?>
 <?php if(isset($MODULE['15'])) { ?><a href="<?php echo $MODULE['15']['linkurl'];?>"><?php echo $MODULE['15']['name'];?></a> &nbsp;|&nbsp;<?php } ?>
 <?php if($EXT['ad_enable']) { ?><a href="<?php echo $EXT['ad_url'];?>">���</a> &nbsp;|&nbsp;<?php } ?>
 <a href="<?php echo $EXT['spread_url'];?>">�ƹ�</a>
</span>
<a href="<?php echo $MODULE['21']['linkurl'];?>"><strong>��ҵ����</strong></a>
</div>
<div class="box_body">
<div class="m_l f_l">
<div>
<div style="margin:0 15px 0 10px;" class="m_r f_l">
<?php if($DT['page_know'] && isset($MODULE['10'])) { ?>
<div class="ibox_head">
<a href="<?php echo $MODULE['10']['linkurl'];?>"><strong>֪��</strong></a>
</div>
<div class="know">
<?php $tags=tag("moduleid=10&condition=status=3 and process>0 and credit>0&pagesize=".$DT['page_know']."&order=addtime desc&template=null");?>
<ul>
<?php if(is_array($tags)) { foreach($tags as $t) { ?>
<li><span class="f_r"><?php echo timetodate($t['addtime'], 2);?></span><span class="know_credit"><?php echo $t['credit'];?></span> <a href="<?php echo $t['linkurl'];?>" target="_blank" title="<?php echo $t['alt'];?>"><?php echo $t['title'];?></a></li>
<?php } } ?>
</ul>
</div>
<div class="b10">&nbsp;</div>
<?php } ?>

</div>
<div style="width:330px;" class="f_l">
<?php if($DT['page_exhibit'] && isset($MODULE['8'])) { ?>
<div class="ibox_head">
<a href="<?php echo $MODULE['8']['linkurl'];?>"><strong>չ��</strong></a>
</div>
<div class="li_dot g_gray">
<?php $tags=tag("moduleid=8&condition=status=3 and level>0&areaid=$cityid&pagesize=".$DT['page_exhibit']."&order=addtime desc&template=null");?>
<ul>
<?php if(is_array($tags)) { foreach($tags as $t) { ?>
<li title="<?php echo $t['alt'];?> <?php echo timetodate($t['fromtime'], 'Y��m��d��');?>"><span class="f_r">&nbsp;[<?php echo $t['city'];?>]</span><a href="<?php echo $t['linkurl'];?>" target="_blank"><?php echo $t['title'];?></a></li>
<?php } } ?>
</ul>
</div>
<?php } ?>
</div>
<div class="c_b"></div>
</div>
<div class="b10">&nbsp;</div>
<?php if($DT['page_job'] && isset($MODULE['9'])) { ?>
<div class="job_head">
<ul>
<li class="job_2" id="job_t_1" onmouseover="Tb(1, 2, 'job', 'job');"><a href="<?php echo $MODULE['9']['linkurl'];?>"><span>��Ƹ</span></a></li>
<li class="job_1" id="job_t_2" onmouseover="Tb(2, 2, 'job', 'job');"><a href="<?php echo $MODULE['9']['linkurl'];?>"><span>��ְ</span></a></li>
</ul>
</div>
<div class="job_body">
<div id="job_c_1" style="display:">
<?php echo tag("moduleid=9&condition=status=3 and level>0&areaid=$cityid&pagesize=".$DT['page_job']."&length=30&order=edittime desc&template=table-job");?>
</div>
<div id="job_c_2" style="display:none">
<?php echo tag("moduleid=9&table=resume&condition=status=3 and open=3 and level>0&areaid=$cityid&showcat=1&pagesize=".$DT['page_job']."&order=edittime desc&template=table-resume");?>
</div>
</div>
<?php } ?>

</div>
<div class="w290 f_r">
<?php if($DT['page_brand'] && isset($MODULE['13'])) { ?>
<div class="ibox_head">
<a href="<?php echo $MODULE['13']['linkurl'];?>"><strong>Ʒ��</strong></a>
</div>
<div class="thumb"><?php echo tag("moduleid=13&condition=status=3 and level>0&areaid=$cityid&pagesize=".$DT['page_brand']."&order=addtime desc&width=120&height=40&cols=2&target=_blank&lazy=$lazy&template=thumb-brand");?></div>
<?php } ?>
<?php if($DT['page_down'] && isset($MODULE['15'])) { ?>
<div class="ibox_head">
<a href="<?php echo $MODULE['15']['linkurl'];?>"><strong>����</strong></a>
</div>
<div class="down"><?php echo tag("moduleid=15&condition=status=3 and level>0&pagesize=".$DT['page_down']."&length=40&target=_blank&order=addtime desc&template=list-down");?></div>
<?php } ?>
</div>
<div class="c_b"></div>
</div>
</div>
<div class="m b10"></div>
<?php if($DT['page_logo'] || $DT['page_text']) { ?>
<div class="m">
<div class="tab_head">
<span class="f_r f_n px12"><a href="<?php echo $MODULE['3']['linkurl'];?>shortcut.php" rel="nofollow" class="g">���汾վ�����ݷ�ʽ &darr;</a>&nbsp;&nbsp;&nbsp;</span>
<ul>
<li class="tab_2"><a href="<?php echo $EXT['link_url'];?>">��������</a></li>
<li class="tab_1"><a href="<?php echo $EXT['link_url'];?><?php echo rewrite('index.php?action=reg');?>">��������</a></li>
</ul>
</div>
<div class="box_body">
<?php if($DT['page_logo']) { ?>
<?php echo tag("table=link&condition=status=3 and level>0 and thumb<>'' and username=''&areaid=$cityid&pagesize=".$DT['page_logo']."&order=listorder desc,itemid desc&lazy=$lazy&template=list-link&cols=9");?>
<?php } ?>
<?php if($DT['page_text']) { ?>
<?php echo tag("table=link&condition=status=3 and level>0 and thumb='' and username=''&areaid=$cityid&pagesize=".$DT['page_text']."&order=listorder desc,itemid desc&template=list-link&cols=9");?>
<?php } ?>
</div>
</div>
<?php } ?>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/index.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/marquee.js"></script>
<script type="text/javascript">
new dmarquee(22, 10, 3000, 'site_stats');
new dmarquee(22, 30, 3000, 'company');
if(get_cookie('auth')) {
$('.iuser_l')[0].title = '��������';
$('.iuser_l')[0].href = '<?php echo $MODULE['2']['linkurl'];?>';
$('.iuser_l')[0].className = 'iuser_u';
$('.iuser_r')[0].title = '�����ҵĻ�Ա����';
$('.iuser_r')[0].href = '<?php echo $MODULE['2']['linkurl'];?>edit.php';
$('.iuser_r')[0].className = 'iuser_e';
}
</script>
<?php include template('footer');?>