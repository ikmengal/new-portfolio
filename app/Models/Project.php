<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];

    public function hasImages()
    {
        return $this->hasMany(ProjectImage::class, 'project_id', 'id');
    }

    public function hasUser(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
