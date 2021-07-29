<?php
namespace App\Service;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Str;
use App\Models\Blog;

class Search
{
    public static function data(){
        return $datas = blog::all();
    } 
    public static function SearchBy(string $key)
    {
        return collect(self::data())->filter(fn($data)=>Str::contains(strtolower($data['titre']) ,strtolower($key)))->all();
    }

    
} 