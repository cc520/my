<?php defined('IN_DESTOON') or exit('Access Denied');?><div class="m">
<div class="b10">&nbsp;</div>
<div class="foot_page">
<a href="<?php echo $MODULE['1']['linkurl'];?>">��վ��ҳ</a>
<?php echo tag("table=webpage&condition=item=1&areaid=$cityid&order=listorder desc,itemid desc&template=list-webpage");?>
| <a href="<?php echo $MODULE['1']['linkurl'];?>sitemap/">��վ��ͼ</a>
| <a href="<?php echo $EXT['spread_url'];?>">�����ƹ�</a>
<?php if($EXT['ad_enable']) { ?> | <a href="<?php echo $EXT['ad_url'];?>">������</a><?php } ?>
<?php if($EXT['gift_enable']) { ?> | <a href="<?php echo $EXT['gift_url'];?>">���ֻ���</a><?php } ?>
<?php if($EXT['guestbook_enable']) { ?> | <a href="<?php echo $EXT['guestbook_url'];?>">��վ����</a><?php } ?>
<?php if($EXT['feed_enable']) { ?> | <a href="<?php echo $EXT['feed_url'];?>">RSS����</a><?php } ?>
<?php if($DT['icpno']) { ?> | <a href="http://www.miibeian.gov.cn" target="_blank" rel="nofollow"><?php echo $DT['icpno'];?></a><?php } ?>
</div>
</div>
<div class="m">
<div class="foot">
<div id="copyright"><?php echo $DT['copyright'];?></div>
<?php if(DT_DEBUG) { ?><div class="px11"><?php echo debug();?></div><?php } ?>
<div id="powered"><a href="http://www.destoon.com/" target="_blank"><img src="<?php echo DT_STATIC;?>file/image/powered.gif" width="136" height="10" alt="Powered by DESTOON"/></a></div>
</div>
</div>
<div id="back2top" class="back2top"><a href="javascript:void(0);" title="���ض���">&nbsp;</a></div>
<script type="text/javascript">
<?php if($destoon_task) { ?>
show_task('<?php echo $destoon_task;?>');
<?php } else { ?>
<?php include DT_ROOT.'/api/task.inc.php';?>
<?php } ?>
<?php if($lazy) { ?>$(function(){$("img").lazyload();});<?php } ?>
$('#back2top').click(function() {
$("html, body").animate({scrollTop:0}, 200);
});
</script>
</body>
</html>