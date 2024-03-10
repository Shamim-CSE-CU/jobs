<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Projects extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'user_id',
        'category_id',
        'title',
        'description',
        
        'Location',
        'payment',
    ];

    public function projects(){
        return $this->belongsTo(Projects::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

}
