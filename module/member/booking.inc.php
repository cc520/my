<?php
    defined('IN_DESTOON') or exit('Access Denied');
    require DT_ROOT.'/module/'.$module.'/common.inc.php';
    require MD_ROOT.'/booking.class.php';
    $M_booking = new booking();
    switch($action){
        case 'add':
            if($post['submit']){
                /*if($post['code'] == $_SESSION['code']){
                    break;
                }*/
                if($M_booking->add($post)){
                    $_SESSION['code'] = $post['code'];
                }else{
                    $errmsg = $M_booking->geterr();
                }
            }
            $code = $M_booking->randomcode();
        break;
        case 'list' : 
            $lists = $M_booking->get_list('booking_cid='.$_userid);
        break;
        case 'delete' : 

        break;
    }
        include template('booking',$module);
?>
