<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Services extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'user_id',
        'category_id',
        'title',
        'description',
        'thumbnail',
        'Location',
        'payment',
    ];



    

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
