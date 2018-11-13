<html>
<body>
<h2> Announcement Creator </h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >

<div>
<label for="date">Date:</label>
<input type="date" id="date" name="date" value="YYYY-MM-DD" min="2018-09-04" max="2019-06-28" / >
</div>

Name of Organization: <select id="club" name="club">
<option>Choose Any</option>
<?php include 'club_list.php'; ?>
</select>
<br>

Staff Sponsor: <select id="staff_sponsor" name="staff_sponsor">
<option>Choose Any</option>
<?php include 'staff_sponsor_list.php'; ?>
</select>
<br>

<br>
<textarea name="announcement" rows="10" cols="30">Announcement:</textarea><br>

<br>
<legend> Pick Date:</legend>
<div>
<label for="start">Start</label>
<input type="date" id="start" name="startdate" value="YYYY-MM-DD" min="2018-09-04" max="2019-06-28" />
</div>

<div>
<label for="end">End</label>
<input type="date" id="end" name="enddate" value="YYYY-MM-DD" min="2018-09-04" max="2019-06-28" / >
</div>

<br>
Reoccuring Every Week:<br>
<input type="checkbox" name="monday" value="X">Monday<br>
<input type="checkbox" name="tuesday" value="X">Tuesday<br>
<input type="checkbox" name="wednesday" value="X">Wednesday<br>
<input type="checkbox" name="thursday" value="X">Thursday<br>
<input type="checkbox" name="friday" value="X">Friday<br>
<br>

<input type="submit" name="create" value="Create Announcement"><br>
</form>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
If a club is not shown on the list, click the button below to add a club with its staff sponsor(s)!<br>
<input type="submit" name="registerclub" value="Register Club and Staff Sponsor">
</form>

<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
Click the button below to view all existing announcements<br>
<input type="submit" name="view" value="View Announcements"> 
</form>

<style>
body{
background-color:#00FFFF;
}
</style>
</body>
</html>
