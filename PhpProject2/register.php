<?php
if(!$_POST["register"]):
?>
<html>
    <head>
        <style>
h4 {
    font-style: verdana;
}

h5 {
    font-style: verdana;
}
h3 {
    font-style: verdana;
}
a{
    color:black;
    text-decoration:none;
}
</style>
    </head>
    <body>
<h4>Please Register!</h4>
    <form action="register.php" method="post">
        <input type="hidden" name="register" value="1">
        <h5>
        Username:<br><input type="text" name="firstname"/><br>
        Email:<br><input type="email" name="eml"/><br>
        Password:<br><input type="password" name="password"/><br>
        Repeat Password:<br><input type="password" name="passwordr"/><br><br>
        <input type="submit" value="REGISTER"><br>
        <button type="submit" formaction="login and register.php">BACK</button>
        </h5>
    </form>
    </body>
</html>

<?php
else:
    //username unique
    $_POST["register"]=0;
    $Eml=$_POST["eml"];
    $FirstName=$_POST["firstname"];
    $PassWd=$_POST["password"];
    $PassWr=$_POST["passwordr"];
    $len=strlen($PassWd);
If(($FirstName!="none")&&($PassWd!="none")&&($Eml!="none")&&($PassWr!="none"))
        {
        If (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$Eml))
           {
             echo "Email invalid."; 
            }
            If($PassWd!=$assWr)
            {
                echo "<h5>Passwords don't match.</h5>";
                echo "<br><A href = 'register.php'> <h5>Try again.</h5></a> ";
            }
            else
            {
                if($len<6)
                {
                    echo "<h5>Password must be at least 6 characters.</h5>";
                    echo "<br><A href = 'register.php'> <h5>Try again.</h5></a> ";
                }
                else
                {
                echo "<h5>Register succeed!</h5>";
                echo "<h5><br><A href='login and register.php'>Return to login.</a></h5>";
                }                
            }  
        }
 else 
 {
     echo "<h5>One or more blank is missing.<br> Please try again</h5>";  
     echo "<br><A href = 'register.php'> <h5>Return</h5></a> ";
 }
?>
  
</body>
        </html>
    <?php
endif;



