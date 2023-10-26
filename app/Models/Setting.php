<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    
    protected $table = 'settings';

    protected $fillable = [
        'settings_description',
        'settings_key',
        'settings_value',
        'settings_type',
        'settings_must',
        'settings_delete',
        'settings_status',
    ];
}
