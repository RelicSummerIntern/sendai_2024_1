<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body', 'author_name'];

    public function user()
    {
        return $this->belongsTo(SeniorUser::class, 'senior_user_id');
    }
    public function supportUser()
    {
        return $this->hasOne(SupportUser::class);
    }
}



