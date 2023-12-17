<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;

class Post extends Model
{

    protected $fillable = [
        'title',
        'image',
        'category_id',
        'created_at',
        'description'
    ];
    public function comment(){
        return $this->hasOne(Comment::class);
    }
}
