<?php
header("Content-Type: image/png");

$image = imagecreatetruecolor(400, 100);

// Colors
$gray = imagecolorallocate($image, 230, 230, 230);
$black = imagecolorallocate($image, 0, 0, 0);

// Fill background
imagefill($image, 0, 0, $gray);

// Path to font file (must be in same folder)
$font = "OpenSans.ttf"; // change if using another font

// Add text
imagettftext($image, 20, 0, 100, 60, $black, $font, "Hello, User!");

imagepng($image);
imagedestroy($image);
?>
