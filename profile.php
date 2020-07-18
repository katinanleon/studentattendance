<?php
 session_start();
 include "conn.php";

 $sql = "SELECT * FROM table_student where email = '".$_SESSION["user"].
 "'";

 $result = $conn->query($sql);

 while($row = $result->fetch_assoc()){

  echo "id: ".$row["id"]."<br/>";
  echo "email: ".$row["email"]."<br/>";
  echo "name: ".$row["name"]."<br/>";
 } 
 ?>