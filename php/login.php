<?php

if (isset($_GET["loggedout"])) {

  echo "the user should be logged out";

}
 ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation for Sites</title>
    <link rel="stylesheet" href="../../css/foundation.css">
    <link rel="stylesheet" href="../../css/app.css">
  </head>
<body>
</br>

<div class="grid-x grid-padding-x">
  <div class="large-4 cell"></div>
  <div class="large-4 cell">
    <h1>LOG IN</h1>
    <form class="show-password" action="/php/login_verification.php" method="post">
      <label for="username">Your login</label>
      <input type="text" name="username" value="" placeholder="Enter Username" id="username" required>
      <div class="password-wrapper">
        <label for="password">Your password</label>
        <input type="password" name="password" value="" placeholder="Enter Password" id="password" class="password" required>
        <button class="unmask" type="button" title="Mask/Unmask password to check content">Unmask</button>
      </div>
      <input class="button" type="submit" value="Submit">
    </form>
  </div>
  <div class="large-4 cell"></div>
</div>





<script src="../../js/vendor/jquery.js"></script>
<script src="../../js/vendor/what-input.js"></script>
<script src="../../js/vendor/foundation.js"></script>
<script src="../../js/app.js"></script>
</body>
</html>
