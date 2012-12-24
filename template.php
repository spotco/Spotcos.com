<!DOCTYPE html>
<html lang="en">
<head>
<link href="favicon.png" type="image/png" rel="shortcut icon" />      
<title>spotcos.com</title>
<link href='http://fonts.googleapis.com/css?family=Comfortaa|Lora' rel='stylesheet' type='text/css'>
<script src="jquery.js"></script>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="bootstrap/js/bootstrap.min.js"></script>
<style>
body {
    padding-top: 40px;
    font-family: 'Lora', sans-serif;
    background-image: url("bg_tex/1.png");
}
#navbar {
    float:left;
    margin-left:20px;
    font-family: 'Comfortaa', sans-serif;
    width:98%;
}

ul {
    list-style-type: none;
}

hr {
    border-color:#2e2e2e;
}

.navbar .brand {
    padding: 0px 0px;
    margin-right:10px;
}

#navbar_icon {
    color:#e9e9e9;
}

#maincontainer {
    color:#e9e9e9;
    padding: 30px 20px 30px 20px;
}

#navbar_body {
  background-color: #424242;
  border-color: #424242;
  background-image: none;
  border:none;
}

.subheader {
    font-style: italic;
}

.navbar_icon:not(.current):hover {
    background-color:#2e6d82;
    color:white;
}

.current {
    background-color:#3299bb;
    color:white !important;
}

#topbar {
	position:absolute !important;
}
.navbar-inverse .nav > li > a:focus, .navbar-inverse .nav > li > a:hover {color:inherit;}
.navbar-inverse .brand, .navbar-inverse .nav > li > a {color:inherit;}
</style>

<script></script>

</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top" id="topbar">
      <div class="navbar-inner" id="navbar_body">

        <div class="container" id="navbar"> 
            <a class="brand" href="?page=home"><img src="assets/logo.png" /></a>
            <div class="nav-collapse">
            <ul class="nav">
                <?php
                    foreach (array("home","projects","art","about","reviews","chat") as $key => $value) {
                        ?><li class="navbar_icon <?= $value == $page ? "current":"" ?>"><a href="?page=<?=$value?>"><?=$value?></a></li><?php
                    }
                ?>
            </ul>
            </div><!--/.nav-collapse -->
            <div class="secondary-nav" style="float:right;">
                <a href="mailto:mootothemax@gmail.com">
                    <img src="assets/gmail.png" style="height:40px;width:40px;" />
                </a>
                <a href="http://facebook.com/spotcosy">
                    <img src="assets/facebook.png" style="height:40px;width:40px;" />
                </a>
                <a href="http://github.com/spotco">
                    <img src="assets/github.png" style="height:40px;width:40px;" />
                </a>
                <a href="http://steamcommunity.com/profiles/76561197995620376">
                    <img src="assets/steam.png" style="height:40px;width:40px;" />
                </a>
            </div>
        </div>

      </div>
    </div>

    <div class="container" id="maincontainer">
        <?php include("content/$page.php"); ?>
    </div>

</body>
</html>