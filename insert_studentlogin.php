<html>
<body>


<?php

include 'connectDB.php';
$username = $_POST["username"];
$password = $_POST["password"];

$sql = "INSERT INTO StudentLogin_TBL (username, password)
VALUES ('$username', '$password')";

if ($conn->query($sql) === TRUE) {
    continue;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?> 


</body>
</html>
