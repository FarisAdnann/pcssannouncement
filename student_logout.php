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
    width: 15%;
}
</style>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
<div>
<button type="submit" name="logout" value="Log Out"><b>Log Out</b>
</div>
</form>

<?php
if (isset($_POST["logout"])) header ('Location: student_login.php');
?>

</html>
</body>
