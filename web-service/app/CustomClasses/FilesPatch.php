<?php

namespace App\CustomClasses;

use Carbon\Carbon;

class FilesPatch
{
    /*
     *  Please Set the section names in camelCase format.
     *  This constant variable will use to set "sectionName" in $this->getPatch() function.
     */
    const USERPANEL = 'userPanel';

    /**
     * Get Patch of a Directory
     * @param $sectionName : The name of main sections in project such as : userPanel, AdminPanel , SellerPanel , Shop and mainSite
     * @param $folderName : The folderName such as : 'Tickets'.
     * @return string
     */
    static public function getPatch($sectionName, $folderName)
    {
        $date = Carbon::now();
        $folder = $date->format('Y') . '/' . $date->format('F');
        $patch = '/' . $sectionName . '/' . $folderName . '/' . $folder;

        if (\Illuminate\Support\Facades\File::exists(storage_path('app/public/' . $patch))) {
            //patch is exist, so return it
            return $patch . '/';
        }
        //create patch and return that.
        \Illuminate\Support\Facades\File::makeDirectory(storage_path('app/public/' . $patch), 0777, true, true);
        return $patch . '/';
    }
}
