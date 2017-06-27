<?php
namespace vnclone\image\Provider;
use Illuminate\Support\ServiceProvider;
use vnclone\image\Classes\HtmlProxy;
use vnclone\image\Commands\ClearStaticCache;
class imageProvider extends ServiceProvider
{
 
    public function provides()
    {
        return [
            'Image'
        ];
    }
}