<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header');?>
<script type="text/javascript">var module_id= <?php echo $moduleid;?>,item_id=<?php echo $itemid;?>,content_id='content',img_max_width=<?php echo $MOD['max_width'];?>;</script>
<div class="m">
<div class="m_l f_l">
<div class="left_box">
<div class="pos">��ǰλ��: <a href="<?php echo $MODULE['1']['linkurl'];?>">��ҳ</a> &raquo; <a href="<?php echo $MOD['linkurl'];?>"><?php echo $MOD['name'];?></a> &raquo; <?php echo cat_pos($CAT, ' &raquo; ');?> &raquo; </div>
<h1 class="title" id="title"><?php echo $title;?></h1>
<?php if($introduce) { ?><div class="introduce"><?php echo $introduce;?></div><?php } ?>
<center><img src="<?php echo $thumb;?>" alt="<?php echo $title;?>"/></center>
<?php if($CP) { ?><?php include template('property', 'chip');?><?php } ?>
<div class="content" id="content"><?php echo $content;?></div>
<div class="b10">&nbsp;</div>
<center>
[ <a href="<?php echo $MOD['linkurl'];?>search.php" rel="nofollow"><?php echo $MOD['name'];?>����</a> ]&nbsp;
[ <a href="javascript:SendFav();">�����ղ�</a> ]&nbsp;
[ <a href="javascript:SendPage();">���ߺ���</a> ]&nbsp;
[ <a href="javascript:Print();">��ӡ����</a> ]&nbsp;
[ <a href="javascript:window.close()">�رմ���</a> ]
</center>
<?php include template('comment', 'chip');?>
<br/>
</div>
</div>
<div class="m_n f_l">&nbsp;</div>
<div class="m_r f_l">
<div class="g_price">
<div>ԭ��<br/><span>��<?php echo $marketprice;?></span></div>
<div>�ۿ�<br/><?php echo $discount;?>��</div>
<div><strong>��ʡ<br/>��<?php echo $savemoney;?></strong></div>
</div>
<div class="b10 c_b">&nbsp;</div>
<div class="g_deal" onclick="Go('<?php echo $MOD['linkurl'];?><?php echo rewrite('buy.php?itemid='.$itemid);?>');">
<div>��<?php echo $iprice;?></div>
</div>

<?php if($process == 2) { ?>
<div class="g_timer">
���Ź�������
<div id="totimer"><?php echo timetodate($endtime, 'Y��n��j�� H:i');?></div>
</div>
<div class="b10 c_b">&nbsp;</div>
<?php } else { ?>
<?php if($totime) { ?>
<div class="g_timer">
�����Ź���������
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
h += '<span>'+i+'</span>��';
s = Math.floor(s%86400);
i = Math.floor(s/3600);
h += '<span>'+i+'</span>Сʱ';
s = Math.floor(s%3600);
i = Math.floor(s/60);
h += '<span>'+i+'</span>��';
s = Math.floor(s%60);
h += '<span>'+s+'</span>��';
} else {
h = '<span class="f_red">�Ź��ѽ���</span>';
}
Dd('totimer').innerHTML = h;
}
_totimer();
setInterval("_totimer()", 1000); 
</script>
<?php } ?>
<?php } ?>

<div class="g_info">
<strong>�Ѿ��� <span><?php echo $orders;?></span> �˹���</strong>
<div>
<?php if($process == 0) { ?>
���ڳ��ţ������Ź���������<?php echo $left;?>��
<?php } else if($process == 1) { ?>
�Ź��ѳɹ��������Լ�������...
<?php } else { ?>
�Ź��ѽ���
<?php } ?>
</div>
</div>
<div class="b10">&nbsp;</div>
<div class="contact_head">��ϵ��ʽ</div>
<div class="contact_body" id="contact"><?php include template('contact', 'chip');?></div>
<div class="b10 c_b">&nbsp;</div>
</div>
</div>
<?php if($content) { ?><script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/content.js"></script><?php } ?>
<?php include template('footer');?>