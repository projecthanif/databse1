<?php

// require_once('connect.php');

$name = $_POST['fname']??'';
$olevel = $_POST['level'] ?? '';
$department = $_POST['department'] ?? '';
$faculty = $_POST['faculty'] ?? '';


if($_SERVER['REQUEST_METHOD']!=="POST"){
 
}else{
    if(empty($name)){

    }else{
        $name = valid($_POST['fname']);
    }
    if(empty($olevel)){
        
    }else{
        $olevel = valid($_POST['level']);
    }
    if(empty($department)){
        
    }else{
        $department = valid($_POST['department']);
    }
    if(empty($faculty)){

    }else{
        $faculty = valid($_POST['faculty']);
    }
}
function valid($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$servername = "localhost";
$username = "root";
$password = "";
$mydb="uni";

$conn = mysqli_connect($servername, $username, $password,$mydb);

if(!$conn){
    echo "failed to connect " . mysqli_error($conn);
}

$sql = "INSERT INTO student (name,olevel,department,faculty)
value('$name','$olevel','$department','$faculty')";

if(mysqli_query($conn,$sql)){
    echo "Uploaded Succesfully";
}else{
    echo "Failed to Upload: " . mysqli_error($conn);
}
mysqli_close($conn);
