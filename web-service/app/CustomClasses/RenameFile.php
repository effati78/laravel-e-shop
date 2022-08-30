<?php


namespace App\CustomClasses;

class RenameFile
{
    public $file;

    public function __construct($file)
    {
        $this->file = $file;
    }

    /**
     * It is important to save files as unique!
     * This function rename uploaded files to a unique name and return new name!
     * @param void
     * @return string
     */
    public function createNewFileName()
    {
        $file = $this->file;
        $file_name = str_random(18);
        return $file_name . '.' . $file->getClientOriginalExtension();
    }
}
