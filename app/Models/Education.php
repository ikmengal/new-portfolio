<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];

    public function hasUser(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
