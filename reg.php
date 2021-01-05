<?php


  $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "mytask";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
      echo "connected";
    }
    //insert data

      $aadhaar = $_POST['adhar'];
      $name = $_POST['name'];
      $dob = $_POST['dob'];
      $gender = $_POST['gender'];
      $email = $_POST['email'];
      $phoneCode = $_POST['phoneCode'];
      $phone = $_POST['phone'];
      $address = $_POST['adrs'];
      $state = $_POST['State'];
      $zip = $_POST['zip'];
     $INSERT = "INSERT INTO register (adhar,name,gndr,dob,email,no,pcode,adrs,state,zip) VALUES ($aadhaar,'$name','$gender','$dob','$email',$phone,$phoneCode,'$address','$state',$zip)";
     $run =mysqli_query($conn,$INSERT);
     echo "registered";
     header('Location: display.php');


?>
