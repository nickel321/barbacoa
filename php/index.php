<!DOCTYPE html>
<html>
<head>
  <title>Mod 3 PHP</title>
  <link rel="stylesheet" href="phpstyle.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <div id="wrapper">
  <header class="header">
  	<a href="index.html"><img src="images/logo.png" alt="Barbacoa American and Mexican Food" height=200px></a>
  </header>
  <div class="flex-container">
  <div>
    <a href=index.php>Mod 3 PHP</a><br><br>
    <a href=index.html>Home</a><br><br>
    <a href=menu.html>Menu</a><br><br>
    <a href=drinks.html>Signature Drinks</a><br><br>
  	<a href=location.html>Our Location</a><br><br>
  	<a href=hours.html>Store Hours</a><br><br>
  	<a href=jobs.html>Now Hiring!</a><br><br>
  </div>
  <div>

<?php
  include 'config.php';
  include 'opendb.php';

  $sql = "SELECT ordernumber, firstname, lastname, itemnumber FROM customerorder";
  $result = mysqli_query($conn, $sql);

    echo "<table style='width:75%' fontcolor='white' border='white'>
  		<tr>
  			<th><div class='info-row'><div class='info'>Order Number</div>
        <div class='info'>Customer Name</div>
        <div class='info'>Item Number</div></div></th></tr>";

  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      echo "<tr><th><div class='info-row'><div class='info'>" . $row['ordernumber'] . "</div>
           <div class='info'>" . $row['firstname'] . " " . $row['lastname'] . "</div>
           <div class='info'>" . $row['itemnumber'] . "</div></div></th></tr>";
    }
  } else {
    echo "0 results";
  }

    echo "</table>";

  mysqli_close($conn);
?>
</div>
</div>
</body>
</html>
