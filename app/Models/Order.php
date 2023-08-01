<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;
use App\Models\Product;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ["customer_id", "product_id", "total"];

    public function customers()
    {
        return $this->hasOne(Customer::class, 'id', 'customer_id');
    }

    public function products()
    {
        return $this->hasOne(Product::class, "id", "product_id");
    }
}
