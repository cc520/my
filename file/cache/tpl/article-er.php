<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header',$module);?>
<div class="er">
    <div class="iad">
        <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/erad1.png" alt="" /></a>
    </div>
    <div class="ibuy">
        <div class="g_c1 l">
            <div class="erheader">
                <h2>��Ҫ��</h2>
            </div>
            <div class="ibuylist">
                <ul>
                    <li>
                        <label for="" class="l gf">������</label>
                        <div class="c1 l fselect">���</div>
                        <div class="c2 l fselect">ȫ����ϵ���ɲ�ѡ��</div>
                        <div class="c3 l fselect">ȫ�����ͣ��ɲ�ѡ��</div>
                    </li>
                    <li>
                        <p>
                        <label for="">Ʒ�ƣ�</label><a href="">�ղ�</a><a href="">�ղ�</a><a href="">�ղ�</a><a href="">�ղ�</a><a href="">�ղ�</a><a href="">�ղ�</a><a href="">�ղ�</a><a href="">�ղ�</a><a href="">ȫ��Ʒ��>></a>
                        </p>
                    </li>
                    <li>
                        <p>
                        <label for="">��ϵ��</label>
                        <a href="">��Խ</a><a href="">��Խ</a><a href="">��Խ</a><a href="">��Խ</a><a href="">��Խ</a><a href="">��Խ</a><a href="">��Խ</a><a href="">��Խ</a><a href="">��Խ</a>
                        </p>
                    </li>
                    <li>
                        <p>
                        <label for="">����</label>
                        <a href="">�д��ͳ�</a><a href="">�д��ͳ�</a><a href="">�д��ͳ�</a><a href="">�д��ͳ�</a><a href="">�д��ͳ�</a><a href="">�д��ͳ�</a>
                        </p>
                    </li>
                    <li>
                        <p>
                        <label for="">�۸�</label>
                        <a href="">3������</a><a href="">3������</a><a href="">3������</a><a href="">3������</a><a href="">3������</a><a href="">�Զ���۸�>></a>
                        </p>
                    </li>
                    <li class="glast">
                        <p class="l">
                        <label for="">���䣺</label>
                        <a href="">һ�꼰����</a><a href="">һ�꼰����</a><a href="">һ�꼰����</a><a href="">�Զ�������>></a>
                        </p>
                        <p class="l">
                        <label for="">��̣�</label>
                        <a href="">һ���Ｐ����</a><a href="">һ���Ｐ����</a><a href="">һ���Ｐ����</a>
                        </p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="g_c2 l">
            <div class="g_inner">
                <div class="gopt">��ϵ</div>
                <div class="gopt">Ʒ��</div>
                <div class="gopt">����</div>
                <div class="gopt">�۸�</div>
                <div class="gbtn">
                    <a href="" class="l">�����ѳ�</a><a href="" class="r">��Դ����</a>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="adlist">
        <div class="clad1 l">
            <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/cl1.png" alt="" /></a>
        </div>
        <div class="clad2 r">
            <a href=""><img src="<?php echo DT_STATIC;?>pic/css//images/cl2.png" alt="" /></a>
        </div>
        <div class="clear"></div>
    </div>
    <div class="glist">
        <div class="g_c1 l">
            <div class="h">
                <h3>
                </h3>
                <a href="" class="more">����>></a>
            </div>
            <div class="g_listcontent">
                <ul>
               <?php $t=array_pad(array(),16,0);?>
               <?php if(is_array($t)) { foreach($t as $k => $v) { ?>
                    <li<?php if(($k+1)%4 == 0) { ?> style="margin-right:0"<?php } ?>
>
                        <div>
                            <div class="g_img">
                                <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/erchpic.png" alt="" /></a>
                            </div>
                            <div class="info">
                                <p class="name">2007�� ����QQ</p>
                                <p class="path">2008������ 4.0����</p>
                                <p class="price">1.70��</p>
                            </div>
                        </div>
                    </li>
                <?php } } ?>
                </ul>
            </div>
        </div>
        <div class="g_c2 r">
            <h3>���ݶ��ֳ�������</h3>
            <ul>
               <?php $t=array_pad(array(),8,0);$count=7;?>
               <?php if(is_array($t)) { foreach($t as $k => $v) { ?>
               <li <?php if($k==$count) { ?>class="glast"<?php } ?>
>
                <div>
                    <div class="g_img l">
                        <a href=""><img src="<?php echo DT_STATIC;?>pic/css/images/erchlogo.png" alt="" /></a>
                    </div>
                    <div class="g_info l">
                        <p class="name">����</p>
                        <p class="phone">40000-168-168</p>
                    </div>
                </div>
                </li>
                <?php } } ?>
            </ul>
        </div>
    </div>
</div>
<?php include template('footer',$module);?>