<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header',$module);?>
<div class="modbx">
    <div class="gtop">
        <div class="ginner">
            <div class="g_c1 l"></div>
            <div class="g_c2 l">
                <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/bxp2.png" alt="" /></a>
            </div>
            <div class="g_c3 l">
                <h3>购买记录</h3>
                <div class="gc">
                    <div class="gch"><span>用户</span><i></i><span>保险公司</span></div>
                    <ul>
                        <?php $arr=array_fill(0,6,0);?>
                        <?php if(is_array($arr)) { foreach($arr as $k => $v) { ?>
                        <li <?php if(($k+1)%2) { ?>class="odd"<?php } else { ?>class="even"<?php } ?>
>
                        <div>
                            <span class="email">2***@163.com</span>
                            <span class="bxc">人保车险</span>
                        </div>
                        </li>
                        <?php } } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="hzgx">
        <div class="hzheader">
            <h2>合作公司</h2>
        </div>
        <div class="gc">
            <div class="item"><div class="item_inner"><div class="clogo"><a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/clogo.png" height="40" alt="" /></a></div>
                    <div class="cactive">
                        <div class="intro">
                        <label for="">本期活动</label><span>送100-500元现金</span>
                        </div>
                        <div class="gimg">
                            <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/bxcp2.png" alt="" /></a>
                        </div>
                    </div>
            </div></div>
            <div class="item"><div class="item_inner"><div class="clogo"><a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/clogo.png" height="40" alt="" /></a></div>
                    <div class="cactive">
                        <div class="intro">
                        <label for="">本期活动</label><span>送100-500元现金</span>
                        </div>
                        <div class="gimg">
                            <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/bxcp2.png" alt="" /></a>
                        </div>
                    </div>
            </div></div>            <div class="item"><div class="item_inner"><div class="clogo"><a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/clogo.png" height="40" alt="" /></a></div>
                    <div class="cactive">
                        <div class="intro">
                        <label for="">本期活动</label><span>送100-500元现金</span>
                        </div>
                        <div class="gimg">
                            <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/bxcp2.png" alt="" /></a>
                        </div>
                    </div>
            </div></div>            <div class="item"><div class="item_inner"><div class="clogo"><a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/clogo.png" height="40" alt="" /></a></div>
                    <div class="cactive">
                        <div class="intro">
                        <label for="">本期活动</label><span>送100-500元现金</span>
                        </div>
                        <div class="gimg">
                            <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/bxcp2.png" alt="" /></a>
                        </div>
                    </div>
            </div></div>            <div class="item"><div class="item_inner"><div class="clogo"><a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/clogo.png" height="40" alt="" /></a></div>
                    <div class="cactive">
                        <div class="intro">
                        <label for="">本期活动</label><span>送100-500元现金</span>
                        </div>
                        <div class="gimg">
                            <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/bxcp2.png" alt="" /></a>
                        </div>
                    </div>
            </div></div>
            <div class="item last"><div class="item_inner"><div class="clogo"><a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/clogo.png" height="40" alt="" /></a></div>
                    <div class="cactive">
                        <div class="intro">
                        <label for="">本期活动</label><span>送100-500元现金</span>
                        </div>
                        <div class="gimg">
                            <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/bxcp2.png" alt="" /></a>
                        </div>
                    </div>
            </div></div>
        </div>
    </div>
    <div class="gmbz">
        <div class="gmheader">
            <img src="<?php echo DT_STATIC;?>pic/css/images/buyh.png" alt="" />
        </div>
        <div class="gminfo">
            <img src="<?php echo DT_STATIC;?>pic/css/images/buyinfo.png" alt="" />
        </div>
    </div>
</div>
<?php include template('footer',$module);?>
