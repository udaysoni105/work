<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header('Access-Control-Allow-Methods: GET, POST');
if( $_REQUEST["name"] ) {
   $name = $_REQUEST['name'];
   echo "Welcome ";
}
?>