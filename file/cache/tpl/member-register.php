<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header');?>
<style type="text/css">
.tl{width:150px;text-align:right;padding-right:20px;}
.reg_title {border-bottom:#CCCCCC 1px solid;font-weight:bold;padding:0 0 10px 10px;margin:15px 55px 0 55px;font-size:14px;color:#FF6600;}
.reg_inp {border:#7F9DB9 1px solid;padding:3px 0 3px 0;}
.tips {position:absolute;z-index:1000;width:300px;background:url('image/tips_bg.gif') no-repeat 0 bottom;overflow:hidden;margin:-5px 0 0 -10px;}
.tips div{background:url('image/tips_top.gif') no-repeat;line-height:22px;padding:8px 10px 8px 35px;}
</style>
<div class="m">
<div class="left_box">
<div class="pos">��ǰλ��: <a href="<?php echo $MODULE['1']['linkurl'];?>">��ҳ</a> &raquo; <a href="<?php echo $DT['file_register'];?>">��Աע��</a></div>
<div style="padding:20px 50px 20px 50px;">
<div style="background:#FAFAFA;padding:10px 20px 10px 20px;line-height:24px;">
<span class="f_b">
&raquo; �Ѿ��ǻ�Ա����<a href="<?php echo $DT['file_login'];?>" class="b">�������¼</a>&nbsp;
&raquo; ���������룿��<a href="send.php" class="b">�������һ�</a>&nbsp;
<?php if($MOD['checkuser'] == 2) { ?>
&raquo; <span class="f_red">δ�յ���֤�ţ�</span>��<a href="send.php?action=check" class="b">�������ط�</a>
<?php } ?>
</span>
<br/>
<span class="f_gray">�����桢��ϸ����д������Ϣ���������ҵ��Ϣ����������ñ��˵����Σ��ύǱ�ڵ���ҵ��飬��ȡ��ҵ���ᣡ<span class="f_red">*</span>Ϊ������
</span>
</div>
<br/>
<iframe src="" name="send" id="send" style="display:none;"></iframe>
<form action="<?php echo $DT['file_register'];?>" method="post" target="send" onsubmit="return check();">
<input name="action" type="hidden" id="action" value="<?php echo crypt_action('register');?>"/>
<input name="forward" type="hidden" value="<?php echo $forward;?>"/>
<div class="reg_title">�ʻ���Ϣ</div>
<table cellpadding="5" cellspacing="5" width="100%">
<tr>
<td class="tl">��Ա���� <span class="f_red">*</span></td>
<td>
<input type="radio" name="post[regid]" value="6" id="g_6" onclick="reg(1);" checked/><label for="g_6"> <?php echo $GROUP['6']['groupname'];?></label>&nbsp;&nbsp;&nbsp;&nbsp;
<?php if(is_array($GROUP)) { foreach($GROUP as $k => $v) { ?>
<?php if($k>6 && $v['vip']==0 && $v['reg']==1) { ?><input type="radio" name="post[regid]" value="<?php echo $k;?>" id="g_<?php echo $k;?>" onclick="reg(1);"/><label for="g_<?php echo $k;?>"> <?php echo $GROUP[$k]['groupname'];?></label>&nbsp;&nbsp;&nbsp;&nbsp;<?php } ?>
<?php } } ?>
<span<?php if(!$GROUP['5']['reg']) { ?> class="dsn"<?php } ?>
>
<input type="radio" name="post[regid]" value="5" id="g_5" onclick="reg(0);"/><label for="g_5"> <?php echo $GROUP['5']['groupname'];?></label>
</span>
</td>
</tr>
</table>
<table cellpadding="5" cellspacing="5" width="100%">
<tr onmouseover="Ds('tusername');" onmouseout="Dh('tusername');">
<td class="tl">��Ա�� <span class="f_red">*</span></td>
<td width="220"><input type="text" class="reg_inp" style="width:200px;" name="post[username]" id="username" onblur="validator('username');" autocomplete="off" <?php if($username) { ?> value="<?php echo $username;?>" readonly<?php } ?>
/>
</td>
<td>
<div class="tips" id="tusername" style="display:none;">
<div><?php echo $MOD['minusername'];?>-<?php echo $MOD['maxusername'];?>���ַ���ֻ��ʹ��Сд��ĸ(a-z)������(0-9)���»���(_)���л���(-)��������ĸ�����ֿ�ͷ�ͽ�β</div>
</div>
<span id="dusername" class="f_red"></span>&nbsp;
</td>
</tr>
<?php if($MOD['passport'] && $passport) { ?>
<tr onmouseover="Ds('tpassport');" onmouseout="Dh('tpassport');">
<td class="tl">ͨ��֤�û��� &nbsp;</td>
<td><input type="text" class="reg_inp" style="width:200px;" name="post[passport]" id="passport" onblur="validator('passport');" autocomplete="off"<?php if($passport) { ?> value="<?php echo $passport;?>" readonly<?php } ?>
/></td>
<td>
<div class="tips" id="tpassport" style="display:none;">
<div>֧������������������̳��ϵͳ�û���<br/>�������д����ͻ�Ա��һ��</div>
</div>
<span id="dpassport" class="f_red"></span>&nbsp;
</td>
</tr>
<?php } ?>
<tr onmouseover="Ds('tpassword');" onmouseout="Dh('tpassword');">
<td class="tl">��¼���� <span class="f_red">*</span></td>
<td><input type="password" class="reg_inp" style="width:200px;" name="post[password]" id="password" onblur="validator('password');" autocomplete="off"<?php if($password) { ?> value="<?php echo $password;?>" readonly<?php } ?>
/></td>
<td>
<div class="tips" id="tpassword" style="display:none;">
<div><?php echo $MOD['minpassword'];?>-<?php echo $MOD['maxpassword'];?>���ַ������ִ�Сд���Ƽ�ʹ�����֡���ĸ������������</div>
</div>
<span id="dpassword" class="f_red"></span>&nbsp;
</td>
</tr>
<tr onmouseover="Ds('tcpassword');" onmouseout="Dh('tcpassword');">
<td class="tl">�ظ��������� <span class="f_red">*</span></td>
<td><input type="password" class="reg_inp" style="width:200px;" size="30" name="post[cpassword]" id="cpassword" onblur="validate('cpassword');" autocomplete="off"<?php if($password) { ?> value="<?php echo $password;?>" readonly<?php } ?>
/></td>
<td>
<div class="tips" id="tcpassword" style="display:none;">
<div>��������һ��������д������</div>
</div>
<span id="dcpassword" class="f_red"></span>&nbsp;
</td>
</tr>
</table>
<div class="reg_title">��ϵ��ʽ</div>
<table cellpadding="5" cellspacing="5" width="100%">
<tr onmouseover="Ds('ttruename');" onmouseout="Dh('ttruename');">
<td class="tl">��ʵ���� <span class="f_red">*</span></td>
<td width="220">
<input type="text" class="reg_inp" style="width:100px;" name="post[truename]" id="truename" onblur="validate('truename');"/>
<input type="radio" name="post[gender]" value="1" checked id="gender_1"/><label for="gender_1"> ����</label>
<input type="radio" name="post[gender]" value="2" id="gender_2"/><label for="gender_2"> Ůʿ</label>
</td>
<td>
<div class="tips" id="ttruename" style="display:none;">
<div>������Ч����֤���ϵ���������һ��</div>
</div>
<span id="dtruename" class="f_red"></span>&nbsp;
</td>
</tr>
<tr>
<td class="tl">���ڵ��� <span class="f_red">*</span></td>
<td><?php echo ajax_area_select('post[areaid]', '��ѡ��', $areaid, '', 2);?></td>
<td><span id="dareaid" class="f_red"></span>&nbsp;</td>
</tr>
<tr onmouseover="Ds('temail');" onmouseout="Dh('temail');">
<td class="tl">�������� <span class="f_red">*</span></td>
<td><input type="text" class="reg_inp" style="width:200px;" name="post[email]" id="email" onblur="validator('email');"<?php if($email) { ?> value="<?php echo $email;?>" readonly<?php } ?>
/></td>
<td>
<div class="tips" id="temail" style="display:none;">
<div>
<?php if($MOD['checkuser'] == 2) { ?>
<span class="f_red">ϵͳ�������ʼ���֤ע�ᣬ��ȷ����ǰ���ʼ���ַ��ʵ��Ч<br/></span>
<?php } ?>
��ʹ�ó��ó�������(E-mail)��ַ����ַ���ᱻ�����ҿ����ڵ�¼��վ
</div>
</div>
<span id="demail" class="f_red"></span>&nbsp;
</td>
</tr>
<?php if($could_emailcode) { ?>
<tr onmouseover="Ds('temailcode');" onmouseout="Dh('temailcode');">
<td class="tl">�ʼ���֤�� <span class="f_red">*</span></td>
<td><input type="text" class="reg_inp" style="width:80px;" name="post[emailcode]" id="emailcode" onblur="validator('emailcode');"/>
<input type="button" value="��������" id="send_code" onclick="SendCode();"/>
</td>
<td>
<div class="tips" id="temailcode" style="display:none;">
<div>
������������͡���ť��ϵͳ���ᷢ��һ��6λ������֤��������д�ĵ������䣬������ʼ���ȡ��֤�����д������������ڣ��������ע��
</div>
</div>
<span id="demailcode" class="f_red"></span>&nbsp;
</td>
</tr>
<tr id="sendok" style="display:none;">
<td class="tl">&nbsp;</td>
<td id="dsendok">&nbsp;</td>
<td>&nbsp;</td>
</tr>
<?php } ?>
<tr onmouseover="Ds('tmobile');" onmouseout="Dh('tmobile');">
<td class="tl">�ֻ����� <?php if($could_mobilecode) { ?><span class="f_red">*</span><?php } else { ?>&nbsp;<?php } ?>
</td>
<td><input type="text" class="reg_inp" style="width:200px;" name="post[mobile]" id="mobile"<?php if($could_mobilecode) { ?> onblur="validator('mobile');"<?php } ?>
/></td>
<td>
<div class="tips" id="tmobile" style="display:none;">
<div><?php if(!$could_mobilecode) { ?>�Ƽ���д���Ա�ֱ������ȡ����ϵ<br/><?php } ?>
��������ڵ�¼��վ�ͽ��ձ�վ����</div>
</div>
<span id="dmobile" class="f_red"></span>&nbsp;
</td>
</tr>
<?php if($could_mobilecode) { ?>
<tr onmouseover="Ds('tmobilecode');" onmouseout="Dh('tmobilecode');">
<td class="tl">�ֻ���֤�� <span class="f_red">*</span></td>
<td><input type="text" class="reg_inp" style="width:80px;" name="post[mobilecode]" id="mobilecode" onblur="validator('mobilecode');"/>
<input type="button" value="��������" id="send_scode" onclick="SendSCode();"/>
</td>
<td>
<div class="tips" id="tmobilecode" style="display:none;">
<div>
������������͡���ť��ϵͳ���ᷢ��һ��6λ������֤��������д���ֻ�������ն��Ż�ȡ��֤�����д������������ڣ��������ע��
</div>
</div>
<span id="dmobilecode" class="f_red"></span>&nbsp;
</td>
</tr>
<tr id="sendsok" style="display:none;">
<td class="tl">&nbsp;</td>
<td id="dsendsok">&nbsp;</td>
<td>&nbsp;</td>
</tr>
<?php } ?>
<tr onmouseover="Ds('tqq');" onmouseout="Dh('tqq');">
<td class="tl">QQ���� &nbsp;</td>
<td><input type="text" class="reg_inp" style="width:200px;" name="post[qq]" id="qq"/></td>
<td>
<div class="tips" id="tqq" style="display:none;">
<div>�Ƽ���д���Ա㼴ʱ��������ȡ����ϵ</div>
</div>
<span id="dqq" class="f_red"></span>&nbsp;
</td>
</tr>
</table>
<div id="company_detail">
<div class="reg_title">��˾��Ϣ</div>
<table cellpadding="5" cellspacing="5" width="100%">
<tr onmouseover="Ds('tcompany');" onmouseout="Dh('tcompany');">
<td class="tl">��˾���� <span class="f_red">*</span></td>
<td width="300"><input type="text" class="reg_inp" style="width:280px;" name="post[company]" id="company" onblur="validator('company');"/></td>
<td>
<div class="tips" id="tcompany" style="display:none;">
<div>����д��˾ȫ�ƣ���Ӫҵִ�ձ���һ�£�ע��֮�󽫲��ɸ���</div>
</div>
<span id="dcompany" class="f_red"></span>&nbsp;
</td>
</tr>
<tr onmouseover="Ds('ttype');" onmouseout="Dh('ttype');">
<td class="tl">��˾���� <span class="f_red">*</span></td>
<td><?php echo dselect($COM_TYPE, 'post[type]', '��ѡ��', '', 'id="type"', 0);?></td>
<td>
<div class="tips" id="ttype" style="display:none;">
<div>���û��ƥ������ͣ���ѡ������</div>
</div>
<span id="dtype" class="f_red"></span>&nbsp;
</td>
</tr>
<tr onmouseover="Ds('ttelephone');" onmouseout="Dh('ttelephone');">
<td class="tl">��˾�绰 <span class="f_red">*</span></td>
<td><input type="text" class="reg_inp" style="width:200px;" name="post[telephone]" id="telephone" onblur="validate('telephone');"/></td>
<td>
<div class="tips" id="ttelephone" style="display:none;">
<div>�����û�������ţ������û���ӹ�����<br/>��ʽ������86-010-88889999</div>
</div>
<span id="dtelephone" class="f_red"></span>&nbsp;
</td>
</tr>
</table>
</div>
<table cellpadding="5" cellspacing="5" width="100%">
<?php if($MOD['question_register']) { ?>
<tr onmouseover="Ds('tanswer');" onmouseout="Dh('tanswer');">
<td class="tl">��֤���� <span class="f_red">*</span></td>
<td><?php include template('question', 'chip');?></td>
<td>
<div class="tips" id="tanswer" style="display:none;">
<div>�������Ĵ���д���������</div>
</div>
<span id="danswer" class="f_red"></span>&nbsp;
</td>
</tr>
<?php } ?>
<?php if($MOD['captcha_register']) { ?>
<tr onmouseover="Ds('tcaptcha');" onmouseout="Dh('tcaptcha');">
<td class="tl">��֤�� <span class="f_red">*</span></td>
<td><?php include template('captcha', 'chip');?></td>
<td>
<div class="tips" id="tcaptcha" style="display:none;">
<div>���ͼ���е��ַ���д���������<br/>����������������ͼƬˢ��</div>
</div>
<span id="dcaptcha" class="f_red"></span>&nbsp;
</td>
</tr>
<?php } ?>
<tr>
<td class="tl">&nbsp;</td>
<td width="300"><input type="submit" name="submit" value="ͬ�����·�������ύ" style="font-size:14px;padding:3px;"/></td>
<td>&nbsp;</td>
</tr>
</table>
</form>
<br/>
<div style="width:700px;height:100px;overflow-y:scroll;border:#9DBFDA 1px solid;background:#FAFAFA;margin:auto;line-height:180%;padding:10px;" id="agreement">
<center class="px14 f_b">���Ķ���վ��������</center>
<?php include template('agreement', $module);?>
</div>
<div style="text-align:right;padding:10px 100px 20px 0;"><a href="?print=1" target="_blank">�ɴ�ӡ�汾</a></div>
<br/>
</div>
</div>
</div>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/guest.js"></script>
<script type="text/javascript">
if(Dd('username').value == '') Dd('username').focus();
var vid = '';
function validator(id) {
vid = id;
makeRequest('moduleid=<?php echo $moduleid;?>&action=member&job='+id+'&value='+Dd(id).value, AJPath, '_validator');
}
function _validator() {
if(xmlHttp.readyState==4 && xmlHttp.status==200) {
Dd('d'+vid).innerHTML = xmlHttp.responseText ? '<img src="<?php echo DT_SKIN;?>image/check_error.gif" align="absmiddle"/> '+xmlHttp.responseText : '<img src="<?php echo DT_SKIN;?>image/check_right.gif" align="absmiddle"/> ';
}
}
function err_msg(str, id) {
Dd('d'+id).innerHTML = '<img src="<?php echo DT_SKIN;?>image/check_'+(str ? 'error' : 'right')+'.gif" align="absmiddle"/> '+str;
}
function validate(type) {
if(type == 'cpassword') {
if(Dd('cpassword').value != Dd('password').value) {
err_msg('������������벻һ��', type);
} else {
err_msg('', type);
}
}
if(type == 'truename') {
if(Dd('truename').value.length < 2) {
err_msg('��������ʵ����', type);
} else {
err_msg('', type);
}
}
if(type == 'telephone') {
if(Dd('telephone').value.match(/^[0-9\-\(\)\+\.]{7,}$/)) {
err_msg('', type);
} else {
err_msg('�����빫˾�绰', type);
}
}
}
function reg(type) {
if(type) {
Ds('company_detail');
} else {
Dh('company_detail');
}
}
function Df(ID) {
Dd(ID).focus();
}
function check() {
var f,p;
f = 'username';
if(Dd(f).value == '') {
err_msg('����д��Ա��¼��', f);
Df(f);
return false;
}
if(Dd('d'+f).innerHTML.indexOf('error') != -1) {
Df(f);
return false;
}
f = 'password';
if(Dd(f).value.length < 6) {
err_msg('����д��Ա��¼����', f);
Df(f);
return false;
}
if(Dd('d'+f).innerHTML.indexOf('error') != -1) {
Df(f);
return false;
}
f = 'cpassword';
if(Dd(f).value == '') {
err_msg('���ظ���������', f);
Df(f);
return false;
}
if(Dd('password').value != Dd(f).value) {
err_msg('������������벻һ��', f);
Df(f);
return false;
}
f = 'truename';
if(Dd(f).value == '') {
err_msg('����д��ʵ����', f);
Df(f);
return false;
}
f = 'email';
if(Dd(f).value.length < 6) {
err_msg('����д��������', f);
Df(f);
return false;
}
if(Dd('d'+f).innerHTML.indexOf('error') != -1) {
Df(f);
return false;
}
if(Dd('areaid_1').value == 0) {
Dmsg('��ѡ�����ڵ�', 'areaid');
return false;
}
<?php if($could_emailcode) { ?>
f = 'emailcode';
if(!Dd(f).value.match(/^[0-9]{6}$/)) {
Dmsg('����д�ʼ���֤��', f);
return false;
}
<?php } ?>
if(Dd('g_5').checked == false) {
f = 'company';
if(Dd(f).value == '') {
err_msg('����д��˾����', f);
Df(f);
return false;
}
if(Dd('d'+f).innerHTML.indexOf('error') != -1) {
Df(f);
return false;
}
if(Dd('type').value == '') {
Dmsg('��ѡ��˾����', 'type');
return false;
}
f = 'telephone';
if(Dd(f).value.length < 7) {
err_msg('����д��˾�绰', f);
Df(f);
return false;
}
}
<?php if($MOD['question_register']) { ?>
f = 'answer';
if(Dd(f).value == '') {
Dmsg('��ش���֤����', f);
return false;
}
<?php } ?>
<?php if($MOD['captcha_register']) { ?>
f = 'captcha';
if(!is_captcha(Dd(f).value)) {
Dmsg('����д��֤��', f);
return false;
}
<?php } ?>
return true;
}
function SendCode() {
if(Dd('demail').innerHTML.indexOf('right') == -1) {
Dd('email').focus();
return;
}
makeRequest('action=<?php echo $action_sendcode;?>&value='+Dd('email').value, '<?php echo $DT['file_register'];?>', '_SendCode');
Dh('sendok');
Dd('send_code').value = '���ڷ���';
Dd('send_code').disabled = true;
}
function _SendCode() {
var f = 'email';
if(xmlHttp.readyState==4 && xmlHttp.status==200) {
Dd('send_code').value = xmlHttp.responseText == 1 ? '���ͳɹ�' : '��������';
Dd('send_code').disabled = xmlHttp.responseText == 1 ? true : false;
if(xmlHttp.responseText == 1) {
Ds('sendok');
Dd('dsendok').innerHTML = '<img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/ico_mailok.gif" align="absmiddle"/> <span class="f_green">�ʼ����ͳɹ���</span> <a href="goto.php?action=emailcode&email='+Dd(f).value+'" target="_blank">��������</a>';
StopCode();
} else if(xmlHttp.responseText == 2) {
err_msg('�ʼ���ʽ��������', f);
Df(f);
} else if(xmlHttp.responseText == 3) {
err_msg('�ʼ���ַ�Ѵ��ڣ������', f);
Df(f);
} else if(xmlHttp.responseText == 4) {
err_msg('���ʼ������Ѿ�����ֹע�ᣬ�����', f);
Df(f);
} else if(xmlHttp.responseText == 5) {
alert('�ʼ����͹��죬���Ժ�����');
} else if(xmlHttp.responseText == 6) {
alert('���Է��ʹ���̫�࣬���Ժ�����');
} else {
alert('δ֪����������');
}
}
}
function StopCode() {
Dd('send_code').disabled = true;
var i = 60;
var interval=window.setInterval(
function() {
if(i == 0) {
Dd('send_code').value = '��������';
Dd('send_code').disabled = false;
clearInterval(interval);
} else {
Dd('send_code').value = '���·���('+i+')';
i--;
}
},
1000);
}
function SendSCode() {
if(Dd('dmobile').innerHTML.indexOf('right') == -1) {
Dd('mobile').focus();
return;
}
makeRequest('action=<?php echo $action_sendscode;?>&value='+Dd('mobile').value, '<?php echo $DT['file_register'];?>', '_SendSCode');
Dh('sendsok');
Dd('send_scode').value = '���ڷ���';
Dd('send_scode').disabled = true;
}
function _SendSCode() {
var f = 'mobile';
if(xmlHttp.readyState==4 && xmlHttp.status==200) {
Dd('send_scode').value = xmlHttp.responseText == 1 ? '���ͳɹ�' : '��������';
Dd('send_scode').disabled = xmlHttp.responseText == 1 ? true : false;
if(xmlHttp.responseText == 1) {
Ds('sendsok');
Dd('dsendsok').innerHTML = '<img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/ico_mailok.gif" align="absmiddle"/> <span class="f_green">���ŷ��ͳɹ�</span>';
StopSCode();
} else if(xmlHttp.responseText == 2) {
err_msg('�ֻ������ʽ��������', f);
Df(f);
} else if(xmlHttp.responseText == 3) {
err_msg('�ֻ������Ѵ��ڣ������', f);
Df(f);
} else if(xmlHttp.responseText == 5) {
alert('���ŷ��͹��죬���Ժ�����');
} else if(xmlHttp.responseText == 6) {
alert('���Է��ʹ���̫�࣬���Ժ�����');
} else {
alert('δ֪����������');
}
}
}
function StopSCode() {
Dd('send_scode').disabled = true;
var i = 180;
var interval=window.setInterval(
function() {
if(i == 0) {
Dd('send_scode').value = '��������';
Dd('send_scode').disabled = false;
clearInterval(interval);
} else {
Dd('send_scode').value = '���·���('+i+')';
i--;
}
},
1000);
}
</script>
<?php include template('footer');?>