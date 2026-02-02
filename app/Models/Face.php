<?php

namespace App\Models;

use App\Models\User;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;

class Face extends Model
{
    protected $fillable = ["title", "content", "mood", "img"];

    // public function user(){
    //     return $this->belongsTo(User::class);
    // }
     public function comment(){
        return $this->hasMany(Comment::class);
    }
    public function favoriteUsers()
    {
    return $this->belongsToMany(User::class, 'face_user');
    }

}
