<?php
session_start();
$page = $_GET['page'] ?? 'home';
$allowed = ['fooldal', 'kepek', 'kapcsolat', 'uzenetek', 'belep', 'kilep'];
if (!in_array($page, $allowed)) $page = 'fooldal';

include 'fooldal.php';
?>