<?php defined('IN_DESTOON') or exit('Access Denied');?><?php if($user_status == 3) { ?>
<ul>
<?php if($member) { ?>
<li class="f_b t_c" style="padding:3px 0 5px 0;font-size:14px;"><a href="<?php echo $member['linkurl'];?>" target="_blank" title="<?php echo $member['company'];?>&#10;<?php echo $member['mode'];?>"><?php echo $member['company'];?></a></li>
<?php if($member['vip']) { ?>
<li class="f_orange" style="padding:5px 0 0 12px;"><img src="<?php echo DT_SKIN;?>image/vip_<?php echo $member['vip'];?>.gif" alt="<?php echo VIP;?>" title="<?php echo VIP;?>:<?php echo $member['vip'];?>��" align="absmiddle"/> [<?php echo VIP;?>��<?php echo vip_year($member['fromtime']);?>��] ָ��:<?php echo $member['vip'];?></li>
<?php } ?>
<?php if($member['validated'] || $member['vcompany'] || $member['vtruename'] || $member['vbank'] || $member['vmobile'] || $member['vemail']) { ?>
<li class="f_green" style="padding-top:6px;padding-bottom:6px;">
<?php if($member['vcompany']) { ?>&nbsp;<img src="<?php echo $MODULE['2']['linkurl'];?>image/v_company.gif" width="16" height="16" align="absmiddle" title="ͨ��������֤"/><?php } ?>
<?php if($member['vtruename']) { ?>&nbsp;<img src="<?php echo $MODULE['2']['linkurl'];?>image/v_truename.gif" width="16" height="16" align="absmiddle" title="ͨ��ʵ����֤"/><?php } ?>
<?php if($member['vbank']) { ?>&nbsp;<img src="<?php echo $MODULE['2']['linkurl'];?>image/v_bank.gif" width="16" height="16" align="absmiddle" title="ͨ�������ʺ���֤"/><?php } ?>
<?php if($member['vmobile']) { ?>&nbsp;<img src="<?php echo $MODULE['2']['linkurl'];?>image/v_mobile.gif" width="16" height="16" align="absmiddle" title="ͨ���ֻ���֤"/><?php } ?>
<?php if($member['vemail']) { ?>&nbsp;<img src="<?php echo $MODULE['2']['linkurl'];?>image/v_email.gif" width="16" height="16" align="absmiddle" title="ͨ���ʼ���֤"/><?php } ?>
<?php if($member['validated']) { ?>&nbsp;<img src="<?php echo DT_SKIN;?>image/check_right.gif" align="absmiddle"/> ͨ��<?php echo $member['validator'];?>��֤<?php } ?>
&nbsp;<a href="<?php echo userurl($member['username'], 'file=credit');?>">[���ŵ���]</a>
</li>
<?php } ?>
<li style="padding-top:6px;padding-bottom:6px;">
<span>��ϵ��</span><?php echo $member['truename'];?>(<?php echo gender($member['gender']);?>)&nbsp;<?php echo $member['career'];?>&nbsp;
<?php if($member['username'] && $DT['im_web']) { ?><?php echo im_web($member['username'].'&mid='.$moduleid.'&itemid='.$itemid);?>&nbsp;<?php } ?>
<?php if($member['qq'] && $DT['im_qq']) { ?><?php echo im_qq($member['qq']);?>&nbsp;<?php } ?>
<?php if($member['ali'] && $DT['im_ali']) { ?><?php echo im_ali($member['ali']);?>&nbsp;<?php } ?>
<?php if($member['msn'] && $DT['im_msn']) { ?><?php echo im_msn($member['msn']);?>&nbsp;<?php } ?>
<?php if($member['skype'] && $DT['im_skype']) { ?><?php echo im_skype($member['skype']);?>&nbsp;<?php } ?>
</li>
<li><span>��Ա</span> [<?php if(online($member['userid'])==1) { ?><font class="f_red">��ǰ����</font><?php } else { ?><font class="f_gray">��ǰ����</font><?php } ?>
] <a href="<?php echo $MODULE['2']['linkurl'];?>friend.php?action=add&username=<?php echo $member['username'];?>" rel="nofollow">[��Ϊ����]</a> <a href="<?php echo $MODULE['2']['linkurl'];?>message.php?action=send&touser=<?php echo $member['username'];?>" rel="nofollow">[�����ż�]</a></li>
<?php if($member['mail']) { ?><li><span>�ʼ�</span><?php echo anti_spam($member['mail']);?></li><?php } ?>
<?php if($member['telephone']) { ?><li><span>�绰</span><?php echo anti_spam($member['telephone']);?></li><?php } ?>
<?php if($member['mobile']) { ?><li><span>�ֻ�</span><?php echo anti_spam($member['mobile']);?><?php if($DT['sms'] && $member['vmobile']) { ?>&nbsp;&nbsp;<a href="<?php echo $MODULE['2']['linkurl'];?>sms.php?action=add&auth=<?php echo encrypt($member['mobile']);?>" target="_blank" rel="nofollow">[���Ͷ���]</a><?php } ?>
</li><?php } ?>
<li><span>����</span><?php echo area_pos($member['areaid'], '-');?></li>
<?php if($member['address']) { ?><li title="<?php echo $member['address'];?>"><span>��ַ</span><?php echo $member['address'];?></li><?php } ?>
<?php } else { ?>
<li class="f_b t_c" style="font-size:14px;"><a href="<?php echo userurl('');?>" target="_blank"><?php echo $item['company'];?></a></li>
<li style="padding-top:3px;">
<span>��ϵ��</span><?php echo $item['truename'];?>&nbsp;
<?php if($item['username'] && $DT['im_web']) { ?><?php echo im_web($item['username'].'&mid='.$moduleid.'&itemid='.$itemid);?>&nbsp;<?php } ?>
<?php if($item['qq'] && $DT['im_qq']) { ?><?php echo im_qq($item['qq']);?>&nbsp;<?php } ?>
<?php if($item['ali'] && $DT['im_ali']) { ?><?php echo im_ali($item['ali']);?>&nbsp;<?php } ?>
<?php if($item['msn'] && $DT['im_msn']) { ?><?php echo im_msn($item['msn']);?>&nbsp;<?php } ?>
<?php if($item['skype'] && $DT['im_skype']) { ?><?php echo im_skype($item['skype']);?>&nbsp;<?php } ?>
&nbsp;&nbsp;<strong class="f_red">δע��</strong>
</li>
<?php if($item['email']) { ?><li><span>�ʼ�</span><?php echo anti_spam($item['email']);?></li><?php } ?>
<?php if($item['telephone']) { ?><li><span>�绰</span><?php echo anti_spam($item['telephone']);?></li><?php } ?>
<?php if($item['mobile']) { ?><li><span>�ֻ�</span><?php echo anti_spam($item['mobile']);?></li><?php } ?>
<li><span>����</span><?php echo area_pos($item['areaid'], '&nbsp;');?></li>
<?php if($item['address']) { ?><li title="<?php echo $item['address'];?>"><span>��ַ</span><?php echo $item['address'];?></li><?php } ?>
</li>
<?php } ?>
</ul>
<?php } else if($user_status == 2) { ?>
<div class="px13 t_c">
<table cellpadding="5" cellspacing="5" width="100%">
<tr>
<td class="f_b"><div style="padding:3px;border:#40B3FF 1px solid;background:#E5F5FF;">�鿴����Ϣ��ϵ��ʽ��֧��<?php echo $name;?> <strong class="f_red"><?php echo $fee;?></strong> <?php echo $unit;?></div></td>
</tr>
<tr>
<td>�ҵ�<?php echo $name;?>��� <strong class="f_blue"><?php if($currency=='money') { ?><?php echo $_money;?><?php } else { ?><?php echo $_credit;?><?php } ?>
</strong> <?php echo $unit;?></td>
</tr>
<tr>
<td>����֧����ť֧����鿴</td>
</tr>
<?php if($MOD['fee_period']) { ?>
<tr>
<td>֧����ɲ鿴<strong class="f_red"><?php echo $MOD['fee_period'];?></strong>���ӣ��������¼Ʒ�</td>
</tr>
<?php } ?>
<tr>
<td>
<a href="<?php echo $pay_url;?>" rel="nofollow"><img src="<?php echo DT_SKIN;?>image/btn_pay.gif" alt="����֧��"/></a>
&nbsp;&nbsp;&nbsp;
<a href="<?php echo $MODULE['2']['linkurl'];?><?php if($currency=='money') { ?>charge.php?action=pay<?php } else { ?>credit.php?action=buy<?php } ?>
" rel="nofollow"><img src="<?php echo DT_SKIN;?>image/btn_charge.gif" alt="�ʻ���ֵ"/></a>
</td>
</tr>
</table>
</div>
<?php } else if($user_status == 1) { ?>
<div class="px13 t_c">
<table cellpadding="5" cellspacing="5" width="100%">
<tr>
<td class="f_b"><div style="padding:3px;border:#FFC600 1px solid;background:#FFFEBF;">���Ļ�Ա����û�в鿴��ϵ��ʽ��Ȩ��</div></td>
</tr>
<tr>
<td>��ø�����ҵ���ᣬ����<span class="f_red">����</span>��Ա����</td>
</tr>
<?php if($DT['telephone']) { ?>
<tr>
<td>��ѯ�绰��<?php echo $DT['telephone'];?></td>
</tr>
<?php } ?>
<tr>
<td>
<a href="<?php echo $MODULE['2']['linkurl'];?>grade.php" rel="nofollow"><img src="<?php echo DT_SKIN;?>image/btn_upgrade.gif" width="100" height="30" alt="��������"/></a>&nbsp;&nbsp;
<a href="<?php echo $MODULE['2']['linkurl'];?>grade.php" rel="nofollow"><img src="<?php echo DT_SKIN;?>image/btn_detail.gif" width="100" height="30" alt="�˽�����"/></a>
</td>
</tr>
</table>
</div>
<?php } else if($user_status == 0) { ?>
<div class="user_warn"><img src="<?php echo DT_SKIN;?>image/no.gif" align="absmiddle"/> ����û�е�¼�����¼��鿴��ϵ��ʽ</div>
<div class="user_login">
<form action="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_login'];?>" method="post" onsubmit="return user_login();">
<input type="hidden" name="submit" value="1"/>
<input name="username" id="user_name" type="text" value="��Ա��/Email" onfocus="if(this.value=='��Ա��/Email')this.value='';" class="user_input"/>&nbsp; 
<input name="password" id="user_pass" type="password" value="password" onfocus="if(this.value=='password')this.value='';" class="user_input"/>&nbsp; 
<input type="image" src="<?php echo DT_SKIN;?>image/user_login.gif" align="absmiddle"/>
</form>
</div>
<div class="user_tip">���ע��Ϊ��Ա��������...</div>
<div class="user_can">
<table cellpadding="0" cellspacing="0" width="100%">
<tr>
<td><img src="<?php echo $MODULE['2']['linkurl'];?>image/ico_edit.gif" align="absmiddle"/> ����������Ϣ</td>
<td><img src="<?php echo $MODULE['2']['linkurl'];?>image/ico_product.gif" align="absmiddle"/> �ƹ���ҵ��Ʒ</td>
</tr>
<tr>
<td><img src="<?php echo $MODULE['2']['linkurl'];?>image/ico_homepage.gif" align="absmiddle"/> ������ҵ����</td>
<td><img src="<?php echo $MODULE['2']['linkurl'];?>image/ico_message.gif" align="absmiddle"/> ����Ǣ̸����</td>
</tr>
</table>
</div>
<div class="user_reg_c"><a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_register'];?>" rel="nofollow"><img src="<?php echo DT_SKIN;?>image/user_reg.gif" width="260" height="26" alt="�����ǻ�Ա���������ע��"/></a></div>
<?php } else { ?>
<br/><br/><br/>
<center><img src="<?php echo DT_SKIN;?>image/load.gif"/></center>
<br/><br/><br/>
<?php } ?>
