<?php

namespace App\Helpers;

use Illuminate\Support\Facades\DB;

class Helper
{
    public static function uploadImage($request, $field)
    {
        $fileNameToStore = '';

        if ($request->hasFile($field)) {
            $filenameWithExt = $request->file($field)->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file($field)->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file($field)->storeAs('public/images', $fileNameToStore);

            return ['status' => true, 'file_name_to_storage' => $fileNameToStore];
        } else {
            return ['status' => false];
        }
    }

    public static function deleteImageStorage($imageName)
    {
        $image = explode('/', $imageName)[5];

        unlink(storage_path('app/public/images/' . $image));
    }
}