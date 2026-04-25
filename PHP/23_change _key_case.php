<?php
$arr=array("name"=>"meet","age"=>18);
$result=array_change_key_case($arr,CASE_UPPER);
print_r($result);
?>