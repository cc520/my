<?php defined('IN_DESTOON') or exit('Access Denied');?><!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="gbk">
  <title></title>
  <link media="all" rel="stylesheet" href="<?php echo DT_STATIC;?>pic/css/reset.css" type="text/css" />
  <link media="all" rel="stylesheet" href="<?php echo DT_STATIC;?>pic/css/ch.css" type="text/css" />
  <link media="all" rel="stylesheet" href="<?php echo DT_STATIC;?>pic/css/shop.css" type="text/css" />
  <link media="all" rel="stylesheet" href="<?php echo DT_STATIC;?>pic/css/list.css" type="text/css" />
  <?php if(!DT_DEBUG) { ?><script type="text/javascript">window.onerror=function(){return true;}</script><?php } ?>
  <script src="<?php echo DT_STATIC;?>pic/js/jquery.min.js" type="text/javascript"></script>
  <script src="<?php echo DT_STATIC;?>pic/js/jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/config.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/common.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/page.js"></script>
  <script src="<?php echo DT_STATIC;?>pic/js/ch.js" type="text/javascript"></script>
  <?php if($lazy) { ?><script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/jquery.lazyload.js"></script><?php } ?>
</head>
<body>
    <div class="header">
        <div class="h_i">
            <div class="h_tip">
                <label for="">欢迎来到车行天下</label>
            </div>
            <div class="h_oper">
                <ul>
                    <li>
                        <a href="" class="login">登录</a>
                    </li>
                    <li>
                        <a href="" class="reg">注册</a>
                    </li>
                    <li>
                        <a href="" class="f_p">忘记密码</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="menu_wrap header_module">
        <div class="g_inner">
            <div class="search_sec">
                <div class="logo">
                    <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/logo.png" alt="" width="200" height="105"/></a>
                </div>
        <form id="destoon_search" action="<?php echo $MODULE[$searchid]['linkurl'];?>search.php" onsubmit="return Dsearch(1);">
                <div class="search_box">
                    <input type="hidden" name="moduleid" value="<?php echo $searchid;?>" id="destoon_moduleid"/>
                    <input type="hidden" name="spread" value="0" id="destoon_spread"/>
                    <div class="g_s1" onmouseleave="Dh('search_module')">
                        <div class="s_list">
                            <ul>
                              <li id="j_search_m" onmouseenter="$('#search_module').fadeIn('fast')">商品</li>
                              <!--li>
                              </li-->
                            </ul>
                            <input type="text" id="destoon_select" class="search_m" style="display:none;" value="<?php echo $MODULE[$searchid]['name'];?>" readonly onfocus="this.blur();" onclick="$('#search_module').fadeIn('fast');"/>
                            <div id="search_module" class="c_search_module" style="display:none;" onmouseout="Dh('search_module');" onmouseover="Ds('search_module');"><?php if(is_array($MODULE)) { foreach($MODULE as $m) { ?><?php if($m['ismenu'] && !$m['islink']) { ?><a href="javascript:void(0);" onclick="setModule('<?php echo $m['moduleid'];?>','<?php echo $m['name'];?>');" class="n_setmodule"><?php echo $m['name'];?></a><?php } ?>
<?php } } ?></div>
                        </div>
                        <div class="s_keyword">
                            <input name="kw" id="s_key" type="text" class="search_i" value="<?php if($kw) { ?><?php echo $kw;?><?php } else { ?>请输入关键词<?php } ?>
" onfocus="if(this.value=='请输入关键词') this.value='';"<?php if($DT['search_tips']) { ?> onkeyup="STip(this.value);" autocomplete="off"<?php } ?>
 x-webkit-speech speech/>
                        </div>
                    </div>
                    <div class="s_btn">
                        <input type="submit" name="sub" value="" />
                    </div>
                    <div class="clear"></div>
                    <div class="g_s2">
                        <label for="">热搜：</label><a href="">无水汽车</a><a href="">无水汽车</a><a href="">无水汽车</a><a href="">无水汽车</a><a href="">无水汽车</a><a href="">无水汽车</a><a href="">无水汽车</a>
                    </div>
                </div>
            </form>
                <div class="module_chat"></div>
                <div class="mycar">
                    <span class="car_num">5</span>
                </div>
            </div>
            <div class="clear"></div>
            <div class="menu">
                <ul>
                  <li class="t_cls"><span>全部商品分类</span><i></i><em class="barrow"></em></li>
                  <li class="g_m"><a href="<?php echo $MODULE['1']['linkurl'];?>">首页</a></li>
                  <li class="g_m g_yh"><a href="">优惠</a><i class="hot"></i></li>
                  <li class="g_m"><a href="">商城</a></li>
                  <li class="g_m"><a href="">商户</a></li>
                  <li class="g_m"><a href="">保险</a></li>
                  <li class="g_m"><a href="">资讯</a></li>
                  <li class="g_m"><a href="">二手车</a></li>
                  <li class="g_m"><a href="">俱乐部</a></li>
                  <li class="g_m"><a href="">违章查询</a></li>
                  <li class="g_m"><a href="">积分换购</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="menu_bottom_bg"></div>
