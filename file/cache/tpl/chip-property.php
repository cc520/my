<?php defined('IN_DESTOON') or exit('Access Denied');?><?php if($options && $values) { ?>
<div class="b10"></div>
<div class="property">
<ul>
<?php if(is_array($options)) { foreach($options as $o) { ?>
<li title="<?php echo nl2br($values[$o['oid']]);?>"><?php echo $o['name'];?>£º<?php if(isset($values[$o['oid']])) { ?><?php echo nl2br($values[$o['oid']]);?><?php } ?>
</li>
<?php } } ?>
</ul>
<div class="c_b"></div>
</div>
<div class="b10"></div>
<?php } ?>
