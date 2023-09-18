<?php

namespace App\Http\Controllers\Admin;

use App\File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class DownloadsController extends Controller
{

    public function download($uuid)
    {
        $file = File::where([
            ['uuid', '=', $uuid],
            ['created_by_id', '=', Auth::getUser()->id]
        ])->first();

        $media = Media::where('id', $file->id)->first();

        // $media = Media::where('model_id', 31)->first();

        // dd($media);

        if ($media === null) {
            $pathToFile = storage_path('app' . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . $file->id . DIRECTORY_SEPARATOR . 'Media is null');

            return response()->json(['error' => 'Error: Media is null', 'media_id' => $media, 'file' => $file], 404);
        }

        $pathToFile = storage_path('app' . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . $file->id . DIRECTORY_SEPARATOR . $media->file_name);

        // $pathToFile = storage_path('app' . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 31 . DIRECTORY_SEPARATOR . $media->file_name);

        return Response::download($pathToFile);
    }
}
