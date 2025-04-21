<?php

function Conexion(){
    $host = "localhost:3307";
    $user = "root";
    $password = "";
    $bd = "logincrud";

    $conect = mysqli_connect($host,$user,$password);

    mysqli_select_db($conect,$bd);

    return $conect;
};


?>