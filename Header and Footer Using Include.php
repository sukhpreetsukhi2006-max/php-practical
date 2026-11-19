 header.php
php

file 1:header.php
<?php
echo "<html>";
echo "<body>";
echo "<h1>My Website</h1>";
echo "<hr>";
?>

File 2: footer.php
php


<?php
echo "<hr>";
echo "<p>Copyright 2026 My Website</p>";
echo "</body>";
echo "</html>";
?>

File 3: index.php
php


<?php
include 'header.php';
?>

<h2>Home Page</h2>
<p>Welcome to my website.</p>

<?php
include 'footer.php';
?>


