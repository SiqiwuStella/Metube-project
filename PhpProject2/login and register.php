<?php
session_start();
if(!$_POST["login"]):
    
?>
<html>
    <body>
  <h5 style="font-family:verdana">
      <br>
      <form action="login and register.php" method="post">
          <input type="hidden" name="login" value="1">
      Username: <br><input type="text" name="usnm"><br/><br/>
      Password: <br><input type="password" name="passw"><br/></br>
      <input type="submit" value="LOGIN"><br>
      <h5>
          </form>
        <br>
        <h4 style="font-family:verdana">New here?
<form action="register.php" method="post">
        <button type="submit"  name="register" value="0">REGISTER</button>
</form></h4>
        

    </body>
</html>
<?php
else:
    
    $_POST["login"]=0;
    $_SESSION["useName"]=$_POST["usnm"];
    $useName=$_SESSION["useName"];
    $Pass=$_POST["passw"];
If(($useName!="none")&&($Pass!="none")&&($useName!="")&&($Pass!=""))
        {
            
                echo "<h5><br><A target='_top' href='loginindex.php'>Login</a></h5>";
              
        }
 else 
 {
     echo "<h5>One or more blank is missing.<br> Please try again</h5>";  
     echo "<br><A href = 'login and register.php'> <h5>Return</h5></a> ";
 }
    ?>

<?php
    
endif;