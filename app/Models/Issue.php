<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    //specify table name and columns
    protected $table = 'issues';
    protected $fillable = ['title', 'body', 'uuid', 'slug'];
}
