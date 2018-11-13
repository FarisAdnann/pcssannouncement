<html>
<body>


<?php

include 'connectDB.php';
$staffname = $_POST["staffname"];
$staffpassword = $_POST["staffpassword"];

$sql = "INSERT INTO StaffLogin_TBL (staffname, staffpassword)
VALUES ('$staffname', '$staffpassword')";

if ($conn->query($sql) === TRUE) {
    continue;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?> 


</body>
