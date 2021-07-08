<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   use HasFactory;

    public function users()
    {
       return $this->belongsTo(User::class,'user_id','id');
    }
    public function category()
    {
       return $this->belongsTo(Category::class,'categorie_id','id');
    }
    public function ville()
    {
       return $this->belongsTo(Ville::class,'ville_id','id');
    }

    public function haslike()
    {
        return $this->belongsToMany(User::class,'bookmarks','post_id','user_id')->withPivot('id','post_id','user_id');

    }
}
