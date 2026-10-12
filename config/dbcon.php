<?php
//connection to mysql database

$host = "sql205.infinityfree.com";  //database host
$username = "if0_43154399";  //database user
$password = "LBMX8o3WxfHJp";    //database password
$database = "if0_43154399_db";  //database name

$con = mysqli_connect("$host","$username","$password","$database");

if(!$con)
{
    echo 'error in connection';
}




