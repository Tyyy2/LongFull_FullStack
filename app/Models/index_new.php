<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class index_new extends Model
{
    use HasFactory;

    protected $fillable = [
        'news_title',
        'news_content',
        'news_img_path',
    ];
}
