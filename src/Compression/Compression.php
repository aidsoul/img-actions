<?php

namespace AidSoul\ImageActions\Compression;

use Imagick;

/**
 * Compression
 *
 * @author AidSoul <work-aidsoul@outlook.com>
 */
class Compression
{
    protected string $saveImagePath;
    protected int $compressionQuality = 80;
    protected Imagick $imagick;

    public const IMAGE_FORMAT_PNG = 'png';
    public const IMAGE_FORMAT_JPG = 'jpg';
    public const IMAGE_FORMAT_WEBP = 'webp';

    public function __construct(string $imagePath)
    {
        $this->imagick = new Imagick($imagePath);
    }

    /**
     * Set the value of compressionQuality
     *
     * @param int $compressionQuality
     * @return self
     */
    public function setImageCompressionQuality(int $compressionQuality): self
    {
        $this->imagick->setImageCompressionQuality($compressionQuality);

        return $this;
    }

    /**
     * Set image format
     *
     * @param string $format
     * @return void
     */
    public function setImageFormat(string $format){
        $this->imagick->setImageFormat($format);
    }

    /**
     * Action to save compression image
     *
     * @return void
     */
    protected function execute(): void
    {
    }

    /**
     * Save compression image
     *
     * @return string
     */
    public function save(string $saveImagePath): string
    {
        $this->execute();
        $this->imagick->writeImage($saveImagePath);
        return $saveImagePath;
    }
}
