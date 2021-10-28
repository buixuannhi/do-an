<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name','status'
    ];
    public function product(){
        return $this->HasMany(product::class,'category_id','id');
    }
    //localScope
    function ScopeSearch($query){
        if($key=request()->key){
            $query=$query->where('name','like','%'.$key.'%');
            }
            return $query;
    }
}
