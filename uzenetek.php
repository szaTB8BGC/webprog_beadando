<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Üzenetek</title>
 <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
<div class="php">
        <?php
session_start();
include("felul.php");
?>
</header>
<main><h2>Üzenetek</h2>
<table>
    <tbody><tr><th>Feladó</th><th>Email</th><th>Üzenet</th><th>Időpont</th></tr>
    </tbody></table></main>

<script src="scripts.js"></script>
<footer>Készítette: Tóth Szabolcs Botond (TB8BGC)</footer>

</body></html>