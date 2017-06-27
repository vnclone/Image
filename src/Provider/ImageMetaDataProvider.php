<?php
namespace vnclone\ImageMetaData\Provider;
use Illuminate\Support\ServiceProvider;
use vnclone\ImageMetaData\Classes\HtmlProxy;
use vnclone\ImageMetaData\Commands\ClearStaticCache;
class ImageMetaDataProvider extends ServiceProvider
{
 
    public function provides()
    {
        return [
            'ImageMetaData'
        ];
    }
}
