<html>
    <head>
<style>
header {
    background-color:indigo;
    color:white;
    text-align:center;
    height:120px;
    //padding:3px;
}

nav {
    line-height:80px;
    width:140px;
    background-color:#DF5500;
    float:left;
    padding:px;
    text-align: center;
}

aside {
    text-align:center;
    background-color:#DF5500;
    height:300px;
    width:250px;
    float:right;
    padding:5px;	      
}
section {
    width:350px;
    float:left;
    padding:10px;	 	 
}
footer {
    background-color:orangered;
    color:white;
    clear:both;
    text-align:center;
    padding:5px;	 	 
}
a{
    color:white;
    text-decoration:none;
    text-transform: capitalize;
}
</style>
</head>

<body>
    <header><h1 style="font-family:verdana" align="center"><br>Welcome to Metube!</h1>
        <?php
        session_start();
        echo "<h5 style='font-family:verdana' align='right'>Welcome  ";
        ?>
        <a style="text-decoration:underline" href="myprofile.php" target="center" ><?php echo $_SESSION["useName"]?></a>
        !
        </h5>

        </header>

    
    <nav>

<h3 style="font-family:verdana;"><a href="loginindex.php" class="current" >Home</a><br>
<a href="movies.php" target="center" >Most Viewed<br></a>
<a href="news.php"target="center">Most Recent<br></a>
<a href="tv.php" target="center">Movies<br></a>
<a href="sport.php" target="center">Sport<br></a>
<a href="news.php"target="center">News<br></a>
<a href="news.php"target="center">Education<br></a>
<a href="news.php"target="center">TV<br></a>
<a href="channel.php" target="center">My Channel<br></a>
<a href="mycontact.php" target="center">My Contacts<br></a>
</h3>
<div class="clearfloat"></div>

</nav>
<section>
    <iframe frameborder="0" src="mainpage.php" width="910" height="515" name='center'></iframe>
        
    </section>
    
</body>
</html>