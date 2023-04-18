<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sub_category extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
     function rel_to_category(){
        return $this->belongsTo(categoryadd::class, 'category_id');
     }
}