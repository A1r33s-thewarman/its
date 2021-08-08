<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class images extends Model
{
    //specify table name and columns
    protected $table = 'images';
    protected $fillable = ['imagable_type', 'imagable_id', 'size', 'path', 'name', 'extension'];
}
