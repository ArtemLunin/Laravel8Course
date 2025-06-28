<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    // определение полей, которые можно обновлять
    protected $fillable = ['title', 'body'];

    public function comments() {
        return $this->hasMany(Comment::class, 'article_id', 'id');
    }
}
