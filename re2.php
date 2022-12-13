<?php
header("content-type: text/html; charset=UTF-8");
include('connect.php');




$sql = $sql = "INSERT INTO `thitima` (`id`, `name`, `date`, `Email`, `user`, `pass`) VALUES
('".$_POST["NULL"]."','".$_POST["name"]."','".$_POST["date"]."','".$_POST["Email"]."','".$_POST["user"]."','".$_POST["pass"]."')";
$result = mysqli_query($conn,$sql);
 if($result){
	 echo "<script>";
	 echo "window.location=\"s.php\"";
	 echo "</script>";

 }else{
	 echo "ผิดพลาด $sql";
 }



 ?>
 