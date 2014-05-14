<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header');?>
<script type="text/javascript">var module_id= <?php echo $moduleid;?>,item_id=<?php echo $itemid;?>,content_id='content',img_max_width=<?php echo $MOD['max_width'];?>;</script>
<div class="m">
<div class="m_l f_l">
<div class="left_box">
<div class="pos">当前位置: <a href="<?php echo $MODULE['1']['linkurl'];?>">首页</a> &raquo; <a href="<?php echo $MOD['linkurl'];?>"><?php echo $MOD['name'];?></a> &raquo; <?php echo cat_pos($CAT, ' &raquo; ');?> &raquo; </div>
<h1 class="title" id="title"><?php echo $title;?></h1>
<?php if($introduce) { ?><div class="introduce"><?php echo $introduce;?></div><?php } ?>
<center><img src="<?php echo $thumb;?>" alt="<?php echo $title;?>"/></center>
<?php if($CP) { ?><?php include template('property', 'chip');?><?php } ?>
<div class="content" id="content"><?php echo $content;?></div>
<div class="b10">&nbsp;</div>
<center>
[ <a href="<?php echo $MOD['linkurl'];?>search.php" rel="nofollow"><?php echo $MOD['name'];?>搜索</a> ]&nbsp;
[ <a href="javascript:SendFav();">加入收藏</a> ]&nbsp;
[ <a href="javascript:SendPage();">告诉好友</a> ]&nbsp;
[ <a href="javascript:Print();">打印本文</a> ]&nbsp;
[ <a href="javascript:window.close()">关闭窗口</a> ]
</center>
<?php include template('comment', 'chip');?>
<br/>
</div>
</div>
<div class="m_n f_l">&nbsp;</div>
<div class="m_r f_l">
<div class="g_price">
<div>原价<br/><span>￥<?php echo $marketprice;?></span></div>
<div>折扣<br/><?php echo $discount;?>折</div>
<div><strong>节省<br/>￥<?php echo $savemoney;?></strong></div>
</div>
<div class="b10 c_b">&nbsp;</div>
<div class="g_deal" onclick="Go('<?php echo $MOD['linkurl'];?><?php echo rewrite('buy.php?itemid='.$itemid);?>');">
<div>￥<?php echo $iprice;?></div>
</div>

<?php if($process == 2) { ?>
<div class="g_timer">
本团购结束于
<div id="totimer"><?php echo timetodate($endtime, 'Y年n月j日 H:i');?></div>
</div>
<div class="b10 c_b">&nbsp;</div>
<?php } else { ?>
<?php if($totime) { ?>
<div class="g_timer">
距离团购结束还有
<div id="totimer">&nbsp;&nbsp;</div>
</div>
<div class="b10 c_b">&nbsp;</div>
<script type="text/javascript">
var totime = new Date(<?php echo $jsdate;?>).getTime();
function _totimer() {
var t = new Date();
var s = Math.floor((totime - t.getTime())/1000);
var h = '';
var i;
if(s > 0) {
i = Math.floor(s/86400);
h += '<span>'+i+'</span>天';
s = Math.floor(s%86400);
i = Math.floor(s/3600);
h += '<span>'+i+'</span>小时';
s = Math.floor(s%3600);
i = Math.floor(s/60);
h += '<span>'+i+'</span>分';
s = Math.floor(s%60);
h += '<span>'+s+'</span>秒';
} else {
h = '<span class="f_red">团购已结束</span>';
}
Dd('totimer').innerHTML = h;
}
_totimer();
setInterval("_totimer()", 1000); 
</script>
<?php } ?>
<?php } ?>

<div class="g_info">
<strong>已经有 <span><?php echo $orders;?></span> 人购买</strong>
<div>
<?php if($process == 0) { ?>
正在成团，距离团购人数还差<?php echo $left;?>人
<?php } else if($process == 1) { ?>
团购已成功，还可以继续购买...
<?php } else { ?>
团购已结束
<?php } ?>
</div>
</div>
<div class="b10">&nbsp;</div>
<div class="contact_head">联系方式</div>
<div class="contact_body" id="contact"><?php include template('contact', 'chip');?></div>
<div class="b10 c_b">&nbsp;</div>
</div>
</div>
<?php if($content) { ?><script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/content.js"></script><?php } ?>
<?php include template('footer');?>