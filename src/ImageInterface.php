<?php
namespace vnclone\ImageMetaData;

use vnclone\ImageMetaData\Metadata\Aggregate;
use vnclone\ImageMetaData\Metadata\UnsupportedException;
use vnclone\ImageMetaData\Metadata\Exif;
use vnclone\ImageMetaData\Metadata\Iptc;
use vnclone\ImageMetaData\Metadata\Xmp;

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
