<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OurCommitment extends Model
{
    protected $fillable = ['title', 'content', 'logo'];
}