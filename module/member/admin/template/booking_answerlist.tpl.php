<?php
    defined('IN_DESTOON') or exit('Access Denied');
    include tpl('header');
    show_menu($menus);
?>
<form>
<div class="tt">ԤԼ�ظ�</div>
<table cellpadding="2" cellspacing="1" class="tb">
<tr>
<th width="200">��������</th>
<th>ԤԼ����</th>
<th width="300">�ظ�����</th>
<th width="150">�ظ�ʱ��</th>
<th>����</th>
</tr>
<?php foreach($answerlist as $v){?>
<tr align="center">
<td><?php echo $v['member']?></td>
<td align="center"><a href="?moduleid=2&action=answerlist_show&file=booking&id=<?php echo $v['id'];?>"><?php echo $v['name']?></a></td>
<td><?php echo dsubstr(strip_tags($v['content']),100,'...');?></td>
<td><?php echo date('Y-m-d H:i:s',$v['t']);?></td>
<td width="100">
<a href="?moduleid=2&action=answerlist_show&file=booking&id=<?php echo $v['id'];?>"><img src="admin/image/view.png" width="16" height="16" title="�ظ���ϸ����" alt=""/></a>
</td>
</tr>
<?php }?>
</table>
<form>
<script type="text/javascript">Menuon(1);</script>
<?php include tpl('footer');?>
