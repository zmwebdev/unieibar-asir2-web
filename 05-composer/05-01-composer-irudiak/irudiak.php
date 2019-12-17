<?php

// include composer autoload
//require __DIR__ . '/vendor/autoload.php';
require 'vendor/autoload.php';

// http://image.intervention.io/
// import the Intervention Image Manager Class
use Intervention\Image\ImageManagerStatic as Image;

// configure with favored image driver (gd by default)
Image::configure(array('driver' => 'imagick'));

// and you are ready to go ...
$image = Image::make('eibar.jpg')->resize(300, 200);

//// finally we save the image as a new file
//$image->save('eibar2.jpg');
//
$image->encode('png');
$type = 'png';
$base64 = 'data:image/' . $type . ';base64,' . base64_encode($image);

echo "<img src=$base64>";

//*********** */
// resize the image to a width of 300 and constrain aspect ratio (auto height)
$image = Image::make('eibar.jpg');
$image->resize(300, null, function ($constraint) {
    $constraint->aspectRatio();
});
$image->greyscale();


$image->encode('png');
$type = 'png';
$base64 = 'data:image/' . $type . ';base64,' . base64_encode($image);

echo "<img src=$base64>";

//*********** */
$image = Image::make('eibar.jpg');
// rotate image 45 degrees clockwise
$image->rotate(-45);

$image->encode('png');
$type = 'png';
$base64 = 'data:image/' . $type . ';base64,' . base64_encode($image);

echo "<img src=$base64>";
