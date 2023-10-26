<?php

namespace Source\Support;

use CoffeeCode\Cropper\Cropper;

/**
 * DELIVERY | Class Thumb
 *
 * @author Fernando C. Sena <fernandocarvalho.sena@gmail.com>
 * @package Source\Core
 */
class Thumb
{
    /** @var Cropper */
    private $cropper;

    /** @var string */
    private $uploads;

    /**
     * Thumb constructor.
     */
    public function __construct()
    {
        $this->cropper = new Cropper(CONF_IMAGE_CACHE, CONF_IMAGE_QUALITY['jpg'], CONF_IMAGE_QUALITY['png']);
        $this->uploads = CONF_UPLOAD_DIR;

    }

    /**
     * @param string $image
     * @param int $width
     * @param int|null $height
     * @return string
     */
    public function make(string $image, int $width, ?int $height = null): string
    {
        if(strpos($image, url("/")) !== false){
            $image = str_replace(url("/"), "", $image);
        }else{
            $image = "{$this->uploads}/{$image}";
        }

        return $this->cropper->make("{$image}", $width, $height);
    }

    /**
     * @param string|null $image
     */
    public function flush(?string $image = null): void
    {
        if ($image) {
            $this->cropper->flush("{$this->uploads}/{$image}");
            return;
        }

        $this->cropper->flush();
        return;
    }

    /**
     * @return Cropper
     */
    public function cropper(): Cropper
    {
        return $this->cropper;
    }
}