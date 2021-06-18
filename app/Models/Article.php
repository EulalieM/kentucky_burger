<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    // nom des tables
    protected $fillable = ['category_id', 'name', 'image', 'content'];

    public function comments() {
        return $this->hasMany(Comment::class);
    }
}
