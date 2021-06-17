<?php
$x = 1;
// if($x>0):
//     return 'hello';
//     else: return 'nope';
// endif; // !! not working...

// if($x>2){
//      echo 'hello'.PHP_EOL;
// }elseif($x==1){
//     echo 'bye'.PHP_EOL;;
// }else{
//     echo 'world'.PHP_EOL;
// } //?? working

// if($x<2):
//     echo 'world'.PHP_EOL;
// endif; // ** working

    if($x<2):
        echo 'world'.PHP_EOL;
        elseif($x !=''):
            echo 'don/"t'.PHP_EOL;
        else:
            echo 'start'.PHP_EOL;       
    endif; 

    echo 'end'.PHP_EOL;

