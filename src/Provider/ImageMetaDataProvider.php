<?php
namespace vnclone\ImageMetaData\Provider;
use Illuminate\Support\ServiceProvider; 
class ImageMetaDataProvider extends ServiceProvider
{
 
    public function provides()
    {
        return [
            'ImageMetaData'
        ];
    }
}
