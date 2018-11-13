<!DOCTYPE html>
<html>
<head>
<h2> Announcements </h2>
<title>Table with database</title>
<style type="text/css">
body{background-color:#00FFFF;}
body {font-family: sans-serif;}
* {box-sizing: border-box;}
table, th, td {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border: 1px solid black;
}
table{
border-collapse: collapse;
width: 100%;
color: #0B0B3B;
font-family:monospace;
font-size: 14px;
text-align: middle;
}
tr{
nth-child(even);
background-color: #f2f2f2;
}
th, tr{
text-align: left;
padding: 12px;
}
th{
background-color:#4CAF50;
color:white;
height: 10px;
}
</style>
</head>
<body>
<table>
<tr>
<th>Id</th><th>Date</th><th>Staff Sponsor</th><th>Club</th><th>Announcement</th><th>Start Date</th><th>End Date</th><th>M</th><th>T</th><th>W</th><th>T</th><th>F</th>
</tr>
<?php include 'connectDB.php'; 
$sql = "SELECT id, date, staff_sponsor, startdate, enddate, club, announcement, monday, tuesday, wednesday, thursday, friday from Announcement_TBL";
$result = $conn-> query($sql);
if ($result-> num_rows > 0) {
while ($row = $result-> fetch_assoc()) {
echo "<tr><td>".$row["id"]."</td><td>".$row["date"]."</td><td>".$row["staff_sponsor"]."</td><td>".$row["club"]."</td><td>".$row["announcement"]."</td><td>".$row["startdate"]."</td><td>".$row["enddate"]."</td><td>".$row["monday"]."</td><td>".$row["tuesday"]."</td><td>".$row["wednesday"]."</td><td>".$row["thursday"]."</td><td>".$row["friday"]."</td></tr>";
}
echo "</table>";?>
</div>
<?php
} else { echo "0 result";}
$conn-> close();
?>
</table align="center">
</body>
</html>
