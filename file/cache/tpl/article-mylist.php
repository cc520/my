<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header_module',$module);?>
<div class="navlist">
    <div class="navlist_inner">
        <a href="">��ҳ</a>&gt;
        <a href="">��������</a>&gt;
        <a href="">�³�����</a>
    </div>
</div>
<div class="chlist">
    <!--�Ƽ�-->
    <div class="g_c1 l">
        <div class="menulist">
        <div class="sub_p_menu">
<?php $mid = 16;?>
<?php $child = get_maincat(0, $mid, 1);$c_count=count($child)-1;?>
<?php if(is_array($child)) { foreach($child as $i => $c) { ?>
                <div class="g_c_b <?php if($i==$c_count) { ?>g_last<?php } ?>
" dx=<?php echo $i;?>>
<?php if($i<10 && $c['child']) { ?>
<?php $sub = get_maincat($c['catid'], $mid, 1);?>
                <h3><a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $c['linkurl'];?>" target="_blank"><?php echo set_style($c['catname'], $c['style']);?></a><i></i></h3>
                <ul>
<?php if(is_array($sub)) { foreach($sub as $j => $s) { ?>
                <?php if($j<4) { ?><li class="g_sub_tip"><a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $s['linkurl'];?>" target="_blank"><?php echo set_style($s['catname'], $s['style']);?></a></li><?php } ?>
<?php } } ?>
                </ul>
<?php } ?>
                <div class="clear"></div>
            </div>
<?php } } ?>
            </div>
        </div>
        <div class="weekpro">
            <h2>��������</h2>
            <ul>
               <?php $t=array_pad(array(),5,0);?>
               <?php if(is_array($t)) { foreach($t as $k => $v) { ?>
              <li>
                  <div>
                      <div class="g_img l"><a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/wpic.png" width="66" height="66" alt="" /></a></div>
                      <div class="g_intro l">
                          <a href="">�������� �¿��ļ�ͨ��Ƥ������</a>
                          <span class="l_price">��580.0</span>
                      </div>
                  </div>
              </li>
              <?php } } ?>
            </ul>
            <div class="clear"></div>
        </div>
    </div> 
   <div class="g_c2 l">
       <div class="g_class_recommand">
           <h3>�����Ƽ�</h3>
           <ul>
               <?php $t=array_pad(array(),3,0);?>
               <?php if(is_array($t)) { foreach($t as $k => $v) { ?>
               <li <?php if(($k+1)%3 == 0) { ?> style="margin-right:0"<?php } ?>
>
                     <div>
                         <div class="g_img l"><a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/rp1.png" width="148" height="148" alt="" /></a></div>
                        <div class="g_detail l">
                            <p>�������� �¿��ļ�ͨ��Ƥ�������������� �¿��ļ�ͨ��Ƥ������</p>
                            <div class="g_price"><span>��</span>580.0</div>
                            <div class="g_buy">231���ѹ���</div>
                            <div class="g_qg"><a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/qg.png" alt="" /></a></div>
                        </div>
                     </div>
                 </li>
               <?php } } ?>
           </ul>
           <div class="clear"></div>
       </div>
       <div class="flsearch">
           <div>
               <div class="l g_label">
               <a href="" class="g_sel">&nbsp;������&nbsp;</a>
               </div>
               <div class="l g_cls">
               <?php $t=array_pad(array(),10,0);?>
               <?php if(is_array($t)) { foreach($t as $k => $v) { ?>
                    <a href="">&nbsp;��ˮϴ��&nbsp;</a>
               <?php } } ?>
               </div>
               <div class="clear"></div>
           </div>
           <div class="cls_area mt8">
               <div class="l g_label">
                <a href="" class="g_sel">&nbsp;������&nbsp;</a>
               </div>
               <div class="l g_cls">
                <a href="">&nbsp;������&nbsp;</a>
               </div>
               <div class="clear"></div>
           </div>
       </div>
       <div class="consearch"></div>
       <div class="s_result g_ex1 m_shop_content">
           <ul>
               <?php $t=array_pad(array(),20,0);?>
               <?php if(is_array($t)) { foreach($t as $k => $v) { ?>
               <li <?php if(!(($k+1)%4)) { ?>class="g_last"<?php } ?>
>
                  <div>
                      <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/p1.png" width="226" height="226" alt="" /></a>
                      <div class="g_sub_c">
                          <p>�������� �¿��ļ�ͨ��Ƥ������ ��³����</p>
                          <div class="dprice">
                              <div class="l">
                                  <span class="pi1">��</span><span class="pi2">580.00</span><span class="buynum"><span class="buynum_d">231</span>���ѹ���</span>
                              </div>
                              <div class="l qg_icon">
                                  <a href=""></a>
                              </div>
                          </div>
                      </div>
                  </div>
               </li>
               <?php } } ?>
           </ul>
       </div>
   </div>
</div>
<?php include template('footer',$module);?>