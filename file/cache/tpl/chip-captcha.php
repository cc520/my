<?php defined('IN_DESTOON') or exit('Access Denied');?><input name="captcha" id="captcha" type="text" size="6" onfocus="showcaptcha();" value="�����ʾ" onkeyup="checkcaptcha(this.value);" onblur="checkcaptcha(this.value);" class="f_gray" style="margin:10px 0 10px 0;"/>&nbsp;<img src="<?php echo DT_SKIN;?>image/loading.gif" title="��֤��,�������?����ˢ��&#10;��ĸ�����ִ�Сд" alt="" align="absmiddle" id="captchapng" onclick="reloadcaptcha();" style="display:none;cursor:pointer;"/><span id="ccaptcha"></span>
<script type="text/javascript">
function showcaptcha() {
if(Dd('captchapng').style.display=='none') {
Dd('captchapng').style.display='';
}
if(Dd('captchapng').src.indexOf('loading.gif') != -1) {
Dd('captchapng').src='<?php echo DT_PATH;?>api/captcha.png.php?action=image';
}
if(Dd('captcha').value=='�����ʾ') {
Dd('captcha').value='';
}
Dd('captcha').className = '';
}
function reloadcaptcha() {
Dd('captchapng').src = '<?php echo DT_PATH;?>api/captcha.png.php?action=image&refresh='+Math.random();
Dd('ccaptcha').innerHTML = '';
Dd('captcha').value = '';
}
function checkcaptcha(s) {
if(!is_captcha(s)) return;
makeRequest('action=captcha&captcha='+s, AJPath, '_checkcaptcha');
}
function _checkcaptcha() {    
if(xmlHttp.readyState==4 && xmlHttp.status==200) {
if(xmlHttp.responseText == '0') {
Dd('ccaptcha').innerHTML = '&nbsp;&nbsp;<img src="<?php echo DT_SKIN;?>image/check_right.gif" align="absmiddle"/>';
} else {
Dd('captcha').focus;
Dd('ccaptcha').innerHTML = '&nbsp;&nbsp;<img src="<?php echo DT_SKIN;?>image/check_error.gif" align="absmiddle"/>';
}
}
}
</script>