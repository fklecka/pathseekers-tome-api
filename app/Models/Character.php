<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'character'
    ];

    protected $casts = [
        'character' => 'json'
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }
}
