<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;


class Post extends Model
{
    use HasFactory;

    public static function find($number)
    {

        $post = file_get_contents(resource_path("posts/post$number.html"));

        return $post;
        
    }

    public static function index()
    {

        $files = File::files(resource_path("posts/"));

        return array_map(function($file){
            return $file->getContents();
        },$files);

    }

}
