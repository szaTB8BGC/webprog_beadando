<h3><a href="fooldal.php">Főoldal</a> <a href="kepek.php">Képek</a> <a href="kapcsolat.php">Kapcsolat</a> <a href="uzenetek.php">Üzenetek</a>
<?php if(!isset($_SESSION['login'])) echo '<a href="belep.php">Belépés</a>';
else echo '<a href="kilep.php">Kilépés</a>';
echo"<h2>";
if (isset($_SESSION['login']))
echo "Be van jelentkezve:" .$_SESSION['login']."".$_SESSION['csn']."".$_SESSION['un'];
else echo "Nincs bejelentkezve"; 
echo "</h2>"; ?></h3>