<html>
<head>
<meta charset="ISO-8859-1">
<title>Conference Room Schedule</title>
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
    ?>
<style>
#header {
    background-color:darkblue;
    height:54px;
    color:white;
    text-align:center;
    padding:6px;
}
#button_specs{
	height:3em;
	width: 7em;
	padding:5px;
}
#nav {
    line-height:30px;
    background-color:#eeeeee;
    height:720px;
    width:100px;
    float:left;
    padding:5px;	      
}
#section {
    padding:10px;	
    text-align:center; 	 
}
#footer {
    background-color:black;
    color:white;
    clear:both;
    text-align:center;
   padding:5px;	 	 
}
tbody {color:blue;}
</style>
</head>
<body>
<div id="header">
<h1>Messages</h1>
</div>

<div id="nav">
<?php 
	$userid = $_SESSION["userid"];
	$sql = "SELECT friend_id FROM friend WHERE user_id='$userid'";
	$result=mysqli_query($conn,$sql);
	if($result->num_rows > 0){
		while ($row = $result->fetch_assoc()) {
			echo $row["friend_id"]."<br>";
		}
	}
	else{
		echo "You don't have friends to chat with";
	}
?> 

</div>
</body>
</html>