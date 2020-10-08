<?php
    $a = [5,4,3,3,0,7,8,4,55,23,11,1,2];

    $arrayCount = count($a);
    for($i=0;$i<count($a);$i++){
        for($j=0;$j<$arrayCount-1;$j++){
            if($a[$j]>$a[$j+1]){
                $toreplace = $a[$j];
                $a[$j] = $a[$j+1];
                $a[$j+1] = $toreplace;
            }
        }
        $arrayCount--;
    }

    print_r($a);
?>