<?php
$localhost="localhost";
$username="root";
$password="";
$dbname="photos_gallery";

$conn= new mysqli($localhost,$username,$password,$dbname);

if($conn->connect_error){
    die("connection failed" .$conn->connect_error);
}