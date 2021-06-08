<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Widget extends Model
{
    use HasFactory;

    private $filable = [
        'name',
        'type',
        'content',
        'image'
    ];

    public function feature_image(){
        return $this->hasOne(Media::class);
    }

}
