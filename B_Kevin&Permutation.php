<?php
$T = intval(fgets(STDIN));
for ($t = 0; $t < $T; $t++){
    $line = fgets(STDIN);
    list($n, $k) = explode(" ", trim($line));
    $result = [];
    $cur_c = 1;
    $b = $n;

    for ($i = 1; $i <= $n; $i++){
        if($i % $k){
            $result[] = $b;
            $b--;
        } else{
            $result[] = $cur_c;
            $cur_c++;
        }

    }
    echo implode(" ", $result) . "\n";
}

// input
3
4 2
6 1
8 3
