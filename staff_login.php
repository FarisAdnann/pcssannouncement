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
<form method="post" style="border:2px solid #ccc" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<div class="container">
<h1> Staff Login </h1>
<label for="username"><b>Username</b></label>
<input type="text" placeholder="Enter Username" name="staffname" required><br>
<label for="password"><b>Password</b></label>  
<input type="password" placeholder="Enter Password" name="staffpassword" required><br>
<div class="clearfix">
<button type="submit" name="login" value="Log In"><b>Log In</b>
</div>
<br><br>
<a href="welcome.php">Return back to Home!</a>
<a href="staff_registration.php">Sign Up!</a>
</div>
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  include 'connectDB.php';

  $staff_name = test_input($_POST["staffname"]);
  $staffpass_word = test_input($_POST["staffpassword"]); 
  $sql = "SELECT staffpassword FROM StaffLogin_TBL WHERE staffname = '$staff_name'";
  $result = $conn->query($sql);

  if (isset($_POST['login'])) {  
    if ($result->num_rows>0){ 
      while($row=$result->fetch_assoc()) {
        if ($staffpass_word==$row["staffpassword"]) header ('Location: create_announcement.php'); echo "wrong username or password";
      }
    } else {
      $message = "Username and/or Password incorrect.\\nTry again.";
      echo "<script type='text/javascript'>alert('$message');</script>";
    }
  }
  $conn->close();
  if (isset($_POST['signup'])) header ('Location: staff_registration.php');
  if (isset($_POST['forgot'])) header ('Location: forgot_password.php');
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
