<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header', $module);?>
<link rel="stylesheet" type="text/css" href="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/index.css"/>
<div id="warn">
<?php if($_groupid == 4) { ?>
<div class="warn">�𾴵Ļ�Ա�������ʺ�<span class="f_red f_b">���������..</span>����վ���ֹ��ܺͷ�������ܵ�һ����ʹ�����ƣ�<?php if($MOD['checkuser']==2) { ?><a href="send.php?action=check" class="l">���������֤��������</a>��ϵͳ���Զ����<?php } else { ?>���Ժ򣬵ȴ���վ���<br/>���Ƶ���ҵ��Ϣ�����ڻ�ñ��˵����Σ��ύǱ�ڵ���ҵ��飬��ȡ��ҵ���ᣬ����ϵͳ���ͨ���ĸ���&nbsp;&nbsp;<a href="edit.php?tab=2" class="t f_b">���ھ�ȥ����</a><?php } ?>
</div>
<?php } ?>
<?php if($_groupid > 5 && !$_edittime) { ?>
<div class="warn">��˾��δ������ϸ���ϣ����Ƶ���ҵ��Ϣ�����ڻ�ñ��˵����Σ��ύǱ�ڵ���ҵ��飬��ȡ��ҵ����&nbsp;&nbsp;<a href="edit.php?tab=2" class="t f_b">���ھ�ȥ����</a></div>
<?php } ?>
<?php if($vip && $havedays < 11 && $havedays > 0) { ?>
<div class="warn">�𾴵�<?php echo $MG['groupname'];?>������<?php echo VIP;?>������ <strong class="f_red"><?php echo $havedays;?></strong> ����ڣ�Ϊ�˲�Ӱ����������ʹ�ã������������ѡ�&nbsp;&nbsp;<a href="renew.php" class="t f_b">�������</a></div>
<?php } ?>
</div>
<table cellpadding="0" cellspacing="0" width="100%" height="100%">
<tr>
<td valign="top">
<div class="i_info">
<ul>
<?php if($MOD['vmember']) { ?>
<li>
<img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/<?php if($validated) { ?>v<?php } else { ?>u<?php } ?>
_member.gif" width="16" height="16" title="<?php if($validated) { ?>��ͨ��<?php echo $validator;?>��֤<?php } else { ?>δͨ����֤<?php } ?>
" align="absmiddle"/> ��֤��
<?php if($MOD['vemail']) { ?>
<img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/<?php if($vemail) { ?>v<?php } else { ?>u<?php } ?>
_email.gif" width="16" height="16" title="<?php if($vemail) { ?>��ͨ��<?php } else { ?>δͨ��<?php } ?>
�ʼ���֤" align="absmiddle"/> <a href="validate.php?action=email" class="l">�ʼ�</a> &nbsp;
<?php } ?>
<?php if($MOD['vmobile']) { ?>
<img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/<?php if($vmobile) { ?>v<?php } else { ?>u<?php } ?>
_mobile.gif" width="16" height="16" title="<?php if($vmobile) { ?>��ͨ��<?php } else { ?>δͨ��<?php } ?>
�ֻ���֤" align="absmiddle"/> <a href="validate.php?action=mobile" class="l">�ֻ�</a> &nbsp;
<?php } ?>
<?php if($MOD['vbank']) { ?>
<img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/<?php if($vbank) { ?>v<?php } else { ?>u<?php } ?>
_bank.gif" width="16" height="16" title="<?php if($vbank) { ?>��ͨ��<?php } else { ?>δͨ��<?php } ?>
�����ʺ���֤" align="absmiddle"/> <a href="validate.php?action=bank" class="l">����</a> &nbsp;
<?php } ?>
<?php if($MOD['vtruename']) { ?>
<img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/<?php if($vtruename) { ?>v<?php } else { ?>u<?php } ?>
_truename.gif" width="16" height="16" title="<?php if($vtruename) { ?>��ͨ��<?php } else { ?>δͨ��<?php } ?>
��ʵ������֤" align="absmiddle"/> <a href="validate.php?action=truename" class="l">ʵ��</a> &nbsp;
<?php } ?>
<?php if($MOD['vcompany'] && $groupid > 5) { ?>
<img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/<?php if($vcompany) { ?>v<?php } else { ?>u<?php } ?>
_company.gif" width="16" height="16" title="<?php if($vcompany) { ?>��ͨ��<?php } else { ?>δͨ��<?php } ?>
��˾������֤" align="absmiddle"/> <a href="validate.php?action=company" class="l">��˾</a>
<?php } ?>
</li>
<?php } ?>
<li>
<img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/ico_message.gif" width="16" height="16" alt="" align="absmiddle"/> �ż���
<strong class="f_red"><?php echo $_message;?></strong> �� <a href="message.php" class="l">δ��վ����</a>
&nbsp;&nbsp;
<a href="message.php?typeid=1" class="l">ѯ��</a> | 
<a href="message.php?typeid=2" class="l">����</a> | 
<a href="message.php?typeid=3" class="l">����</a> | 
<a href="message.php?typeid=4" class="l">��ʹ</a> | 
<a href="message.php?action=send" class="l">����</a>
</li>
<li>
<img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/ico_member.gif" width="16" height="16" alt="" align="absmiddle"/> <?php echo $DT['money_name'];?>��
<strong class="f_red px14"><?php echo $_money;?></strong> <?php echo $DT['money_unit'];?>���� <?php if($locking) { ?><span class="f_gray">(<?php echo $locking;?><?php echo $DT['money_unit'];?>����)</span><?php } ?>
&nbsp;&nbsp;
<a href="record.php" class="l"><?php echo $DT['money_name'];?>��ˮ</a> | 
<a href="cash.php" class="l">����</a> | 
<a href="charge.php?action=pay" target="_blank"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/btn_charge.gif" width="40" height="18" alt="" align="absmiddle"/></a>
</li>
<li>
<img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/ico_credit.gif" width="16" height="16" alt="" align="absmiddle"/> <?php echo $DT['credit_name'];?>��
<strong><?php echo $_credit;?></strong>
&nbsp;&nbsp;
<a href="credit.php" class="l"><?php echo $DT['credit_name'];?>��¼</a> | 
<a href="credit.php?action=buy" class="l">����<?php echo $DT['credit_name'];?></a> | 
<a href="credit.php?action=invite" class="l">�ƹ�׬<?php echo $DT['credit_name'];?></a>
<?php if($MOD['credit_exchange']) { ?>| <a href="credit.php?action=exchange" class="l"><?php echo $DT['credit_name'];?>�һ�</a><?php } ?>
<?php if($EXT['gift_enable']) { ?>| <a href="<?php echo $EXT['gift_url'];?>" class="l" target="_blank">���ֻ���</a><?php } ?>
</li>
<?php if($DT['sms'] && $MG['sms']) { ?>
<li>
<img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/ico_sms.gif" width="16" height="16" alt="" align="absmiddle"/> ���ţ�
<strong><?php echo $_sms;?></strong> ������
&nbsp;&nbsp;
<a href="sms.php?action=add" class="l">����</a> | 
<a href="sms.php?action=buy" class="l">����</a> | 
<a href="sms.php?action=record" class="l">���ռ�¼</a> | 
<a href="sms.php?action=send" class="l">���ͼ�¼</a> | 
<a href="sms.php" class="l">���ż�¼</a>
</li>
<?php } ?>
<li>
<img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/ico_trade.gif" width="16" height="16" alt="" align="absmiddle"/> ������
<strong class="f_red"><?php echo $trade;?></strong>
&nbsp;&nbsp;
<a href="trade.php" class="l">�յ��Ķ���(��)</a> | 
<a href="trade.php?action=order" class="l">�����Ķ���(��)</a>
<?php if(isset($MODULE['17'])) { ?> | <a href="group.php?action=order" class="l"><?php echo $MODULE['17']['name'];?>����</a><?php } ?>
<?php if(isset($MODULE['16'])) { ?> | <a href="<?php echo $MODULE['16']['linkurl'];?>cart.php" class="l">���ﳵ(<script type="text/javascript">document.write(substr_count(get_cookie('cart'), ','));</script>)</a><?php } ?>
</li>
</ul>
</div>
<div class="i_quick">
<div>
<ul>
<li><a href="<?php echo $DT['file_my'];?>" class="b"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/btn_my.gif" width="32" height="32" alt=""/><br/><span class="f_red">������Ϣ</span></a></li>
<li><a href="edit.php" class="b"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/btn_edit.gif" width="32" height="32" alt=""/><br/>��������</a></li>
<li><a href="message.php" class="b"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/btn_message.gif" width="32" height="32" alt=""/><br/>վ����</a></li>
<li><a href="style.php" class="b"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/btn_style.gif" width="32" height="32" alt=""/><br/>���ģ��</a></li>
<li><a href="<?php echo $linkurl;?>" target="_blank" class="b"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/btn_home.gif" width="32" height="32" alt=""/><br/><span class="f_red">�ҵ�����</span></a></li>
<li><a href="record.php" class="b"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/btn_record.gif" width="32" height="32" alt=""/><br/><?php echo $DT['money_name'];?>��¼</a></li>
<li><a href="trade.php" class="b"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/btn_trade.gif" width="32" height="32" alt=""/><br/>���׹���</a></li>
<li><a href="alert.php" class="b"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/btn_alert.gif" width="32" height="32" alt=""/><br/>ó������</a></li>
<li><a href="friend.php" class="b"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/btn_friend.gif" width="32" height="32" alt=""/><br/>�ҵ�����</a></li>
<li><a href="favorite.php" class="b"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/btn_favorite.gif" width="32" height="32" alt=""/><br/>�̻��ղ�</a></li>
</ul>
</div>
<div style="clear:both;"></div>
</div>
</td>
<td width="8">&nbsp;</td>
<td valign="top" class="i_rt">
<div class="i_head">
<strong>������</strong>
</div>
<div class="i_body">
<div class="i_note">
<form method="post" action="index.php" onsubmit="return check();">
<table cellspacing="2" cellpadding="2" width="100%">
<tr>
<td colspan="2"><textarea name="note" id="note"><?php echo $note;?></textarea></td>
</tr>
<tr>
<td><input type="submit" name="submit" value=" �� �� " class="btn"/></td>
<td class="f_gray">[�ɼ�¼һЩ���ֱ�������1000��]</td>
</tr>
</table>
</form>
</div>
</div>
<div class="i_head">
<span class="f_r"><a href="message.php">[����]</a></span>
<strong>ϵͳ��Ϣ</strong>
</div>
<div class="i_body">
<div class="i_sys">
<ul>
<?php if($sys) { ?>
<?php if(is_array($sys)) { foreach($sys as $v) { ?>
<li><span class="f_r px11 f_gray"><?php echo timetodate($v['addtime'], 2);?></span>&nbsp;<a href="message.php?action=show&itemid=<?php echo $v['itemid'];?>" title="<?php echo $v['title'];?>"><?php echo $v['title'];?></a></li>
<?php } } ?>
<?php } else { ?>
<li>&nbsp;������Ϣ</li>
<?php } ?>
</ul>
</div>
</div>
<div class="i_head">
<span class="f_r"><a href="edit.php">[�޸�]</a></span>
<strong>�ҵ�����</strong>
</div>
<div class="i_body">
<div class="i_user">
<table cellpadding="6" cellspacing="0" width="100%">
<?php if($_groupid > 5) { ?>
<tr>
<td class="i_user_l">��˾����</td>
<td>
<?php if($MG['homepage']) { ?>
<a href="<?php echo $userurl;?>" target="_blank" class="l"><?php echo $company;?></a>
<?php } else { ?>
<?php echo $company;?>
<?php } ?>
</td>
</tr>
<?php } ?>
<?php if($support) { ?>
<tr>
<td class="i_user_l">�ͷ�רԱ</td>
<td><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/support.gif" align="absmiddle"/><a href="support.php" class="l">�����ϵ</a></td>
</tr>
<?php } ?>
<tr>
<td class="i_user_l">��Ա��</td>
<td><?php echo $username;?></td>
</tr>
<?php if($MOD['passport']) { ?>
<tr>
<td class="i_user_l">ͨ��֤</td>
<td><?php echo $passport;?></td>
</tr>
<?php } ?>
<tr>
<td class="i_user_l">��Ա��</td>
<td><?php echo $MG['groupname'];?></td>
</tr>
<tr>
<td class="i_user_l">��ԱID</td>
<td><?php echo $userid;?></td>
</tr>
<tr>
<td class="i_user_l">��¼ʱ��</td>
<td><?php echo $logintime;?><?php if($DT['login_log']==2) { ?>&nbsp;&nbsp;<a href="record.php?action=login" class="l">��¼��¼</a><?php } ?>
</td>
</tr>
<tr>
<td class="i_user_l">ע��ʱ��</td>
<td><?php echo $regtime;?></td>
</tr>
<?php if($vip) { ?>
<tr>
<td class="i_user_l"><?php echo VIP;?>����</td>
<td><img src="<?php echo DT_SKIN;?>image/vip_<?php echo $vip;?>.gif" alt="<?php echo VIP;?>" title="<?php echo VIP;?>:<?php echo $vip;?>��"/></td>
</tr>
<tr>
<td class="i_user_l">������</td>
<td><?php echo timetodate($fromtime, 3);?> �� <?php echo timetodate($totime, 3);?></td>
</tr>
<tr>
<td class="i_user_l">ʣ��ʱ��</td>
<td><strong><?php echo $havedays;?></strong> ��&nbsp;&nbsp;<a href="renew.php" class="l">����</a></td>
</tr>
<?php } else if($groupid>4) { ?>
<tr>
<td class="i_user_l">��Ա����</td>
<td>&nbsp;<a href="grade.php"><span class="f_red">��������</span></a></td>
</tr>
<?php } ?>
</table>
</div>
</div>
</td>
</tr>
</table>
<?php include template('footer', $module);?>