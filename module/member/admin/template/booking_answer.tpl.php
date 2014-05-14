<?php
    defined('IN_DESTOON') or exit('Access Denied');
    include tpl('header');
    show_menu($menus);
?>
<form method="post">
<input type="hidden" name="moduleid" value="<?php echo $moduleid;?>"/>
<input type="hidden" name="file" value="<?php echo $file;?>"/>
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="post[bid]" value="<?php echo $bid;?>"/>
<input type="hidden" name="forward" value="<?php echo $forward;?>"/>
<div class="tt">预约回复</div>
<table cellpadding="2" cellspacing="1" class="tb">
<tr>
    <td class="tl">车主姓名</td>
    <td><?php echo $v['booking_member'];?></td>
</tr>
<tr>
    <td class="tl">预约服务</td>
    <td><?php echo $v['booking_name'];?></td>
</tr>
<tr>
    <td class="tl"><span class="f_red">*</span>回复内容</td>
    <td><textarea name="post[content]" id="content" class="dsn"></textarea>
<?php echo deditor($moduleid, 'content', 'Destoon', '98%', 350);?><span id="dcontent" class="f_red"></span>
    </td>
</tr>
</table>
<div class="sbt"><input type="submit" name="submit" value=" 确 定 " class="btn">&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="reset" value=" 重 置 " class="btn"/></div>
</form>

<script type="text/javascript">Menuon(1);</script>
<?php include tpl('footer');?>
