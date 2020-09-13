<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function pieces() {
        return $this->hasMany(Piece::class);
    }

    public function user() {
        return $this->belongsTo(User::class);        
    }
}
