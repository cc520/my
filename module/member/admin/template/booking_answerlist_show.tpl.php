<?php
    defined('IN_DESTOON') or exit('Access Denied');
    include tpl('header');
    show_menu($menus);
?>
<div class="tt">�ظ���ϸ</div>
<table cellpadding="2" cellspacing="1" class="tb">
<tr>
    <td class="tl">��������</td>
    <td>
        <?php echo $bs['booking_member']?>
    </td>
</tr>
<tr>
    <td class="tl">ԤԼ����</td>
    <td>
        <?php echo $bs['booking_name']?>
    </td>
</tr>
<tr>
    <td class="tl">�ظ�����</td>
    <td>
        <?php echo $v['content']?>
    </td>
</tr>
<tr>
    <td class="tl">�ظ�ʱ��</td>
    <td>
        <?php echo date('Y-m-d H:i:s',$v['t']);?>
    </td>
</tr>
</table>
<script type="text/javascript">Menuon(1);</script>
<?php include tpl('footer');?>
