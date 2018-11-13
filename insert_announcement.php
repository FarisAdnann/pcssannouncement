<html>
<body>


<?php

include 'connectDB.php';
$date = $_POST["date"];
$startdate = $_POST["startdate"];
$enddate = $_POST["enddate"];
$organization = $_POST["club"];
$staffsponsor = $_POST["staff_sponsor"];
$announcement = $_POST["announcement"];
$mon = $_POST["monday"];
$tue = $_POST["tuesday"];
$wed = $_POST["wednesday"];
$thurs = $_POST["thursday"];
$fri = $_POST["friday"]; 

$sql = "INSERT INTO Announcement_TBL (date, staff_sponsor, startdate, enddate, club, announcement, monday, tuesday, wednesday, thursday, friday)
VALUES ('$date', '$staffsponsor', '$startdate', '$enddate', '$organization', '$announcement', '$mon', '$tue', '$wed', '$thurs', '$fri')";

if ($conn->query($sql) === TRUE) {
    continue;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?> 


</body>
</html>
