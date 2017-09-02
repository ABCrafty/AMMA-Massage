<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

//use Intervention\Image\Facades\Image;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\File;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function upload(array $datas) {
        $file = $datas['file'];
        if(isset($datas['path']) && !file_exists($datas['path'])) {
            File::makeDirectory($datas['path'], $mode = 0777, true, true);
        }
        $file_name = $file->getClientOriginalName();


        if(isset($datas['context'])) {
            $file_path = $datas['path'] . $datas['context'] . '_' . $file_name;
        } else {
            $file_path = $datas['path'] . $file_name;
        }

        if($file->getClientOriginalExtension() === 'pdf') {
//           dd($datas['path']);
            $file->move(public_path('uploads/amma-story'), $file_name);
        }
        else {
            Image::make($file)->save($file_path);
        }


        return $file_path;
    }
}
