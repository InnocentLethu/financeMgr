<?php

function dbConnection()
{
    $dbServername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbName = "financeManagerDB";

    $con = mysqli_connect($dbServername,$dbusername,$dbpassword,$dbName);

    if(!$con)
    {
        die("Connection failed: ".mysqli_connect_error());
    }
    
    return $con;

}
