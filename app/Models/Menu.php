<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = ['title'];

    public function posts()
    {

        return $this->hasMany(Post::class, 'menu_id', 'id');

    }
}
