<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header', $module);?>
<div class="menu">
<table cellpadding="0" cellspacing="0">
<tr>
<td class="tab" id="add"><a href="ad.php?action=add"><span>���Ԥ��</span></a></td>
<td class="tab_nav">&nbsp;</td>
<td class="tab" id="s3"><a href="ad.php"><span>��ͨ��</span></a></td>
<td class="tab_nav">&nbsp;</td>
<td class="tab" id="s2"><a href="ad.php?status=2"><span>�����</span></a></td>
</tr>
</table>
</div>
<?php if($action == 'add') { ?>
<form method="post" action="ad.php" id="dform" onsubmit="return check();">
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="pid" value="<?php echo $pid;?>"/>
<input type="hidden" name="price" value="<?php echo $p['price'];?>" id="price"/>
<table cellspacing="1" cellpadding="6" class="tb">
<tr>
<td class="tl">���λ���ƣ�</td>
<td class="tr"><strong><?php echo $p['name'];?></strong></td>
</tr>
<tr>
<td class="tl">���λ���ͣ�</td>
<td class="tr"><?php echo $TYPE[$typeid];?></td>
</tr>
<?php if($p['introduce']) { ?>
<tr>
<td class="tl">���λ���ܣ�</td>
<td class="tr"><?php echo $p['introduce'];?></td>
</tr>
<?php } ?>
<?php if($p['width'] && $p['height']) { ?>
<tr>
<td class="tl">���λ��С��</td>
<td class="tr"><?php echo $p['width'];?>px X <?php echo $p['height'];?>px</td>
</tr>
<?php } ?>
<?php if($typeid == 1) { ?>
<tr>
<td class="tl"><span class="f_red">*</span> �����룺</td>
<td class="tr"><textarea name="post[code]" id="code" style="width:98%;height:50px;overflow:visible;font-family:Fixedsys,verdana;"></textarea></td>
</tr>
<?php } else if($typeid == 2) { ?>
<tr>
<td class="tl"><span class="f_red">*</span> �������֣�</td>
<td class="tr f_gray"><input type="text" size="30" name="post[text_name]" id="text_name"/></td>
</tr>
<tr>
<td class="tl"><span class="f_red">*</span> ���ӵ�ַ��</td>
<td class="tr"><input type="text" size="60" name="post[text_url]" id="text_url" value="http://"/> <span id="dtext_url" class="f_red"></span></td>
</tr>
<tr>
<td class="tl">Title��ʾ��</td>
<td class="tr"><input type="text" size="60" name="post[text_title]"/></td>
</tr>
<?php } else if($typeid == 3 || $typeid == 5) { ?>
<tr>
<td class="tl"><span class="f_red">*</span> ͼƬ��ַ��</td>
<td class="tr f_gray"><input type="text" size="60" name="post[image_src]" id="thumb"/>&nbsp;&nbsp;<span onclick="Dthumb(<?php echo $moduleid;?>,<?php echo $p['width'];?>,<?php echo $p['height'];?>, Dd('thumb').value,true);" class="jt">[�ϴ�]</span>&nbsp;&nbsp;<span onclick="_preview(Dd('thumb').value);" class="jt">[Ԥ��]</span>&nbsp;&nbsp;<span onclick="Dd('thumb').value='';" class="jt">[ɾ��]</span> <span id="dthumb" class="f_red"></span></td>
</tr>
<tr>
<td class="tl">���ӵ�ַ��</td>
<td class="tr"><input type="text" size="60" name="post[image_url]" id="image_url" value="http://"/> <span id="dimage_url" class="f_red"></span></td>
</tr>
<tr>
<td class="tl">���⣺</td>
<td class="tr"><input type="text" size="60" name="post[image_alt]"/></td>
</tr>
<?php } else if($typeid == 4) { ?>
<tr>
<td class="tl"><span class="f_red">*</span> Flash��ַ��</td>
<td class="tr f_gray"><input type="text" size="60" name="post[flash_src]" id="flash"/></td>
</tr>
<tr>
<td class="tl">ѭ�����ţ�</td>
<td class="tr">
<input type="radio" name="post[flash_loop]" value="1" checked/> ��&nbsp;&nbsp;
<input type="radio" name="post[flash_loop]" value="0"/> ��
</td>
</tr>
<tr>
<td class="tl">���ӵ�ַ��</td>
<td class="tr"><input type="text" size="60" name="post[flash_url]" value="http://"/></td>
</tr>
<?php } else if($typeid == 6) { ?>
<tr>
<td class="tl">����ģ�飺</td>
<td class="tr"><a href="<?php echo $MODULE[$p['moduleid']]['linkurl'];?>" target="_blank" class="t"><?php echo $MODULE[$p['moduleid']]['name'];?></a></td>
</tr>
<tr>
<td class="tl">�������ࣺ</td>
<td class="tr"><?php echo ajax_category_select('post[catid]', '��ѡ��', 0, $p['moduleid']);?></td>
</tr>
<tr>
<td class="tl">�ؼ��ʣ�</td>
<td class="tr"><input type="text" size="30" name="post[word]"/></td>
</tr>
<?php if($p['moduleid'] == 4) { ?>
<input type="hidden" name="post[key_id]" id="key_id" value="<?php echo $_userid;?>"/>
<?php } else { ?>
<tr>
<td class="tl"><span class="f_red">*</span> ��ϢID��</td>
<td class="tr"><input type="text" size="10" name="post[key_id]" id="key_id" onfocus="select_item(<?php echo $p['moduleid'];?>, 'member');"/> <a href="javascript:select_item(<?php echo $p['moduleid'];?>, 'member');" class="t">ѡ��..</a>  <span id="dkey_id" class="f_red"></span></td>
</tr>
<?php } ?>
<?php } else if($typeid == 7) { ?>
<tr>
<td class="tl">����ģ�飺</td>
<td class="tr"><a href="<?php echo $MODULE[$p['moduleid']]['linkurl'];?>" target="_blank" class="t"><?php echo $MODULE[$p['moduleid']]['name'];?></a></td>
</tr>
<tr>
<td class="tl">�������ࣺ</td>
<td class="tr"><?php echo ajax_category_select('post[catid]', '��ѡ��', 0, $p['moduleid']);?></td>
</tr>
<tr>
<td class="tl">�ؼ��ʣ�</td>
<td class="tr"><input type="text" size="30" name="post[word]"/></td>
</tr>
<tr>
<td class="tl"><span class="f_red">*</span> �����룺</td>
<td class="tr"><textarea name="post[code]" id="code" style="width:98%;height:50px;overflow:visible;font-family:Fixedsys,verdana;"></textarea><br/><span id="dcode" class="f_red"></span></td>
</tr>
<?php } ?>
<tr>
<td class="tl"><span class="f_red">*</span> ��ʼ���ڣ�</td>
<td class="tr"><?php echo dcalendar('post[fromtime]', $fromdate);?>&nbsp;<span id="dpostfromtime" class="f_red"></span></td>
</tr>
<tr>
<td class="tl"><span class="f_red">*</span> ����ʱ����</td>
<td class="tr f_gray">
<select name="month" id="month"<?php if($price) { ?> onchange="CA();"<?php } ?>
>
<?php if(is_array($months)) { foreach($months as $m) { ?><option value="<?php echo $m;?>"><?php echo $m;?>��</option><?php } } ?>
</select>
(ע:��30��/�¼���)
</td>
</tr>
<?php if($price) { ?>
<tr>
<td class="tl">���۸�</td>
<td class="tr"><span class="f_red f_b"><?php echo $p['price'];?> <?php echo $unit;?>/��</span></td>
</tr>
<tr>
<td class="tl">Ӧ���ܼۣ�</td>
<td class="tr f_red f_b" id="payment"><?php echo $p['price'];?><?php echo $unit;?></td>
</tr>
<?php if($currency == 'money') { ?>
<tr>
<td class="tl"><?php echo $DT['money_name'];?>��</td>
<td class="tr"><span class="f_blue f_b"><?php echo $_money;?><?php echo $unit;?></span> <a href="charge.php?action=pay" target="_blank" class="t">[��ֵ]</a></td>
</tr>
<tr>
<td class="tl"><span class="f_red">*</span> ֧�����룺</td>
<td class="tr"><?php include template('password', 'chip');?></td>
</tr>
<?php } else { ?>
<tr>
<td class="tl"><?php echo $DT['credit_name'];?>��</td>
<td class="tr"><span class="f_blue f_b"><?php echo $_credit;?><?php echo $unit;?></span> <a href="credit.php?action=buy" target="_blank" class="t">[����]</a></td>
</tr>
<?php } ?>
<?php } ?>
<tr>
<td class="tl">��ע���</td>
<td class="tr"><input type="text" size="60" name="post[note]"/></td>
</tr>
<tr>
<td class="tl"> </td>
<td class="tr">
<input type="submit" name="submit" value="ȷ������" class="btn"/>&nbsp;
<input type="button" value="����ѡ��" class="btn" onclick="Go('<?php echo $adurl;?>');"/>
</td>
</tr>
</table>
</form>
<?php echo load('clear.js');?>
<script type="text/javascript">
function CA() {
Dd('payment').innerHTML = Dd('price').value*Dd('month').value + '<?php echo $unit;?>';
}
function check() {
var p = Dd('price').value;
<?php if($currency == 'money') { ?>
if(p*Dd('month').value > <?php echo $_money;?>) {
alert('�ʻ����㣬���ȳ�ֵ');
return false;
}
<?php } else { ?>
if(p*Dd('month').value > <?php echo $_credit;?>) {
alert('����<?php echo $DT['credit_name'];?>���㣬���ȹ���');
return false;
}
<?php } ?>
<?php if($typeid == 1 || $typeid == 7) { ?>
if(Dd('code').value.length < 5) {
alert('����д������');
Dd('code').focus();
return false;
}
<?php } else if($typeid == 2) { ?>
if(Dd('text_name').value.length < 2) {
alert('����д��������');
Dd('text_name').focus();
return false;
}
if(Dd('text_url').value.length < 10) {
alert('����д���ӵ�ַ');
Dd('text_url').focus();
return false;
}
<?php } else if($typeid == 3 || $typeid == 5) { ?>
if(Dd('thumb').value.length < 10) {
alert('����дͼƬ��ַ���ϴ�ͼƬ');
Dd('thumb').focus();
return false;
}
<?php } else if($typeid == 4) { ?>
if(Dd('flash').value.length < 10) {
alert('����дFlash��ַ');
Dd('flash').focus();
return false;
}
<?php } else if($typeid == 6) { ?>
if(Dd('key_id').value.length < 1) {
alert('����д��ϢID');
Dd('key_id').focus();
return false;
}
<?php } ?>
if(Dd('postfromtime').value.replace(/-/g, '') < '<?php echo $fromdate;?>'.replace(/-/g, '')) {
alert('��ʼͶ���������<?php echo $fromdate;?>��ʼ');
Dd('postfromtime').value = '<?php echo $fromdate;?>';
Dd('postfromtime').focus();
return false;
}
<?php if($price && $currency == 'money') { ?>
if(Dd('password').value.length < 6) {
alert('����д֧������');
Dd('password').focus();
return false;
}
<?php } ?>
}
</script>
<script type="text/javascript">s('ad');m('add');</script>
<?php } else { ?>
<div class="ls">
<table cellpadding="0" cellspacing="0" class="tb">
<tr>
<th>�������</th>
<th>�������</th>
<th>&nbsp;����&nbsp;</th>
<th>&nbsp;��λ&nbsp;</th>
<th>��ʼ����</th>
<th>��������</th>
<th>ʣ��(��)</th>
<th>Ͷ��״̬</th>
<th>����ʱ��</th>
<th>&nbsp;Ԥ��&nbsp;</th>
</tr>
<?php if(is_array($lists)) { foreach($lists as $k => $v) { ?>
<tr onmouseover="this.className='on';" onmouseout="this.className='';" align="center" title="���:<?php echo $v['introduce'];?>">
<td><?php echo $TYPE[$v['typeid']];?></td>
<td align="left">&nbsp;&nbsp;<a href="<?php echo $adurl;?><?php echo rewrite('index.php?aid='.$v['aid']);?>" target="_blank" class="t"><?php echo $v['title'];?></a></td>
<td class="f_red f_b"><?php echo $v['amount'];?></td>
<td><?php if($v['currency'] == 'money') { ?><?php echo $DT['money_unit'];?><?php } else { ?><?php echo $DT['credit_unit'];?><?php } ?>
</td>
<td><?php echo timetodate($v['fromtime'], 3);?></td>
<td><?php echo timetodate($v['totime'], 3);?></td>
<td<?php if($v['days']<5) { ?> class="f_red"<?php } ?>
><?php echo $v['days'];?></td>
<td><?php echo $v['process'];?></td>
<td class="f_gray px11"><?php echo timetodate($v['addtime'], 5);?></td>
<td><a href="<?php echo $adurl;?><?php echo rewrite('index.php?aid='.$v['aid']);?>" target="_blank" class="t">Ԥ��</a></td>
</tr>
<?php } } ?>
</table>
</div>
<div class="pages"><?php echo $pages;?></div>
<script type="text/javascript">s('ad');m('s<?php echo $status;?>');</script>
<?php } ?>
<?php include template('footer', $module);?>