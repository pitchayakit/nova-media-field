<?php


namespace OptimistDigital\MediaField;

use Laravel\Nova\Tool;

class NovaMediaLibrary extends Tool
{

    public static function getImageSizes()
    {
        return array_merge(['thumbnail' => [
            'width' => 150,
            'height' => 150,
            'crop' => true,
        ]], config('nova-media-field.image_sizes', []));
    }
}
