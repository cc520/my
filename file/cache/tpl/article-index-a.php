<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header',$module);?>
    <div class="slide_bottom_bg"></div>
    <div class="container">
        <div class="sub_p_menu">
<?php $mid = 16;?>
<?php $child = get_maincat(0, $mid, 1);?>
<?php if(is_array($child)) { foreach($child as $i => $c) { ?>
                <div class="g_b" dx=<?php echo $i;?>>
<?php if($i<10 && $c['child']) { ?>
<?php $sub = get_maincat($c['catid'], $mid, 1);?>
                <h3><a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $c['linkurl'];?>" target="_blank"><?php echo set_style($c['catname'], $c['style']);?></a><i></i></h3>
                <ul>
<?php if(is_array($sub)) { foreach($sub as $j => $s) { ?>
                <?php if($j<4) { ?><li class="g_sub_tip"><a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $s['linkurl'];?>" target="_blank"><?php echo set_style($s['catname'], $s['style']);?></a></li><?php } ?>
<?php } } ?>
                </ul>
<?php } ?>
                <div class="blankline"></div>
                <div class="clear"></div>
                <div class="g_b_content">
                    <div class="g_c1">
                        <ul>
                            <li>
                                <h4>车表美容护理</h4>
                                <div class="g_line"></div>
                                <ul class="g_sub_m3">
                                  <li><a href="javascript:void(0);">无水洗车</a></li>
                                  <li><a href="javascript:void(0);">无水洗车</a></li>
                                  <li><a href="javascript:void(0);">无水洗车</a></li>
                                  <li><a href="javascript:void(0);">无水洗车</a></li>
                                  <li><a href="javascript:void(0);">无水洗车</a></li>
                                  <li><a href="javascript:void(0);">无水洗车</a></li>
                                  <li><a href="javascript:void(0);">无水洗车</a></li>
                                  <li><a href="javascript:void(0);">无水洗车</a></li>
                                  <li><a href="javascript:void(0);">无水洗车</a></li>
                                </ul>
                                <div class="clear"></div>
                            </li>
                            <li>
                                <h4>车表美容护理</h4>
                                <div class="g_line"></div>
                                <ul class="g_sub_m3">
                                  <li><a>无水洗车</a></li>
                                  <li><a>无水洗车</a></li>
                                  <li><a>无水洗车</a></li>
                                  <li><a>无水洗车</a></li>
                                  <li><a>无水洗车</a></li>
                                  <li><a>无水洗车</a></li>
                                  <li><a>无水洗车</a></li>
                                  <li><a>无水洗车</a></li>
                                  <li><a>无水洗车</a></li>
                                </ul>
                                <div class="clear"></div>
                            </li>
                            <li>
                                <h4>车表美容护理</h4>
                                <div class="g_line"></div>
                                <ul class="g_sub_m3">
                                  <li><a>无水洗车</a></li>
                                  <li><a>无水洗车</a></li>
                                  <li><a>无水洗车</a></li>
                                  <li><a>无水洗车</a></li>
                                  <li><a>无水洗车</a></li>
                                  <li><a>无水洗车</a></li>
                                  <li><a>无水洗车</a></li>
                                  <li><a>无水洗车</a></li>
                                  <li><a>无水洗车</a></li>
                                </ul>
                                <div class="clear"></div>
                            </li>
                        </ul>
                    </div>
                    <div class="g_c2">
                        <div class="gad1">
                            <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/sp1.png" alt="" /></a><a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/sp2.png" alt="" /></a>
                        </div>
                        <div class="gad2">
                            <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/sp3.png" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
<?php } } ?>
        </div>
        <div class="slide" id="idx_slide">
            <div class="slide_img bd">
                <ul>
                    <li>
                        <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/slide_img.jpg" alt=""/></a>
                    </li>
                    <li>
                        <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/slide_img.jpg" alt=""/></a>
                    </li>
                    <li>
                        <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/slide_img.jpg" alt=""/></a>
                    </li>
                    <li>
                        <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/slide_img.jpg" alt=""/></a>
                    </li>
                </ul>
            </div>
            <div class="slide_icon hd">
                <ul>
                    <li class="g_icon"><a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/slide_small.png" alt="" /></a></li>
                    <li class="g_icon"><a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/slide_small.png" alt="" /></a></li>
                    <li class="g_icon"><a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/slide_small.png" alt="" /></a></li>
                    <li class="g_icon"><a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/slide_small.png" alt="" /></a></li>
                </ul>
            </div>
            <div class="slide_tool">
                <div class="hd">
                    <div class="g_prev g_dir prev"></div>
                </div>
                <div class="slide_tool_contents bd">
                    <ul>
                      <li><a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/slide_c_img.png" alt="" width="159" height="64" /></a></li>
                      <li><a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/slide_c_img.png" alt="" width="159" height="64" /></a></li>
                      <li><a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/slide_c_img.png" alt="" width="159" height="64" /></a></li>
                      <li><a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/slide_c_img.png" alt="" width="159" height="64" /></a></li>
                      <li><a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/slide_c_img.png" alt="" width="159" height="64" /></a></li>
                      <li><a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/slide_c_img.png" alt="" width="159" height="64" /></a></li>
                      <li><a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/slide_c_img.png" alt="" width="159" height="64" /></a></li>
                      <li><a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/slide_c_img.png" alt="" width="159" height="64" /></a></li>
                    </ul>
                </div>
                <div class="hd">
                    <div class="g_next g_dir next"></div>
                </div>
            </div>
        </div>
        <div class="ch_ad_list">
            <ul>
              <li><a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/some.png" alt="" /></a></li>
              <li><a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/some.png" alt="" /></a></li>
              <li><a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/some.png" alt="" /></a></li>
              <li><a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/some.png" alt="" /></a></li>
            </ul>
            <div class="clear"></div>
        </div>
        <div class="icommend">
            <div class="l icommend_left">
                <div class="icommend_tabs hd">
                    <ul>
                        <li class="ic_t1 ic_sel g_first"><a href="<?php echo $MODULE['5']['linkurl'];?>">本期优惠</a><i></i></li>
                        <li class="ic_t2 g_next"><a href="{$MODULE[16][linkurl]">商家推荐</a><i></i></li>
                        <li class="ic_t3"><a href="<?php echo $MODULE['5']['linkurl'];?>">网友好评</a><i></i></li>
                        <li class="ic_t4 g_last"><a href="<?php echo $MODULE['5']['linkurl'];?>">最新发布</a><i></i></li>
                    </ul>
                    <div class="clear"></div>
                </div>
                <div class="ic_c1 icommend_content m_shop_content bd">
                    <ul>
        <?php $tags = tag("moduleid=16&length=36&condition=status=3 and level>0 and thumb<>''&areaid=$cityid&pagesize=".$DT['page_sell']."&order=addtime desc&width=100&height=100&cols=5&target=_blank&template=null")?>
                    <?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
                      <li>
                          <div>
                              <a href="<?php echo $t['linkurl'];?>"<?php if($target) { ?> target="<?php echo $target;?>"<?php } ?>
><img src="<?php echo $t['thumb'];?>"  alt="<?php echo $t['alt'];?>" width="226" height="226" alt="" /></a>
                              <div class="g_sub_c">
                                  <p><?php echo dsubstr($t['title'],20,'...');?></p>
                                  <div class="price">
                                      <div class="l">
                                          <span class="pi1">￥</span><span class="pi2"><?php echo $t['price'];?></span><span class="buynum"><span class="buynum_d"><?php echo $t['sales'];?></span>人已购买</span>
                                      </div>
                                      <div class="l qg_icon">
                                          <a href="<?php echo $t['linkurl'];?>"></a>
                                      </div>
                                  </div>
                              </div>
                              <div class="yh_price">
                                  <label for="">优惠</label>
                                  <span class="dp">200元</span>
                              </div>
                          </div>
                      </li>
                    <?php } } ?>
                      <!--li>
                          <div>
                              <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/p1.png" width="226" height="226" alt="" /></a>
                              <div class="g_sub_c">
                                  <p>汽车坐垫 新款四季通用皮革座垫 科鲁兹迈</p>
                                  <div class="price">
                                      <div class="l">
                                          <span class="pi1">￥</span><span class="pi2">580.00</span><span class="buynum"><span class="buynum_d">231</span>人已购买</span>
                                      </div>
                                      <div class="l qg_icon">
                                          <a href=""></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li>
                          <div>
                              <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/p1.png" width="226" height="226" alt="" /></a>
                              <div class="g_sub_c">
                                  <p>汽车坐垫 新款四季通用皮革座垫 科鲁兹迈</p>
                                  <div class="price">
                                      <div class="l">
                                          <span class="pi1">￥</span><span class="pi2">580.00</span><span class="buynum"><span class="buynum_d">231</span>人已购买</span>
                                      </div>
                                      <div class="l qg_icon">
                                          <a href=""></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li>
                          <div>
                              <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/p1.png" width="226" height="226" alt="" /></a>
                              <div class="g_sub_c">
                                  <p>汽车坐垫 新款四季通用皮革座垫 科鲁兹迈</p>
                                  <div class="price">
                                      <div class="l">
                                          <span class="pi1">￥</span><span class="pi2">580.00</span><span class="buynum"><span class="buynum_d">231</span>人已购买</span>
                                      </div>
                                      <div class="l qg_icon">
                                          <a href=""></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li-->
                    </ul>
                    <ul>
                      <li>
                          <div>
                              <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/p1.png" width="226" height="226" alt="" /></a>
                              <div class="g_sub_c">
                                  <p>汽车坐垫 新款四季通用皮革座垫 科鲁兹迈</p>
                                  <div class="dprice">
                                      <div class="l">
                                          <span class="pi1">￥</span><span class="pi2">580.00</span><span class="buynum"><span class="buynum_d">231</span>人已购买</span>
                                      </div>
                                      <div class="l qg_icon">
                                          <a href=""></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li>
                          <div>
                              <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/p1.png" width="226" height="226" alt="" /></a>
                              <div class="g_sub_c">
                                  <p>汽车坐垫 新款四季通用皮革座垫 科鲁兹迈</p>
                                  <div class="dprice">
                                      <div class="l">
                                          <span class="pi1">￥</span><span class="pi2">580.00</span><span class="buynum"><span class="buynum_d">231</span>人已购买</span>
                                      </div>
                                      <div class="l qg_icon">
                                          <a href=""></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li>
                          <div>
                              <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/p1.png" width="226" height="226" alt="" /></a>
                              <div class="g_sub_c">
                                  <p>汽车坐垫 新款四季通用皮革座垫 科鲁兹迈</p>
                                  <div class="dprice">
                                      <div class="l">
                                          <span class="pi1">￥</span><span class="pi2">580.00</span><span class="buynum"><span class="buynum_d">231</span>人已购买</span>
                                      </div>
                                      <div class="l qg_icon">
                                          <a href=""></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li>
                          <div>
                              <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/p1.png" width="226" height="226" alt="" /></a>
                              <div class="g_sub_c">
                                  <p>汽车坐垫 新款四季通用皮革座垫 科鲁兹迈</p>
                                  <div class="dprice">
                                      <div class="l">
                                          <span class="pi1">￥</span><span class="pi2">580.00</span><span class="buynum"><span class="buynum_d">231</span>人已购买</span>
                                      </div>
                                      <div class="l qg_icon">
                                          <a href=""></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li>
                    </ul>
                </div>
                <!--<div class="ic_c2 icommend_content m_shop_content"></div>-->
            </div>
            <div class="l rc_ad">
                <!--<a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/some1.png" alt="" width="236" height="393" /></a>-->
                <div class="rc_gg">
                    <div class="h3_wrap_wrap">
                        <div class="h3_wrap">
                            <h3><label>公告</label><a class="more"></a></h3>
                        </div>
                    </div>
                    <ul>
                      <li><a href="">汽车车垫 新款四季通用皮革坐垫</a></li>
                      <li><a href="">汽车车垫 新款四季通用皮革坐垫</a></li>
                      <li><a href="">汽车车垫 新款四季通用皮革坐垫</a></li>
                    </ul>
                    <div class="h3_wrap_wrap">
                        <div class="h3_wrap">
                            <h3><label for="">官方微信</label><a class="more"></a></h3>
                        </div>
                    </div>
                    <div class="wx_icon">
                        <a href="" style="margin-left:9px;margin-right:23px;"><img src="<?php echo DT_STATIC;?>pic/css/images/w1.png" alt="" /></a><a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/w2.png" alt="" /></a>
                    </div>
                    <div class="wx_ad">
                        <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/add1.png" alt="" /></a>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
        <div class="g_sec1 qcmr">
            <div class="g_header">
                <h2>汽车美容</h2>
                <div class="mod_list">
                    <ul>
                      <li><a href="">车表美容护理</a></li>
                      <li><a href="">车表美容护理</a></li>
                      <li><a href="">车表美容护理</a></li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
            <div class="g_c1">
                <div>
                    <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/qc1.png" alt="" width="229" height="294"/></a>
                </div>
                <div>
                    <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/qc1.png" alt="" width="229" height="294"/></a>
                </div>
            </div>
            <div class="g_c2">
                <div class="m_shop_content g_ex1">
                    <ul>
                      <li>
                          <div>
                              <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/p1.png" width="205" height="205" alt="" /></a>
                              <div class="g_sub_c">
                                  <p>汽车坐垫 新款四季通用皮革座垫 科鲁兹迈</p>
                                  <div class="dprice">
                                      <div class="l">
                                          <span class="pi1">￥</span><span class="pi2">580.00</span>
                                      </div>
                                      <div class="l qg_icon">
                                          <a href=""></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li>
                          <div>
                              <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/p1.png" width="205" height="205" alt="" /></a>
                              <div class="g_sub_c">
                                  <p>汽车坐垫 新款四季通用皮革座垫 科鲁兹迈</p>
                                  <div class="dprice">
                                      <div class="l">
                                          <span class="pi1">￥</span><span class="pi2">580.00</span>
                                      </div>
                                      <div class="l qg_icon">
                                          <a href=""></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li>
                          <div>
                              <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/p1.png" width="205" height="205" alt="" /></a>
                              <div class="g_sub_c">
                                  <p>汽车坐垫 新款四季通用皮革座垫 科鲁兹迈</p>
                                  <div class="dprice">
                                      <div class="l">
                                          <span class="pi1">￥</span><span class="pi2">580.00</span>
                                      </div>
                                      <div class="l qg_icon">
                                          <a href=""></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li>
                          <div>
                              <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/p1.png" width="205" height="205" alt="" /></a>
                              <div class="g_sub_c">
                                  <p>汽车坐垫 新款四季通用皮革座垫 科鲁兹迈</p>
                                  <div class="dprice">
                                      <div class="l">
                                          <span class="pi1">￥</span><span class="pi2">580.00</span>                                      </div>
                                      <div class="l qg_icon">
                                          <a href=""></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li>
                          <div>
                              <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/p1.png" width="205" height="205" alt="" /></a>
                              <div class="g_sub_c">
                                  <p>汽车坐垫 新款四季通用皮革座垫 科鲁兹迈</p>
                                  <div class="dprice">
                                      <div class="l">
                                          <span class="pi1">￥</span><span class="pi2">580.00</span>
                                      </div>
                                      <div class="l qg_icon">
                                          <a href=""></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li>                      <li>
                          <div>
                              <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/p1.png" width="205" height="205" alt="" /></a>
                              <div class="g_sub_c">
                                  <p>汽车坐垫 新款四季通用皮革座垫 科鲁兹迈</p>
                                  <div class="dprice">
                                      <div class="l">
                                          <span class="pi1">￥</span><span class="pi2">580.00</span>
                                      </div>
                                      <div class="l qg_icon">
                                          <a href=""></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          </li>
                      </ul>
                </div>
                <!--ul>
                  <li>
                      <div class="g_pimg">
                          <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/s12.png" alt="" width="170" height="123"/></a> 
                          <div class="price">￥580.0</div>
                      </div>
                      <p class="g_info"><a href="">汽车坐垫 新款四季通用皮革坐垫</a></p>
                  </li>
                  <li>
                      <div class="g_pimg">
                          <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/s12.png" alt="" width="170" height="123"/></a> 
                          <div class="price">￥580.0</div>
                      </div>
                      <p class="g_info"><a href="">汽车坐垫 新款四季通用皮革坐垫</a></p>
                  </li>
                  <li>
                      <div class="g_pimg">
                          <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/s12.png" alt="" width="170" height="123"/></a> 
                          <div class="price">￥580.0</div>
                      </div>
                      <p class="g_info"><a href="">汽车坐垫 新款四季通用皮革坐垫</a></p>
                  </li>
                  <li>
                      <div class="g_pimg">
                          <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/s12.png" alt="" width="170" height="123"/></a> 
                          <div class="price">￥580.0</div>
                      </div>
                      <p class="g_info"><a href="">汽车坐垫 新款四季通用皮革坐垫</a></p>
                  </li>
                  <li>
                      <div class="g_pimg">
                          <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/s12.png" alt="" width="170" height="123"/></a> 
                          <div class="price">￥580.0</div>
                      </div>
                      <p class="g_info"><a href="">汽车坐垫 新款四季通用皮革坐垫</a></p>
                  </li>
                  <li>
                      <div class="g_pimg">
                          <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/s12.png" alt="" width="170" height="123"/></a> 
                          <div class="price">￥580.0</div>
                      </div>
                      <p class="g_info"><a href="">汽车坐垫 新款四季通用皮革坐垫</a></p>
                  </li>
                </ul-->
            </div>
            <div class="g_c3 switcharea">
                <div class="g_c3c1">
                    <ul class="hd">
                      <li class="g_sel"><a href="">天宁区</a></li>
                      <li><a href="">天宁区</a></li>
                      <li><a href="">天宁区</a></li>
                      <li><a href="">天宁区</a></li>
                      <li><a href="">天宁区</a></li>
                      <li><a href="">天宁区</a></li>
                      <li class="g_last"><a href="">天宁区</a></li>
                    </ul>
                </div>
                <div class="bd">
                    <div class="g_c3c2">
                        <img src="<?php echo DT_STATIC;?>pic/css/images/areap.png" alt="" width="187" height="110"/>
                        <h3>常州市新北区宝马4S服务店</h3>
                        <img src="<?php echo DT_STATIC;?>pic/css/images/areap.png" alt="" width="187" height="110"/>
                        <h3>常州市新北区宝马4S服务店</h3>
                    </div>
                    <div class="g_c3c2">
                        <img src="<?php echo DT_STATIC;?>pic/css/images/areap.png" alt="" width="187" height="110"/>
                        <h3>常州市新北区宝马4S服务店</h3>
                        <img src="<?php echo DT_STATIC;?>pic/css/images/areap.png" alt="" width="187" height="110"/>
                        <h3>常州市新北区宝马4S服务店</h3>
                    </div>                    <div class="g_c3c2">
                        <img src="<?php echo DT_STATIC;?>pic/css/images/areap.png" alt="" width="187" height="110"/>
                        <h3>常州市新北区宝马4S服务店</h3>
                        <img src="<?php echo DT_STATIC;?>pic/css/images/areap.png" alt="" width="187" height="110"/>
                        <h3>常州市新北区宝马4S服务店</h3>
                    </div>                    <div class="g_c3c2">
                        <img src="<?php echo DT_STATIC;?>pic/css/images/areap.png" alt="" width="187" height="110"/>
                        <h3>常州市新北区宝马4S服务店</h3>
                        <img src="<?php echo DT_STATIC;?>pic/css/images/areap.png" alt="" width="187" height="110"/>
                        <h3>常州市新北区宝马4S服务店</h3>
                    </div>                    <div class="g_c3c2">
                        <img src="<?php echo DT_STATIC;?>pic/css/images/areap.png" alt="" width="187" height="110"/>
                        <h3>常州市新北区宝马4S服务店</h3>
                        <img src="<?php echo DT_STATIC;?>pic/css/images/areap.png" alt="" width="187" height="110"/>
                        <h3>常州市新北区宝马4S服务店</h3>
                    </div>                    <div class="g_c3c2">
                        <img src="<?php echo DT_STATIC;?>pic/css/images/areap.png" alt="" width="187" height="110"/>
                        <h3>常州市新北区宝马4S服务店</h3>
                        <img src="<?php echo DT_STATIC;?>pic/css/images/areap.png" alt="" width="187" height="110"/>
                        <h3>常州市新北区宝马4S服务店</h3>
                    </div>                    <div class="g_c3c2">
                        <img src="<?php echo DT_STATIC;?>pic/css/images/areap.png" alt="" width="187" height="110"/>
                        <h3>常州市新北区宝马4S服务店</h3>
                        <img src="<?php echo DT_STATIC;?>pic/css/images/areap.png" alt="" width="187" height="110"/>
                        <h3>常州市新北区宝马4S服务店</h3>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="qchezx">
                    <h3>汽车资讯</h3>
                    <div class="g_content">
                        <div>
                            <div class="g_l">
                                <a href=""><img src="<?php echo DT_STATIC;?>/pic/css/images/areap.png" width="129" height="90" /></a>
                            </div>
                            <div class="g_r">
                                <p>汽车坐垫 新款四季季季通用皮革座垫 通用皮革座垫 通用皮革座垫 新款四季</p>
                                <a href="">查看详情</a>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="g_list">
                            <ul>
                              <li><a href="">新款四季季季通用皮革座垫</a><span class="t">12-26</span></li>
                              <li><a href="">新款四季季季通用皮革座垫</a><span class="t">12-26</span></li>
                              <li><a href="">新款四季季季通用皮革座垫</a><span class="t">12-26</span></li>
                              <li><a href="">新款四季季季通用皮革座垫</a><span class="t">12-26</span></li>
                              <li><a href="">新款四季季季通用皮革座垫</a><span class="t">12-26</span></li>
                              <li><a href="">新款四季季季通用皮革座垫</a><span class="t">12-26</span></li>
                              <li><a href="">新款四季季季通用皮革座垫</a><span class="t">12-26</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="g_brand">
            <ul>
              <li><a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/brand.png" alt="" /></a></li>
              <li><a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/brand.png" alt="" /></a></li>
              <li><a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/brand.png" alt="" /></a></li>
              <li><a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/brand.png" alt="" /></a></li>
              <li><a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/brand.png" alt="" /></a></li>
              <li class="g_last"><a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/brand.png" alt="" /></a></li>
            </ul>
            <div class="clear"></div>
        </div>
        <div class="g_sec2 qcby">
            <div class="g_header">
                <h2>汽车美容</h2>
                <div class="mod_list">
                    <ul>
                      <li><a href="">车表美容护理</a></li>
                      <li><a href="">车表美容护理</a></li>
                      <li><a href="">车表美容护理</a></li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
            <div class="g_c1">
                <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/mo2.png" alt="" width="312" height="184"/></a>
                <div class="mt10">
                    <ul>
                        <li class="l_gm l_gm1">
                            <div class="g_img l">
                                <a href="">
                                    <img src="<?php echo DT_STATIC;?>pic/css/images/mo3.png" alt="" width="156" height="101"/>
                                </a>
                            </div>
                            <div class="g_intro r g_blue"><a href="">科鲁兹迈速腾宝来M6CRV起亚K3K5</a></div>
                            <div class="clear"></div>
                        </li>
                        <li class="l_gm l_gm2">
                            <div class="g_intro l g_green"><a href="">科鲁兹迈速腾宝来M6CRV起亚K3K5</a></div>
                            <div class="g_img r">
                                <a href="">
                                    <img src="<?php echo DT_STATIC;?>pic/css/images/mo3.png" alt="" width="156" height="101"/>
                                </a>
                            </div>
                            <div class="clear"></div>
                        </li>
                    </ul>
                </div>
                <div class="byzx g_sub_header">
                    <h3><label for="">保养资讯</label><a class="more"></a></h3>
                    <div class="g_content">
                        <ul>
                          <li>
                            <a href="">汽车坐垫 汽汽车坐垫汽车坐</a><span class="t">12-24</span>
                          </li>
                          <li>
                            <a href="">汽车坐垫 汽汽车坐垫汽车坐</a><span class="t">12-24</span>
                          </li>
                          <li>
                            <a href="">汽车坐垫 汽汽车坐垫汽车坐</a><span class="t">12-24</span>
                          </li>
                          <li>
                            <a href="">汽车坐垫 汽汽车坐垫汽车坐</a><span class="t">12-24</span>
                          </li>
                          <li>
                            <a href="">汽车坐垫 汽汽车坐垫汽车坐</a><span class="t">12-24</span>
                          </li>
                          <li>
                            <a href="">汽车坐垫 汽汽车坐垫汽车坐</a><span class="t">12-24</span>
                          </li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="g_c2">
                <div class="m_shop_content g_ex1">
                    <ul>
                      <li>
                          <div>
                              <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/p1.png" width="205" height="206" alt="" /></a>
                              <div class="g_sub_c">
                                  <p>汽车坐垫 新款四季通用皮革座垫 科鲁兹迈</p>
                                  <div class="price">
                                      <div class="l">
                                          <span class="pi1">￥</span><span class="pi2">580.00</span>
                                      </div>
                                      <div class="l qg_icon">
                                          <a href=""></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li>
                          <div>
                              <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/p1.png" width="205" height="206" alt="" /></a>
                              <div class="g_sub_c">
                                  <p>汽车坐垫 新款四季通用皮革座垫 科鲁兹迈</p>
                                  <div class="price">
                                      <div class="l">
                                          <span class="pi1">￥</span><span class="pi2">580.00</span>
                                      </div>
                                      <div class="l qg_icon">
                                          <a href=""></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li>
                          <div>
                              <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/p1.png" width="205" height="206" alt="" /></a>
                              <div class="g_sub_c">
                                  <p>汽车坐垫 新款四季通用皮革座垫 科鲁兹迈</p>
                                  <div class="price">
                                      <div class="l">
                                          <span class="pi1">￥</span><span class="pi2">580.00</span>
                                      </div>
                                      <div class="l qg_icon">
                                          <a href=""></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li class="gmr0">
                          <div>
                              <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/p1.png" width="205" height="206" alt="" /></a>
                              <div class="g_sub_c">
                                  <p>汽车坐垫 新款四季通用皮革座垫 科鲁兹迈</p>
                                  <div class="price">
                                      <div class="l">
                                          <span class="pi1">￥</span><span class="pi2">580.00</span>                                      </div>
                                      <div class="l qg_icon">
                                          <a href=""></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li>
                          <div>
                              <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/p1.png" width="205" height="206" alt="" /></a>
                              <div class="g_sub_c">
                                  <p>汽车坐垫 新款四季通用皮革座垫 科鲁兹迈</p>
                                  <div class="price">
                                      <div class="l">
                                          <span class="pi1">￥</span><span class="pi2">580.00</span>
                                      </div>
                                      <div class="l qg_icon">
                                          <a href=""></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li>                      <li>
                          <div>
                              <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/p1.png" width="205" height="206" alt="" /></a>
                              <div class="g_sub_c">
                                  <p>汽车坐垫 新款四季通用皮革座垫 科鲁兹迈</p>
                                  <div class="price">
                                      <div class="l">
                                          <span class="pi1">￥</span><span class="pi2">580.00</span>
                                      </div>
                                      <div class="l qg_icon">
                                          <a href=""></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li>                      <li>
                          <div>
                              <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/p1.png" width="205" height="206" alt="" /></a>
                              <div class="g_sub_c">
                                  <p>汽车坐垫 新款四季通用皮革座垫 科鲁兹迈</p>
                                  <div class="price">
                                      <div class="l">
                                          <span class="pi1">￥</span><span class="pi2">580.00</span>
                                      </div>
                                      <div class="l qg_icon">
                                          <a href=""></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          </li>                      
                          <li class="gmr0">
                          <div>
                              <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/p1.png" width="205" height="206" alt="" /></a>
                              <div class="g_sub_c">
                                  <p>汽车坐垫 新款四季通用皮革座垫 科鲁兹迈</p>
                                  <div class="price">
                                      <div class="l">
                                          <span class="pi1">￥</span><span class="pi2">580.00</span>
                                      </div>
                                      <div class="l qg_icon">
                                          <a href=""></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li>
                    </ul>
                </div>
            </div>
            <div class="g_c3"></div>
            <div class="clear"></div>
        </div>
        <div class="g_sec1 qcmr">
            <div class="g_header">
                <h2>汽车美容</h2>
                <div class="mod_list">
                    <ul>
                      <li><a href="">车表美容护理</a></li>
                      <li><a href="">车表美容护理</a></li>
                      <li><a href="">车表美容护理</a></li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
            <div class="g_c1">
                <div>
                    <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/qc1.png" alt="" width="229" height="294"/></a>
                </div>
                <div>
                    <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/qc1.png" alt="" width="229" height="294"/></a>
                </div>
            </div>
            <div class="g_c2">
                <div class="m_shop_content g_ex1">
                    <ul>
                      <li>
                          <div>
                              <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/p1.png" width="205" height="205" alt="" /></a>
                              <div class="g_sub_c">
                                  <p>汽车坐垫 新款四季通用皮革座垫 科鲁兹迈</p>
                                  <div class="dprice">
                                      <div class="l">
                                          <span class="pi1">￥</span><span class="pi2">580.00</span>
                                      </div>
                                      <div class="l qg_icon">
                                          <a href=""></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li>
                          <div>
                              <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/p1.png" width="205" height="205" alt="" /></a>
                              <div class="g_sub_c">
                                  <p>汽车坐垫 新款四季通用皮革座垫 科鲁兹迈</p>
                                  <div class="dprice">
                                      <div class="l">
                                          <span class="pi1">￥</span><span class="pi2">580.00</span>
                                      </div>
                                      <div class="l qg_icon">
                                          <a href=""></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li>
                          <div>
                              <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/p1.png" width="205" height="205" alt="" /></a>
                              <div class="g_sub_c">
                                  <p>汽车坐垫 新款四季通用皮革座垫 科鲁兹迈</p>
                                  <div class="dprice">
                                      <div class="l">
                                          <span class="pi1">￥</span><span class="pi2">580.00</span>
                                      </div>
                                      <div class="l qg_icon">
                                          <a href=""></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li>
                          <div>
                              <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/p1.png" width="205" height="205" alt="" /></a>
                              <div class="g_sub_c">
                                  <p>汽车坐垫 新款四季通用皮革座垫 科鲁兹迈</p>
                                  <div class="dprice">
                                      <div class="l">
                                          <span class="pi1">￥</span><span class="pi2">580.00</span>                                      </div>
                                      <div class="l qg_icon">
                                          <a href=""></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li>
                          <div>
                              <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/p1.png" width="205" height="205" alt="" /></a>
                              <div class="g_sub_c">
                                  <p>汽车坐垫 新款四季通用皮革座垫 科鲁兹迈</p>
                                  <div class="dprice">
                                      <div class="l">
                                          <span class="pi1">￥</span><span class="pi2">580.00</span>
                                      </div>
                                      <div class="l qg_icon">
                                          <a href=""></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li>                      <li>
                          <div>
                              <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/p1.png" width="205" height="205" alt="" /></a>
                              <div class="g_sub_c">
                                  <p>汽车坐垫 新款四季通用皮革座垫 科鲁兹迈</p>
                                  <div class="dprice">
                                      <div class="l">
                                          <span class="pi1">￥</span><span class="pi2">580.00</span>
                                      </div>
                                      <div class="l qg_icon">
                                          <a href=""></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          </li>
                      </ul>
                </div>
                <!--ul>
                  <li>
                      <div class="g_pimg">
                          <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/s12.png" alt="" width="170" height="123"/></a> 
                          <div class="price">￥580.0</div>
                      </div>
                      <p class="g_info"><a href="">汽车坐垫 新款四季通用皮革坐垫</a></p>
                  </li>
                  <li>
                      <div class="g_pimg">
                          <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/s12.png" alt="" width="170" height="123"/></a> 
                          <div class="price">￥580.0</div>
                      </div>
                      <p class="g_info"><a href="">汽车坐垫 新款四季通用皮革坐垫</a></p>
                  </li>
                  <li>
                      <div class="g_pimg">
                          <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/s12.png" alt="" width="170" height="123"/></a> 
                          <div class="price">￥580.0</div>
                      </div>
                      <p class="g_info"><a href="">汽车坐垫 新款四季通用皮革坐垫</a></p>
                  </li>
                  <li>
                      <div class="g_pimg">
                          <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/s12.png" alt="" width="170" height="123"/></a> 
                          <div class="price">￥580.0</div>
                      </div>
                      <p class="g_info"><a href="">汽车坐垫 新款四季通用皮革坐垫</a></p>
                  </li>
                  <li>
                      <div class="g_pimg">
                          <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/s12.png" alt="" width="170" height="123"/></a> 
                          <div class="price">￥580.0</div>
                      </div>
                      <p class="g_info"><a href="">汽车坐垫 新款四季通用皮革坐垫</a></p>
                  </li>
                  <li>
                      <div class="g_pimg">
                          <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/s12.png" alt="" width="170" height="123"/></a> 
                          <div class="price">￥580.0</div>
                      </div>
                      <p class="g_info"><a href="">汽车坐垫 新款四季通用皮革坐垫</a></p>
                  </li>
                </ul-->
            </div>
            <div class="g_c3 switcharea">
                <div class="g_c3c1">
                    <ul class="hd">
                      <li class="g_sel"><a href="">天宁区</a></li>
                      <li><a href="">天宁区</a></li>
                      <li><a href="">天宁区</a></li>
                      <li><a href="">天宁区</a></li>
                      <li><a href="">天宁区</a></li>
                      <li><a href="">天宁区</a></li>
                      <li class="g_last"><a href="">天宁区</a></li>
                    </ul>
                </div>
                <div class="bd">
                    <div class="g_c3c2">
                        <img src="<?php echo DT_STATIC;?>pic/css/images/areap.png" alt="" width="187" height="110"/>
                        <h3>常州市新北区宝马4S服务店</h3>
                        <img src="<?php echo DT_STATIC;?>pic/css/images/areap.png" alt="" width="187" height="110"/>
                        <h3>常州市新北区宝马4S服务店</h3>
                    </div>
                    <div class="g_c3c2">
                        <img src="<?php echo DT_STATIC;?>pic/css/images/areap.png" alt="" width="187" height="110"/>
                        <h3>常州市新北区宝马4S服务店</h3>
                        <img src="<?php echo DT_STATIC;?>pic/css/images/areap.png" alt="" width="187" height="110"/>
                        <h3>常州市新北区宝马4S服务店</h3>
                    </div>                    <div class="g_c3c2">
                        <img src="<?php echo DT_STATIC;?>pic/css/images/areap.png" alt="" width="187" height="110"/>
                        <h3>常州市新北区宝马4S服务店</h3>
                        <img src="<?php echo DT_STATIC;?>pic/css/images/areap.png" alt="" width="187" height="110"/>
                        <h3>常州市新北区宝马4S服务店</h3>
                    </div>                    <div class="g_c3c2">
                        <img src="<?php echo DT_STATIC;?>pic/css/images/areap.png" alt="" width="187" height="110"/>
                        <h3>常州市新北区宝马4S服务店</h3>
                        <img src="<?php echo DT_STATIC;?>pic/css/images/areap.png" alt="" width="187" height="110"/>
                        <h3>常州市新北区宝马4S服务店</h3>
                    </div>                    <div class="g_c3c2">
                        <img src="<?php echo DT_STATIC;?>pic/css/images/areap.png" alt="" width="187" height="110"/>
                        <h3>常州市新北区宝马4S服务店</h3>
                        <img src="<?php echo DT_STATIC;?>pic/css/images/areap.png" alt="" width="187" height="110"/>
                        <h3>常州市新北区宝马4S服务店</h3>
                    </div>                    <div class="g_c3c2">
                        <img src="<?php echo DT_STATIC;?>pic/css/images/areap.png" alt="" width="187" height="110"/>
                        <h3>常州市新北区宝马4S服务店</h3>
                        <img src="<?php echo DT_STATIC;?>pic/css/images/areap.png" alt="" width="187" height="110"/>
                        <h3>常州市新北区宝马4S服务店</h3>
                    </div>                    <div class="g_c3c2">
                        <img src="<?php echo DT_STATIC;?>pic/css/images/areap.png" alt="" width="187" height="110"/>
                        <h3>常州市新北区宝马4S服务店</h3>
                        <img src="<?php echo DT_STATIC;?>pic/css/images/areap.png" alt="" width="187" height="110"/>
                        <h3>常州市新北区宝马4S服务店</h3>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="qchezx">
                    <h3>汽车资讯</h3>
                    <div class="g_content">
                        <div>
                            <div class="g_l">
                                <a href=""><img src="<?php echo DT_STATIC;?>/pic/css/images/areap.png" width="129" height="90" /></a>
                            </div>
                            <div class="g_r">
                                <p>汽车坐垫 新款四季季季通用皮革座垫 通用皮革座垫 通用皮革座垫 新款四季</p>
                                <a href="">查看详情</a>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="g_list">
                            <ul>
                              <li><a href="">新款四季季季通用皮革座垫</a><span class="t">12-26</span></li>
                              <li><a href="">新款四季季季通用皮革座垫</a><span class="t">12-26</span></li>
                              <li><a href="">新款四季季季通用皮革座垫</a><span class="t">12-26</span></li>
                              <li><a href="">新款四季季季通用皮革座垫</a><span class="t">12-26</span></li>
                              <li><a href="">新款四季季季通用皮革座垫</a><span class="t">12-26</span></li>
                              <li><a href="">新款四季季季通用皮革座垫</a><span class="t">12-26</span></li>
                              <li><a href="">新款四季季季通用皮革座垫</a><span class="t">12-26</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="g_sec2 qcby">
            <div class="g_header">
                <h2>汽车美容</h2>
                <div class="mod_list">
                    <ul>
                      <li><a href="">车表美容护理</a></li>
                      <li><a href="">车表美容护理</a></li>
                      <li><a href="">车表美容护理</a></li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
            <div class="g_c1">
                <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/mo2.png" alt="" width="312" height="184"/></a>
                <div class="mt10">
                    <ul>
                        <li class="l_gm l_gm1">
                            <div class="g_img l">
                                <a href="">
                                    <img src="<?php echo DT_STATIC;?>pic/css/images/mo3.png" alt="" width="156" height="101"/>
                                </a>
                            </div>
                            <div class="g_intro r g_blue"><a href="">科鲁兹迈速腾宝来M6CRV起亚K3K5</a></div>
                            <div class="clear"></div>
                        </li>
                        <li class="l_gm l_gm2">
                            <div class="g_intro l g_green"><a href="">科鲁兹迈速腾宝来M6CRV起亚K3K5</a></div>
                            <div class="g_img r">
                                <a href="">
                                    <img src="<?php echo DT_STATIC;?>pic/css/images/mo3.png" alt="" width="156" height="101"/>
                                </a>
                            </div>
                            <div class="clear"></div>
                        </li>
                    </ul>
                </div>
                <div class="byzx g_sub_header">
                    <h3><label>保养资讯</label><a class="more"></a></h3>
                    <div class="g_content">
                        <ul>
                          <li>
                            <a href="">汽车坐垫 汽汽车坐垫汽车坐</a><span class="t">12-24</span>
                          </li>
                          <li>
                            <a href="">汽车坐垫 汽汽车坐垫汽车坐</a><span class="t">12-24</span>
                          </li>
                          <li>
                            <a href="">汽车坐垫 汽汽车坐垫汽车坐</a><span class="t">12-24</span>
                          </li>
                          <li>
                            <a href="">汽车坐垫 汽汽车坐垫汽车坐</a><span class="t">12-24</span>
                          </li>
                          <li>
                            <a href="">汽车坐垫 汽汽车坐垫汽车坐</a><span class="t">12-24</span>
                          </li>
                          <li>
                            <a href="">汽车坐垫 汽汽车坐垫汽车坐</a><span class="t">12-24</span>
                          </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="g_c2">
                <div class="m_shop_content g_ex1">
                    <ul>
                      <li>
                          <div>
                              <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/p1.png" width="205" height="206" alt="" /></a>
                              <div class="g_sub_c">
                                  <p>汽车坐垫 新款四季通用皮革座垫 科鲁兹迈</p>
                                  <div class="price">
                                      <div class="l">
                                          <span class="pi1">￥</span><span class="pi2">580.00</span>
                                      </div>
                                      <div class="l qg_icon">
                                          <a href=""></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li>
                          <div>
                              <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/p1.png" width="205" height="206" alt="" /></a>
                              <div class="g_sub_c">
                                  <p>汽车坐垫 新款四季通用皮革座垫 科鲁兹迈</p>
                                  <div class="price">
                                      <div class="l">
                                          <span class="pi1">￥</span><span class="pi2">580.00</span>
                                      </div>
                                      <div class="l qg_icon">
                                          <a href=""></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li>
                          <div>
                              <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/p1.png" width="205" height="206" alt="" /></a>
                              <div class="g_sub_c">
                                  <p>汽车坐垫 新款四季通用皮革座垫 科鲁兹迈</p>
                                  <div class="price">
                                      <div class="l">
                                          <span class="pi1">￥</span><span class="pi2">580.00</span>
                                      </div>
                                      <div class="l qg_icon">
                                          <a href=""></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li class="gmr0">
                          <div>
                              <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/p1.png" width="205" height="206" alt="" /></a>
                              <div class="g_sub_c">
                                  <p>汽车坐垫 新款四季通用皮革座垫 科鲁兹迈</p>
                                  <div class="price">
                                      <div class="l">
                                          <span class="pi1">￥</span><span class="pi2">580.00</span>                                      </div>
                                      <div class="l qg_icon">
                                          <a href=""></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li>
                          <div>
                              <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/p1.png" width="205" height="206" alt="" /></a>
                              <div class="g_sub_c">
                                  <p>汽车坐垫 新款四季通用皮革座垫 科鲁兹迈</p>
                                  <div class="price">
                                      <div class="l">
                                          <span class="pi1">￥</span><span class="pi2">580.00</span>
                                      </div>
                                      <div class="l qg_icon">
                                          <a href=""></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li>                      <li>
                          <div>
                              <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/p1.png" width="205" height="206" alt="" /></a>
                              <div class="g_sub_c">
                                  <p>汽车坐垫 新款四季通用皮革座垫 科鲁兹迈</p>
                                  <div class="price">
                                      <div class="l">
                                          <span class="pi1">￥</span><span class="pi2">580.00</span>
                                      </div>
                                      <div class="l qg_icon">
                                          <a href=""></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li>                      <li>
                          <div>
                              <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/p1.png" width="205" height="206" alt="" /></a>
                              <div class="g_sub_c">
                                  <p>汽车坐垫 新款四季通用皮革座垫 科鲁兹迈</p>
                                  <div class="price">
                                      <div class="l">
                                          <span class="pi1">￥</span><span class="pi2">580.00</span>
                                      </div>
                                      <div class="l qg_icon">
                                          <a href=""></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          </li>                      
                          <li class="gmr0">
                          <div>
                              <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/p1.png" width="205" height="206" alt="" /></a>
                              <div class="g_sub_c">
                                  <p>汽车坐垫 新款四季通用皮革座垫 科鲁兹迈</p>
                                  <div class="price">
                                      <div class="l">
                                          <span class="pi1">￥</span><span class="pi2">580.00</span>
                                      </div>
                                      <div class="l qg_icon">
                                          <a href=""></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li>
                    </ul>
                </div>
            </div>
            <div class="g_c3"></div>
            <div class="clear"></div>
        </div>
        <div class="g_sec1 qcmr">
            <div class="g_header">
                <h2>汽车美容</h2>
                <div class="mod_list">
                    <ul>
                      <li><a href="">车表美容护理</a></li>
                      <li><a href="">车表美容护理</a></li>
                      <li><a href="">车表美容护理</a></li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
            <div class="g_c1">
                <div>
                    <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/qc1.png" alt="" width="229" height="294"/></a>
                </div>
                <div>
                    <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/qc1.png" alt="" width="229" height="294"/></a>
                </div>
            </div>
            <div class="g_c2">
                <div class="m_shop_content g_ex1">
                    <ul>
                      <li>
                          <div>
                              <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/p1.png" width="205" height="205" alt="" /></a>
                              <div class="g_sub_c">
                                  <p>汽车坐垫 新款四季通用皮革座垫 科鲁兹迈</p>
                                  <div class="dprice">
                                      <div class="l">
                                          <span class="pi1">￥</span><span class="pi2">580.00</span>
                                      </div>
                                      <div class="l qg_icon">
                                          <a href=""></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li>
                          <div>
                              <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/p1.png" width="205" height="205" alt="" /></a>
                              <div class="g_sub_c">
                                  <p>汽车坐垫 新款四季通用皮革座垫 科鲁兹迈</p>
                                  <div class="dprice">
                                      <div class="l">
                                          <span class="pi1">￥</span><span class="pi2">580.00</span>
                                      </div>
                                      <div class="l qg_icon">
                                          <a href=""></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li>
                          <div>
                              <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/p1.png" width="205" height="205" alt="" /></a>
                              <div class="g_sub_c">
                                  <p>汽车坐垫 新款四季通用皮革座垫 科鲁兹迈</p>
                                  <div class="dprice">
                                      <div class="l">
                                          <span class="pi1">￥</span><span class="pi2">580.00</span>
                                      </div>
                                      <div class="l qg_icon">
                                          <a href=""></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li>
                          <div>
                              <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/p1.png" width="205" height="205" alt="" /></a>
                              <div class="g_sub_c">
                                  <p>汽车坐垫 新款四季通用皮革座垫 科鲁兹迈</p>
                                  <div class="dprice">
                                      <div class="l">
                                          <span class="pi1">￥</span><span class="pi2">580.00</span>                                      </div>
                                      <div class="l qg_icon">
                                          <a href=""></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li>
                          <div>
                              <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/p1.png" width="205" height="205" alt="" /></a>
                              <div class="g_sub_c">
                                  <p>汽车坐垫 新款四季通用皮革座垫 科鲁兹迈</p>
                                  <div class="dprice">
                                      <div class="l">
                                          <span class="pi1">￥</span><span class="pi2">580.00</span>
                                      </div>
                                      <div class="l qg_icon">
                                          <a href=""></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li>                      <li>
                          <div>
                              <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/p1.png" width="205" height="205" alt="" /></a>
                              <div class="g_sub_c">
                                  <p>汽车坐垫 新款四季通用皮革座垫 科鲁兹迈</p>
                                  <div class="dprice">
                                      <div class="l">
                                          <span class="pi1">￥</span><span class="pi2">580.00</span>
                                      </div>
                                      <div class="l qg_icon">
                                          <a href=""></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          </li>
                      </ul>
                </div>
                <!--ul>
                  <li>
                      <div class="g_pimg">
                          <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/s12.png" alt="" width="170" height="123"/></a> 
                          <div class="price">￥580.0</div>
                      </div>
                      <p class="g_info"><a href="">汽车坐垫 新款四季通用皮革坐垫</a></p>
                  </li>
                  <li>
                      <div class="g_pimg">
                          <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/s12.png" alt="" width="170" height="123"/></a> 
                          <div class="price">￥580.0</div>
                      </div>
                      <p class="g_info"><a href="">汽车坐垫 新款四季通用皮革坐垫</a></p>
                  </li>
                  <li>
                      <div class="g_pimg">
                          <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/s12.png" alt="" width="170" height="123"/></a> 
                          <div class="price">￥580.0</div>
                      </div>
                      <p class="g_info"><a href="">汽车坐垫 新款四季通用皮革坐垫</a></p>
                  </li>
                  <li>
                      <div class="g_pimg">
                          <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/s12.png" alt="" width="170" height="123"/></a> 
                          <div class="price">￥580.0</div>
                      </div>
                      <p class="g_info"><a href="">汽车坐垫 新款四季通用皮革坐垫</a></p>
                  </li>
                  <li>
                      <div class="g_pimg">
                          <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/s12.png" alt="" width="170" height="123"/></a> 
                          <div class="price">￥580.0</div>
                      </div>
                      <p class="g_info"><a href="">汽车坐垫 新款四季通用皮革坐垫</a></p>
                  </li>
                  <li>
                      <div class="g_pimg">
                          <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/s12.png" alt="" width="170" height="123"/></a> 
                          <div class="price">￥580.0</div>
                      </div>
                      <p class="g_info"><a href="">汽车坐垫 新款四季通用皮革坐垫</a></p>
                  </li>
                </ul-->
            </div>
            <div class="g_c3 switcharea">
                <div class="g_c3c1">
                    <ul class="hd">
                      <li class="g_sel"><a href="">天宁区</a></li>
                      <li><a href="">天宁区</a></li>
                      <li><a href="">天宁区</a></li>
                      <li><a href="">天宁区</a></li>
                      <li><a href="">天宁区</a></li>
                      <li><a href="">天宁区</a></li>
                      <li class="g_last"><a href="">天宁区</a></li>
                    </ul>
                </div>
                <div class="bd">
                    <div class="g_c3c2">
                        <img src="<?php echo DT_STATIC;?>pic/css/images/areap.png" alt="" width="187" height="110"/>
                        <h3>常州市新北区宝马4S服务店</h3>
                        <img src="<?php echo DT_STATIC;?>pic/css/images/areap.png" alt="" width="187" height="110"/>
                        <h3>常州市新北区宝马4S服务店</h3>
                    </div>
                    <div class="g_c3c2">
                        <img src="<?php echo DT_STATIC;?>pic/css/images/areap.png" alt="" width="187" height="110"/>
                        <h3>常州市新北区宝马4S服务店</h3>
                        <img src="<?php echo DT_STATIC;?>pic/css/images/areap.png" alt="" width="187" height="110"/>
                        <h3>常州市新北区宝马4S服务店</h3>
                    </div>                    <div class="g_c3c2">
                        <img src="<?php echo DT_STATIC;?>pic/css/images/areap.png" alt="" width="187" height="110"/>
                        <h3>常州市新北区宝马4S服务店</h3>
                        <img src="<?php echo DT_STATIC;?>pic/css/images/areap.png" alt="" width="187" height="110"/>
                        <h3>常州市新北区宝马4S服务店</h3>
                    </div>                    <div class="g_c3c2">
                        <img src="<?php echo DT_STATIC;?>pic/css/images/areap.png" alt="" width="187" height="110"/>
                        <h3>常州市新北区宝马4S服务店</h3>
                        <img src="<?php echo DT_STATIC;?>pic/css/images/areap.png" alt="" width="187" height="110"/>
                        <h3>常州市新北区宝马4S服务店</h3>
                    </div>                    <div class="g_c3c2">
                        <img src="<?php echo DT_STATIC;?>pic/css/images/areap.png" alt="" width="187" height="110"/>
                        <h3>常州市新北区宝马4S服务店</h3>
                        <img src="<?php echo DT_STATIC;?>pic/css/images/areap.png" alt="" width="187" height="110"/>
                        <h3>常州市新北区宝马4S服务店</h3>
                    </div>                    <div class="g_c3c2">
                        <img src="<?php echo DT_STATIC;?>pic/css/images/areap.png" alt="" width="187" height="110"/>
                        <h3>常州市新北区宝马4S服务店</h3>
                        <img src="<?php echo DT_STATIC;?>pic/css/images/areap.png" alt="" width="187" height="110"/>
                        <h3>常州市新北区宝马4S服务店</h3>
                    </div>                    <div class="g_c3c2">
                        <img src="<?php echo DT_STATIC;?>pic/css/images/areap.png" alt="" width="187" height="110"/>
                        <h3>常州市新北区宝马4S服务店</h3>
                        <img src="<?php echo DT_STATIC;?>pic/css/images/areap.png" alt="" width="187" height="110"/>
                        <h3>常州市新北区宝马4S服务店</h3>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="qchezx">
                    <h3>汽车资讯</h3>
                    <div class="g_content">
                        <div>
                            <div class="g_l">
                                <a href=""><img src="<?php echo DT_STATIC;?>/pic/css/images/areap.png" width="129" height="90" /></a>
                            </div>
                            <div class="g_r">
                                <p>汽车坐垫 新款四季季季通用皮革座垫 通用皮革座垫 通用皮革座垫 新款四季</p>
                                <a href="">查看详情</a>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="g_list">
                            <ul>
                              <li><a href="">新款四季季季通用皮革座垫</a><span class="t">12-26</span></li>
                              <li><a href="">新款四季季季通用皮革座垫</a><span class="t">12-26</span></li>
                              <li><a href="">新款四季季季通用皮革座垫</a><span class="t">12-26</span></li>
                              <li><a href="">新款四季季季通用皮革座垫</a><span class="t">12-26</span></li>
                              <li><a href="">新款四季季季通用皮革座垫</a><span class="t">12-26</span></li>
                              <li><a href="">新款四季季季通用皮革座垫</a><span class="t">12-26</span></li>
                              <li><a href="">新款四季季季通用皮革座垫</a><span class="t">12-26</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="g_sec3">
            <div class="g_header_wrap">
                <div class="g_header">
                    <h2></h2>
                    <div class="mod_list">
                        <ul>
                          <li><a href="">车表美容护理</a></li>
                          <li><a href="">车表美容护理</a></li>
                          <li><a href="">车表美容护理</a></li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="g_c1">
                <div class="g_r1">
                    <ul>
                      <li class="g_icon g_icon1"><a href="">汽车美容</a></li>
                      <li class="g_icon g_icon2"><a href="">汽车美容</a></li>
                      <li class="g_icon g_icon3"><a href="">汽车美容</a></li>
                      <li class="g_icon g_icon4"><a href="">汽车美容</a></li>
                      <li class="g_icon g_icon5"><a href="">汽车美容</a></li>
                    </ul>
                    <div class="clear"></div>
                </div>
                <div class="g_r2">
                    <ul>
                        <li>
                            <div class="g_img"><a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/p6.png" alt="" width="91" height="72"/></a></div>
                            <div class="g_intro">
                                <h3>常州雍光汽车服务有限公司</h3>
                                <p class="simp_intro">主营：灯具、矿灯研发、加工、销售；货物进口、技术进出口</p>
                                <p class="add">新北区府西花园3-301</p>
                            </div>
                        </li>
                        <li>
                            <div class="g_img"><a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/p6.png" alt="" width="91" height="72"/></a></div>
                            <div class="g_intro">
                                <h3>常州雍光汽车服务有限公司</h3>
                                <p class="simp_intro">主营：灯具、矿灯研发、加工、销售；货物进口、技术进出口</p>
                                <p class="add">新北区府西花园3-301</p>
                            </div>
                        </li>
                        <li>
                            <div class="g_img"><a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/p6.png" alt="" width="91" height="72"/></a></div>
                            <div class="g_intro">
                                <h3>常州雍光汽车服务有限公司</h3>
                                <p class="simp_intro">主营：灯具、矿灯研发、加工、销售；货物进口、技术进出口</p>
                                <p class="add">新北区府西花园3-301</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="g_c2">
                <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/map.png" alt="" width="798" height="429"/></a>
            </div>
            <div class="clear"></div>
        </div>
    </div>
<?php include template('footer',$module);?>
