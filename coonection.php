<?php

$servername="localhost";
$username="root";
$password="";
$dbname="PIUD";

$conn= new mysqli($servername,$username,$password,$dbname);

if(!($conn)){
    echo "Not conneted";

}else{
    echo "Connect Successfully";
}





?>