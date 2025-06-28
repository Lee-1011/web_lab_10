<?php
header("Content-Type: image/png");

$image = imagecreate(400, 100);
$blue = imagecolorallocate($image, 0, 0, 255);
$white = imagecolorallocate($image, 255, 255, 255);

imagestring($image, 5, 90, 40, "Welcome to Our Shop!", $white);

imagepng($image);
imagedestroy($image);
?>
