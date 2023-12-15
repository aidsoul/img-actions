<?php

namespace AidSoul\ImageActions\Compression;

class JpegCompression extends Compression
{
    protected function execute(): void
    {
        // $newImage->setCompression(80);
        // $newImage->setCompressionQuality(50);
        $this->imagick->setImageCompression(\Imagick::COMPRESSION_JPEG);
        //   $newImage->newPseudoImage($image->getImageWidth(), $image->getImageHeight(), '');
        //   $newImage->compositeImage($image, Imagick::COMPOSITE_ATOP, 0, 0);
            // $newImage->setImageFormat("webp");
    }
}
