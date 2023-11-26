<?php

namespace App\Http\Controllers\Voyager;

use App\Models\GalleryImage;
use App\Models\Post;
use App\Models\PostImage;
use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\VoyagerMediaController as BaseVoyagerMediaController;

class CustomMediaController extends BaseVoyagerMediaController
{
    public function upload(Request $request)
    {
        $response = parent::upload($request);
        $data = is_array($response) ? (object)$response : json_decode($response->getContent());
        if($data->success){
            list($path, $filename) = explode('/', $data->path);
            switch ($path){
                case 'gallery-images':
                    $image = new GalleryImage(["image_path" => $data->path]);
                    $image->save();
                    break;
                default:
                    break;
            }
        }


        return $response;
    }

    public function delete(Request $request)
    {
        $path = str_replace("/", "", $request->path);
        $response = parent::delete($request);

        $data = is_array($response) ? (object)$response : json_decode($response->getContent());
        if($data->success){

            foreach ($request->get('files') as $file) {
                switch ($path){
                    case 'gallery-images':
                        $image = GalleryImage::where('image_path', $file["relative_path"])->first();
                        if($image){
                            $image->delete();
                        }
                        break;
                    case 'posts':
                        if($entity = PostImage::where('image_path', $file['relative_path'])->first()){
                            $entity->delete();
                        }elseif($entity = Post::where('preview', $file['relative_path'])->first()){
                            $entity->preview = null;
                            $entity->save();
                        }
                    default:
                        break;
                }
            }
        }
        return $response;
    }

    private static function getEntity($directory){

    }
}
