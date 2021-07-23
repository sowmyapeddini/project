<?php
include "conn.php";
$data=$_GET["rollno"];
$sqli = "SELECT * FROM `files` WHERE `rollno`='$data'";
$query = mysqli_query($conn,$sqli);
if($row = mysqli_fetch_array($query)){
echo $row["file"];}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>