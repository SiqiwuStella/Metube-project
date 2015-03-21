<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
<style>
header {
    width:100%;
    background-color:indigo;
    color:white;
    text-align:center;
    padding:5px;
}


nav {
    line-height:80px;
    width:140px;
    background-color:#DF5500;
    float:left;
    padding:5px;
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
    background-color:indigo;
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
    <header><h1 style="font-family:verdana">Welcome to Metube!</h1></header> 

    
    <nav>

<h3 style="font-family:verdana;"><a href="index.php" class="current" >Home</a><br>
<a href="movies.php" target="center" >Most Viewed<br></a>
<a href="news.php"target="center">Most Recent<br></a>
<a href="tv.php" target="center">Movies<br></a>
<a href="sport.php" target="center">Sport<br></a>
<a href="news.php"target="center">News<br></a>
<a href="news.php"target="center">Education<br></a>
<a href="news.php"target="center">TV<br></a>
</h3>
<div class="clearfloat"></div>

</nav>

    <!--<nav><h4 style="font-family:verdana">My&nbspChannel <br>Media<br> Movies<br> TV<br> Sports<br></nav>-->
    <aside>
        
        <iframe frameborder="0"  src="login and register.php" width="600" height="300" target="iframelogin"></iframe>
    
    </aside>
<section>
    <iframe frameborder="0" src="mainpage.php" width="640" height="515" name='center'></iframe>
        
    </section>
        
        
    </body>
</html>
