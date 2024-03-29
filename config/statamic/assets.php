<?php

return [

    'image_manipulation' => [

        /*
        |--------------------------------------------------------------------------
        | Route Prefix
        |--------------------------------------------------------------------------
        |
        | The route prefix for serving HTTP based manipulated images through Glide.
        | If using the cached option, this should be the URL of the cached path.
        |
        */

        'route' => 'img',

        /*
        |--------------------------------------------------------------------------
        | Require Glide security token
        |--------------------------------------------------------------------------
        |
        | With this option enabled, you are protecting your website from mass image
        | resize attacks. You will need to generate tokens using the Glide tag
        | but may want to disable this while in development to tinker.
        |
        */

        'secure' => true,

        /*
        |--------------------------------------------------------------------------
        | Image Manipulation Driver
        |--------------------------------------------------------------------------
        |
        | The driver that will be used under the hood for image manipulation.
        | Supported: "gd" or "imagick" (if installed on your server)
        |
        */

        'driver' => 'gd',

        /*
        |--------------------------------------------------------------------------
        | Additional Image Extensions
        |--------------------------------------------------------------------------
        |
        | Define any additional image file extensions you would like Statamic to
        | process. You should ensure that both your server and the selected
        | image manipulation driver properly supports these extensions.
        |
        */

        'additional_extensions' => [
            // 'heic',
        ],

        /*
        |--------------------------------------------------------------------------
        | Save Cached Images
        |--------------------------------------------------------------------------
        |
        | Enabling this will make Glide save publicly accessible images. It will
        | increase performance at the cost of the dynamic nature of HTTP based
        | image manipulation. You will need to invalidate images manually.
        |
        */

        'cache' => false,
        'cache_path' => public_path('img'),

        /*
        |--------------------------------------------------------------------------
        | Image Manipulation Defaults
        |--------------------------------------------------------------------------
        |
        | You may define global defaults for all manipulation parameters, such as
        | quality, format, and sharpness. These can and will be be overwritten
        | on the tag parameter level as well as the preset level.
        |
        */

        'defaults' => [
            // 'quality' => 50,
        ],

        /*
        |--------------------------------------------------------------------------
        | Image Manipulation Presets
        |--------------------------------------------------------------------------
        |
        | Rather than specifying your manipulation params in your templates with
        | the glide tag, you may define them here and reference their handles.
        | They may also be automatically generated when you upload assets.
        | Containers can be configured to warm these caches on upload.
        |
        */

        'presets' => [

          // Standard images
          'sm-webp' => ['w' => 480, 'h' => 10000, 'q' => 90, 'fit' => 'contain', 'fm' => 'webp'],
          'md-webp' => ['w' => 768, 'h' => 10000, 'q' => 90, 'fit' => 'contain', 'fm' => 'webp'],
          'lg-webp' => ['w' => 1280, 'h' => 10000, 'q' => 90, 'fit' => 'contain', 'fm' => 'webp'],
          'xl-webp' => ['w' => 1440, 'h' => 10000, 'q' => 90, 'fit' => 'contain', 'fm' => 'webp'],
          '2xl-webp' => ['w' => 1680, 'h' => 10000, 'q' => 90, 'fit' => 'contain', 'fm' => 'webp'],
          '3xl-webp' => ['w' => 2000, 'h' => 10000, 'q' => 90, 'fit' => 'contain', 'fm' => 'webp'],

          'sm' => ['w' => 480, 'h' => 10000, 'q' => 90, 'fit' => 'contain'],
          'md' => ['w' => 768, 'h' => 10000, 'q' => 90, 'fit' => 'contain'],
          'lg' => ['w' => 1280, 'h' => 10000, 'q' => 90, 'fit' => 'contain'],
          'xl' => ['w' => 1440, 'h' => 10000, 'q' => 90, 'fit' => 'contain'],
          '2xl' => ['w' => 1680, 'h' => 10000, 'q' => 90, 'fit' => 'contain'],
          '3xl' => ['w' => 2000, 'h' => 10000, 'q' => 90, 'fit' => 'contain'],

          // News images
          'news-sm-webp' => ['w' => 480, 'h' => 240, 'q' => 90, 'fit' => 'crop_focal', 'fm' => 'webp'],
          'news-md-webp' => ['w' => 768, 'h' => 384, 'q' => 90, 'fit' => 'crop_focal', 'fm' => 'webp'],
          'news-lg-webp' => ['w' => 1280, 'h' => 640, 'q' => 90, 'fit' => 'crop_focal', 'fm' => 'webp'],
          'news-sm' => ['w' => 480, 'h' => 240, 'q' => 90, 'fit' => 'crop_focal'],
          'news-md' => ['w' => 768, 'h' => 384, 'q' => 90, 'fit' => 'crop_focal'],
          'news-lg' => ['w' => 1280, 'h' => 640, 'q' => 90, 'fit' => 'crop_focal'],

          // Team images
          'team-sm-webp' => ['w' => 480, 'h' => 480, 'q' => 90, 'fit' => 'crop_focal', 'fm' => 'webp'],
          'team-md-webp' => ['w' => 768, 'h' => 768, 'q' => 90, 'fit' => 'crop_focal', 'fm' => 'webp'],
          'team-sm' => ['w' => 480, 'h' => 480, 'q' => 90, 'fit' => 'crop_focal'],
          'team-md' => ['w' => 768, 'h' => 768, 'q' => 90, 'fit' => 'crop_focal'],

          // Visual (header, footer) images
          'visual-sm-webp' => ['w' => 900, 'h' => 506, 'q' => 90, 'fit' => 'crop_focal', 'fm' => 'webp'],
          'visual-md-webp' => ['w' => 1000, 'h' => 438, 'q' => 90, 'fit' => 'crop_focal', 'fm' => 'webp'],
          'visual-lg-webp' => ['w' => 1280, 'h' => 560, 'q' => 90, 'fit' => 'crop_focal', 'fm' => 'webp'],
          'visual-xl-webp' => ['w' => 1440, 'h' => 540, 'q' => 90, 'fit' => 'crop_focal', 'fm' => 'webp'],
          'visual-2xl-webp' => ['w' => 1600, 'h' => 600, 'q' => 90, 'fit' => 'crop_focal', 'fm' => 'webp'],
          'visual-sm' => ['w' => 900, 'h' => 506, 'q' => 90, 'fit' => 'crop_focal'],
          'visual-md' => ['w' => 1000, 'h' => 438, 'q' => 90, 'fit' => 'crop_focal'],
          'visual-lg' => ['w' => 1280, 'h' => 560, 'q' => 90, 'fit' => 'crop_focal'],
          'visual-xl' => ['w' => 1440, 'h' => 540, 'q' => 90, 'fit' => 'crop_focal'],
          'visual-2xl' => ['w' => 1600, 'h' => 600, 'q' => 90, 'fit' => 'crop_focal'],
          
          'max_upload_size' => ['w' => 2000, 'h' => 2000, 'fit' => 'max'],
        ],

        /*
        |--------------------------------------------------------------------------
        | Generate Image Manipulation Presets on Upload
        |--------------------------------------------------------------------------
        |
        | By default, presets will be automatically generated on upload, ensuring
        | the cached images are available when they are first used. You may opt
        | out of this behavior here and have the presets generated on demand.
        |
        */

        'generate_presets_on_upload' => false,

    ],

    /*
    |--------------------------------------------------------------------------
    | Auto-Crop Assets
    |--------------------------------------------------------------------------
    |
    | Enabling this will make Glide automatically crop assets at their focal
    | point (which is the center if no focal point is defined). Otherwise,
    | you will need to manually add any crop related parameters.
    |
    */

    'auto_crop' => true,

    /*
    |--------------------------------------------------------------------------
    | Control Panel Thumbnail Restrictions
    |--------------------------------------------------------------------------
    |
    | Thumbnails will not be generated for any assets any larger (in either
    | axis) than the values listed below. This helps prevent memory usage
    | issues out of the box. You may increase or decrease as necessary.
    |
    */

    'thumbnails' => [
        'max_width' => 10000,
        'max_height' => 10000,
    ],

    /*
    |--------------------------------------------------------------------------
    | File Previews with Google Docs
    |--------------------------------------------------------------------------
    |
    | Filetypes that cannot be rendered with HTML5 can opt into the Google Docs
    | Viewer. Google will get temporary access to these files so keep that in
    | mind for any privacy implications: https://policies.google.com/privacy
    |
    */

    'google_docs_viewer' => false,

    /*
    |--------------------------------------------------------------------------
    | Cache Metadata
    |--------------------------------------------------------------------------
    |
    | Asset metadata (filesize, dimensions, custom data, etc) will get cached
    | to optimize performance, so that it will not need to be constantly
    | re-evaluated from disk. You may disable this option if you are
    | planning to continually modify the same asset repeatedly.
    |
    */

    'cache_meta' => true,

    /*
    |--------------------------------------------------------------------------
    | Focal Point Editor
    |--------------------------------------------------------------------------
    |
    | When editing images in the Control Panel, there is an option to choose
    | a focal point. When working with third-party image providers such as
    | Cloudinary it can be useful to disable Statamic's built-in editor.
    |
    */

    'focal_point_editor' => true,

    /*
    |--------------------------------------------------------------------------
    | Enforce Lowercase Filenames
    |--------------------------------------------------------------------------
    |
    | Control whether asset filenames will be converted to lowercase when
    | uploading and renaming. This can help you avoid file conflicts
    | when working in case-insensitive filesystem environments.
    |
    */

    'lowercase' => true,

];
