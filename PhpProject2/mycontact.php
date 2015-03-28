<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
session_start();
include 'connect_database.php'; ?>
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

        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>     
        <div>  
            <table id="contacts">
                <tbody>
                    <tr>
                <h2 style="font-family:Helvetica">MY FRIENDS  <input src="addfriend.php" type="button" name="addfr" value="Add Friend"></input></h2>
                </tr>
                <tr>
                    <th>#</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Gender</th>
                    <th>Block/Unblock</th>
                    <th>Remove Friend</th>
                </tr>
                <?php
                
                $email = $_SESSION["eml"];
                $usenm = $_SESSION["useName"];
                $useid = $_SESSION["userid"];
                //echo $useid;
                $sql = "SELECT user_id, friend_id FROM friend WHERE user_id='$useid'";
                $result = $conn->query($sql);
                //$sql = "SELECT user_id, username, email, status,gender FROM User WHERE email='$email'";
                if ($result->num_rows > 0) {
                    // output data of each row
                    $self = $_SERVER["PHP_SELF"];
                    $i=1;
                    while ($row = $result->fetch_assoc()) {
                        $friendid = $row["friend_id"];
                        //echo $friendid;
                    $sql = "SELECT user_id, username, email, status,gender FROM User WHERE user_id='$friendid'";
                    $frdinfo=$conn->query($sql);  
                    $info = $frdinfo->fetch_assoc();
                    if ($i % 2 == 1) {
                        echo "
                <tr>
                    <th scope='row'>$i</th>
                    <td>".$info['username']."</td>
                    <td>".$info['email']."</td>
                    <td>".$info['status']."</td>
                    <td>".$info['gender']."</td>
                    <td>
                    <input src='htmlspecialchars($self)' type='radio'  name='blunbl$i' value='block'>BLOCK</input>
                    <input src='htmlspecialchars($self)' type='radio'  name='blunbl$i' value='unlock'>UNBLOCK</input>
                    </td>
                    <td>
                    <input src='htmlspecialchars($self)' type='button' name='remove$i' value='Remove'></input>
                    </td>
                </tr>";
                    }
                    if ($i % 2 == 0) {
                        echo "
                <tr class='alt'>
                    <th scope='row'>$i</th>
                    <td>".$info['username']."</td>
                    <td>".$info['email']."</td>
                    <td>".$info['status']."</td>
                    <td>".$info['gender']."</td>
                    <td>
                    <input src='mycontact.php' type='radio'  name='blunbl$i' value='block'>BLOCK</input>
                    <input src='mycontact.php' type='radio'  name='blunbl$i' value='unlock'>UNBLOCK</input>
                    </td>
                    <td>
                    <input src='htmlspecialchars($self)' type='button' name='remove$i' value='Remove'></input>
                    </td>
                </tr>
                ";
                    }
                    echo $_GET['block'];
                    $i++;
                }
                }
                
                ?>

                </tbody>
            </table>
        </div><!-- /example -->

        <div>  
            <table id="contacts" style="right">
                <tbody>
                    <tr>
                <h2 style="font-family:Helvetica">MY FOES  <input src="addfriend.php" type="button" name="addfr" value="Add Foe"></input></h2>
                </tr>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                    <th>Remove Foe</th>
                </tr>
                <?php
                for ($i = 1; $i <= 5; $i++) {
                    if ($i % 2 == 1) {
                        echo "
                <tr>
                    <th scope='row'>$i</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>
                    <input src='htmlspecialchars($self)' type='button' name='remove$i' value='Remove'></input>
                    </td>
                </tr>";
                    }
                    if ($i % 2 == 0) {
                        echo "
                <tr class='alt'>
                    <th scope='row'>$i</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>
                    <input src='htmlspecialchars($self)' type='button' name='remove$i' value='Remove'></input>
                    </td>
                </tr>
                ";
                    }
                }

                $conn->close();
                ?>

                </tbody>
            </table>
        </div><!-- /example -->        

    </body>
</html>
