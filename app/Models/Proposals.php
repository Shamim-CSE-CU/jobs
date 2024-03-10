<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposals extends Model
{
    use HasFactory;

    protected $fillable=[

        'user_id',
        'project_id',
        'price',
        'estimeted_hours',
        'description',
        

    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function projects(){
        return $this->belongsTo(Projects::class);
    }

}
