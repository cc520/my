<?php
    defined('IN_DESTOON') or exit('Access Denied');
    include tpl('header');
    show_menu($menus);
?>
<!--form action="?">
<div class="tt">��Ա����</div>
<input type="hidden" name="moduleid" value="<?php echo $moduleid;?>"/>
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<table cellpadding="2" cellspacing="1" class="tb">
<tr>
<td>&nbsp;
<?php echo $fields_select;?>&nbsp;
<input type="text" size="20" name="kw" value="<?php echo $kw;?>" title="�ؼ���"/>&nbsp;
<?php echo $group_select;?>&nbsp;
<?php echo $gender_select;?>&nbsp;
<?php echo ajax_area_select('areaid', '���ڵ���', $areaid);?>&nbsp;
<?php echo $order_select;?>
&nbsp;
<input type="text" name="psize" value="<?php echo $pagesize;?>" size="2" class="t_c" title="��/ҳ"/>
<input type="submit" value="�� ��" class="btn"/>&nbsp;
<input type="button" value="�� ��" class="btn" onclick="Go('?moduleid=<?php echo $moduleid;?>&action=<?php echo $action;?>');"/>
</td>
</tr>
<tr>
<td>&nbsp;
<select name="timetype">
<option value="regtime" <?php if($timetype == 'regtime') echo 'selected';?>>ע��ʱ��</option>
<option value="logintime" <?php if($timetype == 'logintime') echo 'selected';?>>��¼ʱ��</option>
</select>&nbsp;
<?php echo dcalendar('fromtime', $fromtime);?> �� <?php echo dcalendar('totime', $totime);?>&nbsp;
<?php echo $DT['money_name'];?>��<input type="text" size="3" name="minmoney" value="<?php echo $minmoney;?>"/> ~ <input type="text" size="3" name="maxmoney" value="<?php echo $maxmoney;?>"/>&nbsp;
<?php echo $DT['credit_name'];?>��<input type="text" size="3" name="mincredit" value="<?php echo $mincredit;?>"/> ~ <input type="text" size="3" name="maxcredit" value="<?php echo $maxcredit;?>"/>&nbsp;
���ţ�<input type="text" size="3" name="minsms" value="<?php echo $minsms;?>"/> ~ <input type="text" size="3" name="maxsms" value="<?php echo $maxsms;?>"/>&nbsp;
</td>
</tr>
<tr>
<td>&nbsp;
<?php echo $vprofile_select;?> 
<?php echo $vemail_select;?> 
<?php echo $vmobile_select;?> 
<?php echo $vtruename_select;?> 
<?php echo $vbank_select;?> 
<?php echo $vcompany_select;?> 
<?php echo $vtrade_select;?> 
<?php echo $avatar_select;?> 
��Ա����<input type="text" name="username" value="<?php echo $username;?>" size="8"/>&nbsp;
��ԱID��<input type="text" name="uid" value="<?php echo $uid;?>" size="4"/>
</td>
</tr>
</table>
</form-->
<form method="post">
<div class="tt">��Ա����</div>
<table cellpadding="2" cellspacing="1" class="tb">
<tr>
<th width="25"><input type="checkbox" onclick="checkall(this.form);"/></th>
<th>��ԱID</th>
<th>��������</th>
<th>ԤԼ����</th>
<th>ԤԼ��˾</th>
<th>����ʱ��</th>
<th>���ƺ�</th>
<th>����Ҫ��</th>
<th>����Ԥ��</th>
<th>����ͼƬ</th>
<th width="100">����</th>
</tr>
<?php foreach($bookinglist as $k=>$v) {?>
<tr onmouseover="this.className='on';" onmouseout="this.className='';" align="center">
<td><input type="checkbox" name="userid[]" value="<?php echo $v['userid'];?>"/></td>
<td class="px11"><?php echo $v['userid'];?></td>
<td align="left">&nbsp;<?php echo $v['booking_member']?></td>
<td align="left">&nbsp;<a href="?moduleid=<?php echo $moduleid?>&file=<?php echo $file?>&bid=<?php echo $v['id']?>&action=show"><?php echo $v['booking_name'] ?></td>
<td><a target="_blank" href="<?php echo userurl($cs[$v['booking_cid']]['username'])?>"><?php echo $cs[$v['booking_cid']]['company']?></a></td>
<td><?php echo date('Y-m-d',$v['booking_time']);?></td>
<td><?php echo $v['booking_brand']?></td>
<td><pre><?php echo dsubstr($v['booking_content'],15,'...')?></pre></td>
<td class="f_price"><?php echo $v['booking_estimation']?></td>
<td><a href="javascript:_preview('<?php echo $v['thumb'];?>')"><img src="<?php echo $v['thumb']?>" alt="" width="50" style="padding:5px;"/></a></td>
<td>
<a href="?moduleid=<?php echo $moduleid;?>&action=edit&file=<?php echo $file;?>&bid=<?php echo $v['id'];?>"><img src="admin/image/edit.png" width="16" height="16" title="�޸�" alt=""/></a>&nbsp;
<a href="?moduleid=2&action=show&userid=<?php echo $v['userid'];?>"><img src="admin/image/view.png" width="16" height="16" title="��Ա[<?php echo $v['username'];?>]��ϸ����" alt=""/></a>&nbsp;
<!--a href="?moduleid=<?php echo $moduleid;?>&action=login&userid=<?php echo $v['userid'];?>" target="_blank"><img src="admin/image/set.png" width="16" height="16" title="�����Ա��������" alt=""/></a>&nbsp;-->
<a href="?moduleid=<?php echo $moduleid;?>&file=<?php echo $file;?>&action=answer&bid=<?php echo $v['id'];?>"><img src="<?php echo $MODULE[2]['linkurl'];?>image/message_3.gif" width="16" height="16" title="�ظ�" alt=""/></a>
<a href="?moduleid=<?php echo $moduleid;?>&file=<?php echo $file;?>&action=delete&bid=<?php echo $v['id'];?>" onclick="if(!confirm('ȷ��Σ�գ���Ҫɾ����ԤԼ��ϵͳ��ɾ��ѡ��ԤԼ���˲��������ɳ���')) return false;"><img src="admin/image/delete.png" width="16" height="16" title="ɾ��" alt=""/></a>
</td>
</tr>
<?php }?>
</table>
<!--div class="btns">
<input type="submit" value=" ɾ����Ա " class="btn" onclick="if(confirm('ȷ��Ҫɾ��ѡ�л�Ա��ϵͳ��ɾ��ѡ���û�������Ϣ���˲��������ɳ���')){this.form.action='?moduleid=<?php echo $moduleid;?>&action=delete'}else{return false;}"/>&nbsp;
<input type="submit" value=" ��ֹ���� " class="btn" onclick="if(confirm('ȷ��Ҫ��ֹѡ�л�Ա������')){this.form.action='?moduleid=<?php echo $moduleid;?>&action=move&groupids=2'}else{return false;}"/>&nbsp;
<input type="submit" value=" ����<?php echo VIP;?> " class="btn" onclick="this.form.action='?moduleid=4&file=vip&action=add';"/>&nbsp;
<input type="submit" value=" <?php echo $DT['money_name'];?>���� " class="btn" onclick="this.form.action='?moduleid=<?php echo $moduleid;?>&file=record&action=add';"/>&nbsp;
<input type="submit" value=" <?php echo $DT['credit_name'];?>���� " class="btn" onclick="this.form.action='?moduleid=<?php echo $moduleid;?>&file=credit&action=add';"/>&nbsp;
<input type="submit" value=" �������� " class="btn" onclick="this.form.action='?moduleid=<?php echo $moduleid;?>&file=sms&action=add';"/>&nbsp;
<input type="submit" value=" ���Ͷ��� " class="btn" onclick="this.form.action='?moduleid=<?php echo $moduleid;?>&file=sendsms';"/>&nbsp;
<input type="submit" value=" �����ʼ� " class="btn" onclick="this.form.action='?moduleid=<?php echo $moduleid;?>&file=sendmail';"/>&nbsp;
<input type="submit" value=" ������Ϣ " class="btn" onclick="this.form.action='?moduleid=<?php echo $moduleid;?>&file=message&action=send';"/>&nbsp;
<input type="submit" value=" ó������ " class="btn" onclick="this.form.action='?moduleid=<?php echo $moduleid;?>&file=alert&action=add';"/>&nbsp;
<input type="submit" value=" �ƶ��� " class="btn" onclick="if(Dd('mgroupid').value==0){alert('��ѡ���Ա��');Dd('mgroupid').focus();return false;}this.form.action='?moduleid=<?php echo $moduleid;?>&action=move';"/> <?php echo group_select('groupid', '��Ա��', 0, 'id="mgroupid"');?> 
</div-->
</form>
<!--div class="pages"><?php echo $pages;?></div>
<div class="tt">�޸Ļ�Ա��</div>
<form method="post" action="?">
<input type="hidden" name="moduleid" value="<?php echo $moduleid;?>"/>
<input type="hidden" name="file" value="<?php echo $file;?>"/>
<input type="hidden" name="action" value="rename"/>
<a name="#editusername"></a>
<table cellpadding="2" cellspacing="1" class="tb">
<tr>
<td>&nbsp;��ǰ��Ա���� <input type="text" name="cusername" size="20" value="<?php echo $username;?>"/> &nbsp; �»�Ա���� <input type="text" name="nusername" size="20"<?php if($catid) echo ' style="color:#FF6600;" value="�������»�Ա��" onclick="if(this.value==\'�������»�Ա��\')this.value=\'\';"';?>/>  &nbsp; <input type="submit" name="submit" value=" ȷ �� " class="btn"/>&nbsp;&nbsp;<span class="f_gray">����������������鲻ҪƵ���޸Ļ�Ա��</span>
</td>
</tr>
</table>
</form>	
<div class="tt">�ֻ���ѯ</div>
<table cellpadding="2" cellspacing="1" class="tb">
<tr>
<td>&nbsp;�ֻ��ţ� <input type="text" name="mob" size="30" id="mob"/> &nbsp; <input type="button"  value=" �� ѯ " class="btn" onclick="if(Dd('mob').value){_mobile(Dd('mob').value);}"/>&nbsp;&nbsp;<span class="f_gray">�ɲ�ѯ�ֻ����ڵ���</span>
</td>
</tr>
</table>
<div class="tt">IP��ѯ</div>
<table cellpadding="2" cellspacing="1" class="tb">
<tr>
<td>&nbsp;IP��ַ�� <input type="text" name="ip" size="30" id="ip"/> &nbsp; <input type="button"  value=" �� ѯ " class="btn" onclick="if(Dd('ip').value){_ip(Dd('ip').value);}"/>&nbsp;&nbsp;<span class="f_gray">�ɲ�ѯIP���ڵ���</span>
</td>
</tr>
</table>
<div class="tt">IP����</div>
<form method="post" action="?">
<input type="hidden" name="moduleid" value="<?php echo $moduleid;?>"/>
<input type="hidden" name="file" value="<?php echo $file;?>"/>
<input type="hidden" name="action" value="unlock"/>
<table cellpadding="2" cellspacing="1" class="tb">
<tr>
<td>&nbsp;IP��ַ�� <input type="text" name="ip" size="30"/> &nbsp; <input type="submit" name="submit" value=" �� �� " class="btn"/>&nbsp;&nbsp;<span class="f_gray">�ɽ�����¼ʧ�ܴ����������������¼��IP</span>
</td>
</tr>
</table>
</form-->
<br/><br/><br/>
<script type="text/javascript">Menuon(0);</script>
<?php include tpl('footer');?>
