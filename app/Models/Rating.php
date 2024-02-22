<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $fillable = ['email', 'rating', 'comment'];

    // Define any relationships or additional methods here

    public function user(){
        return $this->belongsTo(User::class);
    }
}
