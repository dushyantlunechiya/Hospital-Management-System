<!DOCTYPE HTML>
<html>
<head>
  <title>Register Form</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Arimo:700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
</head>
<body>
  <div class="header">
    <h1>Details</h1>
  </div>
<div class="haha">
  <div>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mytask";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM register";
$result = $conn->query($sql);
$f = 0;
if ($result->num_rows > 0) {

  $no_of = $result->num_rows;





    while($row = $result->fetch_assoc()) {
        if($f<5)
        {
  ?>

  <div class = 'vv'>
    <div class = 'adhar'><?php echo "Aadhaar no : ".$row['adhar']; ?></div>
    <div class = 'name'><?php echo "Name : ".$row['name']; ?></div>
    <div class = 'gndr'><?php echo "Gender : ".$row['gndr']; ?></div>
    <div class = 'dob'><?php echo "D.O.B : ".$row['dob']; ?></div>
    <div class = 'email'><?php echo "Email : ".$row['email']; ?></div>
    <div class = 'pcode'><?php echo "phoneCode : ".$row['pcode']; ?></div>
    <div class = 'no'><?php echo "Contact : ".$row['no']; ?></div>
    <div class = 'adrs'><?php echo "Address : ".$row['adrs']; ?></div>
    <div class = 'state'><?php echo "State : ".$row['state']; ?></div>
    <div class = 'zip'><?php echo "Zip code : ".$row['zip']; ?></div>

  </div>

<?php
}
$f++;
}
echo "</div>";
  } else {
    echo "0 results";
}

$conn->close();
?>
<div class="page">
<ul class="pagination">
   <li><a href="display.php">1</a></li>
   <li><a href="try.php">2</a></li>
   <li><a href="#">3</a></li>
   <li><a href="#">4</a></li>
   <li><a href="#">5</a></li>
     <li><a href="index.html">Home</a></li>
 </ul>
</div>
</div>
</body>
</html>
