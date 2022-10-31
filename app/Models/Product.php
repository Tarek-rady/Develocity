<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    
     // function get category
     public function category()
     {
         return $this->belongsTo(Category::class , 'category_id');
     }


    // function get tags
    public function tag()
    {
        return $this->belongsTo(Tag::class , 'tag_id');
    }
    public static function search($query,$id=null,$type=null)
    {
        return empty($query) ? static::query()
                : static::where($type,$id)->
                orwhere('categories.name', 'like', '%'.$query.'%')->
                orwhere('tags.name', 'like', '%'.$query.'%')->
                orwhere('title', 'like', '%'.$query.'%')->
                orwhere('price', 'like', '%'.$query.'%')->
                orwhere('desc', 'like', '%'.$query.'%')->
                orwhere('size', 'like', '%'.$query.'%');
            }
}
