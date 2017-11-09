<?php

  $servername = "localhost";
  $username = "root";
  $password = "root";

  $eol = "<br/>" . PHP_EOL;

  // Create connection
  $conn = new mysqli($servername, $username, $password, 'lampdb');

  // Check connection
  if ($conn->connect_error) {
    die("You suck: " . $conn->connect_error . $eol);
  }
  echo "Goose liver" . $eol;
  echo "What, me worry?" . $eol;
  echo "I'm bad at this" . $eol;
  echo "You should feel bad about it" . $eol;
  $res = mysqli_query($conn, 'SELECT * FROM hello');
  while($row = mysqli_fetch_assoc($res)) {
    echo "david the gnome " . $row['planet'] . $eol;
  }

?>
