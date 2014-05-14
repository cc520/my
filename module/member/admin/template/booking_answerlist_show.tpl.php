<?php
    defined('IN_DESTOON') or exit('Access Denied');
    include tpl('header');
    show_menu($menus);
?>
<div class="tt">回复详细</div>
<table cellpadding="2" cellspacing="1" class="tb">
<tr>
    <td class="tl">车主姓名</td>
    <td>
        <?php echo $bs['booking_member']?>
    </td>
</tr>
<tr>
    <td class="tl">预约服务</td>
    <td>
        <?php echo $bs['booking_name']?>
    </td>
</tr>
<tr>
    <td class="tl">回复内容</td>
    <td>
        <?php echo $v['content']?>
    </td>
</tr>
<tr>
    <td class="tl">回复时间</td>
    <td>
        <?php echo date('Y-m-d H:i:s',$v['t']);?>
    </td>
</tr>
</table>
<script type="text/javascript">Menuon(1);</script>
<?php include tpl('footer');?>
