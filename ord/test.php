<?php
    function printchr($input){
        if($input<'A' || $input>'Z'){
            echo 'error input';
            return false;
        }
        $t=ord($input)-ord('A');

        for($z=-$t;$z<=$t;$z++){
            //打印空格
            $space=abs($z);
            for($i=0;$i<$space;$i++){
                echo '&nbsp;';
            }
            //打印正字符

            for($j=$t-$space;$j>0;$j--){
                echo chr(ord($input)-$j);
            }
            echo $input; 
            //打印反字符
            for($i=1;$i<=$t-$space;$i++){
                echo chr(ord($input)-$i);
            }
            echo '<br/>';
        }
    }
    printchr('Z');
?>
