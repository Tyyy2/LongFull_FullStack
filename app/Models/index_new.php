<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $created_at
 * @property string $updated_at
 * @property string $news_title
 * @property string $news_content
 * @property string $news_img_path
 */
class index_new extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['created_at', 'updated_at', 'news_title', 'news_content', 'news_img_path'];
}
