<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Kapcsolat</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
    <h1>Vegye fel velünk a kapcsolatot </h1>
    <div class="php">
        <?php
session_start();
include("felul.php");
?>
</header>
<main>
    <h2>Kapcsolat</h2>
<form method="post" id="contactForm">
    <input type="text" name="name" placeholder="Név" required=""> <br>
    <input type="email" name="email" placeholder="Email" required=""><br>
    <textarea name="message" placeholder="Üzenet" required=""></textarea><br>
    <button type="submit">Küldés</button>
</form></main>
<script src="scripts.js"></script>   
<footer>Készítette: Tóth Szabolcs Botond (TB8BGC)</footer>
</body>
</html>