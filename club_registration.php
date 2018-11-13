<html>
<style>
body{
background-color:#00FFFF;
}
</style>
<body>
<h2> Club Registration Page </h2> 

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Register the club name with its staff sponsor(s):<br>
Club: <input type="text" name="club" required><br>
Staff Sponsor: <input type="text" name="staff_sponsor" required><br>
<input type="submit" name="addclub" value="Add Club & Staff Sponsor">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $club = test_input($_POST["club"]);
  $staff_sponsor = test_input($_POST["staff_sponsor"]);

if (isset($_POST['addclub'])) header ('Location: create_announcement.php'); include 'insert_club.php'; 

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
</body>
</html>
