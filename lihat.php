<?php
$file = fopen("data.csv", "r");

while (!feof($file)) {
    echo fgets($file) . "<br>";
}

fclose($file);
?>
