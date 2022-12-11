<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $created_at
 * @property string $updated_at
 * @property string $employees_img_path
 * @property string $employees_title
 * @property string $employees_content
 */
class employee extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['created_at', 'updated_at', 'employees_img_path', 'employees_title', 'employees_content'];
}
