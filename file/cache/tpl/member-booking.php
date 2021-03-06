<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header',$module);?>
<link media="all" rel="stylesheet" href="<?php echo DT_OM_UI;?>css/default/om-default.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/booking.css"/>
<script src="<?php echo DT_OM_UI;?>js/operamasks-ui.min.js" type="text/javascript"></script>
<script src="<?php echo DT_OM_UI;?>js/om.js" type="text/javascript"></script>
<script src="<?php echo DT_OM_UI;?>js/handlebars-v1.3.0.js" type="text/javascript"></script>
<script src="<?php echo DT_STATIC;?>/file/script/admin.js" type="text/javascript"></script>
<script type="text/x-handlebars-template" id="myview">
    {{#list article}}
    <h3>{{title}}</h3><p>{{content}}</p>
    {{/list}}
</script>
<div id="myviewInto"></div>
<div class="menu">
<table cellpadding="0" cellspacing="0">
<tr>
<td class="tab" id="add"><a href="?action=add"><span>预约</span></a></td>
<td class="tab_nav">&nbsp;</td>
<td class="tab" id="list"><a href="?action=list"><span>查看预约</span></a></td>
<td class="tab_nav">&nbsp;</td>
</tr>
</table>
</div>
<?php if($action=='list') { ?>
<?php if(count($lists)) { ?>
<table class="booking_list">
    <tr>
        <th>预约服务</th>
        <th>到点时间</th>
        <th>车主姓名</th>
        <th>车主车牌</th>
        <th>服务要求</th>
        <th>图片</th>
        <th>费用预算</th>
        <th>状态</th>
        <th>操作</th>
    </tr>
    <?php if(is_array($lists)) { foreach($lists as $k => $t) { ?>
  <tr>
      <td><?php echo $t['booking_name'];?></td>
      <td><?php echo date('Y-m-d',$t['booking_time']);?></td>
      <td><?php echo $t['booking_member'];?></td>
      <td><?php echo $t['booking_brand'];?></td>
      <td><?php echo $t['booking_content'];?></td>
      <td><img src="<?php if($t['thumb']) { ?><?php echo $t['thumb'];?><?php } else { ?><?php echo DT_SKIN;?>image/nopic60.gif<?php } ?>
" alt=""/></td>
      <td><?php echo $t['booking_estimation'];?></td>
  </tr>
  <?php } } ?>
</table>
<?php } ?>
<?php } ?>
<?php if($action=='add') { ?>
<?php echo $errmsg;?>
    <form action="booking.php" method="post" id="p_form">
        <input name="action" type="hidden" value="<?php echo $action;?>"/>
        <input name="code" type="hidden" value="<?php echo $code;?>"/>
        <div class="item">
            <label for="">服务项目名称</label>
            <input id="server_name" name="post[booking_name]" type="text"  class="fieldinput"/>
            <label for="" class="error"></label>
            <label for="" class="success"></label>
        </div>
        <div class="item">
            <?php $tags=tag("moduleid=4&condition=groupid in (6,7)&template=null");?>
            <label for="">门店名称</label>
            <select id="" name="post[booking_cid]">
                <?php if(is_array($tags)) { foreach($tags as $t) { ?>
                <option value="<?php echo $t['userid'];?>"><?php echo $t['company'];?></option>
                <?php } } ?>
            </select>
        </div>
        <div class="item">
            <label for="">到点时间</label>
            <input type="text"  readonly="readonly"  size="10" value="" id="booking_time" name="post[booking_time]" class="fieldinput">    
            <label for="" class="error"></label>
            <label for="" class="success"></label>
        </div>
        <div class="item">
            <label for="">车主姓名</label>
            <input id="" name="post[booking_member]" type="text"  class="fieldinput"/>
            <label for="" class="error"></label>
            <label for="" class="success"></label>
        </div>
        <div class="item">
            <label for="">车的品牌</label>
            <input id="" name="post[booking_brand]" type="text" class="fieldinput" />
            <label for="" class="error"></label>
            <label for="" class="success"></label>
        </div>
        <div class="item">
            <label for="">服务要求</label>
            <textarea id="J_booking_content" name="post[booking_content]" rows="10" cols="30" class="item_text fieldinput"></textarea>
            <label for="" id="j_word_num" style="margin-left:10px;width:auto;"></label>
            <label for="" class="error"></label>
            <label for="" class="success"></label>
        </div>
        <div class="item">
            <label for="">费用预算</label>
            <input id="J_estimation" name="post[booking_estimation]" type="text" class="fieldinput"/>
            <label for="" class="error"></label>
            <label for="" class="success"></label>
        </div>
        <div class="item">
            <label for="">上传图片</label>
            <div style="float:left;"><img src="<?php echo $thumb ? $thumb : DT_SKIN.'image/waitpic.gif';?>" width="100" height="100" id="showthumb" title="预览图片" alt="" onclick="if(this.src.indexOf('waitpic.gif') == -1){_preview(Dd('showthumb').src, 1);}else{Dalbum('',<?php echo $moduleid;?>,<?php echo $MOD['thumb_width'];?>,<?php echo $MOD['thumb_height'];?>, Dd('thumb').value, true);}"/>
        <input type="hidden" name="post[thumb]" id="thumb" value="<?php echo $thumb;?>" class="fieldinput"/>
            <div class="tooltip" style="text-align:center;">
<span onclick="Dalbum('',<?php echo $moduleid;?>,<?php echo $MOD['thumb_width'];?>,<?php echo $MOD['thumb_height'];?>, Dd('thumb').value, true);" class="jt"><img src="<?php echo $MODULE['2']['linkurl'];?>image/img_upload.gif" width="12" height="12" title="上传"/></span>&nbsp;&nbsp;<img src="<?php echo $MODULE['2']['linkurl'];?>image/img_select.gif" width="12" height="12" title="选择" onclick="selAlbum('');"/>&nbsp;&nbsp;<span onclick="delAlbum('', 'wait');" class="jt"><img src="<?php echo $MODULE['2']['linkurl'];?>image/img_delete.gif" width="12" height="12" title="删除"/></span>
            </div>
            </div>
        </div>
        <div>
            <input type="submit" name="post[submit]" value="提交" id="sub"/>
        </div>
    </form>
<?php } ?>
<script type="text/javascript">s('booking');m('<?php echo $action;?>');</script>
<?php include template('footer',$module);?>
