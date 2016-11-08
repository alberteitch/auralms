<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    protected $fillable = ['isbn', 'title', 'description', 'author', 'edition', 'published', 'Status'];
}
