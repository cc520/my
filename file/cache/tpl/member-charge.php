<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header', $module);?>
<script type="text/javascript">c(2);</script>
<div class="menu">
<table cellpadding="0" cellspacing="0">
<tr>
<?php if($MOD['pay_online']) { ?>
<td class="tab" id="action_pay"><a href="charge.php?action=pay"><span>���߳�ֵ</span></a></td>
<td class="tab_nav">&nbsp;</td>
<?php } ?>
<td class="tab" id="action_card"><a href="charge.php?action=card"><span>��ֵ����ֵ</span></a></td>
<?php if($MOD['pay_url']) { ?>
<td class="tab_nav">&nbsp;</td>
<td class="tab"><a href="<?php echo $MOD['pay_url'];?>"><span>���л��</span></a></td>
<?php } ?>
<td class="tab_nav">&nbsp;</td>
<td class="tab" id="action_record"><a href="charge.php?action=record"><span>��ֵ��¼</span></a></td>
</tr>
</table>
</div>
<?php if($action == 'record') { ?>
<form action="?">
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<div class="tt">
<select name="bank">
<option value="">֧��ƽ̨</option>
<?php if(is_array($PAY)) { foreach($PAY as $k => $v) { ?>
<option value="<?php echo $k;?>" <?php if($bank == $k) { ?>selected<?php } ?>
><?php echo $v['name'];?></option>;
<?php } } ?>
</select>
&nbsp;
<?php echo dcalendar('fromtime', $fromtime);?> �� <?php echo dcalendar('totime', $totime);?>
&nbsp;
<input type="submit" value=" �� �� " class="btn"/>&nbsp;
<input type="button" value=" �� �� " class="btn" onclick="Go('?action=<?php echo $action;?>');"/>
</div>
</form>
<div class="bd">
<table cellpadding="1" cellspacing="0" class="tb">
<tr>
<th>��ˮ��</th>
<th>��ֵ���</th>
<th>������</th>
<th>ʵ�ս��</th>
<th>֧��ƽ̨</th>
<th width="130">�µ�ʱ��</th>
<th width="130">֧��ʱ��</th>
<th>״̬</th>
</tr>
<?php if(is_array($charges)) { foreach($charges as $k => $v) { ?>
<tr onmouseover="this.className='on';" onmouseout="this.className='';" align="center">
<td height="30" class="px11"><?php echo $v['itemid'];?></td>
<td class="px11"><?php echo $v['amount'];?></td>
<td class="px11"><?php echo $v['fee'];?></td>
<td class="px11 f_blue"><?php echo $v['money'];?></td>
<td><?php echo $PAY[$v['bank']]['name'];?></td>
<td class="px11 f_gray"><?php echo $v['sendtime'];?></td>
<td class="px11 f_gray"><?php echo $v['receivetime'];?></td>
<td><?php echo $v['dstatus'];?></td>
</tr>
<?php } } ?>
<tr align="center">
<td height="35"><strong>С��</strong></td>
<td class="px11"><?php echo $amount;?></td>
<td class="px11"><?php echo $fee;?></td>
<td class="px11 f_blue"><?php echo $money;?></td>
<td colspan="4">&nbsp;</td>
</tr>
</table>
</div>
<div class="pages"><?php echo $pages;?></div>
<script type="text/javascript">s('charge');m('action_record');</script>
<?php } else if($action == 'card') { ?>
<form method="post" action="charge.php" onsubmit="return check_card();">
<input type="hidden" name="action" value="card"/>
<table cellspacing="1" cellpadding="6" class="tb">
<tr>
<td class="tl">���ţ�</td>
<td class="tr"><input type="text" name="number" size="20" id="number"/> <span id="dnumber" class="f_red"></span></td>
</tr>
<tr>
<td class="tl">���룺</td>
<td class="tr"><input type="text" name="password" size="20" id="password"/> <span id="dpassword" class="f_red"></span>
</td>
</tr>
<tr>
<td class="tl"></td>
<td class="tr"><input type="submit" name="submit" value=" �� ֵ " class="btn"/>
</td>
</tr>
</form>
</table>
<script type="text/javascript">
function check_card() {
if(Dd('number').value.length < 8) {
Dmsg('����д��ȷ�ĳ�ֵ������', 'number');
return false;
}
if(Dd('password').value.length < 6) {
Dmsg('����д��ȷ�ĳ�ֵ������', 'password');
return false;
}
}
</script>
<script type="text/javascript">s('charge');m('action_card');</script>
<?php } else if($action == 'pay') { ?>
<?php if($MOD['pay_online']) { ?>
<form method="post" action="charge.php" onsubmit="return check();" id="dform">
<input type="hidden" name="auto" value="<?php echo $auto;?>"/>
<input type="hidden" name="action" value="confirm"/>
<table cellspacing="1" cellpadding="6" class="tb">
<tr>
<td class="tl"><span class="f_red">*</span> ��ֵ���</td>
<td class="tr">&nbsp;
<?php if($charges) { ?>
<?php if(is_array($charges)) { foreach($charges as $k => $v) { ?>
<input type="radio" name="amount" value="<?php echo $v;?>" id="amount_<?php echo $k;?>"<?php if($k==0) { ?>checked<?php } ?>
/><label for="amount_<?php echo $k;?>"> <?php echo $v;?><?php echo $DT['money_unit'];?></label>&nbsp;
<?php } } ?>
<?php } else { ?>
<input type="text" name="amount" size="10" value="<?php echo $amount;?>" id="amount" maxlength="8"/> <?php echo $DT['money_unit'];?> <span id="damount" class="f_red"></span>
<?php } ?>
</td>
</tr>
<tr>
<td class="tl"><span class="f_red">*</span> ֧��ƽ̨</td>
<td class="tr">
<table cellspacing="5" cellpadding="5" class="c_p">
<?php $i=0;?>
<?php if(is_array($PAY)) { foreach($PAY as $k=>$v) { ?>
<?php if($v['enable']) { ?>
<tr onclick="Dd('<?php echo $k;?>').checked=true;">
<td><input type="radio" name="bank" value="<?php echo $k;?>" id="<?php echo $k;?>"<?php if($i==0) { ?> checked<?php } ?>
/></td>
<td><img src="<?php echo DT_STATIC;?>file/image/logo_<?php echo $k;?>.gif" alt=""/></td>
<td>������ <?php echo $v['percent'];?>%</td>
</tr>
<?php $i=1;?>
<?php } ?>
<?php } } ?>
<?php if($i==0) { ?>
<tr>
<td class="f_red"><br/>��Ǹ��ϵͳδ����֧��ƽ̨����ʱ�޷����߳�ֵ</td>
</tr>
<?php } ?>
</table><br/><span id="dbank" class="f_red"></span>
</td>
</tr>
<tr>
<td class="tl" height="50"> </td>
<td class="tr"><input type="submit" value=" ��һ�� " class="btn"<?php if($i==0) { ?> disabled<?php } ?>
/></td>
</tr>
</table>
</form>
<?php } ?>
<script type="text/javascript">
function check() {
<?php if(!$charges) { ?>
if(!Dd('amount').value) {
Dmsg('����д��ֵ���', 'amount');
return false;
}
<?php if($mincharge) { ?>
if(Dd('amount').value < <?php echo $mincharge;?>) {
Dmsg('�������<?php echo $mincharge;?>', 'amount');
return false;
}
<?php } ?>
<?php } ?>
}
<?php if($auto) { ?>Dd('dform').submit();<?php } ?>
</script>
<script type="text/javascript">s('charge');m('action_pay');</script>
<?php } else if($action == 'confirm') { ?>
<form method="post" action="charge.php" id="dform">
<input type="hidden" name="goto" value="1"/>
<input type="hidden" name="action" value="confirm"/>
<input type="hidden" name="amount" value="<?php echo $amount;?>"/>
<input type="hidden" name="bank" value="<?php echo $bank;?>"/>
<table cellspacing="1" cellpadding="6" class="tb">
<tr>
<td class="tl">֧��ƽ̨</td>
<td class="tr"><img src="<?php echo DT_STATIC;?>file/image/logo_<?php echo $bank;?>.gif" alt=""/></td>
</tr>
<tr>
<td class="tl">��ֵ���</td>
<td class="tr">&nbsp;<strong><?php echo $amount;?></strong> <?php echo $DT['money_unit'];?></td>
</tr>
<tr>
<td class="tl">������</td>
<td class="tr">&nbsp;<strong><?php echo $fee;?></strong> <?php echo $DT['money_unit'];?></td>
</tr>
<tr>
<td class="tl">ʵ�ս��</td>
<td class="tr">&nbsp;<strong class="f_red"><?php echo $charge;?></strong> <?php echo $DT['money_unit'];?></td>
</tr>
<tr>
<td class="tl">��ʾ��Ϣ</td>
<td class="tr f_gray">
&nbsp;- ���ȷ�ϳ�ֵ��ϵͳ����ת��������֧��ƽ̨��֧���ɹ���ϵͳ���Զ�Ϊ�����ˡ�<br/>
&nbsp;- �����֧�������������κ����⣬�뼰ʱ��ͷ�����ȡ����ϵ���Ա㼰ʱ����<br/>
</td>
</tr>
<tr>
<td class="tl"> </td>
<td height="50" class="tr">
<input type="submit" value=" ȷ�ϳ�ֵ " class="btn"/> &nbsp;
<input type="button" value=" �����޸� " class="btn" onclick="history.back(-1);"/>
</td>
</tr>
</table>
</form>
<?php if($auto) { ?><script type="text/javascript">Dd('dform').submit();</script><?php } ?>
<script type="text/javascript">s('charge');m('action_pay');</script>
<?php } else { ?>
<table cellspacing="1" cellpadding="6" class="tb">
<?php if($charge_status == 2) { ?>
<tr>
<td class="tl">��ֵ���</td>
<td class="tr f_red f_b px14">����ֵ�쳣</td>
</tr>
<tr>
<td class="tl" height="50">���˵��</td>
<td class="tr lh18">
- ������롰<?php echo $charge_errcode;?>��������<a href="ask.php?action=add" class="b">�ͷ���ϵ</a>����֪������롣<br/>
- <a href="charge.php?action=pay" class="b">���³�ֵ������</a><br/>
</td>
</tr>
<?php } else if($charge_status == 1) { ?>
<tr>
<td class="tl">��ֵ���</td>
<td class="tr f_green f_b px14">�� ��ֵ�ɹ����Ѿ�Ϊ�����ʻ���ֵ <span class="f_red"><?php echo $charge_amount;?></span> <?php echo $DT['money_unit'];?></td>
</tr>
<tr>
<td class="tl" height="50">���˵��</td>
<td class="tr lh18">
- <a href="record.php?action=charge" class="b">��ѯ��¼������</a><br/>
- <a href="charge.php?action=pay" class="b">������ֵ������</a><br/>
</td>
</tr>
<?php } else { ?>
<tr>
<td class="tl" height="50">��ֵ���</td>
<td class="tr f_red f_b px14">
����ֵʧ��
</td>
</tr>
<tr>
<td class="tl" height="50">���˵��</td>
<td class="tr lh18">
- �����ȷ�ϳ�ֵ�ɹ���������<a href="ask.php?action=add" class="b">��ϵ�ͷ�</a>�����<br/>
- <a href="charge.php?action=pay" class="b">���³�ֵ������</a><br/>
</td>
</tr>
<?php } ?>
</table>
<?php if($charge_forward) { ?><script type="text/javascript">setTimeout(function(){Go('<?php echo $charge_forward;?>');}, 2000);</script><?php } ?>
<script type="text/javascript">s('charge');m('action_pay');</script>
<?php } ?>
<?php include template('footer', $module);?>