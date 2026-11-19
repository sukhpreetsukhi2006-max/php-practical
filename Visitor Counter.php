
<?php
$file = "counter.txt";

// Check whether file exists
if (file_exists($file)) {
    $count = (int) file_get_contents($file);
} else {
    $count = 0;
}

// Increase visitor count
$count++;

// Save count in file
file_put_contents($file, $count);

// Display visitor count
echo "<h2>Welcome to My Website</h2>";
echo "Total Visitors: " . $count;
?>