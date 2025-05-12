<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title>Főoldal</title>
<link rel="stylesheet" href="styles.css"> <!--, sans-serif;-->
</head>
<body>
    <header>
    <h1>Főoldal</h1>
    <div class="php">
        <?php
session_start();
include("felul.php");
?>
</div>
</header>
<div><h4>Hogyan szeressünk egy macskát!</h4></div>
<div class="video-container">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/87p53rAD7Sk?si=J5-pPxXZG4rATskD" 
            title="YouTube video player" frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
    </iframe> <br>
    <video width="560" height= "315" controls>
  <source src="imgs_vids/received_210010698799748.mp4" type="video/mp4">
</video>
<div><h4>Kiscica és Nagymacska játszik</h4></div>
<div><footer>Készítette: Tóth Szabolcs Botond (TB8BGC)</footer>
</body>
</html>
