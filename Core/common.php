<?php
function c($var){
//    如果是布尔值
    if(is_bool($var)){
        var_dump($var);
    }else{
        echo "<pre>";
        print_r($var);
        echo "</pre>";
    }
}