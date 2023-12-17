<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Comment extends Model
{
    protected $fillable = [
        'created_at',
        'id_user',
        'id_post',
        'comment'
    ]
}
