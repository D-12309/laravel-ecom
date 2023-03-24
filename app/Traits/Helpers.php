<?php

namespace App\Traits;


trait Helpers
{
    public static function storeFileInS3($fileName, $filePath)
    {
        $generateFileName = rand('1111111111', '9999999999') . "." . $fileName->getClientOriginalExtension();
        $destinationFileUrl = $filePath . "/" . $generateFileName;
        $filePath = $filePath."/";
        $fileName->storeAs($filePath, $generateFileName, 's3');
        return $destinationFileUrl;
    }

    public static function storeFileInLocal($fileName, $filePath)
    {
        $generateFileName = rand('1111111111', '9999999999') . "." . $fileName->getClientOriginalExtension();
        $destinationFileUrl = $filePath . "/" . $generateFileName;
        $filePath = $filePath."/";
        $fileName->move($filePath, $generateFileName);
        return $destinationFileUrl;
    }
}
