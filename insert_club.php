<html>
<body>


<?php

include 'connectDB.php';

$sql = "INSERT INTO Club_TBL (club, staff_sponsor)
VALUES ('$club', '$staff_sponsor')";

if ($conn->query($sql) === TRUE) {
    continue;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>


</body>
</html>
