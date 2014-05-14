<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header', $module);?>
<link rel="stylesheet" type="text/css" href="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/message.css"/>
<div class="menu">
<table cellpadding="0" cellspacing="0">
<tr>
<td class="tab" id="add"><a href="?action=send"><span>�����ż�</span></a></td>
<td class="tab_nav">&nbsp;</td>
<td class="tab" id="inbox"><a href="?action=inbox"><span>�ռ���</span></a></td>
<td class="tab_nav">&nbsp;</td>
<td class="tab" id="outbox"><a href="?action=outbox"><span>�ѷ���</span></a></td>
<td class="tab_nav">&nbsp;</td>
<td class="tab" id="draft"><a href="?action=draft"><span>�ݸ���</span></a></td>
<td class="tab_nav">&nbsp;</td>
<td class="tab" id="recycle"><a href="?action=recycle"><span>����վ</span></a></td>
<td class="tab_nav">&nbsp;</td>
<td class="tab" id="export"><a href="?action=export"><span>�ż�����</span></a></td>
<td class="tab_nav">&nbsp;</td>
<td class="tab" id="empty"><a href="?action=empty"><span>�ż�����</span></a></td>
<td class="tab_nav">&nbsp;</td>
<td class="tab" id="setting"><a href="?action=setting"><span>�ż�����</span></a></td>
</tr>
</table>
</div>
<?php if($action == 'send') { ?>
<form method="post" action="message.php" id="dform" onsubmit="return check();">
<input type="hidden" name="action" value="<?php echo $action;?>"/> 
<input type="hidden" name="typeid" value="<?php echo $typeid;?>"/> 
<table cellspacing="1" cellpadding="6" class="tb">
<tr>
<td class="tl"><span class="f_red">*</span> �ռ���</td>
<td class="tr f_gray"><input type="text" size="45" name="message[touser]" id="touser" value="<?php echo $touser;?>"/>&nbsp;&nbsp;<a href="javascript:Dwidget('friend.php?action=my', '[�ҵ�����]', 600, 300);" class="t">[�ҵ�����]</a> <span id="dtouser" class="f_red"></span>
<br/>����ռ����밴�ո������ ���ͬʱ���͸�<?php echo $MOD['maxtouser'];?>���ռ���</td>
</tr>
<tr>
<td class="tl"><span class="f_red">*</span> ����</td>
<td class="tr"><input type="text" size="60" name="message[title]" id="title" value="<?php echo $title;?>"/> <span id="dtitle" class="f_red"></span></td>
</tr>
<tr>
<td class="tl"><span class="f_red">*</span> ����</td>
<td class="tr"><textarea name="message[content]" id="content" class="dsn"><?php echo $content;?></textarea>
<?php echo deditor($moduleid, 'content', 'Simple', '98%', 200);?><span id="dcontent" class="f_red"></span>
</td>
</tr>
<tr>
<td class="tl">ѡ��</td>
<td class="tr">
<input type="checkbox" name="message[save]" id="save" value="1" onclick="if(this.checked){Dd('copy').checked=Dd('feedback').checked=false;}"/> �����ͣ�����Ϊ�ݸ�
<input type="checkbox" name="message[copy]" id="copy" value="1" onclick="if(this.checked){Dd('save').checked=false;}"/> ���浽�ѷ���
<input type="checkbox" name="message[feedback]" id="feedback" value="1" onclick="if(this.checked){Dd('save').checked=false;}"/> �Ѷ���ִ
</td>
</tr>
<?php if($need_captcha) { ?>
<tr>
<td class="tl"><span class="f_red">*</span> ��֤��</td>
<td class="tr"><?php include template('captcha', 'chip');?> <span id="dcaptcha" class="f_red"></span></td>
</tr>
<?php } ?>
<tr>
<td class="tl"> </td>
<td class="tr" height="50">
<input type="submit" name="submit" value=" ȷ �� " class="btn"/>&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="reset" value=" �� �� " class="btn"/>
<?php if($MG['message_limit']) { ?>
&nbsp;&nbsp;&nbsp;���տɷ� <span class="f_b f_red"><?php echo $MG['message_limit'];?></span> ��
&nbsp;&nbsp;&nbsp;��ǰ�ѷ� <span class="f_b"><?php echo $limit_used;?></span> ��
&nbsp;&nbsp;&nbsp;�����Է� <span class="f_b f_blue"><?php echo $limit_free;?></span> ��
<?php } ?>
</td>
</tr>
</table>
</form>
<?php echo load('clear.js');?>
<script type="text/javascript">
function check() {
var len;
if(Dd('save').checked == false) {
if(Dd('touser').value == '') {
Dmsg('����д�ռ���', 'touser');
return false;
}
var max = <?php echo $MOD['maxtouser'];?>;
if(max && substr_count(Dd('touser').value, ' ') >= max) {
Dmsg('������ѡ��'+max+'���ռ���', 'touser');
return false;
}
}
len = Dd('title').value.length;
if(len < 5) {
Dmsg('���ⲻ������5���֣���ǰ������'+len+'����', 'title');
return false;
}
if(len > 60) {
Dmsg('���ⲻ�ܶ���60���֣���ǰ������'+len+'����', 'title');
return false;
}
len = FCKLen();
if(len < 10) {
Dmsg('���ݲ�������10���֣���ǰ������'+len+'����', 'content');
return false;
}
if(len > 5000) {
Dmsg('���ݲ��ܶ���5000���֣���ǰ������'+len+'����', 'content');
return false;
}
<?php if($need_captcha) { ?>
f = 'captcha';
l = Dd(f).value;
if(!is_captcha(l)) {
Dmsg('����д��ȷ����֤��', f);
return false;
}
if(Dd('c'+f).innerHTML.indexOf('error') != -1) {
Dd(f).focus();
return false;
}
<?php } ?>
return true;
}
</script>
<?php $action='add'?>
<?php } else if($action == 'edit') { ?>
<form method="post" action="message.php" id="dform" onsubmit="return check();">
<input type="hidden" name="action" value="<?php echo $action;?>"/> 
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/> 
<table cellspacing="1" cellpadding="6" class="tb">
<tr>
<td class="tl"><span class="f_red">*</span> �ռ���</td>
<td class="tr f_gray"><input type="text" size="45" name="message[touser]" id="touser" value="<?php echo $touser;?>"/>&nbsp;&nbsp;<a href="javascript:Dwidget('friend.php?action=my', '[�ҵ�����]', 600, 300);" class="t">[�ҵ�����]</a> <span id="dtouser" class="f_red"></span><br/>����ռ����밴�ո������ ���ͬʱ���͸�<?php echo $MOD['maxtouser'];?>���ռ���</td>
</tr>
<tr>
<td class="tl"><span class="f_red">*</span> ����</td>
<td class="tr f_gray"><input type="text" size="60" name="message[title]" id="title" value="<?php echo $title;?>"/> <span id="dtitle" class="f_red"></span></td>
</tr>
<tr>
<td class="tl"><span class="f_red">*</span> ����</td>
<td class="tr f_gray"><textarea name="message[content]" id="content" class="dsn"><?php echo $content;?></textarea>
<?php echo deditor($moduleid, 'content', 'Simple', '98%', 200);?><span id="dcontent" class="f_red"></span>
</td>
</tr>
<tr>
<td class="tl">ѡ��</td>
<td class="tr">
<input type="checkbox" name="message[send]" id="sendmsg" value="1" onclick="if(!this.checked){Dd('copy').checked=Dd('feedback').checked=false;}"/> �����ż�
<input type="checkbox" name="message[copy]" id="copy" value="1" onclick="if(this.checked){Dd('sendmsg').checked=true;}"/> ���浽�ѷ���
<input type="checkbox" name="message[feedback]" id="feedback" value="1" onclick="if(this.checked){Dd('sendmsg').checked=true;}"/> �Ѷ���ִ
</td>
</tr>
<tr>
<td class="tl">&nbsp;</td>
<td class="tr" height="50"><input type="submit" name="submit" value=" �� �� " class="btn"/>&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value=" �� �� " class="btn" onclick="history.back(-1);"/></td>
</tr>
</table>
</form>
<?php echo load('clear.js');?>
<script type="text/javascript">
function check() {
var len;
if(Dd('sendmsg').checked == true) {
if(Dd('touser').value == '') {
Dmsg('����д�ռ���', 'touser');
return false;
}
var max = <?php echo $MOD['maxtouser'];?>;
if(max && substr_count(Dd('touser').value, ' ') >= max) {
Dmsg('������ѡ��'+max+'���ռ���', 'touser');
return false;
}
}
len = Dd('title').value.length;
if(len < 5) {
Dmsg('���ⲻ������5���֣���ǰ������'+len+'����', 'title');
return false;
}
if(len > 60) {
Dmsg('���ⲻ�ܶ���60���֣���ǰ������'+len+'����', 'title');
return false;
}
len = FCKLen();
if(len < 10) {
Dmsg('���ݲ�������10���֣���ǰ������'+len+'����', 'content');
return false;
}
if(len > 5000) {
Dmsg('���ݲ��ܶ���5000���֣���ǰ������'+len+'����', 'content');
return false;
}
return true;
}
</script>
<?php $action='draft'?>
<?php } else if($action == 'export') { ?>
<form method="post" action="message.php">
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<table cellspacing="1" cellpadding="6" class="tb">
<tr>
<td class="tl">��ʾ</td>
<td class="tr f_blue">&nbsp;�붨�ڵ�����Ҫ�ż������ⱻϵͳ�Զ����</td>
</tr>
<tr>
<td class="tl">�ż�</td>
<td class="tr">
<input type="radio" value="3" name="message[status]" checked="checked"/> �ռ���
<input type="radio" value="2" name="message[status]" /> �ѷ���
<input type="radio" value="1" name="message[status]" /> �ݸ���
<input type="radio" value="4" name="message[status]" /> ����վ
</td>
</tr>
<tr>
<td class="tl">���ڷ�Χ</td>
<td class="tr">
<?php echo dcalendar('message[fromdate]', $fromdate);?> �� <?php echo dcalendar('message[todate]', $todate);?>
<br/><span class="f_gray">ÿ����ർ��100�⣬�����ú����ʱ��Σ�������©�����ż�</span>
</td>
</tr>
<tr>
<td class="tl">ѡ��</td>
<td class="tr">
<input type="checkbox" value="1" name="message[isread]" /> ������δ���ż�
</td>
</tr>
<tr>
<td class="tl"> </td>
<td class="tr" height="50">
<input type="submit" name="submit" value=" �� �� " class="btn"/>&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="reset" value=" �� �� " class="btn"/>
</td>
</tr>
</table>
</form>
<?php } else if($action == 'empty') { ?>
<form method="post" action="message.php">
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<table cellspacing="1" cellpadding="6" class="tb">
<tr>
<td class="tl">�ż�</td>
<td class="tr">
<input type="radio" value="3" name="message[status]" checked="checked"/> �ռ���
<input type="radio" value="2" name="message[status]" /> �ѷ���
<input type="radio" value="1" name="message[status]" /> �ݸ���
<input type="radio" value="4" name="message[status]" /> ����վ
</td>
</tr>
<tr>
<td class="tl">���ڷ�Χ</td>
<td class="tr">
<?php echo dcalendar('message[fromdate]', $fromdate);?> �� <?php echo dcalendar('message[todate]', $todate);?>
</td>
</tr>
<tr>
<td class="tl">ѡ��</td>
<td class="tr">
<input type="checkbox" value="1" name="message[isread]" checked/> ����δ���ż�
</td>
</tr>
<tr>
<td class="tl"> </td>
<td class="tr" height="50">
<input type="submit" name="submit" value=" �� �� " class="btn" onclick="if(!confirm('ȷ��Ҫ�����𣿴˲��������ɳ���')) return false;"/>&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="reset" value=" �� �� " class="btn"/>
</td>
</tr>
</table>
</form>
<?php } else if($action == 'show') { ?>
<div class="message_head">
<strong class="px14"><?php echo $title;?></strong><br/>
<?php if($status==4 || $status==3) { ?>
<?php if($fromuser) { ?>
<span>�����ˣ�</span><a href="<?php echo userurl($fromuser);?>" target="_blank" class="t"><?php echo $fromuser;?></a><br/>
<?php } ?>
<?php } else if($status==2) { ?>
<span>�ռ��ˣ�</span><a href="<?php echo userurl($touser);?>" target="_blank" class="t"><?php echo $touser;?></a><br/>
<?php } ?>
<span>��&nbsp;&nbsp;&nbsp;�ţ�</span><?php echo $itemid;?><br/>
<span>ʱ&nbsp;&nbsp;&nbsp;�䣺</span><?php echo $addtime;?><br/>
</div>
<div class="message_body">
<?php echo $content;?>
</div>
<div class="message_foot">
<input type="button" value=" �� �� " class="btn" onclick="history.back(-1);"/>
<?php if($status==4) { ?>
<input type="button" class="btn" value="�� ԭ" onclick="Go('?action=restore&itemid=<?php echo $itemid;?>&forward=<?php echo urlencode('?action=inbox');?>');"/> 
<?php if($fromuser) { ?>
<input type="button" class="btn" value="�� ��" onclick="Go('?action=send&touser=<?php echo $fromuser;?>&title=RE:<?php echo urlencode($title);?>');"/> 
<input type="button" class="btn" value="ת ��" onclick="Dd('_send').submit();"/>
<input type="button" class="btn" value="�� ��" onclick="if(confirm('ȷ��Ҫ�ܾ����� <?php echo $fromuser;?> ��վ������'))Go('?action=refuse&username=<?php echo $fromuser;?>');"/>  
<?php } ?>
<input type="button" class="btn" value="����ɾ��" onclick="if(confirm('ȷ��Ҫɾ�����ż��𣿴˲������ɳ���')) Go('?action=delete&itemid=<?php echo $itemid;?>&forward=<?php echo urlencode('?action=recycle');?>');"/> 
<?php $action='recycle'?>
<?php } else if($status==3) { ?>
<?php if($fromuser) { ?>
<input type="button" class="btn" value="�� ��" onclick="Go('?action=send&touser=<?php echo $fromuser;?>&title=RE:<?php echo urlencode($title);?>');"/> 
<input type="button" class="btn" value="ת ��" onclick="Dd('_send').submit();"/>
<input type="button" class="btn" value="�� ��" onclick="if(confirm('ȷ��Ҫ�ܾ����� <?php echo $fromuser;?> ��վ������'))Go('?action=refuse&username=<?php echo $fromuser;?>');"/>  
<?php } ?>
<input type="button" class="btn" value="����վ" onclick="Go('?action=delete&itemid=<?php echo $itemid;?>&forward=<?php echo urlencode('?action=inbox');?>');"/>
<input type="button" class="btn" value="����ɾ��" onclick="if(confirm('ȷ��Ҫɾ�����ż��𣿴˲������ɳ���')) Go('?action=delete&recycle=0&itemid=<?php echo $itemid;?>&forward=<?php echo urlencode('?action=inbox');?>');"/> 
<?php $action='inbox'?>
<?php } else if($status==2) { ?>
 <?php if($fromuser) { ?>
 <input type="button" class="btn" value="ת ��" onclick="Dd('_send').submit();"/>
 <?php } ?>
 <input type="button" class="btn" value="����ɾ��" onclick="if(confirm('ȷ��Ҫɾ�����ż��𣿴˲������ɳ���')) Go('?action=delete&itemid=<?php echo $itemid;?>&forward=<?php echo urlencode('?action=outbox');?>');"/> 
<?php $action='outbox'?>
<?php } else if($status==1) { ?>
 <?php if($fromuser) { ?>
 <input type="button" class="btn" value="ת ��" onclick="Dd('_send').submit();"/>
 <?php } ?>
 
 <input type="button" class="btn" value="����ɾ��" onclick="if(confirm('ȷ��Ҫɾ�����ż��𣿴˲������ɳ���')) Go('?action=delete&itemid=<?php echo $itemid;?>&forward=<?php echo urlencode('?action=draft');?>');"/>
<?php $action='draft'?>
<?php } else if($status==0) { ?>
<?php $action='inbox'?>
<?php } ?>
<form action="message.php" method="post" id="_send">
<input type="hidden" name="action" value="send"/>
<textarea name="title" class="dsn"><?php echo $title;?></textarea>
<textarea name="content" class="dsn"><?php echo $content;?></textarea>
</form>
</div>
<?php if($messages) { ?>
<div class="b10"></div>
<div class="ls">
<table cellspacing="0" cellpadding="0" class="tb">
<tr>
<th width="50">����</th>
<th>&nbsp;�� ��</th>
<th width="150">������</th>
<th width="170" align="center">ʱ ��</th>
</tr>
<?php if(is_array($messages)) { foreach($messages as $message) { ?>
<tr align="center" onmouseover="this.className='on';" onmouseout="this.className='';">
<td><a href="?action=<?php echo $action;?>&typeid=<?php echo $message['typeid'];?>"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/message_<?php echo $message['typeid'];?>.gif" width="16" height="16" title="<?php echo $NAME[$message['typeid']];?>" alt=""/></a></td>
<td align="left"><a href="<?php if($status==1) { ?>?action=edit&itemid=<?php echo $message['itemid'];?><?php } else { ?>?action=show&itemid=<?php echo $message['itemid'];?><?php } ?>
"<?php if($status>2 && $message['feedback']) { ?>onclick="if(confirm('���ż��������Ѷ���ִ���Ƿ��ͣ�')){ Go(this.href+'&feedback=1');return false;}"<?php } ?>
 class="f_b" title="<?php echo $message['title'];?>"><?php echo $message['dtitle'];?></a></td>
<td align="center"><?php if($message['userurl']) { ?><a href="<?php echo $message['userurl'];?>" target="_blank"><?php echo $message['user'];?></a><?php } else { ?><?php echo $message['user'];?><?php } ?>
</td>
<td><?php echo $message['adddate'];?></td>
</tr>
<?php } } ?>
</table>
</div>
<?php } ?>
<?php } else if($action == 'setting') { ?>
<form method="post" action="message.php">
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<table cellspacing="1" cellpadding="6" class="tb">
<tr>
<td class="tl" width="80">������</td>
<td class="tr f_gray"><textarea name="black" id="black" style="width:90%;height:100px;overflow:visible;"><?php echo $user['black'];?></textarea><br/>[��ʾ] ֱ�������Ա�����ɽ���Ա����������������Ա�����ÿո����������ֹ�ο�����Guest</td>
</tr>
<tr style="display:<?php if(!$could_send) { ?>none<?php } ?>
;">
<td class="tl">δ����ת��</td>
<td class="tr f_gray">
<input type="radio" name="send" value="1" <?php if($user['send']) { ?>checked<?php } ?>
/> ����&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" name="send" value="0" <?php if(!$user['send']) { ?>checked<?php } ?>
/> �ر�
&nbsp;&nbsp;
ϵͳ���Զ�ת��δ��վ������ע������
</td>
</tr>
<tr>
<td class="tl"> </td>
<td height="50" class="tr">
<input type="submit" name="submit" value=" �� �� " class="btn"/>&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value=" �� �� " class="btn" onclick="Dd('black').value='';"/>&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="reset" value=" �� �� " class="btn"/>
</td>
</tr>
</table>
</form>
<?php } else { ?>
<div class="tt">
<div class="mr">
<a href="?action=<?php echo $action;?>" class="<?php if($typeid==-1) { ?>f_b<?php } ?>
">ȫ��</a>
<?php if(is_array($NAME)) { foreach($NAME as $k => $v) { ?>
 | <a href="?action=<?php echo $action;?>&typeid=<?php echo $k;?>" class="<?php if($typeid==$k) { ?>f_b<?php } ?>
"><?php echo $v;?></a>
<?php } } ?>
</div>
<form action="message.php">
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="status" value="<?php echo $status;?>"/>
<select name="typeid">
<option value="-1">����</option>
<?php if(is_array($NAME)) { foreach($NAME as $k => $v) { ?>
<option value="<?php echo $k;?>"<?php if($k==$typeid) { ?> selected<?php } ?>
><?php echo $v;?></option>
<?php } } ?>
</select>
<select name="style">
<option value="">���</option>
<?php if(is_array($COLORS)) { foreach($COLORS as $v) { ?>
<option value="<?php echo $v;?>"<?php if($v==$style) { ?> selected<?php } ?>
 style="background:#<?php echo $v;?>;">&nbsp;</option>
<?php } } ?>
</select>
<select name="fields">
<option value="title"<?php if($fields=='title') { ?> selected<?php } ?>
>����</option>
<option value="content"<?php if($fields=='content') { ?> selected<?php } ?>
>ȫ��</option>
</select>
<input type="text" name="kw" value="<?php echo $kw;?>" size="30" title="�ؼ���"/>&nbsp;
<input type="submit" value=" �� �� " class="btn"/>
<input type="button" value=" �� �� " class="btn" onclick="Go('?action=<?php echo $action;?>');"/>
</form>
</div>
<form method="post">
<div class="ls">
<table cellspacing="0" cellpadding="0" class="tb">
<tr>
<th width="20"><input type="checkbox" onclick="checkall(this.form);"/></th>
<th width="28">����</th>
<th>&nbsp;�� ��</th>
<?php if($status>1) { ?><th width="150"><?php if($status==2) { ?>�ռ���<?php } else { ?>������<?php } ?>
</th><?php } ?>
<th width="160" align="center">ʱ ��</th>
<?php if($status==3) { ?>
<th width="50" align="center">���</th>
<?php } ?>
</tr>
<?php if($status==3) { ?>
<?php if(is_array($systems)) { foreach($systems as $message) { ?>
<tr align="center" onmouseover="this.className='on';" onmouseout="this.className='';">
<td><input type="checkbox" disabled/></td>
<td><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/message_sys.gif" width="16" height="16" title="ϵͳ�㲥" alt=""/></td>
<td align="left"><a href="?action=show&itemid=<?php echo $message['itemid'];?>"><span class="f_red" title="<?php echo $message['title'];?>"><?php echo $message['title'];?></span></a></td>
<td><?php echo $message['user'];?></td>
<td><?php echo $message['adddate'];?></td>
<?php if($status==3) { ?><td>--</td><?php } ?>
</tr>
<?php } } ?>
<?php } ?>
<?php if(is_array($messages)) { foreach($messages as $message) { ?>
<tr align="center" onmouseover="this.className='on';" onmouseout="this.className='';">
<td><input type="checkbox" name="itemid[]" value="<?php echo $message['itemid'];?>"/></td>
<td><a href="?action=<?php echo $action;?>&typeid=<?php echo $message['typeid'];?>"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/message_<?php echo $message['typeid'];?>.gif" width="16" height="16" title="<?php echo $NAME[$message['typeid']];?>" alt=""/></a></td>
<td align="left"><a href="<?php if($status==1) { ?>?action=edit&itemid=<?php echo $message['itemid'];?><?php } else { ?>?action=show&itemid=<?php echo $message['itemid'];?><?php } ?>
"<?php if($status>2 && !$message['isread']) { ?> class="f_b"<?php if($message['feedback']) { ?>onclick="if(confirm('���ż��������Ѷ���ִ���Ƿ��ͣ�')){ Go(this.href+'&feedback=1');return false;}"<?php } ?>
<?php } ?>
<?php if($message['style']) { ?> style="color:#<?php echo $message['style'];?>;"<?php } ?>
 class="t" title="<?php echo $message['title'];?>&#10;��ţ�<?php echo $message['itemid'];?>"><?php echo $message['dtitle'];?></a></td>
<?php if($status>1) { ?><td align="center"><?php if($message['userurl']) { ?><a href="<?php echo $message['userurl'];?>" target="_blank"><?php echo $message['user'];?></a><?php } else { ?><?php echo $message['user'];?><?php } ?>
</td><?php } ?>
<td><?php echo $message['adddate'];?></td>
<?php if($status==3) { ?>
<td>
<select name="style" onchange="Go('?itemid=<?php echo $message['itemid'];?>&action=color&style='+this.value);">
<option value="">���</option>
<option value="">ȡ��</option>
<?php echo $color_select;?>
</select>
</td>
<?php } ?>
</tr>
<?php } } ?>
</table>
<div class="btns">
<?php if($status==4) { ?>
<input type="submit" value=" �� ԭ " class="btn" onclick="this.form.action='?action=restore';"/>
<input type="submit" value=" ����ɾ�� " class="btn" onclick="if(confirm('ȷ��Ҫɾ��ѡ���ż��𣿴˲������ɳ���')){this.form.action='?action=delete';}else{return false;}"/>
<?php } else if($status==3) { ?>
<span class="f_r">
<input type="text" value="������,��135" size="15" id="m_id" onfocus="if(this.value=='������,��135')this.value='';"/>
<input type="button" value=" �� �� " class="btn" onclick="if(Dd('m_id').value.match(/^[0-9]{1,}$/)){Go('?action=show&itemid='+Dd('m_id').value);return;}Dd('m_id').value='';Dd('m_id').focus();"/>
</span>
<input type="submit" value=" ����Ѷ� " class="btn" onclick="this.form.action='?action=mark';"/>
<input type="submit" value=" ����վ " class="btn" onclick="this.form.action='?action=delete';"/>
<input type="submit" value=" ����ɾ�� " class="btn" onclick="if(confirm('ȷ��Ҫɾ��ѡ���ż��𣿴˲������ɳ���')){this.form.action='?action=delete&recycle=0';}else{return false;}"/>
<?php } else { ?>
<input type="submit" value=" ����ɾ�� " class="btn" onclick="if(confirm('ȷ��Ҫɾ��ѡ���ż��𣿴˲������ɳ���')){this.form.action='?action=delete';}else{return false;}"/>
<?php } ?>
<input type="submit" value=" �� �� " class="btn" onclick="if(confirm('ȷ��Ҫ���<?php echo $name;?>�ż��𣿴˲������ɳ���')){this.form.action='?action=clear&status=<?php echo $status;?>';}else{return false;}"/>
</div>
</form>
</div>
<?php if($status==3) { ?>
<?php if($MG['inbox_limit']) { ?>
<div class="limit">�ռ������� <span class="f_b f_red"><?php echo $MG['inbox_limit'];?></span> ��&nbsp;&nbsp;&nbsp;��ǰ���� <span class="f_b"><?php echo $limit_used;?></span> ��&nbsp;&nbsp;&nbsp;�����Խ��� <span class="f_b f_blue"><?php echo $limit_free;?></span> ��&nbsp;&nbsp;&nbsp;���鶨��ɾ�������ż�</div>
<?php } ?>
<?php } ?>
<div class="pages"><?php echo $pages;?></div>
<?php } ?>
<script type="text/javascript">s('message');m('<?php echo $action;?>');</script>
<?php include template('footer',$module);?>
