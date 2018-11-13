<?php

include 'connectDB.php';

$sql = "SELECT staff_sponsor FROM Club_TBL";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while ($row = $result->fetch_assoc()) {
  //add staff sponsor to select staff sponsor list
  $staff_sponsor = $row["staff_sponsor"];
  echo "<option>$staff_sponsor</option>";
}
} else echo "enter a club";
$conn->close()

?>
