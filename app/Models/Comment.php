<?php

namespace App\Models;

use App\Models\Face;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model

{
    protected $fillable = ["content"];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function face()
    {
        return $this->belongsTo(Face::class);
    }
}
