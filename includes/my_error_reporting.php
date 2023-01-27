<?php

set_error_handler("my_error_reporting");

function my_error_reporting($no, $msg, $file, $line){
    if($no == E_USER_ERROR){
        echo "Так не должно быть";
        error_log("$msg\n", 3, "error.log");
    }
}

function wrong_function($i1,$i2){
    if($i1 == $i2){
        echo "ok";
    }else{
        trigger_error("у нас проблемма!", E_USER_ERROR);
    }
}

wrong_function(1,2);

