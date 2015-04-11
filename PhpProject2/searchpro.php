<?php
session_start();
$servername = "mysql1.cs.clemson.edu";
$username = "Metube_2b0d";
$password = "metube15";
$dbname = "Metube_yu37";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$search = mysql_real_escape_string(trim($_POST['searchterms']));
$query = "SELECT * FROM media WHERE keywords LIKE'%$search%'"; 
$find_videos = $conn->query($query);

while ($row = $find_videos->fetch_assoc()) {
	$name = $row['title'];
	echo "<a href='#'>$name::</a><br /><br />";
	$name .= ".mp4";
	echo "<video width='400' controls>\n";
 	echo "<source src='$name' type='video/mp4'>";
 	echo "<source src='mov_bbb.ogg' type='video/ogg'>";
 	echo "Your browser does not support HTML5 video.";
	echo "</video>";
 
echo "<br /><br /><br />";
}

?>