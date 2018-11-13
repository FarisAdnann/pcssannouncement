<html>
<style>
body {font-family: sans-serif;}
* {box-sizing: border-box;}
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: 1px solid green;
    cursor: pointer;
    width: 8%;
}
.container {
    padding: 16px;
}
</style>
<body>
<form method="post" style="border:2px solid #ccc" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
<div class="container">
<h1> PCSS Announcement Home </h1>
<p>Welcome to PCSS Announcement Home Page! Click on the button that represents you</p> 
<button type="submit" name="student" value="Student"><b>Student</b>
<button type="submit" name="staff" value="Staff"><b>Staff</b>
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (isset($_POST['student'])) header ('Location: student_login.php');
if (isset($_POST['staff'])) header ('Location: staff_login.php');
}

?>

</body>
</html>
