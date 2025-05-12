<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Képek</title>
    <link rel="stylesheet" href="styles.css">
<body>
<header>
<h1>Képek</h1>
<div class="php">
        <?php
session_start();
include("felul.php");
?></header>
<main>
    <h2>Képek</h2>
<div class="kepek">
<img src="imgs_vids/macska1.jpg" width="200"><img src="imgs_vids/macska2.jpg" width="200"></div></main>
<?php
if (isset($_SESSION['login']))
?>
<script src="scripts.js"></script>
<footer>Készítette: Tóth Szabolcs Botond (TB8BGC)</footer>
</body></html>