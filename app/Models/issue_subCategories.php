<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class issue_subCategories extends Model
{
    //specify table name and columns
    protected $table = 'issue_sub_categories';
    protected $fillable = ['issue_id', 'subcategory_id'];
}
