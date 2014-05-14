<?php
    defined('IN_DESTOON') or exit('Access Denied');
    class booking{
        var $itemid;
        var $db;
        var $table;
        var $fields;
        var $errmsg;
        function booking(){
            global $db,$_userid;
            $this->table = $db->pre.'booking';
            $this->answer_table = $db->pre.'booking_answer';
            $this->db = &$db;
            $this->userid=$_userid;
            $this->pre = $db->pre;
            $this->fields = array('userid','booking_name','booking_member','booking_cid','booking_time','booking_brand','booking_content','booking_estimation','thumb');
            $this->answerfield= array('bid','content','t');
        }
        function pass($post){
            if(!is_array($post)) return false;
            if(!isset($post['booking_name'])) return $this->_(lang('booking->pass_booking_name'));
            if(!isset($post['booking_member'])) return $this->_(lang('booking->pass_booking_member'));
            if(!isset($post['booking_time'])) return $this->_(lang('booking->pass_booking_time'));
            else{
                if(!preg_match('/\d{4}-\d{2}-\d{2}/',$post['booking_time'])){
                    return $this->_(lang('booking->pass_booking_time_valid'));
                }
            }
            if(!isset($post['booking_estimation'])) return $this->_(lang('booking->pass_booking_estimation'));
            else{
                if(!preg_match('/^\d+(.\d+)?$/',$post['booking_estimation'])){
                    return $this->_(lang('booking->pass_booking_estimation_valid'));
                }
            }
            return true;
        }
        function randomcode(){
            $code = rand(0,100000);
            return $code;
        }
        function set($post){
            $post['userid'] = $this->userid;
            $post['booking_time'] =strtotime($post['booking_time']);
            $post['booking_cid'] = intval($post['booking_cid']);
            return $post;
        }
        function get_one($bid){
            $sql = "SELECT * FROM {$this->table} WHERE id=$bid";
            return $this->db->get_one($sql);
        }
        function get_list($contdition='1=1'){
            $sql = "SELECT * FROM {$this->table} WHERE $contdition";
            $result = $this->db->query($sql);
            $lists = array();
            while($r = $this->db->fetch_array($result)){
                $lists[]=$r;
            }
            return $lists;
        }
        function get_answer_list(){
            $sql = "SELECT * FROM {$this->answer_table}";
            $result = $this->db->query($sql);
            $lists = array();
            while($r = $this->db->fetch_array($result)){
                $lists[]=$r;
            }
            return $lists;
        }
        function get_answer_content($id){
            $sql = "SELECT * FROM {$this->answer_table} WHERE id=$id";
            return $this->db->get_one($sql);
        }
        function del($bookid){
            $sql="DELETE FROM {$this->table} WHERE id=$bookid";
            $this->db->query($sql);
        }
        function get_company_info(){
            $sql="SELECT * FROM {$this->pre}company";
            $result = $this->db->query($sql);
            $lists = array();
            while($r = $this->db->fetch_array($result)){
                $lists[$r['userid']]=$r;
            }
            return $lists;
        }
        function get_company(){
            $sql="SELECT `userid`,`company` FROM {$this->pre}company";
            $result = $this->db->query($sql);
            $lists = array();
            while($r = $this->db->fetch_array($result)){
                $lists[$r['userid']]=$r['company'];
            }
            return $lists;
        }
        function edit($post){
            $post['booking_time'] =strtotime($post['booking_time']);
            $id = $post['id'];
            $vsql=array();
            foreach($post as $k=>$v) {
                if(in_array($k, $this->fields)) { $vsql[]=$k.'='."'{$v}'"; }
            }
            $qsql = "UPDATE {$this->table} SET ".implode(',',$vsql)." WHERE id={$id}";
            return $this->db->query($qsql);
        }
        function answer($post){
            $post['t'] = time();
            $sqlk = $sqlv = '';
            foreach($post as $k=>$v) {
                if(in_array($k, $this->answerfield)) { $sqlk .= ','.$k; $sqlv .= ",'$v'"; }
            }   
            $sqlk = substr($sqlk, 1);
            $sqlv = substr($sqlv, 1);
            $qsql = "INSERT INTO {$this->answer_table} ($sqlk) VALUES ($sqlv)";
            return $this->db->query($qsql);
        }
        function add($post){
            if(!$this->pass($post)){
                /*return $this->errmsg;*/
                return;
            }
            $post = $this->set($post);
            if(!$post['userid']) return;
            $sqlk = $sqlv = '';
            foreach($post as $k=>$v) {
                if(in_array($k, $this->fields)) { $sqlk .= ','.$k; $sqlv .= ",'$v'"; }
            }
            $sqlk = substr($sqlk, 1);
            $sqlv = substr($sqlv, 1);
            $qsql = "INSERT INTO {$this->table} ($sqlk) VALUES ($sqlv)";
		    return $this->db->query($qsql);
        }
        function _($e) {
            $this->errmsg = $e;
            return false;
        }
        function geterr(){
            return $this->errmsg;
        }
    }
?>
