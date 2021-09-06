<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Spatie\Image\Image;
use Spatie\Image\Manipulations;

trait CreatingImage {

    function saveImage($request, $slug)
    {
        $url = $slug .'.'. $request->file('file')->extension();

        Image::load($request->file('file')->storePubliclyAs('/images/exhibitors/full/', $url))
            ->fit(Manipulations::FIT_CROP, 300, 300)
            ->optimize()
            ->save();
    }


}
