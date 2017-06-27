<?php
namespace vnclone\Image;

use vnclone\Image\Metadata\Aggregate;
use vnclone\Image\Metadata\UnsupportedException;
use vnclone\Image\Metadata\Exif;
use vnclone\Image\Metadata\Iptc;
use vnclone\Image\Metadata\Xmp;

/**
 * @author Daniel Chesterton <daniel@chestertondevelopment.com>
 */
interface ImageInterface
{

    /**
     * @param $filename
     *
     * @return bool
     */
    public function save($filename = null);

    /**
     * @return string
     */
    public function getBytes();

    /**
     * @param $filename
     */
    public function setFilename($filename);

    /**
     * @return Xmp
     * @throws UnsupportedException
     */
    public function getXmp();

    /**
     * @return Exif
     * @throws UnsupportedException
     */
    public function getExif();

    /**
     * @return Iptc
     * @throws UnsupportedException
     */
    public function getIptc();

    /**
     * @return Aggregate
     */
    public function getAggregate();

    public static function fromFile($filename);
}
