<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header');?>
<div class="m">
<div class="m_l_1 f_l">
<div class="left_box">
<div class="pos">��ǰλ��: <a href="<?php echo $MODULE['1']['linkurl'];?>">��ҳ</a>
&raquo; <a href="<?php echo $MOD['linkurl'];?>"><?php echo $MOD['name'];?></a>
<?php if($typeid!=99) { ?>&raquo; <a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('index.php?typeid='.$typeid);?>"><?php echo $TYPE[$typeid];?></a><?php } ?>
<?php if($catid) { ?>&raquo; <?php echo cat_pos($CAT, ' &raquo; ');?><?php } ?>
</div>
<div class="category">
<p><img src="<?php echo DT_SKIN;?>image/arrow.gif" width="17" height="12" alt=""/> <strong>����ҵ���</strong></p>
<div>
<table width="100%" cellpadding="3">
<?php if(is_array($maincat)) { foreach($maincat as $k => $v) { ?>
<?php if($k%$MOD['page_subcat']==0) { ?><tr><?php } ?>
<td<?php if($v['catid']==$catid) { ?> class="f_b"<?php } ?>
><a href="<?php echo $MOD['linkurl'];?><?php echo $v['linkurl'];?>"><?php echo set_style($v['catname'],$v['style']);?></a><?php if(!$cityid) { ?> <span class="f_gray px10">(<?php echo $v['item'];?>)</span><?php } ?>
</td>
<?php if($k%$MOD['page_subcat']==($MOD['page_subcat']-1)) { ?></tr><?php } ?>
<?php } } ?>
</table>
</div>
</div>
<div class="b10">&nbsp;</div>
<div class="type">
<a href="<?php echo $MOD['linkurl'];?>" class="<?php if($typeid==99) { ?>type_1<?php } else { ?>type_2<?php } ?>
">ȫ��</a>
<?php if(is_array($TYPE)) { foreach($TYPE as $k => $v) { ?>
<a href="javascript:Go('<?php echo $MOD['linkurl'];?><?php echo rewrite('index.php?typeid='.$k.'&catid='.$catid);?>');" class="<?php if($typeid==$k) { ?>type_1<?php } else { ?>type_2<?php } ?>
"><?php echo $v;?></a>
<?php } } ?>
</div>
<div class="b10 c_b">&nbsp;</div>
<form method="post">
<div class="sell_tip" id="sell_tip" style="display:none;" title="˫���ر�" ondblclick="Dh(this.id);">
<div>
<p>������</p>
<input type="submit" value="�Ա�ѡ��" onclick="this.form.action='<?php echo $MOD['linkurl'];?>compare.php';" class="btn_1" onmouseover="this.className='btn_2'" onmouseout="this.className='btn_1'"/> �� 
<input type="submit" value="����ѯ��" onclick="this.form.action='<?php echo $MOD['linkurl'];?>inquiry.php';" class="btn_1" onmouseover="this.className='btn_2'" onmouseout="this.className='btn_1'"/>
</div>
</div>
<div class="img_tip" id="img_tip" style="display:none;">&nbsp;</div>
<div class="tool">
<table>
<tr height="30">
<td width="25" align="center" title="ȫѡ/��ѡ">&nbsp;<input type="checkbox" onclick="checkall(this.form);"/></td>
<td>
<input type="submit" value="�Ա�ѡ��" onclick="this.form.action='<?php echo $MOD['linkurl'];?>compare.php';" class="btn_1" onmouseover="this.className='btn_2'" onmouseout="this.className='btn_1'"/>&nbsp;
<input type="submit" value="����ѯ��" onclick="this.form.action='<?php echo $MOD['linkurl'];?>inquiry.php';" class="btn_1" onmouseover="this.className='btn_2'" onmouseout="this.className='btn_1'"/>
</td>
<td align="right">
<script type="text/javascript">var sh = '<?php echo $MOD['linkurl'];?>search.php?catid=<?php echo $catid;?><?php if($typeid>-1) { ?>&typeid=<?php echo $typeid;?><?php } ?>
';</script>
<input type="checkbox" onclick="Go(sh+'&price=1');"/>���&nbsp;
<input type="checkbox" onclick="Go(sh+'&thumb=1');"/>ͼƬ&nbsp;
<input type="checkbox" onclick="Go(sh+'&vip=1');"/><?php echo VIP;?>&nbsp;
<select onchange="Go(sh+'&day='+this.value)">
<option value="0">����ʱ��</option>
<option value="1">1����</option>
<option value="3">3����</option>
<option value="7">7����</option>
<option value="15">15����</option>
<option value="30">30����</option>
</select>&nbsp;
<select onchange="Go(sh+'&order='+this.value)">
<option value="0">��ʾ˳��</option>
<option value="2">�۸��ɸߵ���</option>
<option value="3">�۸��ɵ͵���</option>
<option value="4"><?php echo VIP;?>�����ɸߵ���</option>
<option value="5"><?php echo VIP;?>�����ɵ͵���</option>
<option value="6">�������ɸߵ���</option>
<option value="7">�������ɵ͵���</option>
<option value="8">�����ɸߵ���</option>
<option value="9">�����ɵ͵���</option>
</select>&nbsp;
<img src="<?php echo DT_SKIN;?>image/list_txt.gif" width="16" height="16" alt="�����б�" align="absmiddle" class="c_p" onclick="Go(sh+'&list=2');"/>&nbsp;
<img src="<?php echo DT_SKIN;?>image/list_img.gif" width="16" height="16" alt="ͼƬ�б�" align="absmiddle" class="c_p" onclick="Go(sh+'&list=1');"/>&nbsp;
<img src="<?php echo DT_SKIN;?>image/list_mix_on.gif" width="16" height="16" alt="ͼ���б�" align="absmiddle" class="c_p" onclick="Go(sh+'&list=0');"/>&nbsp;
</td>
</tr>
</table>
</div>
<?php if($page == 1) { ?><?php echo ad($moduleid,0,'',6);?><?php } ?>
<?php echo tag("moduleid=$moduleid&condition=status=3$dtype&areaid=$cityid&catid=$catid&pagesize=".$MOD['pagesize']."&page=$page&showpage=1&datetype=5&order=".$MOD['order']."&fields=".$MOD['fields']."&lazy=$lazy&template=list-sell");?>
<div class="tool">
<table>
<tr height="30">
<td width="25" align="center"></td>
<td>
<input type="submit" value="�Ա�ѡ��" onclick="this.form.action='<?php echo $MOD['linkurl'];?>compare.php';" class="btn_1" onmouseover="this.className='btn_2'" onmouseout="this.className='btn_1'"/>&nbsp;
<input type="submit" value="����ѯ��" onclick="this.form.action='<?php echo $MOD['linkurl'];?>inquiry.php';" class="btn_1" onmouseover="this.className='btn_2'" onmouseout="this.className='btn_1'"/>
</td>
</tr>
</table>
</div>
</form>
<br/>
</div>
</div>
<div class="m_n f_l">&nbsp;</div>
<div class="m_r_1 f_l">
<div class="sponsor"><?php echo ad($moduleid,$catid,$kw,7);?></div>
<div class="box_head"><div><strong>������������</strong></div></div>
<div class="box_body">
<div class="rank_list">
<?php echo tag("moduleid=$moduleid&table=keyword&condition=moduleid=$moduleid and status=3 and updatetime>$today_endtime-86400*7&pagesize=10&order=week_search desc&key=week_search&template=list-search_rank");?>
</div>
</div>
<div class="b10">&nbsp;</div>
<div class="box_head"><div><strong>���������</strong></div></div>
<div class="box_body">
<table width="100%" cellpadding="3">
<?php $mainarea = get_mainarea(0)?>
<?php if(is_array($mainarea)) { foreach($mainarea as $k => $v) { ?>
<?php if($k%2==0) { ?><tr><?php } ?>
<td><a href="<?php echo $MOD['linkurl'];?>search.php?areaid=<?php echo $v['areaid'];?>&typeid=<?php echo $typeid;?>" rel="nofollow"><?php echo $v['areaname'];?></a></td>
<?php if($k%2==1) { ?></tr><?php } ?>
<?php } } ?>
</table>
</div>
</div>
</div>
<?php include template('footer');?>