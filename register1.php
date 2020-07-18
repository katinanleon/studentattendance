<?php
 include 'conn.php';

 $sql = "INSERT INTO table_student (email, name, password) VALUES ('".$_POST["email"]."','".$_POST["name"]."','".$_POST["password"]."')";
 $result = $conn->query($sql);
 
 
 $conn->close();