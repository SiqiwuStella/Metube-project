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
//echo "Connected successfully!<br>";

$email = $_SESSION["eml"];
$usenm = $_SESSION["useName"];
$useid = $_SESSION["userid"];
$foeid=$_SESSION["foe1"];
                        
                $sql="INSERT INTO foe(user_id,foe_id) VALUES ('$useid', '$foeid')";
                if ($conn->query($sql) === TRUE) {
                        echo "<h5>Foe added!</h5>";
                        echo "<br><A href = 'addfoe.php'> <h5>Return</h5></a></h5> ";
                }
 else {echo "Error!";
  echo "<br><A href = 'addfoe.php'> <h5>Return</h5></a></h5> ";
 }
            
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

