<?php

namespace AidSoul\ImageActions\Compression;

/**
 * Undocumented class
 */
class SimpleCompression
{

    public static function compression(string $imagePath, string $saveImagePath, $quality){
        $info = getimagesize($imagePath);

        if ($info['mime'] == 'image/jpeg') {
            $image = imagecreatefromjpeg($imagePath);
        } elseif ($info['mime'] == 'image/gif') {
            $image = imagecreatefromgif($imagePath);
        } elseif ($info['mime'] == 'image/png') {
            $image = imagecreatefrompng($imagePath);
        }
    
        imagejpeg($image, $saveImagePath, $quality);
    
        return $saveImagePath;
    }
}
