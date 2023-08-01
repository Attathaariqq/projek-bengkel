<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ["customer_id", "product_id", "total"];

    public function customer()
    {
        $this->hasOne(Customer::class, 'id', 'customer_id');
    }

    public function product()
    {
        $this->hasOne(Product::class, "id", "product_id");
    }
}
