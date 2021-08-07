<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class issue_Categories extends Model
{
        protected $table = 'issue_categories';

    protected $fillable = ['issue_id', 'category_id'];
}
