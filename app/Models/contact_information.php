<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $created_at
 * @property string $updated_at
 * @property string $contact_name
 * @property string $contact_phone
 * @property string $contact_mail
 * @property string $contact_content
 * @property string $contact_requirement
 * @property string $common_trash
 * @property string $recycle_trash
 * @property string $uncommon_trash
 */
class contact_information extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['created_at', 'updated_at', 'contact_name', 'contact_phone', 'contact_mail', 'contact_content', 'contact_requirement', 'common_trash', 'recycle_trash', 'uncommon_trash'];
}
