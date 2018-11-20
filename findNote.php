<?php
  require './DBC.php';
  $sql = "SELECT name, message FROM Note WHERE name='";
  $sql .= $_POST["input"];
  $sql .= "';";
  $sql = preg_replace("/([^A-Za-z(),''])\s/", " ", $sql);
  $result = $conn->query($sql);
  $conn->close();
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $string .= "<br> Note Name: ". $row["name"]. "<br>Message: ". $row["message"]. "<br>";
    }
  } else {
    $string = "0 results";
  }
  return $string;
?>
