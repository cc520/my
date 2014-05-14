<?php defined('IN_DESTOON') or exit('Access Denied');?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=<?php echo DT_CHARSET;?>"/>
<title><?php if($head_title) { ?><?php echo $head_title;?><?php echo $DT['seo_delimiter'];?><?php } ?>
��������<?php echo $DT['seo_delimiter'];?><?php if($city_sitename) { ?><?php echo $city_sitename;?><?php } else { ?><?php echo $DT['sitename'];?><?php } ?>
<?php echo $DT['seo_delimiter'];?>Powered By DESTOON B2B</title>
<meta name="robots" content="nofollow"/>
<meta name="generator" content="DESTOON B2B - www.destoon.com"/>
<meta http-equiv="x-ua-compatible" content="IE=7"/>
<link rel="shortcut icon" href="<?php echo DT_STATIC;?>favicon.ico"/>
<link rel="bookmark" href="<?php echo DT_STATIC;?>favicon.ico"/>
<link rel="stylesheet" type="text/css" href="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/style.css"/>
<!--[if lte IE 6]>
<link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>ie6.css"/>
<![endif]-->
<!--[if IE]>
<style type="text/css">
.head_user em {margin:-4px 0 0 -4px;}
#profile {margin:20px 0 0 -140px;}
</style>
<![endif]-->
<?php if(!DT_DEBUG) { ?><script type="text/javascript">window.onerror= function(){return true;}</script><?php } ?>
<script type="text/javascript" src="<?php echo DT_STATIC;?>lang/<?php echo DT_LANG;?>/lang.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/config.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/jquery.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/common.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/admin.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/member.js"></script>
</head>
<body>
<div id="msgbox" style="display:none;"></div>
<?php echo dmsg();?>
<div class="head" id="head">
<div class="head_m">
<div class="head_logo"><a href="./"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/logo.png" alt="��������"/></a></div>
<div class="head_main">
<ul>
<?php if($_userid) { ?>
<li class="menu_1" id="menu_0" onclick="c(0);">��Ա����</li>
<li class="menu_2" id="menu_1" onclick="c(1);">��Ϣ����</li>
<li class="menu_2" id="menu_2" onclick="c(2);">���׹���</li>
<li class="menu_2" id="menu_3" onclick="c(3);">���̹���</li>
<?php } ?>
<li class="menu_2" onclick="Go('<?php echo DT_PATH;?>');">��վ��ҳ</li>
</ul>
</div>
<div class="head_user">
<?php if($_userid) { ?>
<ul>
<li onmouseover="Ds('profile');" onmouseout="Dh('profile');"><a href="avatar.php"><img src="<?php echo useravatar($_username, 'small');?>" width="20" height="20" id="myavatar"/></a>
<div id="profile" style="display:none;">
<div>
<dl>
<dt><span class="f_r"><a href="edit.php"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/setting.gif" width="10" height="10" align="absmiddle" title="��������"/></a></span>��ӭ��<span class="f_black" title="<?php echo $_username;?>"><?php echo $_truename;?></span> (<a href="line.php" title="<?php if($_online) { ?>�������<?php } else { ?>�������<?php } ?>
"><?php if($_online) { ?><span class="f_green">����</span><?php } else { ?><span class="f_gray">����</span><?php } ?>
</a>)</dt>
<dt><a href="<?php echo userurl($_username);?>" target="_blank" title="<?php echo $_company;?>"><span class="f_black"><?php echo $_company;?></span></a></dt>
<dt><a href="record.php"><span class="f_black"><?php echo $DT['money_name'];?>(<?php echo $_money;?>)</span></a> <span class="f_gray">|</span> 
<a href="credit.php"><span class="f_black"><?php echo $DT['credit_name'];?>(<?php echo $_credit;?>)</span></a></dt>
</dl>
</div>
</div>
</li>
<li id="destoon_message"><a href="message.php">��Ϣ</a><?php if($_message) { ?><em><?php echo $_message;?></em><?php } ?>
</li>
<?php if($DT['im_web']) { ?><li id="destoon_chat"><a href="chat.php">�Ի�</a><?php if($_chat) { ?><em><?php echo $_chat;?></em><?php } ?>
</li><?php } ?>
<li><a href="logout.php?forward=">�˳�</a></li>
<?php if($admin_user) { ?><li><a href="index.php?action=logout">ע����Ȩ</a></li><?php } ?>
</ul>
<?php } else { ?>
<a href="<?php echo $DT['file_login'];?>">������¼</a> | 
<a href="<?php echo $DT['file_register'];?>">ע���Ա</a>
<?php } ?>

