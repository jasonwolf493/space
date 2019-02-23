<?php
if (isset($_POST["username"])) {
  //print "username set as " . $_POST["username"] . "</br>";
  $loginusername = $_POST["username"];
  # code...
}else {
  //echo "username not set </br>";
}

if (isset($_POST["password"])) {
  //echo "password set as " . $_POST["password"] . "</br>";
  $loginpassword = $_POST["password"];
  # code...
}else {
  //echo "password not set </br>";
}

 ?><?php
 $servername = "localhost";
 $username = "root";
 $password = "password";
 $dbname = "space";

 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }

 $sql = "SELECT id, firstname, lastname, pageinfo, username FROM users WHERE username = '$loginusername' AND password = '$loginpassword'";
 $result = $conn->query($sql);

 if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         //echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . " " . $row["pageinfo"] . " " . $row["username"] . "<br>";
         $firstname = $row["firstname"];
         $lastname = $row["lastname"];
         $username = $row["username"];

         $cookie_name = "logged";
         $cookie_value = "true";
         setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
         header('Location: /php/main.php');



     }
 } else {
     header('Location: /php/login.php?invalid');
 }
 $conn->close();
 ?>
