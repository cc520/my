<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header');?>
<script type="text/javascript">var errimg = '<?php echo DT_SKIN;?>image/nopic50.gif';</script>
<div class="m">
<div class="left_box">
<div class="pos">
����λ��: <a href="<?php echo DT_PATH;?>">��ҳ</a> 
&raquo; <a href="<?php echo $MOD['linkurl'];?>"><?php echo $MOD['name'];?></a>
&raquo; �ύ����
</div>
<div class="b10">&nbsp;</div>
<form method="post" action="<?php echo $MOD['linkurl'];?>buy.php" onsubmit="return check();">
<input type="hidden" name="submit" value="1"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<div>
<div class="f_r" style="padding:10px 50px 0 0;"><a href="<?php echo $MOD['linkurl'];?>">����������ѡ</a></div>
&nbsp;&nbsp;<img src="<?php echo DT_SKIN;?>image/buy_1.gif" width="160" height="30" alt=""/> 
</div>
<div style="margin:10px 40px 10px 40px;" class="c_b">
<table cellpadding="6" cellspacing="1" width="100%" bgcolor="#E4E4E4">
<tr align="center" bgcolor="#EEEEEE">
<td width="60">ͼƬ</td>
<td>��Ʒ</td>
<td width="60">�۸�</td>
<td width="100">����</td>
<td width="90">С��</td>
</tr>
<tr align="center" bgcolor="#FFFFFF">
<td><a href="<?php echo $item['linkurl'];?>" target="_blank"><img src="<?php echo $item['thumb'];?>" width="50" alt="<?php echo $item['title'];?>"  onerror="this.src=errimg;"/></a></td>
<td align="left"><a href="<?php echo $item['linkurl'];?>" target="_blank" class="px13 f_b"><?php echo $item['title'];?></a>
<div style="padding:8px 0 0 0;color:#666666;">��ע��<input type="text" name="note" value="" size="40" style="border:#CCCCCC 1px solid;" maxlength="100" title="��100������"/></div>
</td>
<td><span class="f_price" id="price_<?php echo $itemid;?>"><?php echo $item['price'];?></span></td>
<td><img src="<?php echo DT_SKIN;?>image/arrow_l.gif" width="16" height="8" alt="����" class="c_p" onclick="alter(<?php echo $itemid;?>, '-')"/> <input type="text" name="number" value="1" size="3" style="border:#CCCCCC 1px solid;text-align:center;" id="number_<?php echo $itemid;?>" onblur="calculate();"/> <img src="<?php echo DT_SKIN;?>image/arrow_r.gif" width="16" height="8" alt="����" class="c_p" onclick="alter(<?php echo $itemid;?>, '+')"/></td>
<td><span class="f_price" id="total_<?php echo $itemid;?>"><?php echo $item['price'];?></span></td>
</tr>
</table>
<div class="b10">&nbsp;</div>
<div style="border-top:#CCCCCC 1px solid;background:#F6F6F6;padding:20px 40px 20px 0;color:#666666;text-align:right;">
�ܼۣ�<span class="f_red f_b px16" id="total_amount"><?php echo $item['price'];?></span> Ԫ</div>
</div>
<div class="b10">&nbsp;</div>
<div>&nbsp;&nbsp;<img src="<?php echo DT_SKIN;?>image/buy_2.gif" width="160" height="30" alt=""/></div>
<div style="padding:20px;margin:10px 40px 20px 40px;background:#F4F4F4;" class="c_b px13">
<table cellpadding="10" cellspacing="0" width="100%">
<?php if($item['logistic']) { ?>
<tr>
<td width="100"><span class="f_red">&nbsp;</span> ���õ�ַ��</td>
<td class="px13" bgcolor="#F9F9F9">
<?php if($address) { ?>
<?php if(is_array($address)) { foreach($address as $k => $v) { ?>
<div>
<?php if($k == 0) { ?><span class="f_r"><a href="<?php echo $MODULE['2']['linkurl'];?>address.php?action=add" target="_blank">[������ַ]</a>&nbsp;&nbsp;<a href="<?php echo $MODULE['2']['linkurl'];?>address.php" target="_blank">[�����ַ]</a></span><?php } ?>
<input type="radio" name="addr" id="addr_<?php echo $k;?>" value="<?php echo $v['address'];?>|<?php echo $v['postcode'];?>|<?php echo $v['truename'];?>|<?php echo $v['mobile'];?>|<?php echo $v['telephone'];?>" onclick="Adr(this.value);"<?php if($k == 0) { ?> checked<?php } ?>
/><label for="addr_<?php echo $k;?>"> <?php echo $v['postcode'];?> <?php echo $v['address'];?> (<?php echo $v['truename'];?>) <?php echo $v['mobile'];?></label></div>
<div class="b5"></div>
<?php } } ?>
<?php } else { ?>
<strong>���޳����ջ���ַ</strong>&nbsp;&nbsp;<a href="<?php echo $MODULE['2']['linkurl'];?>address.php?action=add" target="_blank">[������ַ]</a>&nbsp;&nbsp;<a href="<?php echo $MODULE['2']['linkurl'];?>address.php" target="_blank">[�����ַ]</a>
<?php } ?>
</td>
</tr>
<tr>
<td><span class="f_red">*</span> �ջ���ַ��</td>
<td><span id="addr_areaid"><?php echo ajax_area_select('add[areaid]', '��ѡ��', $user['areaid']);?> </span><input type="text" size="60" name="add[address]" id="address" value="<?php echo $user['address'];?>"/> <span id="daddress" class="f_red"></span></td>
</tr>
<tr>
<td><span class="f_red">*</span> �������룺</td>
<td><input type="text" size="10" name="add[postcode]" id="postcode" value="<?php echo $user['postcode'];?>"/> <span id="dpostcode" class="f_red"></span></td>
</tr>
<tr>
<td><span class="f_red">*</span> ��ʵ������</td>
<td><input type="text" size="10" name="add[truename]" id="truename" value="<?php echo $user['truename'];?>"/> <span id="dtruename" class="f_red"></span></td>
</tr>
<tr>
<td><span class="f_red">*</span> �ֻ����룺</td>
<td><input type="text" size="20" name="add[mobile]" id="mobile" value="<?php echo $user['mobile'];?>"/> <span id="dmobile" class="f_red"></span></td>
</tr>
<tr>
<td><span class="f_red">&nbsp;</span> �绰���룺</td>
<td><input type="text" size="20" name="add[telephone]" id="telephone" value="<?php echo $user['telephone'];?>"/> <span id="dtelephone" class="f_red"></span></td>
</tr>
<tr>
<td><span class="f_red">*</span> ����������</td>
<td>
<input type="text" size="10" name="add[receive]" id="receive"/>
<select onchange="Dd('receive').value=this.value;">
<option value="">������������</option>
<?php if(is_array($send_types)) { foreach($send_types as $v) { ?>
<option value="<?php echo $v;?>"><?php echo $v;?></option>
<?php } } ?>
</select> <span id="dreceive" class="f_red"></span>
</td>
</tr>
<?php } else { ?>
<tr>
<td><span class="f_red">*</span> �ֻ����룺</td>
<td><input type="text" size="30" name="add[mobile]" id="mobile" value="<?php echo $user['mobile'];?>"/> ��Ҫ������ɹ��󽫰Ѷ���ID�ź����뷢�����ֻ�,ƾ���ŵ��̼����� <span id="dmobile" class="f_red"></span></td>
</tr>
<?php } ?>
</table>
</div>
<table cellpadding="0" cellspacing="0" width="100%">
<tr align="center">
<td width="280"><input type="image" src="<?php echo DT_SKIN;?>image/btn_buynow.gif" title="�ύ����"/></td>
<td width="280"><a href="<?php echo $MOD['linkurl'];?>" onclick="return confirm('������δ��ɣ�ȷ��Ҫ�뿪��ҳ����');"><img src="<?php echo DT_SKIN;?>image/btn_browse.gif" width="106" height="33" alt="��������"/></a></td>
<td >&nbsp;</td>
</tr>
<tr align="center">
<td class="f_gray">������Ѿ�ȷ�����������ύ����</td>
<td class="f_gray">��Ҳ���Է��ص�<?php echo $MOD['name'];?>��ҳ��������ѡ��Ʒ</td>
<td height="50">&nbsp;</td>
</tr>
</table>
</form>
</div>
</div>
<script type="text/javascript">
function check() {
if(Dd('total_amount').innerHTML == '0.00') {
alert('�����ܶ�Ϊ0.00��������Ʒ����');
window.scroll(0, 0);
return false;
}
var l;
var f;
<?php if($item['logistic']) { ?>
f = 'address';
l = Dd(f).value.length;
if(l < 5) {
Dmsg('����д�ֵ���ַ', f);
return false;
}
f = 'postcode';
l = Dd(f).value.length;
if(l < 6) {
Dmsg('����д��������', f);
return false;
}
f = 'truename';
l = Dd(f).value.length;
if(l < 2) {
Dmsg('����д��ʵ����', f);
return false;
}
f = 'mobile';
l = Dd(f).value.length;
if(l < 11) {
Dmsg('����д�ֻ�����', f);
return false;
}
f = 'receive';
l = Dd(f).value.length;
if(l < 2) {
Dmsg('����д��������', f);
return false;
}
<?php } else { ?>
f = 'mobile';
l = Dd(f).value.length;
if(l < 11) {
Dmsg('����д�ֻ�����', f);
return false;
}
<?php } ?>
var m1 = <?php echo $_money;?>;
var m2 = parseFloat(Dd('total_amount').innerHTML);
var m3 = m2 - m1;
if(m2 > m1) {
if(confirm('�˻����㣬���ֵ'+m3+'<?php echo $DT['money_unit'];?>���Ƿ�������ֵ��')) {
window.open('<?php echo $MODULE['2']['linkurl'];?>charge.php?action=pay&amount='+m3);
}
return false;
}
return confirm('��ȷ����Ʒ���ջ���ַ�����ύ�˶�����');
}
<?php if($item['logistic']) { ?>
function Adr(s) {
var t = s.split('|');
try {
Dd('areaid_1').value = 0;
Dh('addr_areaid');
Dd('address').value = t[0];
Dd('postcode').value = t[1];
Dd('truename').value = t[2];
Dd('mobile').value = t[3];
Dd('telephone').value = t[4];
}
catch (e) {}
}
<?php if($address) { ?>Adr(Dd('addr_0').value);<?php } ?>
<?php } ?>
function alter(i, t) {
if(t == '+') {
if(Dd('number_'+i).value >= 99) return;
Dd('number_'+i).value =  parseInt(Dd('number_'+i).value) + 1;
} else {
if(Dd('number_'+i).value <= 0) return;
Dd('number_'+i).value =  parseInt(Dd('number_'+i).value) - 1;
}
calculate();
}
function calculate() {
var itemids = [<?php echo $itemid;?>];
var _good = itemid = 0;
for(var i = 0; i < itemids.length; i++) {
itemid = itemids[i];
var num, good;
num = parseInt(Dd('number_'+itemid).value);
if(isNaN(num) || num < 0) Dd('number_'+itemid).value = num = 1;
good = parseFloat(Dd('price_'+itemid).innerHTML)*num;
Dd('total_'+itemid).innerHTML = good.toFixed(2);
_good += good;
}
Dd('total_amount').innerHTML = _good.toFixed(2);
}
calculate();
</script>
<?php include template('footer');?>