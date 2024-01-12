<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'menu_id'];

    public function menu()
    {

        return $this->belongsTo(Menu::class, 'menu_id', 'id');

    }

}
