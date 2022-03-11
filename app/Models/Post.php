<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /* The complement of $fillable *
    protected $guarded = ['id'];
    /* */
    protected $fillable = ['title', 'excerpt', 'body'];
}
