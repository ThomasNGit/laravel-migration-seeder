<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fumetti extends Model
{
    protected $fillable = ['title', 'author', 'year', 'review', 'vote'];
}
