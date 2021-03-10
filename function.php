<?php
require_once('handle-add-product.php');
//sol 1

// function getNumMatches($array)
// {
// $array=['ahmed','mohamed','ahmed','ahmed'];
// if($array='ahmed'){
//     echo'one';
// }
// return $array;
// }

// $result = getNumMatches('ahmed');
// echo $result;

//=====================================================

//sol 2

function getPriceWithDiscount($currency, $percent){
    $price = ($percent / 100) * $currency;
    if($price <1000){
        echo"Your Discount is $percent % <br>";
    }elseif($price>=1000){
        echo"Your Discount is $percent % <br>";
    }
    return $price;
}
$result = getPriceWithDiscount($currency, 5);
echo $result;   


