<?php
namespace vnclone\Image\Provider;
use Illuminate\Support\ServiceProvider;
use vnclone\Image\Classes\HtmlProxy;
use vnclone\Image\Commands\ClearStaticCache;
class imageProvider extends ServiceProvider
{
 
    public function provides()
    {
        return [
            'Image'
        ];
    }
}
