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
?>
<html>
    <head>
        <style>

            #contacts
            {
                font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
                width:100%;
                border-collapse:collapse;
                text-align:center;
            }
            #contacts td, #contacts th 
            {
                font-size:1em;
                border:1px solid #FF9900;
                padding:3px 7px 2px 7px;
                text-align:center;
            }
            #contacts th 
            {
                font-size:1.2em;
                text-align:left;
                padding-top:5px;
                padding-bottom:4px;
                background-color:#FF6600;
                color:#fff;
                text-align:center;
            }
            #contacts tr.alt td 
            {
                color:#000;
                background-color:#FFCC99;
                text-align:center;
            }

        </style>
    </head>
    <body>
        <h3 style="font-style: Helvetica">Please input the Email of the foe you want to add.
            <form method="post" action="addfoe.php">
                <input type="text" name="emf" ><br>
                <input type="hidden" name="find" value="1">
                <input type="submit" value="Search">
            </form>
        </h3>

        <?php
        // echo $_POST["em"];
        $flag = $_POST["find"];
        //echo $flag;
        $e = $_POST["emf"];
        //echo $e;
        if ($flag == 1) {
            //echo $e;
            //$_SESSION["Eml"] = $e;

            If ($e != "" && $e != "none") {
                //Email format check
                //If (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $Eml)) {
                //    echo "Email invalid.";
                //} else
                {
                    $sql = "SELECT user_id, username, email,status, gender FROM User WHERE email='$e'";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        $foeid = $row["user_id"];
                        $sql1 = "SELECT user_id,foe_id FROM foe WHERE user_id='$useid' && foe_id='$foeid'";
                        $result1 = $conn->query($sql1);
                        
                        if ($result1->num_rows > 0) {
                            echo "Foe already exist.";
                        } else {
                        echo"
                            <table id='contacts'>
                <tbody>
                    <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Gender</th> 
                    <th>Add Foe</th>
                </tr>";

                        // output data 
                        
                        $frnm = $row["username"];
                        $freml = $row["email"];
                        $frsta = $row["status"];
                        $frgd = $row["gender"];                        
                        $_SESSION["foe1"]=$foeid;
                        echo"<tr>
                    <form method='post' action='addfoe1.php'>
                    
                    <td>" . $frnm . "</td>
                    <td>" . $freml . "</td>
                    <td>" . $frsta . "</td>
                    <td>" . $frgd . "</td>
                        <td><input type='submit' value='Add'></h5>
            <input type='hidden' name='add' value='1'></td>
            </form>
                    </tr>
                            </tbody>
            </table>
            
                        ";}
                    } else {
                        echo "<h5>User doesn't exist.";
                    }
                   
                }
            } else {
                echo "Please input Email";
            }
            $_POST["find"] = 0;
            
        }
        ?>
        <br><A href = 'mycontact.php'> <h5 style="font-style: Helvetica">My Contact</h5></a></h5>




    </body>
</html><?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

