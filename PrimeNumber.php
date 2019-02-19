<?php
/**
 * Name: Trinh Nguyen
 * CS174 - Assignment #1
 * IDE: PhpStorm
 * Date: 2019-02-17
 */

tester_function(97);
function prime_function($input){
    $primeArr = array(); //Store prime numbers for testing
    $check = 0; $index = 0;
    echo "Input number: ". $input . "\n";
    echo "Prime Number(s): ";
    if ($input <= 1) {
        echo "None.\n"; return;
    }
    for ($num = 2 ; $num <= $input ; $num++) {
        for ($div = 2; $div < $num; $div++) {
            if ($num % $div == 0){
                $check = 0; //Not a prime number
                break;
            } else $check = 1;
        }
        if ($num == 2) $check = 1;
        if ($check == 1) {
            $primeArr[$index] = $num;
            echo $primeArr[$index] . " ";
            $index++;
        }
    }
    echo "\n";
    return $primeArr;
}
function tester_function($input){
    $array = prime_function($input);
    if ($input <= 1) {
        if (empty($array)) echo "Test Passed\n";
        else echo "Test Failed\n";
    }
    else {
        for ($i = 0; $i < sizeof($array); $i++){
            if ($array[$i] > $input || $array[$i] <= 1) {
                echo "Test Failed\n"; return;
            }
            if($input >= 2 && $array[0] != 2){
                echo "Test Failed\n"; return;
            }
            for ($j = 2; $j<$array[$i]; $j++){
                if ($array[$i]%$j==0){
                    echo "Test Failed\n"; return;
                }
            }
        }
        echo "Test Passed\n";
    }

}
