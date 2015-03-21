<?php
if(!$_POST["UploadAction"]):
?>

<html>
    <head>
        <title>
            Upload
        </title>
    </head>
    <body>
                <table><center>
                        <form enctype="multipart/form-data" name="SubmitForm" action="uploadfile2.php" method="post">
                            <input type="hidden" name="max_file_size" value="1000000">
                            <input type="hidden" name="UploadAction" value="1">
                            <TR>
                                <TD><input name="userfile" type="file" size="30"></td>
                            </TR>
                            <TR>
                                <TD><input name="submit" value="upload" type="submit"></td>
                                <TD><input name="reset" value="reset" type="reset"></td>
                            </TR>
                        </form>
            </center>
                </table>       
    </body>
</html>
<?php
else:
?>

<html>
    <head>
        <title>
            FILE UPLOAD
        </title>
    </head>
    <body>
        <?php
        $_POST["UploadAction"] = 0;
        $TimeLimit=60;
        set_time_limit($TimeLimit);
        //$uploaddir='Macintosh HD/Applications/MAMP/htdocs';
        //$uploadfile=$uploaddir.$_FILES['userfile']['name'];
        $uploadfile=$_FILES['userfile']['name'];
        $tmpfile=$_FILES['userfile']['tmp_name'];
        $file_size=$_FILES['userfile']['size'];
        $errno=$_FILES['userfile']['error'];
        If(($tmpfile!="none")&&($tmpfile!=""))
        {
            If($file_size<1024)
            {
                $strFileSize=(string)$file_size."byte";
            }
            elseif($file_size<(1024*1024))
            {
                $strFileSize=number_format((double)($file_size/1024),1)."KB";
            }
        
 else
 {
     $strFileSize=number_format((double)($file_size/(1024*1024)),1)."MB";               
 }
 if(!file_exists($uploadfile))
 {
     if(move_uploaded_file($tmpfile, $uploadfile))
     {
         echo "File $uploadfile ($strFileSize)upload succeeded!";
     }
     else 
     {
         echo "File $uploadfile upload failed! (Error:$errno)";        
     }
 }  
 else 
     {
     echo "File $uploadfile exists!(Error:$errno)";
     }
 }
 else
 {
     echo "You didn't choose any upload file or your file exceeds $MAX_FILE_SIZE!";
 }
 set_time_limit(60);
 ?>
        <br><A href = "uploadfile2.php"> Return</a>
    </body>
        </html>
<?php
    endif;
?>




