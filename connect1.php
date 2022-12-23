<?php


$severname="localhost";
$username = "root";
$password = "";
$dbname = "schools";

$conn=mysqli_connect($severname, $username, $password,$dbname);

if(!$conn){
    die("connecttion failed : " . mysqli_connect_error());
}

//TO CREATE DATABASE
// $sql = "CREATE DATABASE school";
// if(mysqli_query($conn,$sql)){
//     echo "Database created";
// }else{
//     echo "Error craeting database: " . mysqli_error($conn);
// }
// mysqli_close($conn);




$sql = "CREATE TABLE students(
id INT(6)  PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastnmae VARCHAR (30) NOT NULL,
phonenumber VARCHAR (30),
email VARCHAR(30) UNIQUE
)";

if(mysqli_query($conn,$sql)){
    echo "Table Uploaded sucessfully";
}else{
    echo "Table failed to Upload " . mysqli_error($conn);
}

mysqli_close($conn);