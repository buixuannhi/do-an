<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name','category_id','brand_id','image','images_list','price','price_sale','description','status'
    ];
     public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
}
