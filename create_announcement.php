<?php

include 'announcement_form.php';

$date = $organization = $staffsponsor = $announcement = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
 
if (isset($_POST["create"])) include 'insert_announcement.php';
if (isset($_POST["registerclub"])) header ('Location: club_registration.php');
if (isset($_POST["view"])) header ('Location: view_announcement.php');

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
