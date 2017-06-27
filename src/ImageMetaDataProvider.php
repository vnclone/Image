<?php
namespace vnclone\ImageMetaData;
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
