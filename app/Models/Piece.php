<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Piece extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function pictures(){
        return $this->hasMany(Picture::class);
    }
    public function artist() {
        return $this->belongsTo(Artist::class);
    }
    public function order() {
        return $this->hasOne(Order::class);
    }    
    public function categories() {
        return $this->belongsToMany(Category::class);
    }    
}
