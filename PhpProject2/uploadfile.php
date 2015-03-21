<?php
echo "Hello";
//$uploaddir='Macintosh HD/Applications/MAMP/htdocs';
$uploadfile=$_FILES['userfile']['name'];

print "<pre>";
if (move_uploaded_file($_FILES['userfile']['tmp_name'],$uploadfile))
{
    print "Upload Succeeded! Debug information is as below:\n";
    print_r($_FILES);
}
else
    {
    print "Upload failed. Debug information is as below:\n";
    print_r($_FILES);
}
print "</pre>";
?>
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

