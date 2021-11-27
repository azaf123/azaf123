<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;
    protected $fillable =['category_id','product_name','product_stock','product_price','product_description','product_review','product_soldout','created_at','update_at','image','condition','weight'];
    public function category(){
        return $this -> BelongsTo ('App\Models\Category');
    }
}
