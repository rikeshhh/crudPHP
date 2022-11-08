<?php

$con =new mysqli('localhost','root','@dmin12','crudoperation');
if(!$con){
echo "show me connection";
    die(mysqli_error($con));
}



?>