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

            for($i=-($t-abs($z));$i<=$t-abs($z);$i++){
                echo chr(ord($input)-abs($i));
            }
            echo '<br/>';
        }
    }
    function rprintchr($input){
        if($input<'A' || $input>'Z'){
            echo 'error input';
            return false;
        }
        $t=ord($input)-ord('A');
        for($i=0;$i<=$t;$i++){
            for($j=0;$j<$t-$i;$j++){
                echo '&nbsp;';
            }

            for($j=-$i;$j<=$i;$j++){
                echo chr(ord('A') + abs($j));
            }
            echo '<br/>';
        }
    }
    printchr('Z');
    rprintchr('Z');
?>
