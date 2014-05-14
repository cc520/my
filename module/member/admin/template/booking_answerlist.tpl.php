<?php
    defined('IN_DESTOON') or exit('Access Denied');
    include tpl('header');
    show_menu($menus);
?>
<form>
<div class="tt">预约回复</div>
<table cellpadding="2" cellspacing="1" class="tb">
<tr>
<th width="200">车主姓名</th>
<th>预约服务</th>
<th width="300">回复内容</th>
<th width="150">回复时间</th>
<th>操作</th>
</tr>
<?php foreach($answerlist as $v){?>
<tr align="center">
<td><?php echo $v['member']?></td>
<td align="center"><a href="?moduleid=2&action=answerlist_show&file=booking&id=<?php echo $v['id'];?>"><?php echo $v['name']?></a></td>
<td><?php echo dsubstr(strip_tags($v['content']),100,'...');?></td>
<td><?php echo date('Y-m-d H:i:s',$v['t']);?></td>
<td width="100">
<a href="?moduleid=2&action=answerlist_show&file=booking&id=<?php echo $v['id'];?>"><img src="admin/image/view.png" width="16" height="16" title="回复详细资料" alt=""/></a>
</td>
</tr>
<?php }?>
</table>
<form>
<script type="text/javascript">Menuon(1);</script>
<?php include tpl('footer');?>
