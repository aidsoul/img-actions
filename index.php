<?php
use AidSoul\ImageActions\Compression\JpegCompression;
use AidSoul\ImageActions\Compression\SimpleCompression;

include_once 'vendor/autoload.php';

$base = new JpegCompression('test/test.jpg');
$base->setImageCompressionQuality(50)
->save('test/test-imagick.jpg');

SimpleCompression::compression('test/test.jpg', 'test/test-new.jpg', 50);
