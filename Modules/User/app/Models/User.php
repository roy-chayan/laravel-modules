<?php

namespace Modules\User\Models;

use Illuminate\Database\Eloquent\Model;
use Modules\Blog\Models\Post;

class User extends Model
{
    protected $fillable = ['name', 'email'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
