<!DOCTYPE html>
<html>
<head>
  <title>Orders Placed - Barbacoa American and Mexican Food</title>
  <meta charset=utf-8>
  <link href="phpstyle.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="wrapper">
<header class="header">
  <a href="index.html"><img src="images/logo.png" alt="Barbacoa American and Mexican Food" width=471px></a>
</header>
<div class="flex-container">
<div>
  <a href="index.html" class="button">Home</a>
  <a href="menu.html" class="button">Menu</a>
  <a href="drinks.html" class="button">Signature Drinks</a>
	<a href="location.html" class="button">Our Location</a>
	<a href="hours.html" class="button">Store Hours</a>
	<a href="jobs.html" class="button">Now Hiring!</a>
  <a href="index.php" class="button">Orders Placed</a>
</div>
<div class='flex-container'>
  <?php
    include 'config.php';
    include 'opendb.php';

    $sql = "SELECT ordernumber, firstname, lastname, itemnumber FROM customerorder";
    $result = mysqli_query($conn, $sql);

      echo "<table style='width:75%'>
    		<tr>
    			<th><div class='info-row'><div class='info'><h2>Order Number</h2></div></th>
          <th><div class='info'><h2>Customer Name</h2></div></th>
          <th><div class='info'><h2>Item Number</h2></div></div></th>
        </tr>";

    if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <th><div class='info'>" . $row['ordernumber'] . "</div></th>
                <th><div class='info'>" . $row['firstname'] . " " . $row['lastname'] . "</div></th>
                <th><div class='info'>" . $row['itemnumber'] . "</div></th>
             </tr>";
      }
    } else {
      echo "0 results";
    }

      echo "</table>";

    mysqli_close($conn);
  ?>
</div>
</div>
</div>
</body>
</html>
