<html>
<style>
body {font-family: sans-serif;}
* {box-sizing: border-box;}
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 6px 0 16px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 8%;
}
input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}
.container {
    padding: 16px;
}
</style>
<body>
<form method="post" style="border:2px solid #ccc" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
<div class="container">
<h1> Student Registration </h1>
<p> Please fill out this sign up form to create an account. </p>
<label for="username"><b>Username</b></label>
<input type="text" name="username" placeholder="Enter Username" pattern=".{6,16}" required title="6 to 16 characters"><br>
<label for="password"><b>Password</b></label>
<input type="password" name="password" placeholder="Enter Password" pattern="(?=.*\d).{8,16}" required title="Must contain at least one number and be within 8 to 16 characters"><br>
<div class="clearfix">
<button type="submit" name="register" value="Register"><b>Register</b>
</div>
<br>
<a href="student_login.php">Return back to Login!</a>
</div>
</form>

<?php

$username = $password = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = test_input($_POST["username"]);
  $password = test_input($_POST["password"]); 
if (isset($_POST['register'])) header ('Location: student_login.php'); include 'insert_studentlogin.php';
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

</body>
</html>