</div>
<div class="c_b"></div>
</div>
</div>
<div class="head_s" id="destoon_space">&nbsp;</div>
<div class="main_tb">
<table cellpadding="0" cellspacing="0" width="100%">
<tr>
<td valign="top" class="side" id="side">
<div id="sub_0" style="display:<?php if($_userid) { ?><?php } else { ?>none<?php } ?>
">
<?php if($_userid || $show_menu) { ?>
<div class="side_head" id="h_0"><div>��Ա����</div></div>
<div class="side_body" id="b_0">
<ul>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="booking"><span class="f_r"><a href="booking.php?action=order" class="m">ԤԼ</a></span><a href="booking.php" class="<?php if($MG['inbox_limit']>-1) { ?>n<?php } else { ?>f<?php } ?>
">��ҪԤԼ</a><?php if($_message) { ?><em><?php echo $_message;?></em><?php } ?>
</li>
<?php if($MG['inbox_limit']>-1 || $show_menu) { ?>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="message"><span class="f_r"><a href="message.php?action=send" class="m">����</a></span><a href="message.php" class="<?php if($MG['inbox_limit']>-1) { ?>n<?php } else { ?>f<?php } ?>
">վ���ż�</a><?php if($_message) { ?><em><?php echo $_message;?></em><?php } ?>
</li>
<?php } ?>
<?php if($MG['chat'] || $show_menu) { ?>
<?php if($DT['im_web']) { ?>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="chats"><span class="f_r"><a href="chat.php?action=add" class="m">�鿴</a></span><a href="chat.php" class="<?php if($MG['inbox_limit']>-1) { ?>n<?php } else { ?>f<?php } ?>
">վ�ڽ�̸</a><?php if($_chat) { ?><em><?php echo $_chat;?></em><?php } ?>
</li>
<?php } ?>
<?php } ?>

<?php if($MG['friend_limit']>-1 || $show_menu) { ?>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="friend"><span class="f_r"><a href="friend.php?action=add" class="m">���</a></span><a href="friend.php" class="<?php if($MG['friend_limit']>-1) { ?>n<?php } else { ?>f<?php } ?>
">�ҵ�����</a></li>
<?php } ?>
<?php if($MG['favorite_limit']>-1 || $show_menu) { ?>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="favorite"><span class="f_r"><a href="favorite.php?action=add" class="m">���</a></span><a href="favorite.php" class="<?php if($MG['favorite_limit']>-1) { ?>n<?php } else { ?>f<?php } ?>
">�̻��ղ�</a></li>
<?php } ?>
<?php if($MG['alert_limit']>-1 || $show_menu) { ?>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="alert"><span class="f_r"><a href="alert.php?action=add" class="m">���</a></span><a href="alert.php" class="<?php if($MG['alert_limit']>-1) { ?>n<?php } else { ?>f<?php } ?>
">ó������</a></li>
<?php } ?>
<?php if($MG['sms'] || $show_menu) { ?>
<?php if($DT['sms']) { ?><li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="sms"><span class="f_r"><a href="sms.php?action=add" class="m">����</a></span><a href="sms.php" class="<?php if($MG['sms']) { ?>n<?php } else { ?>f<?php } ?>
">�ֻ�����</a></li><?php } ?>
<?php } ?>
<?php if($MG['mail'] || $show_menu) { ?>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="mail"><span class="f_r"><a href="sendmail.php" class="m">����</a></span><a href="mail.php" class="<?php if($MG['mail']) { ?>n<?php } else { ?>f<?php } ?>
">�ʼ�����</a></li>
<?php } ?>
<?php if($MG['spread'] || $show_menu) { ?>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="spread"><span class="f_r"><a href="spread.php?action=add" class="m">����</a></span><a href="spread.php" class="<?php if($MG['spread']) { ?>n<?php } else { ?>f<?php } ?>
">�����ƹ�</a></li>
<?php } ?>
<?php if($MG['ad'] || $show_menu) { ?>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="ad"><span class="f_r"><a href="ad.php?action=add" class="m">����</a></span><a href="ad.php" class="<?php if($MG['ad']) { ?>n<?php } else { ?>f<?php } ?>
">���Ԥ��</a></li>
<?php } ?>
<?php if($show_oauth) { ?>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="oauth"><span class="f_r"><a href="oauth.php" class="m">��</a></span><a href="oauth.php" class="<?php if($_userid) { ?>n<?php } else { ?>f<?php } ?>
">һ����¼</a></li>
<?php } ?>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="edit"><span class="f_r"><a href="avatar.php" class="m">ͷ��</a></span><a href="edit.php" class="<?php if($_userid) { ?>n<?php } else { ?>f<?php } ?>
">�޸�����</a></li>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="ask"><span class="f_r"><a href="ask.php?action=add" class="m">����</a></span><a href="ask.php" class="<?php if($_userid) { ?>n<?php } else { ?>f<?php } ?>
">�ͷ�����</a></li>
</ul>
</div>
<?php } ?>
</div>
<div id="sub_1" style="display:<?php if($_userid) { ?>none<?php } else { ?><?php } ?>
">
<?php if($MYMODS || $show_menu) { ?>
<div class="side_head" id="h_1"><div>��Ϣ����</div></div>
<div class="side_body" id="b_1">
<ul>
<?php if(is_array($MENUMODS)) { foreach($MENUMODS as $k => $v) { ?>
<?php if($v==9) { ?>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="mid_job"><span class="f_r"><a href="<?php echo $DT['file_my'];?>?mid=9&action=add" class="m">����</a></span><a href="<?php echo $DT['file_my'];?>?mid=9" class="<?php if(in_array($v, $MYMODS)) { ?>n<?php } else { ?>f<?php } ?>
">��Ƹ����</a></li>
<?php } else if($v==-9) { ?>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="mid_resume"><span class="f_r"><a href="<?php echo $DT['file_my'];?>?mid=9&action=add&resume=1" class="m">����</a></span><a href="<?php echo $DT['file_my'];?>?mid=9&resume=1" class="<?php if(in_array($v, $MYMODS)) { ?>n<?php } else { ?>f<?php } ?>
">��������</a></li>
<?php } else { ?>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);"  id="mid_<?php echo $v;?>"><span class="f_r"><a href="<?php echo $DT['file_my'];?>?mid=<?php echo $v;?>&action=add" class="m">����</a></span><a href="<?php echo $DT['file_my'];?>?mid=<?php echo $v;?>" class="<?php if(in_array($v, $MYMODS)) { ?>n<?php } else { ?>f<?php } ?>
"><?php echo $MODULE[$v]['name'];?>����</a></li>
<?php } ?>
<?php } } ?>
</ul>
</div>
<?php } ?>
</div>
<div id="sub_2" style="display:none;">
<?php if($_userid || $show_menu) { ?>
<div class="side_head" id="h_2"><div>���׹���</div></div>
<div class="side_body" id="b_2">
<ul>
<?php if(isset($MODULE['16'])) { ?>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="trade"><span class="f_r"><a href="trade.php?action=order" class="m">���</a></span><a href="trade.php" class="<?php if($_userid) { ?>n<?php } else { ?>f<?php } ?>
">�ҵĶ���</a></li>
<?php } ?>
<?php if(isset($MODULE['17'])) { ?>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="group"><span class="f_r"><a href="group.php?action=order" class="m">���</a></span><a href="group.php" class="<?php if($_userid) { ?>n<?php } else { ?>f<?php } ?>
">�Ź�����</a></li>
<?php } ?>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="record"><span class="f_r"><a href="record.php?action=pay" class="m">վ��</a></span><a href="record.php" class="<?php if($_userid) { ?>n<?php } else { ?>f<?php } ?>
"><?php echo $DT['money_name'];?>��ˮ</a></li>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="charge"><span class="f_r"><a href="charge.php?action=pay" class="m">��ֵ</a></span><a href="charge.php?action=record" class="<?php if($_userid) { ?>n<?php } else { ?>f<?php } ?>
">��ֵ��¼</a></li>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="cash"><span class="f_r"><a href="cash.php" class="m">����</a></span><a href="cash.php?action=record" class="<?php if($_userid) { ?>n<?php } else { ?>f<?php } ?>
"><?php echo $DT['money_name'];?>����</a></li>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="credit"><span class="f_r"><a href="credit.php?action=buy" class="m">����</a></span><a href="credit.php" class="<?php if($_userid) { ?>n<?php } else { ?>f<?php } ?>
"><?php echo $DT['credit_name'];?>����</a></li>
<?php if($MG['address_limit']>-1 || $show_menu) { ?>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="addr"><span class="f_r"><a href="address.php?action=add" class="m">���</a></span><a href="address.php" class="<?php if($MG['address_limit']>-1) { ?>n<?php } else { ?>f<?php } ?>
">�ջ���ַ</a></li>
<?php } ?>
</ul>
</div>
<?php } ?>
</div>
<div id="sub_3" style="display:none;">
<?php if($MG['homepage'] || $show_menu) { ?>
<div class="side_head" id="h_3"><div>���̹���</div></div>
<div class="side_body" id="b_3">
<ul>
<?php if($MG['homepage'] || $show_menu) { ?>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="homepage"><span class="f_r"><a href="<?php echo DT_PATH;?>index.php?homepage=<?php echo $_username;?>&update=1" class="m" target="_blank">Ԥ��</a></span><a href="home.php" class="<?php if($MG['homepage']) { ?>n<?php } else { ?>f<?php } ?>
">��������</a></li>
<?php } ?>
<?php if($MG['homepage'] || $show_menu) { ?>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="style"><span class="f_r"><a href="style.php?action=view" class="m">�鿴</a></span><a href="style.php" class="<?php if($MG['homepage']) { ?>n<?php } else { ?>f<?php } ?>
">ģ������</a></li>
<?php } ?>
<?php if(($MG['news_limit']>-1 && $MG['homepage']) || $show_menu) { ?>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="news"><span class="f_r"><a href="news.php?action=add" class="m">����</a></span><a href="news.php" class="<?php if($MG['news_limit']>-1 && $MG['homepage']) { ?>n<?php } else { ?>f<?php } ?>
">��˾����</a></li>
<?php } ?>
<?php if(($MG['page_limit']>-1 && $MG['homepage']) || $show_menu) { ?>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="page"><span class="f_r"><a href="page.php?action=add" class="m">���</a></span><a href="page.php" class="<?php if($MG['page_limit']>-1 && $MG['homepage']) { ?>n<?php } else { ?>f<?php } ?>
">��˾��ҳ</a></li>
<?php } ?>
<?php if(($MG['honor_limit']>-1 && $MG['homepage']) || $show_menu) { ?>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="honor"><span class="f_r"><a href="honor.php?action=add" class="m">���</a></span><a href="honor.php" class="<?php if($MG['honor_limit']>-1 && $MG['homepage']) { ?>n<?php } else { ?>f<?php } ?>
">��������</a></li>
<?php } ?>
<?php if(($MG['link_limit']>-1 && $MG['homepage']) || $show_menu) { ?>
<li class="side_a" onmouseover="v(this.id);" onmouseout="t(this.id);" id="link"><span class="f_r"><a href="link.php?action=add" class="m">���</a></span><a href="link.php" class="<?php if($MG['link_limit']>-1 && $MG['homepage']) { ?>n<?php } else { ?>f<?php } ?>
">��������</a></li>
<?php } ?>
</ul>
</div>
<?php } ?>
</div>
</td>
<td class="side_h" onclick="oh(this);" title="���չ��/���ز���" id="side_oh">&nbsp;</td>
<td valign="top" class="main" id="main">
