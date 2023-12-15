# Example

```
<?php
include_once 'vendor/autoload.php';

use AidSoul\ImageActions\Compression\JpegCompression;
use AidSoul\ImageActions\Compression\SimpleCompression;

// Best compression
$bestCompression = new JpegCompression('test/test.jpg');
$bestCompression->setImageCompressionQuality(50)
->save('test/test-imagick.jpg');
// Simple compression
SimpleCompression::compression('test/test.jpg', 'test/test-new.jpg', 50);
