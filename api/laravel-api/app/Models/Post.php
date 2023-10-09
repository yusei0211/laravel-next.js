<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // fillableに指定したプロパティは入力可能になる
    protected  $fillable = [
        'title',
        'content',
      ];
}
