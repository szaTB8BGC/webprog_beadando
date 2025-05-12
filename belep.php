<!DOCTYPE html>
<head>
    <title>Belépés </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css"> 
</head>
<body> 
<header>
       
        <div class="php">
        <?php
session_start();
include("felul.php");
include ("regisztráció.php")
?>

</header>
<main><h2>Bejelentkezés / Regisztráció</h2>

<form method="post">
<input type="text" name="username" placeholder="Felhasználónév" required=""><br>
    <input type="password" name="password" placeholder="Jelszó" required=""><br>
    <input type="text" name="fullname" placeholder="Teljes név (csak regisztrációhoz)"><br>
    <button name="login" type="submit">Belépés</button>
    <button name="register" type="submit">Regisztráció</button>
</form></main>
<script src="scripts.js"></script>
<footer>Készítette: Tóth Szabolcs Botond (TB8BGC)</footer>

</body>
</html>







