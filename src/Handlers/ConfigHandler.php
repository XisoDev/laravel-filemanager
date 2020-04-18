<?php

namespace XisoDev\LaravelFilemanager\Handlers;

class ConfigHandler
{
    public function userField()
    {
        return auth()->id();
    }

    public function AllowSharedFolder(){
        return true;
    }

    public function SharedFolderName(){
        return "share";
    }

    public function FolderName($file_type = 'file'){
        $folder = 'files';
        if($file_type == 'image') $folder = 'images';

        return $folder;
    }

    public function StartView($file_type = 'file'){
        $startup_view = 'list';
        if($file_type == 'image') $startup_view = 'grid';

        return $startup_view;
    }

    public function MaxSize($file_type = 'file'){
        $max_size = 10240; // kb
        if($file_type == 'image') $max_size = 2048; //kb

        return $max_size;
    }
}
