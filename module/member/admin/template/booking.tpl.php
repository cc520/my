<?php
    defined('IN_DESTOON') or exit('Access Denied');
    include tpl('header');
    show_menu($menus);
?>
<!--form action="?">
<div class="tt">会员搜索</div>
<input type="hidden" name="moduleid" value="<?php echo $moduleid;?>"/>
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<table cellpadding="2" cellspacing="1" class="tb">
<tr>
<td>&nbsp;
<?php echo $fields_select;?>&nbsp;
<input type="text" size="20" name="kw" value="<?php echo $kw;?>" title="关键词"/>&nbsp;
<?php echo $group_select;?>&nbsp;
<?php echo $gender_select;?>&nbsp;
<?php echo ajax_area_select('areaid', '所在地区', $areaid);?>&nbsp;
<?php echo $order_select;?>
&nbsp;
<input type="text" name="psize" value="<?php echo $pagesize;?>" size="2" class="t_c" title="条/页"/>
<input type="submit" value="搜 索" class="btn"/>&nbsp;
<input type="button" value="重 置" class="btn" onclick="Go('?moduleid=<?php echo $moduleid;?>&action=<?php echo $action;?>');"/>
</td>
</tr>
<tr>
<td>&nbsp;
<select name="timetype">
<option value="regtime" <?php if($timetype == 'regtime') echo 'selected';?>>注册时间</option>
<option value="logintime" <?php if($timetype == 'logintime') echo 'selected';?>>登录时间</option>
</select>&nbsp;
<?php echo dcalendar('fromtime', $fromtime);?> 至 <?php echo dcalendar('totime', $totime);?>&nbsp;
<?php echo $DT['money_name'];?>：<input type="text" size="3" name="minmoney" value="<?php echo $minmoney;?>"/> ~ <input type="text" size="3" name="maxmoney" value="<?php echo $maxmoney;?>"/>&nbsp;
<?php echo $DT['credit_name'];?>：<input type="text" size="3" name="mincredit" value="<?php echo $mincredit;?>"/> ~ <input type="text" size="3" name="maxcredit" value="<?php echo $maxcredit;?>"/>&nbsp;
短信：<input type="text" size="3" name="minsms" value="<?php echo $minsms;?>"/> ~ <input type="text" size="3" name="maxsms" value="<?php echo $maxsms;?>"/>&nbsp;
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
会员名：<input type="text" name="username" value="<?php echo $username;?>" size="8"/>&nbsp;
会员ID：<input type="text" name="uid" value="<?php echo $uid;?>" size="4"/>
</td>
</tr>
</table>
</form-->
<form method="post">
<div class="tt">会员管理</div>
<table cellpadding="2" cellspacing="1" class="tb">
<tr>
<th width="25"><input type="checkbox" onclick="checkall(this.form);"/></th>
<th>会员ID</th>
<th>车主姓名</th>
<th>预约服务</th>
<th>预约公司</th>
<th>到点时间</th>
<th>车牌号</th>
<th>服务要求</th>
<th>费用预算</th>
<th>服务图片</th>
<th width="100">操作</th>
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
<a href="?moduleid=<?php echo $moduleid;?>&action=edit&file=<?php echo $file;?>&bid=<?php echo $v['id'];?>"><img src="admin/image/edit.png" width="16" height="16" title="修改" alt=""/></a>&nbsp;
<a href="?moduleid=2&action=show&userid=<?php echo $v['userid'];?>"><img src="admin/image/view.png" width="16" height="16" title="会员[<?php echo $v['username'];?>]详细资料" alt=""/></a>&nbsp;
<!--a href="?moduleid=<?php echo $moduleid;?>&action=login&userid=<?php echo $v['userid'];?>" target="_blank"><img src="admin/image/set.png" width="16" height="16" title="进入会员商务中心" alt=""/></a>&nbsp;-->
<a href="?moduleid=<?php echo $moduleid;?>&file=<?php echo $file;?>&action=answer&bid=<?php echo $v['id'];?>"><img src="<?php echo $MODULE[2]['linkurl'];?>image/message_3.gif" width="16" height="16" title="回复" alt=""/></a>
<a href="?moduleid=<?php echo $moduleid;?>&file=<?php echo $file;?>&action=delete&bid=<?php echo $v['id'];?>" onclick="if(!confirm('确定危险！！要删除此预约吗？系统将删除选中预约，此操作将不可撤销')) return false;"><img src="admin/image/delete.png" width="16" height="16" title="删除" alt=""/></a>
</td>
</tr>
<?php }?>
</table>
<!--div class="btns">
<input type="submit" value=" 删除会员 " class="btn" onclick="if(confirm('确定要删除选中会员吗？系统将删除选中用户所有信息，此操作将不可撤销')){this.form.action='?moduleid=<?php echo $moduleid;?>&action=delete'}else{return false;}"/>&nbsp;
<input type="submit" value=" 禁止访问 " class="btn" onclick="if(confirm('确定要禁止选中会员访问吗？')){this.form.action='?moduleid=<?php echo $moduleid;?>&action=move&groupids=2'}else{return false;}"/>&nbsp;
<input type="submit" value=" 设置<?php echo VIP;?> " class="btn" onclick="this.form.action='?moduleid=4&file=vip&action=add';"/>&nbsp;
<input type="submit" value=" <?php echo $DT['money_name'];?>增减 " class="btn" onclick="this.form.action='?moduleid=<?php echo $moduleid;?>&file=record&action=add';"/>&nbsp;
<input type="submit" value=" <?php echo $DT['credit_name'];?>奖惩 " class="btn" onclick="this.form.action='?moduleid=<?php echo $moduleid;?>&file=credit&action=add';"/>&nbsp;
<input type="submit" value=" 短信增减 " class="btn" onclick="this.form.action='?moduleid=<?php echo $moduleid;?>&file=sms&action=add';"/>&nbsp;
<input type="submit" value=" 发送短信 " class="btn" onclick="this.form.action='?moduleid=<?php echo $moduleid;?>&file=sendsms';"/>&nbsp;
<input type="submit" value=" 发送邮件 " class="btn" onclick="this.form.action='?moduleid=<?php echo $moduleid;?>&file=sendmail';"/>&nbsp;
<input type="submit" value=" 发送消息 " class="btn" onclick="this.form.action='?moduleid=<?php echo $moduleid;?>&file=message&action=send';"/>&nbsp;
<input type="submit" value=" 贸易提醒 " class="btn" onclick="this.form.action='?moduleid=<?php echo $moduleid;?>&file=alert&action=add';"/>&nbsp;
<input type="submit" value=" 移动至 " class="btn" onclick="if(Dd('mgroupid').value==0){alert('请选择会员组');Dd('mgroupid').focus();return false;}this.form.action='?moduleid=<?php echo $moduleid;?>&action=move';"/> <?php echo group_select('groupid', '会员组', 0, 'id="mgroupid"');?> 
</div-->
</form>
<!--div class="pages"><?php echo $pages;?></div>
<div class="tt">修改会员名</div>
<form method="post" action="?">
<input type="hidden" name="moduleid" value="<?php echo $moduleid;?>"/>
<input type="hidden" name="file" value="<?php echo $file;?>"/>
<input type="hidden" name="action" value="rename"/>
<a name="#editusername"></a>
<table cellpadding="2" cellspacing="1" class="tb">
<tr>
<td>&nbsp;当前会员名： <input type="text" name="cusername" size="20" value="<?php echo $username;?>"/> &nbsp; 新会员名： <input type="text" name="nusername" size="20"<?php if($catid) echo ' style="color:#FF6600;" value="请输入新会员名" onclick="if(this.value==\'请输入新会员名\')this.value=\'\';"';?>/>  &nbsp; <input type="submit" name="submit" value=" 确 定 " class="btn"/>&nbsp;&nbsp;<span class="f_gray">如无特殊情况，建议不要频繁修改会员名</span>
</td>
</tr>
</table>
</form>	
<div class="tt">手机查询</div>
<table cellpadding="2" cellspacing="1" class="tb">
<tr>
<td>&nbsp;手机号： <input type="text" name="mob" size="30" id="mob"/> &nbsp; <input type="button"  value=" 查 询 " class="btn" onclick="if(Dd('mob').value){_mobile(Dd('mob').value);}"/>&nbsp;&nbsp;<span class="f_gray">可查询手机所在地区</span>
</td>
</tr>
</table>
<div class="tt">IP查询</div>
<table cellpadding="2" cellspacing="1" class="tb">
<tr>
<td>&nbsp;IP地址： <input type="text" name="ip" size="30" id="ip"/> &nbsp; <input type="button"  value=" 查 询 " class="btn" onclick="if(Dd('ip').value){_ip(Dd('ip').value);}"/>&nbsp;&nbsp;<span class="f_gray">可查询IP所在地区</span>
</td>
</tr>
</table>
<div class="tt">IP解锁</div>
<form method="post" action="?">
<input type="hidden" name="moduleid" value="<?php echo $moduleid;?>"/>
<input type="hidden" name="file" value="<?php echo $file;?>"/>
<input type="hidden" name="action" value="unlock"/>
<table cellpadding="2" cellspacing="1" class="tb">
<tr>
<td>&nbsp;IP地址： <input type="text" name="ip" size="30"/> &nbsp; <input type="submit" name="submit" value=" 解 锁 " class="btn"/>&nbsp;&nbsp;<span class="f_gray">可解除因登录失败次数过多而被锁定登录的IP</span>
</td>
</tr>
</table>
</form-->
<br/><br/><br/>
<script type="text/javascript">Menuon(0);</script>
<?php include tpl('footer');?>
