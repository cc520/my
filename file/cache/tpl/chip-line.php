<?php defined('IN_DESTOON') or exit('Access Denied');?>var destoon_userid = <?php echo $_userid;?>;
var destoon_username = '<?php echo $_username;?>';
var destoon_message = <?php echo $_message;?>;
var destoon_chat = <?php echo $_chat;?>;
var destoon_cart = substr_count(get_cookie('cart'), ',');
var destoon_member = '';
<?php if($_userid) { ?>
destoon_member += '<span class="f_b" title="<?php echo $MG['groupname'];?>"><?php echo $_truename;?></span> <a href="<?php echo $MODULE['2']['linkurl'];?>line.php" title="<?php if($_online) { ?>���ߣ��������<?php } else { ?>�����������<?php } ?>
"><img src="<?php echo DT_SKIN;?>image/user_<?php if($_online) { ?>on<?php } else { ?>off<?php } ?>
line.png" width="10" height="10" align="absmiddle"/></a> | <a href="<?php echo $MODULE['2']['linkurl'];?>">��������</a> | <a href="<?php echo $MODULE['2']['linkurl'];?>message.php">վ����(<span class="head_t" id="destoon_message"><?php if($_message) { ?><strong><?php echo $_message;?></strong><?php if($_sound) { ?>'+sound('message_<?php echo $_sound;?>')+'<?php } ?>
<?php } else { ?>0<?php } ?>
</span>)</a><?php if($DT['im_web']) { ?> | <a href="<?php echo $MODULE['2']['linkurl'];?>chat.php">�¶Ի�(<span class="head_t" id="destoon_chat"><?php if($_chat) { ?><strong><?php echo $_chat;?></strong>'+sound('chat_new')+'<?php } else { ?>0<?php } ?>
</span>)</a><?php } ?>
 | <a href="<?php echo $MODULE['2']['linkurl'];?>logout.php">�˳�</a>';
<?php } else { ?>
<?php if($EXT['oauth']) { ?>
var oauth_site = '<?php echo get_cookie('oauth_site');?>';
var oauth_user = '<?php echo get_cookie('oauth_user');?>';
destoon_member += (oauth_user && oauth_site) ? '<img src="<?php echo DT_PATH;?>api/oauth/'+oauth_site+'/ico.png" align="absmiddle"/> ��ӭ��<strong>'+oauth_user+'</strong> | <a href="<?php echo DT_PATH;?>api/oauth/'+oauth_site+'/index.php?time=<?php echo $DT_TIME;?>">���ʺ�</a> | <a href="javascript:" onclick="oauth_logout();">ע����¼</a>' : '��ӭ��<span class="f_red">����</span> | <a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_login'];?>">���¼</a> | <a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_register'];?>">���ע��</a> | <a href="<?php echo $MODULE['2']['linkurl'];?>send.php">��������?</a>';
<?php } else { ?>
destoon_member += '��ӭ��<span class="f_red">����</span> | <a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_login'];?>">���¼</a> | <a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_register'];?>">���ע��</a> | <a href="<?php echo $MODULE['2']['linkurl'];?>send.php">��������?</a>';
<?php } ?>
<?php } ?>
$('#destoon_member').html(destoon_member);
<?php if($DT['city']) { ?>
$('#destoon_city').html('<?php echo $city_name;?>');
<?php } ?>
<?php if(isset($MODULE['16'])) { ?>
$('#destoon_cart').html(destoon_cart ? '<strong>'+destoon_cart+'</strong>' : 0);
<?php } ?>
<?php if($_userid && $DT['pushtime']) { ?>window.setInterval('PushNew()',<?php echo $DT['pushtime'];?>*1000);<?php } ?>
