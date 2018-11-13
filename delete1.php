<html>
<style>
body{
background-color:#00FFFF;
}
</style>
<body>
<h2> Announcement Deleter </h2>
<form method="get" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
ID: <input type="text" name="id"><br>
<input type="submit" name="delete" value="Delete"><br><br>
</form>

<form method="get" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
Click the button below to return back to the announcement page<br>
<input type="submit" name="return" value="Return"> 
</form>

<?php

if (isset($_GET["return"])) header ('Location: view_announcement.php');

include "delete.php";

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

//include "insert.php";

?>

</body>
</html> 
