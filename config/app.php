<?php

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_DATABASE','cinema');


define('SITE_URL','http://localhost/Gestion-d-une-Base-de-Donn-es-de-Cin-ma/');

include_once('DatabaseConnection.php');
$db=new DatabaseConnection;
function base_url($slug){
echo SITE_URL.$slug;
}
function redirect($message,$page){}

function validateInput($dbcon,$input){
    return mysqli_real_escape_string($dbcon,$input);
}

?>