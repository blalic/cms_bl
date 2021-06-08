<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'content',
        'slug',
        'feature_image_id',
        'author_id',
        'status_id',
        'category_id'
    ];

    public function feature_image(){
        return $this->hasOne(Media::class);
    }

    public function status(){
        return $this->hasOne(Status::class);
    }

    public function category(){
        return $this->belongsToMany(PostCategory::class);
    }

}
