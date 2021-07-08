<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    protected $table = 'villes';
    use HasFactory;
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    
}