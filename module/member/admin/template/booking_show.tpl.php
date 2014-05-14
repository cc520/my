<?php
    defined('IN_DESTOON') or exit('Access Denied');
    include tpl('header');
    show_menu($menus);
?>
    <link media="all" rel="stylesheet" href="<?php echo DT_OM_UI;?>/css/default/om-default.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?php echo DT_STATIC.$MODULE[2]['moduledir'];?>/image/booking.css"/>
    <script src="<?php echo DT_OM_UI;?>js/operamasks-ui.min.js" type="text/javascript"></script>
    <script src="<?php echo DT_OM_UI;?>js/om.js" type="text/javascript"></script>
    <script src="<?php echo DT_STATIC;?>file/script/admin.js" type="text/javascript"></script>
<form method="post" id="p_form">
<input type="hidden" name="moduleid" value="<?php echo $moduleid;?>"/>
<input type="hidden" name="file" value="<?php echo $file;?>"/>
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="post[id]" value="<?php echo $bid;?>"/>
<input type="hidden" name="forward" value="<?php echo $forward;?>"/>
<div class="tt"><?php echo $action == 'add' ? '添加' : '修改';?>商品</div>
<table cellpadding="2" cellspacing="1" class="tb">
  <tr>
    <td class="tl">服务项目名称</td>
    <td>
        <?php echo $v['booking_name']?>
    </td>
  </tr>
  <tr>
    <td class="tl">门店名称</td>
    <td>
    <?php echo $v['booking_company'];?>
    </td>
  </tr>
  <tr>
    <td class="tl">到点时间</td>
    <td>
    <?php echo date('Y-m-d',$v['booking_time'])?>
    </td>
  </tr>
  <tr>
    <td class="tl">车主姓名</td>
    <td>
    <?php echo $v['booking_member']?>
    </td>
  </tr>
  <tr>
    <td class="tl">车的品牌</td>
    <td>
    <?php echo $v['booking_brand']?>
    </td>
  </tr>
  <tr>
    <td class="tl">服务要求</td>
    <td>
    <div style="width:200px">
        <?php echo $v['booking_content']?>
    </div>
    </td>
  </tr>
  <tr>
    <td class="tl">费用预算</td>
    <td>
    <?php echo $v['booking_estimation']?>
    </td>
  </tr>
  <tr>
    <td class="tl">上传图片</td>
    <td>
        <div class="item">
        <div style="float:left;"><img src="<?php echo $v['thumb'] ? $v['thumb']: DT_SKIN.'image/waitpic.gif';?>" width="100" height="100" alt="" />
            </div>
        </div>
    </td>
  </tr>
</table>
</form>
<script type="text/javascript">Menuon(0);</script>
<?php include tpl('footer');?>
