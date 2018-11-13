<html>
<body>

<?php

include 'connectDB.php';
$id = $_GET["id"];

// sql to delete a record
/*
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('$firstname', '$lastname', '$email')";
*/
//$sql = "DELETE FROM MyGuests WHERE id=56";
$sql = "DELETE FROM Announcement_TBL WHERE id=('$id')";
if ($conn->query($sql) === TRUE) {
    continue;
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>


</body>
</html>
