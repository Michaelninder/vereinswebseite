<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Date extends Model
{
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id', 'project_id', 'title', 'description', 'image_location'
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
