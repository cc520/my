<?php defined('IN_DESTOON') or exit('Access Denied');?><?php $CSS = array('index');?>
<?php include template('header');?>
<div class="m">
<div class="topl f_l">
<?php if($DT['page_catalog']) { ?>
<div class="icatalog_head"><div><span class="f_r c_p" onclick="Go('<?php echo DT_PATH;?>sitemap/<?php echo rewrite('index.php?mid='.$moduleid);?>');">展开全部</span><strong>商品分类</strong></div></div>
<div class="icatalog_body">
<div class="icatalog" style="height:335px;">
<?php $mid = $moduleid;?>
<?php $child = get_maincat(0, $mid, 1);?>
<?php if(is_array($child)) { foreach($child as $i => $c) { ?>
<?php if($i<10 && $c['child']) { ?>
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
<div class="m_n f_l">&nbsp;</div>
<div class="f_l" style="width:710px;">
<div>
<div class="f_l" style="width:400px;margin-right:10px;"><?php echo ad(14);?></div>
<div class="m_r f_l">
<div class="cart_info">
<div>
购物车当前有
<span class="f_red">
<script type="text/javascript">
document.write(substr_count(get_cookie('cart'), ','));
</script>
</span>
件商品，<a href="<?php echo $MOD['linkurl'];?>cart.php" class="b" rel="nofollow">去结算&raquo;</a> <span class="f_gray">|</span> 
<a href="<?php echo $MODULE['2']['linkurl'];?>trade.php?action=order" class="b" rel="nofollow">我的订单</a>
</div>
</div>
<div class="b10">&nbsp;</div>
<div class="box_head">
<span class="f_r"><a href="<?php echo $EXT['announce_url'];?>" class="g">更多&raquo;</a></span>
<a href="<?php echo $EXT['announce_url'];?>"><strong>网站动态</strong></a>
</div>
<div class="box_body li_dot">
<div class="announce"><?php echo tag("table=announce&condition=totime=0 or totime>$today_endtime-86400&areaid=$cityid&pagesize=3&datetype=2&order=listorder desc,addtime desc&target=_blank");?></div>
</div>
</div>
</div>
<?php if($MOD['page_irec']) { ?>
<div class="c_b b10">&nbsp;</div>
<div class="tab_head">
<ul>
<li class="tab_2" id="mall_t_1" onmouseover="Tb(1, 2, 'mall', 'tab');">推荐商品</li>
<li class="tab_1" id="mall_t_2" onmouseover="Tb(2, 2, 'mall', 'tab');">热卖商品</li>
</ul>
</div>
<div class="box_body">
<div class="mthumb" id="mall_c_1" style="height:155px;overflow:hidden;display:;">
<?php echo tag("moduleid=$moduleid&length=16&condition=status=3 and level>0&areaid=$cityid&pagesize=".$MOD['page_irec']."&order=".$MOD['order']."&width=100&height=100&cols=5&template=thumb-mall&target=_blank");?>
</div>
<div class="mthumb" id="mall_c_2" style="height:155px;overflow:hidden;display:none;"><?php echo tag("moduleid=$moduleid&length=16&condition=status=3&areaid=$cityid&pagesize=".$MOD['page_irec']."&order=orders desc&width=100&height=100&cols=5&template=thumb-mall&target=_blank");?>
</div>
</div>
<?php } ?>
</div>
</div>
<?php if($MOD['page_inew']) { ?>
<div class="m b10">&nbsp;</div>
<div class="m">
<div class="box_head"><span class="f_r"><a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?new=1');?>" rel="nofollow">更多&raquo;</a></span><strong>最新上架</strong></div>
<div class="box_body">
<div class="mthumb">
<?php echo tag("moduleid=$moduleid&length=20&condition=status=3&areaid=$cityid&pagesize=".$MOD['page_inew']."&order=".$MOD['order']."&width=100&height=100&cols=6&target=_blank&lazy=$lazy&template=thumb-mall");?>
</div>
</div>
</div>
<?php } ?>
<?php include template('footer');?>
