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
    printchr('Z');
?>
