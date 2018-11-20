<?php
  require './DBC.php';
  $sql = "SELECT name, message FROM Note WHERE name='";
  $sql .= $_POST["input"];
  $sql .= "';";
  $sql = preg_replace("/([^A-Za-z(),''])\s/", " ", $sql);
  $result = $conn->query($sql);
  $conn->close();
?>
<html>
  <head>
    <link rel="stylesheet" href="./findNote.css">
  </head>
  <body>
    <div id="results">
    <?php
      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<br> Note Name: ". $row["name"]. "<br>Message: ". $row["message"]. "<br>";
        }
      } else {
        echo "0 results";
      }
    ?>
    </div>
  </body>
</html>
