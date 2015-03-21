<html>
    <head>
        <style>

a{
    color:black;
    text-decoration:none;
}
</style>
    </head>
    <body>
<?php
// define variable and set them to null
$nameerr = $emailerr = $gendererr = $websiteerr = "";
$name = $email = $gender = $status = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
     $nameerr = "Name is required.";
   } else {
     $name = test($_POST["name"]);
     // 检查姓名是否包含字母和空白字符
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameerr = "Letters and spaces only."; 
     }
     
   }
   
   if (empty($_POST["email"])) {
     $emailerr = "Email is required";
   } else {
     $email = test($_POST["email"]);
     // 检查电子邮件地址语法是否有效
     if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
       $emailerr = "Email is invalid"; 
     }
   }
       
   if (empty($_POST["status"])) {
     $status = "";
   } else {
     $status = test($_POST["status"]);
   }

   if (empty($_POST["gender"])) {
     $gendererr = "Gender is required";
   } else {
     $gender = test($_POST["gender"]);
   }
}

function test($inpt) {
   $inpt = trim($inpt);
   $inpt = stripslashes($inpt);
   $inpt = htmlspecialchars($inpt);
   return $inpt;
}
?>
 
    <h2 style="color:indigo; font-family:verdana;text-align:center">My Profile</h2>
    <br>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
        <h3 style="color:indigo; font-family:verdana">
Name: <input type="text" name="name" maxlength="8"  placeholder="Enter Name" value="<?php echo $name;?>">
<span class="error">* <?php echo $nameerr;?></span>
<br><br>
E-mail: <input type="text" name="email" placeholder="Enter Email" value="<?php echo $email;?>">
<span class="error">* <?php echo $emailerr;?></span>
<br><br>
Status:<br> 
<textarea name="status" rows="3" cols="40" placeholder="I'm happy."><?php echo $status;?></textarea>
<br><br>
Gender:
<input type="radio" name="gender" value ="female" 
<?php if (isset($gender) && $gender=="female") echo 'checked="checked"';?>>Female
<input type="radio" name="gender" value="male" 
<?php if (isset($gender) && $gender=="male") echo 'checked="checked"';?>>Male
<span class="error">* <?php echo $gendererr;?></span>
<br><br>
<input style="color:indigo" type="submit" name="submit" value="Submit">
<input style="color:indigo" type="reset" name="reset" value="Reset">
</form>
</h3>
        

</body>
</html>