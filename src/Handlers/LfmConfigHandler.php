<?php

namespace App\Handlers;

class LfmConfigHandler extends \XisoDev\LaravelFilemanager\Handlers\ConfigHandler
{
    public function userField()
    {
        return parent::userField();
    }

    public function AllowSharedFolder()
    {
        return parent::AllowSharedFolder();
    }

    public function SharedFolderName()
    {
        return parent::SharedFolderName();
    }

    public function FolderName($file_type = 'file')
    {
        return parent::FolderName($file_type);
    }

    public function StartView($file_type = 'file')
    {
        return parent::StartView($file_type);
    }

    public function MaxSize($file_type = 'file')
    {
        return parent::MaxSize($file_type);
    }
}
