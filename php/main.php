<?php
if(!isset($_COOKIE["logged"])) {
  echo "cookie set";
}
if( $_COOKIE["logged"] == "true") {
  //they can continue
}else{
  //they need to log in
}

?>
<?php
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

$sql = "SELECT id, firstname, lastname, pageinfo, username FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . " " . $row["pageinfo"] . " " . $row["username"] . "<br>";
        $firstname = $row["firstname"];
        $lastname = $row["lastname"];
        $username = $row["username"];
    }
} else {
    echo "0 results";
}
$conn->close();
?>
<?php echo '

<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation for Sites</title>
    <link rel="stylesheet" href="../css/foundation.css">
    <link rel="stylesheet" href="../css/app.css">
  </head>
  <body>
  <nav class="top-bar topbar-responsive">
  <div class="top-bar-title">
    <span data-responsive-toggle="topbar-responsive" data-hide-for="medium">
      <button class="menu-icon" type="button" data-toggle></button>
    </span>
    <a class="topbar-responsive-logo" href="#"><strong>' . $firstname . ' ' . $lastname . '</strong></a>
  </div>
  <div id="topbar-responsive" class="topbar-responsive-links">
    <div class="top-bar-right">
      <ul class="menu simple vertical medium-horizontal">
        <li><a href="/php/login.php/?loggedout=true" class="logout_button">Log out</a></li>
        <li>
          <button type="button" class="button hollow topbar-responsive-button">Edit Content</button>
        </li>
      </ul>
    </div>
  </div>
</nav>


    <div class="grid-container">
      <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
          <h1>Welcome to Foundation</h1>
        </div>
      </div>

      <div class="grid-x grid-padding-x">

      </div>

      <div class="grid-x grid-padding-x">

        <div class="large-8 cell">
          <h1>Editing sections</h1>
          <p>These sections can be edited and and you can and custom CSS and HTML or just use the editor</p>
        </div>


        <div class="large-4 medium-4 cell">
          <h5>Try one of these buttons:</h5>
          <p><a href="#" class="button">Simple Button</a><br/>
          <a href="#" class="success button">Success Btn</a><br/>
          <a href="#" class="alert button">Alert Btn</a><br/>
          <a href="#" class="secondary button">Secondary Btn</a></p>
          <div class="callout">
            <h5>So many components, girl!</h5>
            <p>A whole kitchen sink of goodies comes with Foundation. Check out the docs to see them all, along with details on making them your own.</p>
            <a href="http://foundation.zurb.com/sites/docs/" class="small button">Go to Foundation Docs</a>
          </div>
        </div>
      </div>
    </div>

    <script src="../js/vendor/jquery.js"></script>
    <script src="../js/vendor/what-input.js"></script>
    <script src="../js/vendor/foundation.js"></script>
    <script src="../js/app.js"></script>
  </body>
</html>





';?>

<?php
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

$sql = "SELECT id, firstname, lastname, pageinfo FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. " " . $row["pageinfo"]. "<br>";
    }
} else {
    //echo "0 results";
}
$conn->close();
?>
