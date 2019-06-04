<?php

/**
 * Generate multiplication table of prime numbers
 * 
 * 
 *  
 * @Date 04.06.2019
 * @author   Prativa Sahoo <prativasa86@gmail.com>
 */

function getPrimeNumbers($cnt) {
    $start = 1;
    $arr = array();
    for ($i = 1; $i <= $start; $i++) {
        $c = 0;
        for ($j = 1; $j <= $i; $j++) {
            if ($i % $j == 0) {
                $c++;
            }
        }

        if ($c == 2) {

            $arr[] = $i;
            
        }

        if (count($arr) < $cnt) {
            $start = $start + 1;
        }
    }

    return $arr;
}

/* name :IsPrime
 * paramter $n :integer
 * Description :Used to find a number is prime or not 
 * return type: boolen
 */

function generatePrimeMultiplyTable($limit) {

    $prime_arr = getPrimeNumbers($limit);
    $pad_max_calc=$prime_arr[$limit-1] * $prime_arr[$limit-1];
    $pad_max = strlen((string) $pad_max_calc);
    
    for ($k = 0; $k < $limit; $k++) {
        
        if($k==0)
        {
        echo str_pad($prime_arr[$k], $pad_max+7, " ", STR_PAD_BOTH);
        }
        else {
            echo str_pad($prime_arr[$k], $pad_max+3, " ", STR_PAD_RIGHT);
        }
    }
 echo "\n";
    for ($i = 0; $i < $limit; $i++) {

       $pad_left = strlen((string) $prime_arr[$limit-1]);  
        echo str_pad($prime_arr[$i], $pad_left+2, " |", STR_PAD_RIGHT);
        for ($j = 0; $j < $limit; $j++) {
            
            $mutiply = $prime_arr[$i] * $prime_arr[$j];
            echo str_pad($mutiply, $pad_max+3, " ", STR_PAD_RIGHT);
        }

        if (php_sapi_name() === 'cli') {
            echo "\n";
        } else {
            echo "<br>";
        }
    }
}


generatePrimeMultiplyTable(10);
?>