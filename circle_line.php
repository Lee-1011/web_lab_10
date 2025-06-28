<?php
header("Content-Type: image/png");

$image = imagecreate(400, 200);

// Colors
$white = imagecolorallocate($image, 255, 255, 255);
$green = imagecolorallocate($image, 0, 255, 0);
$purple = imagecolorallocate($image, 128, 0, 128);

// Draw circle
imagefilledellipse($image, 100, 100, 100, 100, $green);

// Draw line
imageline($image, 200, 50, 350, 150, $purple);

imagepng($image);
imagedestroy($image);
?>
