<?php

date_default_timezone_set("asia/dhaka");

//include functions.php
if(file_exists(__DIR__ .'/app/functions.php')){
    require_once __DIR__.'/app/functions.php';
}

//include data.php
if (file_exists(__DIR__ . '/app/data.php')) {
    require_once __DIR__ . '/app/data.php';
}







?>