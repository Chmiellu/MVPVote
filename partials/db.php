<?php

$server="sql107.epizy.com";
$username="epiz_31949803";
$password="4U2mKa1LDJt9";
$dbname="epiz_31949803_zawodnikmeczu";

$conn=mysqli_connect($server,$username,$password,$dbname);

if(!$conn){
    die("Connection Failed:".mysqli_connect_error());
}

?>