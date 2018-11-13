<html>
<style>
body{
background-color:#00FFFF;
}
</style>
<body>
<h2> Announcement Updater </h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
ID: <input type="text" name="id"><br>

<div>
<label for="date">Date:</label>
<input type="date" id="date" name="date" value="YYYY-MM-DD" min="2017-09-04" max="2018-06-28" / >
</div>

Name of Organization: <select id="club" name="club">
<option>Choose Any</option>
<?php include 'club_list.php'; ?>
</select>
<br>

Staff Sponsor: <select id="staff_sponsor" name="staff_sponsor">
<option>Choose Any</option>
<?php include 'staff_sponsor_list.php'; ?>
</select>
<br>

<br>
<textarea name="announcement" rows="10" cols="30">Announcement:</textarea><br>

<br>
<legend> Pick Date:</legend>
<div>
<label for="start">Start</label>
<input type="date" id="start" name="startdate" value="YYYY-MM-DD" min="2017-09-04" max="2018-06-28" />
</div>

<div>
<label for="end">End</label>
<input type="date" id="end" name="enddate" value="YYYY-MM-DD" min="2017-09-04" max="2018-06-28" / >
</div>

<br>
Reoccuring Every Week:<br>
<input type="checkbox" name="monday" value="X">Monday<br>
<input type="checkbox" name="tuesday" value="X">Tuesday<br>
<input type="checkbox" name="wednesday" value="X">Wednesday<br>
<input type="checkbox" name="thursday" value="X">Thursday<br>
<input type="checkbox" name="friday" value="X">Friday<br>
<br>

<input type="submit" name="create" value="Update Announcement">
</form>

<form method="get" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
Click the button below to return back to the announcement page<br>
<input type="submit" name="return" value="Return"> 
</form>

<?php

if (isset($_GET["return"])) header ('Location: view_announcement.php');

$date = $organization = $staffsponsor = $announcement = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = test_input($_POST["id"]);
  $date = test_input($_POST["date"]);
  $startdate = test_input($_POST["startdate"]);
  $enddate = test_input($_POST["enddate"]);  
  $organization = test_input($_POST["club"]);
  $staffsponsor = test_input($_POST["staff_sponsor"]);
  $announcement = test_input($_POST["announcement"]);
  $mon = test_input($_POST["monday"]);
  $tue = test_input($_POST["tuesday"]);
  $wed = test_input($_POST["wednesday"]);
  $thurs = test_input($_POST["thursday"]);
  $fri = test_input($_POST["friday"]); 

if (isset($_POST["create"])) include 'update.php';
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
