<?php defined('IN_DESTOON') or exit('Access Denied');?><?php if($pass) { ?>
<?php $JS = array('jquery.slide');?>
<?php $CSS = array('jquery.slide');?>
<?php include template('header');?>
<script type="text/javascript">
var module_id= <?php echo $moduleid;?>,item_id=<?php echo $itemid;?>,content_id='content',img_max_width=<?php echo $MOD['max_width'];?>;
if(isIE) {
document.write('<style type="text/css">');
document.write(".jqslide .pic .prevbtn{cursor:url('<?php echo DT_SKIN;?>image/prev.cur'),default;}");
document.write(".jqslide .pic .nextbtn{cursor:url('<?php echo DT_SKIN;?>image/next.cur'),default;}");
document.write('</style>');
}
</script>
<div class="m">
<div class="nav">当前位置: <a href="<?php echo $MODULE['1']['linkurl'];?>">首页</a> &raquo; <a href="<?php echo $MOD['linkurl'];?>"><?php echo $MOD['name'];?></a> &raquo; <?php echo cat_pos($CAT, ' &raquo; ');?> &raquo;</div>
<div class="photo_l">
<div class="photo_info">
<div class="photo_info_r"><span class="count_a"><?php echo $page;?></span> <span class="count_b">/ <?php echo $items;?></span></div>
<div>
<h1 class="title" id="title"><?php echo $title;?></h1>
日期：<span class="px11"><?php echo $adddate;?></span>&nbsp;&nbsp;&nbsp;
点击：<span id="hits" class="px11"><?php echo $hits;?></span>&nbsp;&nbsp;&nbsp;
<a target="_blank" href="#" id="vbig" style="color:#F1F1F1;">查看原图</a>&nbsp;&nbsp;&nbsp;
<span onclick="Go('<?php echo $MOD['linkurl'];?><?php echo rewrite('view.php?itemid='.$itemid);?>#p');" class="c_p">全部展开</span>
</div>
</div>
</div>
<div class="jqslide">
<div class="pic">
<div class="big">
<img id="photo" src="<?php echo DT_SKIN;?>image/spacer.gif"/>
<div id="pload"></div>
</div>
<div class="prev"><a href="javascript:void(0);" hidefocus="true" id="prevbtn" class="prevbtn" title="上一张 支持键盘←方向键"></a></div>
<div class="next"><a href="javascript:void(0);" hidefocus="true" id="nextbtn" class="nextbtn" title="下一张 支持键盘→方向键"></a></div>
</div>
<div id="pintro" class="photo_intro"></div>
<div class="plist">
<div class="scd">
<ul id="photolist">
</ul>
</div>
<div class="scb" id="scb"></div>
<a href="javascript:void(0);" class="scl" id="scprev" hidefocus="true"></a>
<a href="javascript:void(0);" class="scr" id="scnext" hidefocus="true"></a>
</div>
<ul id="photoinfo" style="display:none;">
<?php if(is_array($T)) { foreach($T as $k => $t) { ?>
<li>
<p><?php echo $t['introduce'];?></p>
<i title="bimg"><?php echo $t['big'];?></i>
<i title="simg"><span><?php echo $k+1;?>/<?php echo $items;?></span><a href="javascript:void(0)" title="<?php echo $t['introduce'];?>" hidefocus="true"><img src="<?php echo $t['middle'];?>" width="100" height="75" alt=""/></a></i>
</li>
<?php } } ?>
</ul>
</div>
</div>
<script type="text/javascript">var load_page = <?php echo $page;?>;var load_item = <?php echo $items;?>;</script>
<div class="m">
<div class="b10">&nbsp;</div>
<div class="box_head">
<div><strong><?php echo $MOD['name'];?>说明</strong></div>
</div>
<div class="box_body" style="padding:0;">
<?php if($CP) { ?><?php include template('property', 'chip');?><?php } ?>
<div class="content c_b" id="content"><?php echo $content;?></div>
<div class="left_head"><span class="f_r"><a href="<?php echo $MOD['linkurl'];?><?php echo $CAT['linkurl'];?>">更多&raquo;</a></span>推荐<?php echo $MOD['name'];?></div>
<div class="b5">&nbsp;</div>
<div class="thumb"><?php echo tag("moduleid=$moduleid&condition=status=3 and open=3 and level=1 and items>0&catid=$catid&order=".$MOD['order']."&length=20&width=120&height=90&pagesize=6&cols=6&template=list-photo");?></div>
<?php include template('comment', 'chip');?>
</div>
</div>
<div class="m">
<br/>
<center>
[ <a href="<?php echo $MOD['linkurl'];?>search.php" rel="nofollow"><?php echo $MOD['name'];?>搜索</a> ]&nbsp;
[ <a href="javascript:SendFav();">加入收藏</a> ]&nbsp;
[ <a href="javascript:SendPage();">告诉好友</a> ]&nbsp;
[ <a href="javascript:Print();">打印本文</a> ]&nbsp;
[ <a href="javascript:window.close()">关闭窗口</a> ]
</center>
<br/>
</div>
<?php if($content) { ?><script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/content.js"></script><?php } ?>
<?php include template('footer');?>
<?php } else { ?>
<meta http-equiv="refresh" content="0;url=<?php echo $MOD['linkurl'];?>private.php?itemid=<?php echo $itemid;?>&page=<?php echo $page;?>">
<?php } ?>
