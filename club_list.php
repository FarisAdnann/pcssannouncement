<?php

include 'connectDB.php';

$sql = "SELECT club FROM Club_TBL";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while ($row = $result->fetch_assoc()) {
  //add club to select clubs list
  $club = $row["club"];
  echo "<option>$club</option>";
}
} else echo "enter a club";
$conn->close()

?>
