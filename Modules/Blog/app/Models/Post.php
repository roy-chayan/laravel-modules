<?php

namespace Modules\Blog\Models;

use Illuminate\Database\Eloquent\Model;
use Modules\User\Models\User;

class Post extends Model
{
    protected $fillable = ['title', 'body', 'user_id'];

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
