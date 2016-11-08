<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkouts extends Model
{
    protected $fillable = ['book', 'user','quantities','checked_out','returned'];
}
