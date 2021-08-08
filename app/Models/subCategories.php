<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subCategories extends Model
{
    //specify table name and columns
    protected $table = 'sub_categories';
    protected $fillable = ['category_id', 'name', 'description'];
}
