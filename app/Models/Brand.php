<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $table = 'Brand';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name','logo','status'
    ];
  
}
