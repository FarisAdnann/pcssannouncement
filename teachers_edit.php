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
<button type="submit" name="deleteannouncement" value="Delete Announcement"><b>Delete Announcement</b>
<button type="submit" name="updateannouncement" value="Update Announcement"><b>Update Announcement</b>
<button type="submit" name="createannouncement" value="Create Announcement"><b>Create Announcement</b>
</div>
</form>

<?php
if (isset($_POST["logout"])) header ('Location: staff_login.php');
if (isset($_POST["deleteannouncement"])) header ('Location: delete1.php');
if (isset($_POST["updateannouncement"])) header ('Location: update1.php');
if (isset($_POST["createannouncement"])) header ('Location: create_announcement.php');
?>

</html>
</body>
