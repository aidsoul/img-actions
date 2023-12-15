<?php

namespace AidSoul\ImageActions\Compression;

/**
 * SimpleCompression
 *
 * @author AidSoul <work-aidsoul@outlook.com>
 */
class SimpleCompression
{
    /**
     * Compression function
     *
     * @param string $imagePath
     * @param string $saveImagePath
     * @param [type] $quality
     * @return void
     */
    public static function compression(string $imagePath, string $saveImagePath, $quality)
    {
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
