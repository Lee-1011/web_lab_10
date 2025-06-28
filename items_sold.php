<?php
header("Content-Type: image/png");

$image = imagecreate(400, 100);

// Colors
$yellow = imagecolorallocate($image, 255, 255, 0); // Background
$black = imagecolorallocate($image, 0, 0, 0); // Text

// Add bold text
imagestring($image, 5, 110, 40, "100 Items Sold", $black);

imagepng($image);
imagedestroy($image);
?>
