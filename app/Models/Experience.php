<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $table = 'work_experience';
   protected $fillable = [
        'role',
        'company_name',
        'start_date',
        'end_date',
        'description',
        'responsibilities',
        'technologies_used',
    ];

    protected $casts = [
        'responsibilities' => 'array',
        'technologies_used' => 'array',
    ];
}
