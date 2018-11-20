<?php
  require './DBC.php';
  $sql = "INSERT INTO Note (name, message) VALUES";
  $sql .= "('";
  $sql .= $_POST["name"];
  $sql .= "', '";
  $sql .= $_POST["message"];
  $sql .= "')";
  $sql = preg_replace("/([^A-Za-z(),''])\s/", " ", $sql);
  if ($result = $conn->query($sql) === TRUE) {
    echo "New Note created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
  
?>
