<?php
 include 'conn.php';
 session_start();

 $sql = "SELECT * FROM table_student where email = '".$_POST["email"]."' and password = '".$_POST["password"]."'";
 $result = $conn->query($sql);

 if($result -> num_rows > 0){
  $_SESSION["user"] = $_POST["email"];
  echo "success";
 }else{
  echo "fail";
 }