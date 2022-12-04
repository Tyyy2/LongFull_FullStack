<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $created_at
 * @property string $updated_at
 * @property string $employ_img_path
 * @property string $employ_title
 */
class employee extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['created_at', 'updated_at', 'employ_img_path', 'employ_title'];
}
