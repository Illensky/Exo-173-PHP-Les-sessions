<?php
session_start();
if (isset($_POST['color'])) {
    $_SESSION['color'] = $_POST['color'];
}
echo "<body style='background-color : ".$_SESSION['color']."'>";

?>
<form action="" method="post">
    <select name="color" id="color">
        <option value="red">red</option>
        <option value="blue">blue</option>
        <option value="yellow">yellow</option>
        <option value="brown">brown</option>
        <option value="purple">purple</option>
    </select>
    <input type="submit" value="submit">
</form>
<a href="/page2.php">PAGE 2</a>
<a href="/page3.php">PAGE 3</a>
<a href="/page4.php">PAGE4</a>
</body>