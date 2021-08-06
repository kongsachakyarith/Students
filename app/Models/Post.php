<?php
namespace App\Models;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File as FacadesFile;

class Post
{
    public $title;

    public $excerpt;

    public $date;

    public $body;

    public $slug;

    public function __construct($title, $excerpt, $date, $body, $slug){
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
        $this->slug = $slug;
    }
   
    public static function all(){
        return cache()->rememberForever('posts.all',function(){
            return collect(FacadesFile::files(resource_path("posts/")))
            ->map(fn($file)=>YamlFrontMatter::parseFile($file))
            ->map(fn($documents) => new Post(
                    $documents->title,
                    $documents->excerpt,
                    $documents->date,
                    $documents->body(),
                    $documents->slug
            ))
            ->sortByDesc('date');
        });
       
    }

    public static function find($slug)
    {
        return static::all()->firstWhere('slug',$slug);
    }
}
?>