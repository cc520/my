<?php
    defined('IN_DESTOON') or exit('Access Denied');
    require MD_ROOT.'/booking.class.php';
    $do = new booking;
    $menus = array(
        array('预约列表', '?moduleid='.$moduleid.'&file=booking'),
        array('预约回复', '?moduleid='.$moduleid.'&file=booking&action=answerlist'),
    );
    switch($action){
        case 'edit' : 
            if($submit){
                if($do->edit($post)){
                    dmsg('修改成功',$forward);
                }else{
                    dmsg('修改失败',$forward);
                }
            }else{
                $bid = intval($bid);
                $v= $do->get_one($bid);
                $cs = $do->get_company();
                $csfield = dselect($cs,'post[booking_cid]','',$v['booking_cid']);
                include tpl('booking_edit',$module);
            }
        break;
        case 'show':
            $bid = intval($bid);
            $v= $do->get_one($bid);
            $cs = $do->get_company();
            $v['booking_company'] = $cs[$v['booking_cid']];
            include tpl('booking_show',$module);
        break;
        case 'answer' :
            if($submit){
                if($do->answer($post)){
                    dmsg('回复成功',$forward);
                }else{
                    dmsg('回复失败',$forward);
                }
            }else{
                $v = $do->get_one($bid);
                include tpl('booking_answer',$module);
            }
        break;
        case 'answerlist':
            $answerlist = $do->get_answer_list();
            foreach($answerlist as $key=>$v){
                $bid = $v['bid'];
                $bs = $do->get_one($bid);
                $answerlist[$key]['member'] = $bs['booking_member'];
                $answerlist[$key]['name'] = $bs['booking_name'];
            }
        include tpl('booking_answerlist',$module);
        break;
        case 'answerlist_show':
            $v= $do->get_answer_content($id);
            $bid = $v['bid'];
            $bs = $do->get_one($bid);
            include tpl('booking_answerlist_show',$module);
        break;
        case 'delete' : 
            $bid = intval($bid);
            $do->del($bid);
            dmsg('删除成功',$forward);
        break;
        default : 
        $bookinglist = $do->get_list();
        $cs = $do->get_company_info();

	    include tpl('booking', $module);
        break;
    }
?>
