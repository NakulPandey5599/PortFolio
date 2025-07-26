<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model

{
     protected $casts = [
    'key_features' => 'array',
    'technologies-used' => 'array',
     'images' => 'array',
];

     protected $guarded = [];
}
