<?php
    class Data{
        //private $basesql = 'SELECT tm.itemid as bh,item.itemid as id,VAR_SAMP(quanity) AS samp FROM tm GROUP BY tm.itemid';
        private static $basesql='SELECT rank.itemid as id FROM rank WHERE ot=';
        private static $countbasesql='SELECT COUNT(id) FROM item WHERE id>=0 AND sex=';
        private $limit=100;
        private static $NOW=null;
        private static $NOW_TIME=null;
        private static $NOW_HIS=null;
        public static $favlist=null;
        public static $marklist=null;
        public static $itemlist=null;
        public static $freezelist=null;
        public static $groupitem=null;
        public static $capturekey=null;
        public static $revitemlist=null;
        public static $SPLIT='^|^';
        function __construct(){
            self::$NOW_TIME=time();
            self::$NOW=date('Y-m-d',self::$NOW_TIME);
            self::$NOW=add_date(self::$NOW_TIME,0,0,0,'Y-m-d');
            self::$NOW_TIME=ymd_to_int(self::$NOW);
            self::$NOW_HIS=date('Y-m-d H:i:s',self::$NOW_TIME);

            self::$favlist=self::getfavlist();
            self::$marklist=self::getmarklist();
            self::$itemlist=self::getitemlist();
            self::$revitemlist=self::getrevitemlist();
            self::$freezelist=self::getfreezelist();
            print_r(self::$freezelist);
            self::$groupitem=self::getgroupitem();
            self::$capturekey=self::getcapturekey();
        }
        public static function isInGroup($itemid,$uid){ 
            return isset(self::$groupitem[$itemid]);
        }
        public static function getcapturekey($uid=1){
            $sql='SELECT id,keyword FROM `key` WHERE isban=0';
            return self::cache($sql,'id');
        }
        public static function getgroupitem($uid=1){ 
            $sql='SELECT DISTINCT(itemid) FROM t_group_item';
            return self::cache($sql,'itemid');
        }
        public static function getfreezelist($uid=1){
            $sql='SELECT itemid FROM userfreezeitem WHERE uid='.$uid;
            return self::cache($sql,'itemid') OR array();
        }
        private static function cache($sql,$key){
            $query=db_query($sql);
            $arr=array();
            while($row=db_fetch_array($query)){
                $arr[$row[$key]]=$row;
            }
            return $arr;
        }
        public static function getfavlist($uid=1){
            $sql='SELECT itemid FROM fav WHERE uid='.$uid;
            return self::cache($sql,'itemid');
        }
        public static function getmarklist($uid=1,$limit=10){
            $sql='SELECT itemid,content FROM mark WHERE uid='.$uid.' limit '.$limit;
            return self::cache($sql,'itemid');
        }
        public static function getitemlist(){
            $sql='SELECT id,itemid,shopname,title,sellerid,deny FROM item';
            return self::cache($sql,'id');
        }
        public static function getrevitemlist(){
            $sql='SELECT id,itemid,shopname,title,sellerid,deny FROM item';
            return self::cache($sql,'itemid');
        }
        public static function getData($pn=0,$where='',$limit=100){
             $ot = db_result(db_query('SELECT MAX(ot) FROM rank'),0);
             $sql = self::$basesql.'\''.$ot.'\'';
             $sql.=' '.$where;
             if($pn>=0){
                $snum = $pn * $limit;
                //$sql.= ' AND rank>='.$snum.' AND rank <='.$enum;
                $sql.= ' AND rank>='.$snum.' ORDER BY rank limit '.$limit;
             }
             return Data::getPageItem($sql);
        }
        public static function api_getPageItem($sql){
            return json_encode(self::getPageItem($sql));
        }
        /* 渚涘簲棣栭〉鍒楄〃鏁版嵁鏍煎紡 浼犲叆鎵ц鐨凷QL璇彞 浼犲叆闇€瑕佺殑鍒楄〃id 鍗冲彲 */ 
        public static function getPageItem($sql){
             $ids = self::getQueryAll($sql,'id');
             $arr=self::getItem($ids);
             $arr_new=array();
             foreach($arr as $val){
                 $arr_new[]=$val;
             }
             $days = array();
             $now = self::$NOW_TIME;
             for($i=0;$i<7;$i++){
                 array_unshift($days,add_date($now,-$i));
             }
             $fields = array('op'=>'鎿嶄綔','shop'=>'搴楅摵','itemid'=>'缂栧彿','price'=>'鍘熶环','day30'=>'30澶╅攢閲?,'sevendays'=>$days);
             $data = array('fields'=>$fields,'data'=>$arr_new);
             //print_r(json_encode($data));
             return $data;
        }
        public static function belowRankAndDeny($maxrank,$limit){
            /*
            $sql='SELECT itemid FROM rank GROUP BY itemid HAVING COUNT(id)>='.$limit;
            $query=db_query($sql);
            $denyitems=array();
            while($row=db_fetch_array($query)){
                $itemid=$row['itemid'];
                $sql='SELECT COUNT(CASE WHEN rank<'.$maxrank.' THEN rank END) as num FROM (SELECT rank FROM rank r WHERE r.itemid='.$itemid.' ORDER BY ot DESC LIMIT 0,'.$limit.') AS t';
                $num=db_result(db_query($sql),0);
                if($num==0){
                    $denyitems[]=$itemid;
                }
            }
             */
            $range=add_date(time(),-$limit,0,0,'Y-m-d');
            $sql='SELECT itemid FROM rank GROUP BY itemid HAVING COUNT(id)>='.$limit;
            $ids=self::getQueryAll($sql,'itemid');
            $sql='SELECT itemid FROM rank WHERE rank<'.$maxrank.' AND itemid IN ('.join(',',$ids).') AND ot>="'.$range.'" GROUP BY itemid';
            $nodenyids=self::getQueryAll($sql,'itemid');
            $diff=array_diff($ids,$nodenyids);
            $sql='UPDATE item SET deny="1" WHERE id IN('.join(array_keys($diff),',').')';
            db_query($sql);
        }
        public static function getQueryAll($sql,$key){
            $query=db_query($sql);
            $arr=array();
            while($row=db_fetch_array($query)){
                $arr[]=$row[$key];
            }
            return $arr;
        }
        public static function getSortList($sql,$s=0,$limit=100,$sort_type){
            $lt='LIMIT '.$s*$limit.','.$limit;
            switch($sort_type){
                case 0:
                $orderby=' ORDER BY score DESC ';
                break;
                case 1:
                   $orderby=' ORDER BY sellerid ';
                break;
                case 2:
                    $orderby=' ORDER BY price ';
                break;
                case 3:
                    $orderby=' ORDER BY quanity DESC ';
                break;
            }
            $sql.=$orderby.$lt;
            return Data::getPageItem($sql);
        }
        public static function getSortBySellerId($pn,$limit=100){
            $sql='SELECT id FROM item ORDER BY sellerid LIMIT '.$pn*$limit.','.$limit;
            return self::getPageItem($sql);
        }
        public static function getSortByPrice($pn,$limit=100){
            $sql='SELECT itemid AS id FROM tm WHERE ot="'.date('Y-m-d',time()).'" ORDER BY price LIMIT '.$pn*$limit.','.$limit;
            return self::getPageItem($sql);
        }
        public static function getSortByQuanity($pn,$limit=100){
            $sql='SELECT itemid AS id FROM tm WHERE ot="'.date('Y-m-d',time()).'" ORDER BY quanity DESC LIMIT '.$pn*$limit.','.$limit;
            return self::getPageItem($sql);
        }
        public static function getItem($ids){
            $ids=is_array($ids)?$ids:array($ids);
            $data=array();
            foreach($ids as $id){
                $item=array();
                $item['id']=$id;
                $item['isfav']=self::isfav($id,1);
                $item['isMark'] =self::isMark($id,1);
                $item['isbelow']=self::isbelow($id);
                $item['isfreeze']=self::isfreeze($id,1);
                $item['isInGroup']=self::isInGroup($id,1);
                $iteminfo=self::getBaseInfo($id);
                $item['title']=$iteminfo['title'];
                $item['shopname']=$iteminfo['shopname'];
                $item['sellerid']=$iteminfo['sellerid'];
                $item['itemid']=$iteminfo['itemid'];
                $data[$id]=$item;
            }
            return self::getDetailData($ids,$data);
        }
        private static function isbelow($id){
            return self::$itemlist[$id]['deny'] == '1';
        }
        private static function isbuy($range){
            $count=count($range);
            return @$range[$count-1]['prom']!==@$range[$count-2]['prom'];
        }
        public static function isUpdateItem($itemid,$now){
            return db_fetch_array(db_query('SELECT itemid FROM tm WHERE itemid='.$itemid.' AND ot="'.$now.'"'));
        }
        public static function isMark($itemid,$uid){
            return isset(self::$marklist[$itemid]);
        }
        public static function isfreeze($id,$uid){
            return !isset(self::$freezelist[$id]);
        }
        public static function getRank($itemid,$range=7){
            $sql = 'SELECT rank,ot FROM rank WHERE itemid='.$itemid.' GROUP BY itemid,ot ORDER BY ot DESC limit '.$range;
            $query = db_query($sql);
            $arr = array();
            while($row=db_fetch_array($query)){
                $arr[]=array('rank'=>intval($row['rank']),'time'=>substr($row['ot'],5));
            }
            return array_reverse($arr);
        }
        public static function rank($sex,$order='samp DESC'){
            //$sql = 'SELECT itemid as id,VAR_SAMP(quanity) AS samp,quanity,price FROM tm GROUP BY itemid '.' order by '.$order;
            $today=self::$NOW;
            $sql = 'SELECT item.id AS id,quanity,price FROM tm,item WHERE item.id=tm.itemid AND sex="'.$sex.'" AND ot="'.$today.'"';
            $space=7;
            $sqlstr=array();
            $query=db_query($sql);
            db_query('begin;');
            $now = self::$NOW_HIS;
            $samps=self::getSampDays(add_date(self::$NOW_TIME,-$space+1,0,0,'Y-m-d'));
            while($row=db_fetch_array($query)){
                $itemid=$row['id'];
                $sqlstr[]='('.$itemid.',"'.$now.'","'.$now.'",'.(isset($samps[$itemid])?$samps[$itemid]:0).','.$row['price'].','.$row['quanity'].',"'.$sex.'")';
                //$sql='INSERT INTO rank(itemid,t,ot,score,price,volume)VALUES('.$itemid.',"'.$now.'","'.$now.'",'.$samp.','.$row['price'].','.$row['quanity'].')';
            }
            $sql = 'INSERT INTO rank(itemid,t,ot,score,price,volume,sex)VALUES'.join($sqlstr,',');
            if(db_query($sql)){
                db_query('commit;');
                $sql='SELECT itemid FROM rank WHERE ot="'.$today.'" AND sex="'.$sex.'" ORDER BY score DESC;';
                $rank = 1;
                $query=db_query($sql);
                db_query('BEGIN');
                if($query){
                    while($row=db_fetch_array($query)){
                        $itemid=$row['itemid'];
                        $sql='UPDATE rank SET rank='.$rank.' WHERE ot="'.$today.'" AND itemid='.$itemid;
                        db_query($sql);
                        $rank++;
                    };

                db_query('COMMIT');
                    //db_query('UPDATE rank SET sex=(SELECT sex FROM item WHERE item.id=rank.itemid)');
                    return 1; 
                }else{
                    return 0; 
                }
            }else{
                return 0;
            }
        }
        public static function getSampDays($space){
            $sql='SELECT VAR_SAMP(quanity) as score,itemid as id FROM tm WHERE ot >="'.$space.'" AND itemid>=0 GROUP BY itemid';
            //echo $sql;
            $query=db_query($sql);
            $arr=array();
            while($row=db_fetch_array($query)){
                $arr[$row['id']]=$row['score'];
            };
            return $arr;
            //$sql='SELECT VAR_SAMP(quanity) FROM tm WHERE itemid='.$itemid.' ORDER BY ot DESC LIMIT '.$space;
        }
        public static function isfav($itemid,$uid){
            return isset(self::$favlist[$itemid]);
        }
        public static function getBaseInfo($itemid){
            return self::$itemlist[$itemid];
        }
        public static function getRangeData($ids,$data,$range=7){
            //$sql = 'SELECT itemid,quanity,diff,stime FROM tm WHERE (SELECT COUNT(*) FROM tm AS t2 WHERE t2.itemid = tm.itemid AND t2.stime > tm.stime) < '.$range.' ORDER BY itemid';
            $now = self::$NOW_TIME;
            $pretime=add_date($now,-$range+1,0,0,'Y-m-d');
            $sql = 'SELECT prom,itemid,diff,ot AS time FROM tm WHERE itemid IN ('.join(',',$ids).') AND ot>="'.$pretime.'"';
            $list = recent_seven_days($now,$range);
            $query = db_query($sql);

            while($row=db_fetch_array($query)){
                $id=$row['itemid'];
                $data[$id]['range_org']=isset($data[$id]['range_org'])?$data[$id]['range_org']:array();
                $data[$id]['range_org'][]=$row;
            }
            foreach($data as $key=>$d){
                $m=array();
                $arr = array();
                $d['range_org']=isset($d['range_org'])?$d['range_org']:array();
                foreach($d['range_org'] as $row){
                    $m_day= substr($row['time'],5);
                    if(isset($list[$m_day])){
                        $m[$list[$m_day]]=1;
                        $row['diff']=$row['diff'] =='' ? '鏃? : $row['diff'];
                        $arr[$list[$m_day]] = $row;
                    }
                }
                for($i=0;$i<$range;$i+=1){
                    if(!isset($m[$i]) || $m[$i]==''){
                        $arr[$i] = array('quanity'=>'鏃?,'diff'=>'鏃?,'time'=>'鏃?,'price'=>'鏃?);
                    }
                }
                ksort($arr);
                $arr=array_reverse($arr);
                $data[$key]['range']=$arr;
                //$data[$key]['isbuy']=self::isbuy($data[$key]['range_org']);
                unset($data[$key]['range_org']);
            }
            return $data;
        }
        public function getTNum($sex){
            $sql = self::$countbasesql.'"'.$sex.'"';
            $count=db_result(db_query($sql),0);
            $tnum = ceil($count/$this->limit);
            return $tnum;
        }
        public static function getItemData($id){
            $sql='SELECT quanity,ot AS time,price,prom FROM tm WHERE itemid='.$id.' GROUP BY time';
            $query = db_query($sql);
            $arr = array();
            while($row=db_fetch_array($query)){
                $prom=$row['prom'];
                if($prom){
                    $ps=explode('^|^',$prom);
                    $i=0;
                    $j=0;
                    while($i<count($ps)){
                        if(1-$j){
                            $ps[$i]=$ps[$i].':';
                        }else{
                            $ps[$i]='锟?.$ps[$i].';&#160;&#160;&#160;&#160;';
                        }
                        $j=1-$j;
                        $i++;
                    }
                    $prom=join('',$ps);
                }


                $arr[]=array('time'=>substr($row['time'],5),'quanity'=>intval($row['quanity']),'price'=>$row['price'],'prom'=>$prom);
            }
            $sql='SELECT itemid,title,shopname,sellerid FROM item WHERE id='.$id;
            $row=db_fetch_array(db_query($sql));
            $data = array('itemid'=>$row['itemid'],'title'=>$row['title'],'shopname'=>$row['shopname'],'sellerid'=>$row['sellerid'],'data'=>$arr,'rank'=>Data::getRank($id));
            return $data;
            //print_r(json_encode($data));
        }
        public static function getDetailData($ids,$data){
            $sql = 'SELECT itemid,score,price,volume FROM rank WHERE itemid IN ('.join(',',$ids).')';
            $query = db_query($sql);
            while($row = db_fetch_array($query)){
                $id=$row['itemid'];
                $data[$id]['score']=$row['score'];
                $data[$id]['price']=$row['price'];
                $data[$id]['volume']=$row['volume'];
            }
            $data=self::getRangeData($ids,$data);
            return $data;
        }
        public static function dealItem(){
            $sql='SELECT itemid FROM tm GROUP BY itemid ORDER BY itemid;';
            $arr=array();
            $query=db_query($sql);
            $sql='INSERT INTO item(itemid)VALUES';
            $str=array();
            $i=1;
            while($row=db_fetch_array($query)){
                $str[]='('.$row['itemid'].')';
                $tsql='UPDATE tm SET itemid='.$i.' WHERE itemid='.$row['itemid'];
                $i++;
                //db_query($tsql);
            }
            //db_query($sql.join($str,','));
        }
        public static function getRemoteItem($s){
            $itemlist=self::$itemlist;
            $arr=array();
            foreach($itemlist as $val){
                $arr[]=$val['itemid'];
            }
            $len=count($arr);
            $per=20;
            $link='http://api.taobao.com/apitools/getResult.htm?format=json&method=taobao.items.list.get&restId=2&api_soure=0&app_key=%E7%B3%BB%E7%BB%9F%E5%88%86%E9%85%8D&app_secret=%E7%B3%BB%E7%BB%9F%E5%88%86%E9%85%8D&sip_http_method=GET&codeType=PHP&fields=title,num_iid&num_iids=';

            $items=array_slice($arr,$s*$per,$per);
            $itemstr=join(',',$items);
            $tmplink=$link.$itemstr;
            echo $tmplink.'<br/>';
            $contents=@file_get_contents($tmplink);
            $cs=explode('^|^',$contents);
            $json=str_replace('&quot;','"',$cs[1]);
            file_put_contents('1.txt','^|^'.$json,FILE_APPEND);
            if($s<ceil($len/$per))
                echo '<script type="text/javascript">location.href="/sdk/getItemTitle.php?s='.($s+1).'&t='.time().'"</script>';
        }
        public static function getItemInfo($ids){
            $link='http://api.taobao.com/apitools/getResult.htm?format=json&method=taobao.items.list.get&restId=2&api_soure=0&app_key=%E7%B3%BB%E7%BB%9F%E5%88%86%E9%85%8D&app_secret=%E7%B3%BB%E7%BB%9F%E5%88%86%E9%85%8D&sip_http_method=GET&codeType=PHP&fields=title,num_iid&num_iids=';
            $tmplink=$link.$ids;
            $contents=@file_get_contents($tmplink);

            $cs=explode('^|^',$contents);
            $json=str_replace('&quot;','"',$cs[1]);
            
            file_put_contents('1.txt','^|^'.$json,FILE_APPEND);
        }
        public static function dealItemInfo(){
            $filename='1.txt';
            $contents=file_get_contents($filename);
            $cs=explode('^|^',$contents);
            $cs=array_slice(1);
            $fields=array('title'=>'瀹濊礉鍚嶇О','cid'=>'瀹濊礉绫荤洰','seller_cids'=>'搴楅摵绫荤洰','stuff_status'=>'鏂版棫绋嬪害','location.city'=>'鐪?,'location.state'=>'鍩庡競','price'=>'瀹濊礉浠锋牸','num'=>'瀹濊礉鏁伴噺','valid_thru'=>'鏈夋晥鏈?,'freight_payer'=>'杩愯垂鎵挎媴','post_fee'=>'骞抽偖','ems_fee'=>'EMS','express_fee'=>'蹇€?,'has_invoice'=>'鍙戠エ','has_warranty'=>'淇濅慨','approve_status'=>'鏀惧叆浠撳簱','has_showcase'=>'姗辩獥鎺ㄨ崘','list_time'=>'寮€濮嬫椂闂?,'desc'=>'瀹濊礉鎻忚堪','props'=>'瀹濊礉灞炴€?,'postage_id'=>'閭垂妯＄増ID','has_discount'=>'浼氬憳鎵撴姌','modified'=>'淇敼鏃堕棿','auction_point'=>'杩旂偣姣斾緥','video'=>'瑙嗛','skus.prices:::skus.properties'=>'閿€鍞睘鎬х粍鍚?,'input_pids','鐢ㄦ埛杈撳叆ID涓?,'input_str'=>'鐢ㄦ埛杈撳叆鍚?鍊煎','property_alias'=>'閿€鍞睘鎬у埆鍚?,'num_iid'=>'鏁板瓧ID');
            $arr=array();
            foreach($cs as $val){
                
            }
        }
        public static function getItemPage($id){
            $url='http://detail.tmall.com/item.htm?id='.$id;
            $snoopy = new snoopy();
            $snoopy->fetch($url);
            $contents=$snoopy->results;
            @file_put_contents('download/'.$id.'.html',$contents);
        }
        public static function dealRomoteItem(){
            $filecontent=file_get_contents('1.txt');
            $pieces=explode(self::$SPLIT,$filecontent);
            foreach($pieces as $p){
                $json=json_decode($p,true);
                $items=$json['items_list_get_response']['items']['item'];
                for($i=0,$len=count($items);$i<$len;$i++){
                    $item=$items[$i];
                    $sql='UPDATE item SET o_title="'.$item['title'].'",title="'.$item['title'].'" WHERE itemid='.$item['num_iid'];
                    db_query($sql);
                }
            }
        }
        public static function updatediff(){
            $sql = "SELECT id,itemid,quanity,ot AS t,diff FROM tm WHERE ot>='".(add_date(time(),-3,0,0,'Y-m-d'))."' GROUP BY itemid,t ORDER BY itemid,t";
            $query=db_query($sql);
            $arr = array();
            while($row=db_fetch_array($query)){
                if(isset($arr[$row['itemid']])){
                    array_push($arr[$row['itemid']],$row);
                }
                else{
                    $arr[$row['itemid']] = array($row);
                }
            }
            db_query('begin;');
            foreach($arr as $val){
                $len = count($val);
                for($i=1;$i<$len;$i++){
                    $diff = $val[$i]['quanity'] - $val[$i-1]['quanity'];
                    $id = $val[$i]['id'];
                    if($val[$i]['diff']==''){
                        $sql = 'Update tm SET diff='.$diff.' WHERE id='.$id;
                        db_query($sql);
                    }
                }
            }
            db_query('commit;');
        }
    }
?>
