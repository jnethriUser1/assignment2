<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="favicon.ico">

  <title>View customers</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="styles.css" rel="stylesheet">

</head>
    <body>
<div class="container">
<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Assignment 2</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.html">Home</a></li>
            <li class="active"><a href="customer_view.php">View</a></li>
            <li><a href="customer_add.html">Add</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class='dropdown'>
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">My Account
                  <span class="caret"></span></a>
                       <ul class="dropdown-menu">
                          <li><a href="#">Login</a></li>
                          <li><a href="#">Settings</a></li>
                      </ul>
                </li>
          </ul>
        </div>
      </div>
    </nav>
	<br/><br/><br/><br/><br/>

        <?php

        $hn = 'www.it354.com';
        $db = 'it354_students';
        $un = 'it354_students';
        $pw = 'steinway';

        $conn = new mysqli($hn, $un, $pw, $db);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM customers";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table class='table table-striped' id='heading'><tr><th>Last Name</th><th>First Name</th><th>Address</th><th>City</th><th>State</th><th>Zip</th><th>Email</th><th>Phone</th></tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["lastName"]."</td><td>".$row["firstName"]."</td><td>".$row["address"]."</td><td>".$row["city"]."</td><td>".$row["state"]."</td><td>".$row["zip"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>
