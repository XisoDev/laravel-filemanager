<?php


return [
    /*
    |--------------------------------------------------------------------------
    | Routing - 기본라우팅
    |--------------------------------------------------------------------------
     */

    'use_package_routes'       => true,

    /*
    |--------------------------------------------------------------------------
    | 공유폴더 및 개인폴더 - 둘 다 비활성화 하면 공유폴더는 자동으로 활성화됩니다.
    |--------------------------------------------------------------------------
     */

    'allow_private_folder'     => true,

    /*
     * 클라이언트 단에서 설정들을 사용자 정의할 수 있습니다.
     * 아래 설정들을 string 유형으로 변경하거나, 클래스로 대체하여 사용할 수 있습니다.
     * 상황에따라 유동적으로 활용하기 위해서는 반드시 클래스를 사용해야 합니다. 아래 artisan 명령어를 통해 설정 핸들러를 카피합니다.
     * php artisan vendor:publish --tag=lfm_handler
     * 그런 다음, 카피된 핸들러의 네임스페이스로 아래 값을 변경합니다.
     */

    //userField() 함수를 생성합니다.
    'private_folder_name'      => XisoDev\LaravelFilemanager\Handlers\ConfigHandler::class,

    //AllowSharedFolder() 함수를 생성합니다.
    'allow_shared_folder'      => XisoDev\LaravelFilemanager\Handlers\ConfigHandler::class,

    //SharedFolderName() 함수를 생성합니다.
    'shared_folder_name'       => XisoDev\LaravelFilemanager\Handlers\ConfigHandler::class,

    /*
    |--------------------------------------------------------------------------
    | 유형별 폴더명을 정의합니다.
    |--------------------------------------------------------------------------
     */

    'folder_categories'        => [
        'file'  => [
            //FolderName($file_type = 'file')
            'folder_name'  => XisoDev\LaravelFilemanager\Handlers\ConfigHandler::class,
            //StartView($file_type = 'file')
            'startup_view' => XisoDev\LaravelFilemanager\Handlers\ConfigHandler::class,
            //MaxSize($file_type = 'image')
            'max_size'     => XisoDev\LaravelFilemanager\Handlers\ConfigHandler::class, // size in KB
            'valid_mime'   => [
                'image/jpeg',
                'image/pjpeg',
                'image/png',
                'image/gif',
                'image/svg+xml',
            ],
        ],
        'image' => [
            //FolderName($file_type = 'image')
            'folder_name'  => XisoDev\LaravelFilemanager\Handlers\ConfigHandler::class,
            //StartView($file_type = 'image')
            'startup_view' => XisoDev\LaravelFilemanager\Handlers\ConfigHandler::class,
            //MaxSize($file_type = 'image')
            'max_size'     => XisoDev\LaravelFilemanager\Handlers\ConfigHandler::class, // size in KB
            'valid_mime'   => [
                'image/jpeg',
                'image/pjpeg',
                'image/png',
                'image/gif',
                'image/svg+xml',
                'application/pdf',
                'text/plain',
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Upload / Validation
    |--------------------------------------------------------------------------
     */
    'disk'                     => 'public',

    'rename_file'              => false,
    'alphanumeric_filename'    => false,
    'alphanumeric_directory'   => false,
    'should_validate_size'     => false,
    'should_validate_mime'     => false,

    // 파일명이 같은경우 덮어쓰기할 수 있습니다.
    'over_write_on_duplicate'  => false,

    /*
    |--------------------------------------------------------------------------
    | 썸네일 (미리보기 이미지)
    |--------------------------------------------------------------------------
     */

    // 활성화 된 경우, 업로드되는동안 이미지의 썸네일을 자동 생성합니다.
    'should_create_thumbnails' => true,
    'thumb_folder_name'        => 'thumbs',

    // 리스트 유형에 사용할 썸네일 MIME타입을 정의합니다..
    'raster_mimetypes'         => [
        'image/jpeg',
        'image/pjpeg',
        'image/png',
    ],

    'thumb_img_width'          => 200, // px
    'thumb_img_height'         => 200, // px

    /*
    |--------------------------------------------------------------------------
    | 확장자별 파일 유형을 정의합니다.
    |--------------------------------------------------------------------------
     */

    'file_type_array'          => [
        'pdf'  => 'Adobe Acrobat',
        'doc'  => 'Microsoft Word',
        'docx' => 'Microsoft Word',
        'xls'  => 'Microsoft Excel',
        'xlsx' => 'Microsoft Excel',
        'zip'  => 'Archive',
        'gif'  => 'GIF Image',
        'jpg'  => 'JPEG Image',
        'jpeg' => 'JPEG Image',
        'png'  => 'PNG Image',
        'ppt'  => 'Microsoft PowerPoint',
        'pptx' => 'Microsoft PowerPoint',
    ],

    /*
    |--------------------------------------------------------------------------
    | php.ini override
    |--------------------------------------------------------------------------
    | 파일이 업로드 하기 전, php.ini 설정보다 우선하여 오버라이드 합니다.
    | 원하지 않는 경우 false 로 변경할 수 있습니다.
    | 'upload_max_filesize' & 'post_max_size' 설정은 지원되지 않습니다.
     */
    'php_ini_overrides'        => [
        'memory_limit' => '256M',
    ],
];
