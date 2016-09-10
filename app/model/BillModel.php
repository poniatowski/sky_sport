<?php

namespace App\Model;

class BillModel extends BaseModel {

    public $fileName;

    /**
     * Create file name with json data
     * @param string $fileName
     */
    public function __construct($fileName = 'string')
    {
        $this->fileName = $fileName;
    }

    /**
     * Get all information about client bill and packages
     * @param $fileName
     * @return bool|string
     */
    public function getBill($fileName)
    {
        if (file_exists('./../' .LIB . $fileName) && $fileName !== null) {
            $file = './../' . LIB . $fileName;
        } else {
            $file = $this->fileName;
        }

        if(!empty($file))
            return file_get_contents($file, true);

        return false;
    }

    public function edit(){}
    public function destroy(){}

}