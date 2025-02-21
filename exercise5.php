<?php
$colors = ["Red", "Blue", "Green", "Yellow", "Purple"];

echo "Original Colors:<br>";
foreach ($colors as $color) {
    echo $color . "<br>";
}

$colors[] = "Orange";

echo "<br>Updated Colors:<br>";
foreach ($colors as $color) {
    echo $color . "<br>";
}
?>
