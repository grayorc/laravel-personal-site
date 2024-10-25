<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;


class StorageController extends Controller
{
    public function thumbnails($filename){
        $path = storage_path('app/public/thumbnails/' . $filename);
        if (!File::exists($path))
            abort(404);
        $file = File::get($path);
        $type = File::mimeType($path);
        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);
        return $response;
    }
}
