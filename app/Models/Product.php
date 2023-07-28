<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['categories_id', 'name', 'price', 'qty'];

    public function category() 
    {
        return $this->hasOne(Category::class, 'id', 'categories_id');
    }

}
