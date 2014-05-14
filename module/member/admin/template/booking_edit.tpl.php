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
    <td class="tl"><span class="f_red">*</span>服务项目名称</td>
    <td>
        <div class="item">
        <input id="server_name" name="post[booking_name]" type="text" value="<?php echo $v['booking_name']?>" class="fieldinput"/>
            <label for="" class="error"></label>
            <label for="" class="success"></label>
        </div>
    </td>
  </tr>
  <tr>
    <td class="tl"><span class="f_red">*</span>门店名称</td>
    <td>
    <?php echo $csfield;?>
    </td>
  </tr>
  <tr>
    <td class="tl"><span class="f_red">*</span>到点时间</td>
    <td>
        <div class="item">
        <input type="text"  readonly="readonly"  size="10" id="booking_time" name="post[booking_time]" value="<?php echo date('Y-m-d',$v['booking_time'])?>" class="fieldinput">    
            <label for="" class="error"></label>
            <label for="" class="success"></label>
        </div>
    </td>
  </tr>
  <tr>
    <td class="tl"><span class="f_red">*</span>车主姓名</td>
    <td>
        <div class="item">
        <input id="" name="post[booking_member]" value="<?php echo $v['booking_member']?>" type="text"  class="fieldinput"/>
            <label for="" class="error"></label>
            <label for="" class="success"></label>
        </div>
    </td>
  </tr>
  <tr>
    <td class="tl"><span class="f_red">*</span>车的品牌</td>
    <td>
        <div class="item">
        <input id="" name="post[booking_brand]" value="<?php echo $v['booking_brand']?>" type="text" class="fieldinput" />
            <label for="" class="error"></label>
            <label for="" class="success"></label>
        </div>
    </td>
  </tr>
  <tr>
    <td class="tl"><span class="f_red">*</span>服务要求</td>
    <td>
        <div class="item">
        <textarea id="J_booking_content" name="post[booking_content]" rows="10" cols="30" class="item_text fieldinput" value="<?php echo $v['booking_content']?>"><?php echo $v['booking_content']?></textarea>
            <label for="" id="j_word_num" style="margin-left:10px;width:auto;"></label>
            <label for="" class="error"></label>
            <label for="" class="success"></label>
        </div>
    </td>
  </tr>
  <tr>
    <td class="tl"><span class="f_red">*</span>费用预算</td>
    <td>
        <div class="item">
        <input id="J_estimation" value="<?php echo $v['booking_estimation']?>" name="post[booking_estimation]" type="text" class="fieldinput"/>
            <label for="" class="error"></label>
            <label for="" class="success"></label>
        </div>
    </td>
  </tr>
  <tr>
    <td class="tl"><span class="f_red">*</span>上传图片</td>
    <td>
        <div class="item">
            <div style="float:left;"><img src="<?php echo $v['thumb'] ? $v['thumb']: DT_SKIN.'image/waitpic.gif';?>" width="100" height="100" id="showthumb" title="预览图片" alt="" onclick="if(this.src.indexOf('waitpic.gif') == -1){_preview(Dd('showthumb').src, 1);}else{Dalbum('',<?php echo $moduleid;?>,<?php echo $MOD['thumb_width'];?>,<?php echo $MOD['thumb_height'];?>, Dd('thumb').value, true);}"/>
	        <input type="hidden" name="post[thumb]" id="thumb" value="<?php echo $v['thumb'];?>" class="fieldinput"/>
            <div class="tooltip" style="text-align:center;">
	<span onclick="Dalbum('',<?php echo $moduleid;?>,<?php echo $MOD['thumb_width'];?>,<?php echo $MOD['thumb_height'];?>, Dd('thumb').value, true);" class="jt"><img src="<?php echo $MODULE[2]['linkurl'];?>image/img_upload.gif" width="12" height="12" title="上传"/></span>&nbsp;&nbsp;<img src="<?php echo $MODULE[2]['linkurl'];?>image/img_select.gif" width="12" height="12" title="选择" onclick="selAlbum('');"/>&nbsp;&nbsp;<span onclick="delAlbum('', 'wait');" class="jt"><img src="<?php echo $MODULE[2]['linkurl'];?>image/img_delete.gif" width="12" height="12" title="删除"/></span>
            </div>
        </div>
    </td>
  </tr>
</table>

<div class="sbt"><input type="submit" name="submit" value=" 确 定 " class="btn"/>&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="reset" value=" 重 置 " class="btn"/></div>
</form>
<script type="text/javascript">Menuon(0);</script>
