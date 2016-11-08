<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class settings extends Model
{
    public $fillable = ['threshold','penalty'];
}
