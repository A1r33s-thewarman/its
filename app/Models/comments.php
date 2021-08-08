<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comments extends Model
{

    //specify table name and columns
    protected $table = 'comments';
    protected $fillable = ['issue_id', 'body'];
}
