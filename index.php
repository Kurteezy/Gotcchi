<?php
$page = (isset($_GET['page']) && $_GET['page'] !='') ? $_GET['page'] : '';
?>
<!DOCTYPE HTML>
<html>
<head>
    <script src="javascript/javascript.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Karla:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylesheet/stylesheet.css">
    <title>
        Gotcchi
    </title>
  
</head>
<body>
    <div id="wrapper">
    <div id="head">
    <div id="head2">
       <div class="typewriter">
        <div class="intro">
    <h1>[  "Hi, Audrey ko.",<br>"I love you very much.",<br>"I hope you forgive me!"   ]</h1>    
        </div>
       </div>
        </div>
        </div>
    <div id="nav"> 
        <div class="nav">
  <ul>
      <li><a href="index.php">ABOUT HER</a></li>
      <li><a href="index.html">OUR PICS</a></li>
      <li><a href="dist/index.html">THOUGHTS?</a></li>
        </ul>
            </div>
    </div>    
        <?php
        switch($page){
                case"red":
                include"works.php";
            break; 
                case"green":
                include"contact.php";
            break; 
            default:    
                include"aboutme.php";
            break; 
        }    
    ?>
      
    
    
    
    
    
    
    
    
    </div>
    </body>
</html>