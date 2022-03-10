<?php

namespace App\Models;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\File;

// getFilename()
class Post {
    public $title;
    public $date;
    public $exceprt;
    public $body;
    public $linkTo;

    public function __construct($title, $date, $exceprt, $body, $linkTo) {
        
        $this->title = $title;
        $this->date = $date;
        $this->exceprt = $exceprt;        
        $this->body = $body;
        $this->linkTo = $linkTo;
    }

    public static function all() {
        return cache()->rememberForever(
            'posts.all',
            function() {
                return collect(File::files(resource_path("posts")))
                ->map( //Alternative to array_map
                    function($path) {
                        $document = YamlFrontMatter::parseFile($path);
                        $linkTo = pathinfo($path)['filename'];
                
                        return new Post(
                            $document->title,
                            $document->date,
                            $document->exceprt,
                            $document->body(),
                            $linkTo
                        );
                    }       
                )
                ->sortByDesc('date');
            }
        );        
    }

    public static function findOrFail($slug) {
        $post = static::find($slug);
        if(!$post) {
            throw new ModelNotFoundException();
        }

        return $post;
    }

    public static function find($slug) {
        $post = static::all()->firstWhere('linkTo', $slug);

        return $post;
    }
}