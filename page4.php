<?php
session_start();
echo "<body style='background-color : ".$_SESSION['color']."'></body>";

?>
<a href="/index.php">PAGE 1</a>
<a href="/page2.php">PAGE 2</a>
<a href="/page3.php">PAGE 3</a>