<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header');?>
<div class="m">
<div class="m_l f_l">
<table cellpadding="4" cellspacing="1" width="100%" bgcolor="#DDDDDD">
<tr bgcolor="#FAFAFA" align="center">
<?php for($i=1;$i<13;$i++){ $j = $i<10 ? '0'.$i : $i;?>
<td<?php if($j==date('m')) { ?> bgcolor="#E0E0E0"<?php } ?>
><a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?month='.$i);?>" rel="nofollow"><?php echo $j;?>月</a></td>
<?php } ?>
</tr>
</table>
<div class="b10"> </div>
<table cellpadding="0" cellspacing="0" width="100%">
<tr>
<td valign="top" width="310">
<?php echo tag("moduleid=$moduleid&condition=status=3 and level=2 and thumb!=''&areaid=$cityid&order=".$MOD['order']."&pagesize=".$MOD['page_islide']."&width=300&height=225&template=slide");?>
</td>
<td valign="top">
<div class="exh_rec">
<?php $tags=tag("moduleid=$moduleid&condition=status=3 and level=1&areaid=$cityid&pagesize=3&order=".$MOD['order']."&template=null");?>
<table width="100%">
<?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
<tr>
<td valign="top">
<ul>
<li><a href="<?php echo $t['linkurl'];?>" target="_blank" title="<?php echo $t['alt'];?>"><?php echo $t['title'];?></a></li>
<li>&nbsp;<?php echo timetodate($t['fromtime'], 3);?> 至 <?php echo timetodate($t['totime'], 3);?> [<?php echo $t['city'];?>]</li>
<li title="<?php echo $t['city'];?><?php echo $t['hallname'];?>">&nbsp;主办：<?php echo $t['sponsor'];?></li>
</ul>
</td>
</tr>
<?php } } ?>
</table>
</div>
</td>
</tr>
</table>
<?php if(is_array($maincat)) { foreach($maincat as $i => $c) { ?>
<div class="b10 c_b"> </div>
<div class="box_head"><span class="f_r"><a href="<?php echo $MOD['linkurl'];?><?php echo $c['linkurl'];?>">更多&raquo;</a></span><strong><?php echo $c['catname'];?></strong></div>
<div class="box_body f_gray li_dot">
<?php $tags=tag("moduleid=$moduleid&areaid=$cityid&catid=".$c['catid']."&condition=status=3&order=".$MOD['order']."&pagesize=".$MOD['page_icat']."&template=null");?><ul>
<?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
<li title="<?php echo $t['alt'];?>&#13;主办：<?php echo $t['sponsor'];?>&#13;展馆：<?php echo $t['hallname'];?>"><span class="f_r">[<?php echo $t['city'];?>] &nbsp;&nbsp; <?php echo timetodate($t['fromtime'], 3);?> 至 <?php echo timetodate($t['totime'], 3);?></span><a href="<?php echo $t['linkurl'];?>" target="_blank"><?php echo $t['title'];?></a></li>
<?php } } ?>
</ul>
</div>
<?php } } ?>
</div>
<div class="m_n f_l">&nbsp;</div>
<div class="m_r f_l">
<?php if($news_id) { ?>
<?php if($MOD['cat_news_num']) { ?>
<div class="box_head"><div><span class="f_r"><a href="<?php if($MOD['cat_news']) { ?><?php echo cat_url($MOD['cat_news']);?><?php } else { ?><?php echo $MODULE[$news_id]['linkurl'];?><?php } ?>
">更多&raquo;</a></span><strong>展会资讯</strong></div></div>
<div class="box_body">
<div class="thumb"><?php echo tag("moduleid=$news_id&condition=status=3 and thumb!=''&areaid=$cityid&catid=".$MOD['cat_news']."&pagesize=2&length=20&order=addtime desc&width=120&height=90&cols=2&template=thumb-table&target=_blank");?></div>
<div class="f_gray" style="border-top:#C0C0C0 1px dotted;padding:5px 5px 0 5px;">
<?php echo tag("moduleid=$news_id&condition=status=3&areaid=$cityid&catid=".$MOD['cat_news']."&pagesize=".$MOD['cat_news_num']."&datetype=2&order=addtime desc&target=_blank");?></div>
</div>
<div class="b10"></div>
<?php } ?>
<?php if($MOD['cat_hall'] && $MOD['cat_hall_num']) { ?>
<div class="box_head"><div><span class="f_r"><a href="<?php echo cat_url($MOD['cat_hall']);?>">更多&raquo;</a></span><strong>展馆介绍</strong></div></div>
<div class="box_body thumb"><?php echo tag("moduleid=$news_id&condition=status=3 and thumb!=''&areaid=$cityid&catid=".$MOD['cat_hall']."&pagesize=".$MOD['cat_hall_num']."&length=15&order=addtime desc&width=120&height=90&cols=2&template=thumb-table&target=_blank");?></div>
<div class="b10"></div>
<?php } ?>
<?php if($MOD['cat_service'] && $MOD['cat_service_num']) { ?>
<div class="box_head"><div><span class="f_r"><a href="<?php echo cat_url($MOD['cat_service']);?>">更多&raquo;</a></span><strong>展会服务</strong></div></div>
<div class="box_body f_gray li_dot"><?php echo tag("moduleid=$news_id&condition=status=3&areaid=$cityid&catid=".$MOD['cat_service']."&pagesize=".$MOD['cat_service_num']."&order=addtime desc&target=_blank");?></div>
<div class="b10"></div>
<?php } ?>
<?php } ?>
</div>
</div>
<?php include template('footer');?>