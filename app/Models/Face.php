<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Face extends Model
{
    protected $fillable = ["title", "content", "mood", "img"];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
