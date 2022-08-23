<?php

session_start();
/*
    Linje 8-10: Modtager image token fra check.php, hvis billedet er et ansigt, kører den sessionen 'faces' hvor den generer en src="image.php?token=0000000000"
    Linje 12+: Hvis der er et ansigt, kører den Foreach loopet på Linje18. Hvor der defineres at den skal loope x gange.
*/
$imagetoken = $_GET['token'];
$faces = $_SESSION['faces'][$imagetoken];
$image = imagecreatefromjpeg("feed/" . $imagetoken . ".jpg");

foreach ($faces as $key => $face) {
    $face = json_decode($face);
    $faceColorR = $_SESSION['faces']['colors'][$key][0];
    $faceColorG = $_SESSION['faces']['colors'][$key][1];
    $faceColorB = $_SESSION['faces']['colors'][$key][2];

    foreach ($face as $part) {
        for ($j = 0; $j < 5; $j++) {
            imagesetpixel($image, round($part->position->x), round($part->position->y), imagecolorallocate($image, $faceColorR, $faceColorG, $faceColorB));
            imagesetpixel($image, round($part->position->x - random_int(1, 3)), round($part->position->y + random_int(1, 3)), imagecolorallocate($image, $faceColorR, $faceColorG, $faceColorB));
            imagesetpixel($image, round($part->position->x + random_int(1, 3)), round($part->position->y + random_int(1, 3)), imagecolorallocate($image, $faceColorR, $faceColorG, $faceColorB));
            imagesetpixel($image, round($part->position->x + random_int(1, 3)), round($part->position->y - random_int(1, 3)), imagecolorallocate($image, $faceColorR, $faceColorG, $faceColorB));
            imagesetpixel($image, round($part->position->x - random_int(1, 3)), round($part->position->y - random_int(1, 3)), imagecolorallocate($image, $faceColorR, $faceColorG, $faceColorB));
        }
    }
}

header("Content-Type: image/png");
imagejpeg($image);
