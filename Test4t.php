<?php
$array = array("apple" => 1000, "banana"=> 2000, "meon"=> 3000);
//              key       value  key       value  key     value
// echo $array["apple"]. " ";
// echo $array["banana"]. " ";
// echo $array["meon"]. " ";
foreach($array as $key => $value){
    echo $key, $value;
}
?>