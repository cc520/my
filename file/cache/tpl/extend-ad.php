<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header');?>
<div class="m">
<table cellpadding="0" cellspacing="0" width="100%">
<tr>
<td valign="top" class="left_menu">
<ul>
<li class="left_menu_li"><a href="<?php echo $MODULE['1']['linkurl'];?>">��վ��ҳ</a></li>
<li class="left_menu_li" id="type_0"><a href="./">�������</a></li>
<?php if(is_array($TYPE)) { foreach($TYPE as $k => $v) { ?>
<?php if($k) { ?><li class="left_menu_li" id="type_<?php echo $k;?>"><a href="<?php echo rewrite('index.php?typeid='.$k);?>"><?php echo $v;?></a></li><?php } ?>
<?php } } ?>
</ul>
</td>
<td valign="top">
<div class="left_box">
<div class="pos"><span class="f_r"><a href="<?php echo $MODULE['2']['linkurl'];?>ad.php">[�ҵĹ��]</a></span>��ǰλ��: <a href="<?php echo $MODULE['1']['linkurl'];?>">��ҳ</a> &raquo; <a href="./">�������</a></div>
<div class="b15">&nbsp;</div>
<table cellpadding="6" cellspacing="1" width="96%" align="center" bgcolor="#E3EEF5">
<tr bgcolor="#F1F7FC">
<th>���</th>
<th>���λ����</th>
<?php if(!$typeid) { ?><th>�������</th><?php } ?>
<th>���(px)</th>
<th title="(<?php echo $DT['money_unit'];?>/��)">�۸�</th>
<th title="(<?php echo $DT['money_unit'];?>/��)">��λ</th>
<th>ʾ��ͼ</th>
<?php if($MOD['ad_buy']) { ?><th>Ԥ��</th><?php } ?>
</tr>
<?php if(is_array($ads)) { foreach($ads as $k => $v) { ?>
<tr align="center" bgcolor="#FFFFFF" title="<?php echo $v['introduce'];?>">
<td id="a_<?php echo $v['pid'];?>">A<?php echo $v['pid'];?></td>
<td><a href="<?php echo rewrite('index.php?pid='.$v['pid']);?>" title="Ч��Ԥ��"><?php echo $v['name'];?></a></td>
<?php if(!$typeid) { ?><td><a href="<?php echo rewrite('index.php?typeid='.$v['typeid']);?>"><?php echo $v['typename'];?></a></td><?php } ?>
<td class="f_gray"><?php echo $v['width'];?> x <?php echo $v['height'];?></td>
<td class="f_orange f_b"><?php if($v['price']) { ?><?php echo $v['price'];?><?php } else { ?>����<?php } ?>
</td>
<td><?php echo $unit;?></td>
<td<?php if($v['thumb']) { ?> onmouseover="show_tip(Dd('a_<?php echo $v['pid'];?>'),'<?php echo $v['thumb'];?>');" onmouseout="show_tip(0,0);" onclick="View('<?php echo $v['thumb'];?>');" title="����鿴��ͼ"<?php } ?>
 class="f_gray"><?php if($v['thumb']) { ?><img src="<?php echo DT_SKIN;?>image/zoomin.gif" class="c_p"/><?php } else { ?>����<?php } ?>
</td>
<?php if($MOD['ad_buy']) { ?>
<td><a href="<?php echo rewrite('index.php?action=buy&pid='.$v['pid']);?>"><img src="<?php echo DT_SKIN;?>image/buy.gif" alt="����"/></a></td>
<?php } ?>
</tr>
<?php } } ?>
</table>
<div class="pages"><?php echo $pages;?></div>
<div class="b10">&nbsp;</div>
</div>
</td>
</tr>
</table>
</div>
<div class="img_tip" id="show_tip" style="display:none;">&nbsp;</div>
<script type="text/javascript">
function show_tip(o, i) {
if(i) {
var aTag = o; var leftpos = toppos = 0;
do {aTag = aTag.offsetParent; leftpos+= aTag.offsetLeft; toppos += aTag.offsetTop;
} while(aTag.offsetParent != null);
var X = o.offsetLeft + leftpos;
var Y = o.offsetTop + toppos + 30;
Dd('show_tip').style.left = X + 'px';
Dd('show_tip').style.top = Y + 'px';
Ds('show_tip');
Inner('show_tip', '<img src="'+i+'" onload="if(this.width>772){this.width=772;}Dd(\'show_tip\').style.width=this.width+\'px\';"/>');
} else {
Dh('show_tip');
}
}
try{Dd('type_<?php echo $typeid;?>').className = 'left_menu_on';}catch(e){}
</script>
<?php include template('footer');?>