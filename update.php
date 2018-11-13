<html>
<body>

<?php

include 'connectDB.php';
$id = $_POST["id"];
$date = $_POST["date"];
$organization = $_POST["club"];
$staffsponsor = $_POST["staff_sponsor"];
$announcement = $_POST["announcement"]; 
$startdate = $_POST["startdate"];
$enddate = $_POST["enddate"];
$mon = $_POST["monday"];
$tue = $_POST["tuesday"];
$wed = $_POST["wednesday"];
$thurs = $_POST["thursday"];
$fri = $_POST["friday"]; 

$sql = "UPDATE Announcement_TBL
SET startdate=('$startdate'), enddate=('$enddate'), club=('$organization'), staff_sponsor=('$staffsponsor'), announcement=('$announcement'), date=('$date'), monday=('$mon'), tuesday=('$tue'), wednesday=('$wed'), thursday=('$thurs'), friday=('$fri')
WHERE id=('$id')";

if ($conn->query($sql) === TRUE) {
    continue;
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>

</body>
</html>


